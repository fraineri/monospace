<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Source;
use App\News;
use GuzzleHttp\Client;



class NewController extends Controller
{
    public function index(){
        $sections = \DB::table('sources')->select('section')->groupBy('section')->get();
        return view('news/index',compact("sections"));
    }

    public function show($section){//calcular tiempo de ejecucion (DEBUG)
        $start = microtime(true);
        
        $sections = \DB::table('sources')->select('section')->groupBy('section')->get();

        //Noticas a retornar
        $news = []; 
        //Fuentes pertenecientes a la seccion
        $sources = Source::where('section',$section)->get(); 
        //Recorro cada fuente
        $n = 1;
        foreach ($sources as $source){
            //Verifico cuando fue la ultima actualizacion de la fuente
            if($source->updated_at->diffInMinutes() > 50){
                //La fuente debe ser actualizada
                //Creo que link a la API
                $client = new Client([
                    'base_uri' => 'https://newsapi.org/v1/articles',
                    'timeout'  => 2.0,
                ]);
                //Pido las noticas pertenecientes a esa fuente
                $respone = $client->request('GET','?source='.$source->source.'&apiKey=eb6bab6ae32645cc973b041573f77da1');
                //Tradusco el JSON a un array.
                $post = json_decode($respone->getBody()->getContents());
                //Obtengo todos los articulos de la fuente
                $articles = $post->articles;
                
                $time_elapsed_secs = microtime(true) - $start;
                //echo "Request ".$n.": ".$time_elapsed_secs."<br>";
                $n++;
                
                //Recorro todos los articulos y verifico si existen en la DB
                foreach ($articles as $article) {
                    if($article->publishedAt == null){
                        $date = new \DateTime();
                        $date = $date->format('Y-m-d');
                        $article->publishedAt = $date;
                    }else{
                        $article->publishedAt = substr($article->publishedAt, 0, 10);
                    }


//   				if(\DB::table('news')->where('title',$article->title)->count() > 0)
/*
SELECT count(*) from news
INNER JOIN sources ON news.source_id = sources.id
WHERE news.created_at >= DATE_ADD(CURDATE(), INTERVAL 0 DAY)
AND sources.section = 'sport';
*/
                    if(\DB::table('news')->join('sources','news.source_id','=','sources.id')
                                        ->where('sources.section',$section)
                                        ->where('news.created_at','>=',\DB::raw('DATE_ADD(CURDATE(), INTERVAL -3 DAY)'))
                                        ->where('news.title',$article->title)
                                        ->count() > 0)
                    {

						//Ya existe la noticia, no hago nada.
					}else{
						//No existe, entonces creo que objeto y lo guardo en DB
						$newToSave = new News;
						$newToSave->source_id 	= $source->id;
						$newToSave->title 		= $article->title;
						$newToSave->description = $article->description;
						$newToSave->url 		= $article->url;
                        $newToSave->url_img     = $article->urlToImage;
						$newToSave->created_at 	= $article->publishedAt;
						$newToSave->save();
					}

                    //Agrego la noticia al array para pasarlo a la vista
                    $new = new News;
                    $new->source_id   = $source->id;
                    $new->title       = htmlspecialchars($article->title);
                    $new->description = htmlspecialchars($article->description);
                    $new->url         = htmlspecialchars($article->url);
                    $new->url_img     = htmlspecialchars($article->urlToImage);
                    $new->created_at  = $article->publishedAt;
                    $news[] = $new;
                }

                //La fuente fue actualizada
                $source->updated_at = new \DateTime;
                $source->save();
            }else{
                //La fuente esta actualizada
                //Obtengo las noticias
                foreach ($source->news as $new) {
                    $news[] = $new;
                }
            }
        }

        $time_elapsed_secs = microtime(true) - $start;
        //echo "Return: ".$time_elapsed_secs."<br>";
        //dd($news);

        $newsSource = [];
        foreach ($sources as $source) {
            $newsSource[$source->id] = $source;
        }

    	return view('news/show',compact('newsSource','sections','section','news'));
    }

}
