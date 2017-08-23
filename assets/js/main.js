var box = document.querySelectorAll('.box');
var textBox = document.querySelector('.box__text');
var textHolder = document.querySelector('.box__text h1');



function addTitle(e) {
	console.log(e.target.innerText);
	textHolder.innerHTML = e.target.innerText;
}

box.forEach(function(boxEl) {
	boxEl.addEventListener('mouseover', addTitle);
});