var box = document.querySelectorAll('.content-grid__box');
var textBox = document.querySelector('.box__text');
var titleHolder = document.querySelector('.content-grid__title');
var mainGrid = document.querySelector('.content-grid');
var pageTitle = document.querySelector('.page-content__title');

function showTitle(e) {
	titleHolder.innerHTML = e.target.innerText;
}

function hideTitle() {
	titleHolder.innerHTML = '';
}

function addClass(className, el) {
	el.classList.add(className);
}


box.forEach(function(boxEl) {
	boxEl.addEventListener('mouseover', showTitle);
	boxEl.addEventListener('pointerleave', hideTitle);
});

console.log('I\'m looking for internship!!! Get in touch: henrik(.)danilesson(@)hyperisland.se');
