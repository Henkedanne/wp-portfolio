var box = document.querySelectorAll('.content-grid__box');
var textBox = document.querySelector('.box__text');
var titleHolder = document.querySelector('.content-grid__title');



function addTitle(e) {
	console.log(e);
	titleHolder.innerHTML = e.target.innerText;
}

box.forEach(function(boxEl) {
	boxEl.addEventListener('mouseover', addTitle);
});