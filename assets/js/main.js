var box = document.querySelectorAll('.box');
console.log(box);

// for (var i = 0; i < box.length; i++) {
//     console.log(box[i].childNodes[1].innerHTML);
    
// }
function hover(index) {
    console.log(index.fromElement.innerText);
}

box.forEach(function(element, index) {
    element.addEventListener('mouseover', hover);
})