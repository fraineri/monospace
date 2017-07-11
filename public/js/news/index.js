news.forEach(function(article){
	var title = document.createTextNode(article.title);
	var source = document.createTextNode(sources[article.source_id].source);
	
	//------
	var newImg = document.createElement('DIV');
	newImg.className+='newsShow-main-newImg';
	newImg.style.backgroundImage = "url('"+article.url_img+"')";
	
	var newTitle = document.createElement('H3');
	newTitle.className+='newsShow-main-newTitle';
	newTitle.appendChild(title);

	var newCont = document.createElement('DIV');
	newCont.className+='newsShow-main-newCont';
	newCont.appendChild(newImg);
	newCont.appendChild(newTitle);
	//------

	var newSource = document.createElement('SPAN');
	newSource.className+='newsShow-main-newFooter-source';
	newSource.appendChild(source);

	var newFavorite = document.createElement('I');
	newFavorite.className+='newsShow-main-newFooter-favorite fa fa-heart-o';

	var newComment = document.createElement('I');
	newComment.className+='newsShow-main-newFooter-comment fa fa-comment-o';
	
	var newIcons = document.createElement('DIV');
	newIcons.className+='newsShow-main-newFooter-icons';
	newIcons.appendChild(newFavorite);
	newIcons.appendChild(newComment);	

	var newFooter = document.createElement('DIV');
	newFooter.className+='newsShow-main-newFooter';
	newFooter.appendChild(newSource);
	newFooter.appendChild(newIcons);

	var mainNew = document.createElement('DIV');
	mainNew.className+='newsShow-main-new';

	mainNew.appendChild(newCont);
	mainNew.appendChild(newFooter);

	document.getElementsByClassName('newsShow-main')[0].appendChild(mainNew);
});

window.onclick = function(event){
	if(!event.target.matches(".news-topBar-searchBtn")){
		document.getElementById("myDropdown").classList.remove("show");
	}
}

function myFunction() {
	document.getElementById("myDropdown").classList.toggle("show");
}
