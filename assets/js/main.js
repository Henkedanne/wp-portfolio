var box = document.querySelectorAll('.content-grid__box');
var titleHolder = document.querySelector('.content-grid__title');
var lastScrollTop = 0;
var header = document.querySelector('.page-header');
var headerHeight = header.scrollHeight;


function showTitle(e) {
	titleHolder.innerHTML = e.target.innerText;
}

function hideTitle() {
	titleHolder.innerHTML = '';
}

function scrolling() {
	
	var scrollTop = document.body.scrollTop;
	console.log(scrollTop);

	if (scrollTop > lastScrollTop) {
		header.classList.add('page-header--hide');
	} else if (scrollTop < lastScrollTop) {
		header.classList.remove('page-header--hide');
	}
	lastScrollTop = scrollTop;
}

function headerHide() {
	x;
}

box.forEach(function(boxEl) {
	boxEl.addEventListener('mouseover', showTitle);
	boxEl.addEventListener('pointerleave', hideTitle);
});

window.onscroll = function (){
	scrolling();
};

console.log('I\'m looking for internship!!! Get in touch: henrik(.)danielsson(@)hyperisland.se');
