
// This will be the main JS file for the home browser window. 

//Functions to make my life easier. 
function numPixels(object){
	var pxlen = object.indexOf("px")
	return Number(object.slice(0,pxlen))
}

function pixelate(num){
	return num + "px";
}

function o(i){
	return typeof i == 'object' ? i : document.getElementById(i);
}

function s(i){
	return o(i).style;
}		

function c(i){
	return document.getElementsByClassName(i);
}

function t(i){
	return document.getElementByTagName(i);
}						

function compStyle(i){
	return window.getComputedStyle(o(i));
}



//Main window onload function to get eerything sized correctly. 
window.onload = function(){
	var iframes_array = c('SC_player');//Create an array of iframe objects. 

	for(i=0; i<iframes_array.length;i++){
		var iframeW = compStyle(iframes_array[i]).width;
		iframes_array[i].style.height = iframeW;
	}
	var vs_array = c('vsPic');

	for(j=0; j<vs_array.length; j++){
		vs_array[j].style.top = pixelate(numPixels(compStyle(iframes_array[j]).height)/2);
		console.log(iframes_array[j].style.height);
	}
}

window.resize = function(){
	var iframes_array = c('SC_player');//Create an array of iframe objects. 

	for(i=0; i<iframes_array.length;i++){
		var iframeW = compStyle(iframes_array[i]).width;
		iframes_array[i].style.height = iframeW;
	}

	var vs_array = c('vsPic');

	for(j=0; j<vs_array.length; j++){
		vs_array[j].style.top = pixelate(numPixels(compStyle(iframes_array[j]).height)/2);
		console.log(iframes_array[j].style.height);
	}
}
