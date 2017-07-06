window.onload = function() {
	var link = new XMLHttpRequest();
	var sources = {};
	sources['general'] = [
		'abc-news-au', 
		'al-jazeera-english',
		'associated-press', 
		'bbc-news', 
		'cnn',
		'google-news', 
		'independent', 
		'metro', 
		'mirror', 
		'newsweek', 
		'new-york-magazine', 
		'reddit-r-all', 
		'reuters', 
		'the-guardian-au', 
		'the-guardian-uk', 
		'the-hindu', 
		'the-huffington-post', 
		'the-new-york-times', 
		'the-telegraph', 
		'the-times-of-india', 
		'the-washington-post', 
		'time', 
		'usa-today'
	];
	sources['technology'] = [
		'ars-technica',
		'engadget', 
		'hacker-news', 
		'recode', 
		'techcrunch', 
		'techradar', 
		'the-next-web', 
		'the-verge'
	];
	sources['sports'] = [
		'bbc-sport', 
		'espn', 
		'espn-cric-info', 
		'football-italia', 
		'four-four-two', 
		'fox-sports',
		'nfl-news', 
		'talksport', 
		'the-sport-bible'
	];
	sources['business'] = [
		'bloomberg', 
		'business-insider', 
		'business-insider-uk', 
		'cnbc',
		'financial-times', 
		'fortune', 
		'the-economist', 
		'the-wall-street-journal'
	];
	sources['enterteinment'] = [
		'buzzfeed',
		'daily-mail', 
		'entertainment-weekly',
		'ign',  
		'mashable',
		'polygon', 
		'the-lad-bible'
	];

	sources[sec].forEach(function(src){

		link.open('GET','https://newsapi.org/v1/articles?source='+src+'&apiKey=eb6bab6ae32645cc973b041573f77da1',false);
		link.send(null);
		var response = JSON.parse(link.response);
		
		response.articles.forEach(function(article){
			var newImg = document.createElement('DIV');
			newImg.className+='newsIndex-main-newImg';
			newImg.style.backgroundImage = "url('"+article.urlToImage+"')";

			var title = document.createTextNode(article.title);
			var desc = document.createTextNode(article.description);
			var source = document.createTextNode(response.source);
			var d = new Date();
			var dd = d.getDate();
			dd = dd<10?'0'+dd:dd;
			var mm = d.getMonth();			
			mm = mm<10?'0'+mm:mm;
			var yyyy = d.getFullYear();

			var date = document.createTextNode(yyyy+'-'+mm+'-'+dd);

			var newTitle = document.createElement('H3');
			newTitle.className+='newsIndex-main-newTitle';
			newTitle.appendChild(title);
			
			var newDesc = document.createElement('P');
			newDesc.className+='newsIndex-main-newDesc';
			newDesc.appendChild(desc);

			var newSource = document.createElement('SPAN');
			newSource.className+='newsIndex-main-newFooter-source';
			newSource.appendChild(source);
			
			var newDate = document.createElement('SPAN');
			newDate.className+='newsIndex-main-newFooter-date';
			newDate.appendChild(date);

			var newFavorite = document.createElement('I');
			newFavorite.className+='newsIndex-main-newInfo-favorite fa fa-heart-o';

			var newComment = document.createElement('I');
			newComment.className+='newsIndex-main-newInfo-comment fa fa-comment-o';

			var newFooter = document.createElement('DIV');
			newFooter.className+='newsIndex-main-newFooter';
			newFooter.appendChild(newDate);
			newFooter.appendChild(newSource);
			
			var newCont = document.createElement('DIV');
			newCont.className+='newsIndex-main-newCont';
			newCont.appendChild(newImg);
			newCont.appendChild(newTitle);
			newCont.appendChild(newDesc);

			var newInfo = document.createElement('DIV');
			newInfo.className+='newsIndex-main-newInfo';
			newInfo.appendChild(newFavorite);
			newInfo.appendChild(newComment);

			


			var mainNew = document.createElement('DIV');
			mainNew.className+='newsIndex-main-new';

			mainNew.appendChild(newCont);
			mainNew.appendChild(newFooter);
			mainNew.appendChild(newInfo);

			document.getElementsByClassName('newsIndex-main')[0].appendChild(mainNew);

			var mainNewHeight = mainNew.offsetHeight;
			var verticalOffSet = newInfo.offsetTop + mainNewHeight; 
			newInfo.style.height =  verticalOffSet;
		});
	});

	window.onclick = function(event){
		if(!event.target.matches(".newsIndex-main-searchBtn")){
			console.log('afuera');
			document.getElementById("myDropdown").classList.remove("show");
		}
	}
}

function myFunction() {
	document.getElementById("myDropdown").classList.toggle("show");
}

