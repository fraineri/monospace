<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class Source extends Model
{
    public function news(){
    	return $this->hasMany('App\News');
    }

    public static function sources(){
        $client = new Client([
            'base_uri' => 'https://newsapi.org/v1/sources?language=en',
            'timeout'  => 2.0,
        ]);
        //Make request
        $respone = $client->request('GET','');
        //Translate Json to array (get full source json)
        $post = json_decode($respone->getBody()->getContents());
        foreach ($post->sources as $source) {
            $sourceToSave = new Source;
            $sourceToSave->source = $source->id;
            $sourceToSave->section = $source->category;
            $sourceToSave->save();
        }

        return "All saved";
    }
}
