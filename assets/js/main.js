var box = document.querySelectorAll('.box');
var textBox = document.querySelector('.box__text');



function hover(e) {
	console.log(e.target.innerText);
    textBox.innerHTML = e.target.innerText;
}

box.forEach(function(boxEl) {
	boxEl.addEventListener('mouseover', hover);
});