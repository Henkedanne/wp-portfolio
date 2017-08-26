var box = document.querySelectorAll('.content-grid__box');
var textBox = document.querySelector('.box__text');
var titleHolder = document.querySelector('.content-grid__title');
var mainGrid = document.querySelector('.content-grid');


function showTitle(e) {
	console.log(e);
	titleHolder.innerHTML = e.target.innerText;
}

function hideTitle() {
	titleHolder.innerHTML = '';
}

box.forEach(function(boxEl) {
	boxEl.addEventListener('mouseover', showTitle);
	boxEl.addEventListener('pointerleave', hideTitle);
});