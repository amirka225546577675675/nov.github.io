// 1
const divs = document.querySelectorAll('div');
divs.forEach(div => {
  const textLength = div.textContent.length; 
  const h2 = document.createElement('h2'); 
  h2.textContent = textLength; 
  div.parentNode.insertBefore(h2, div); 
});

//2
let newDiv = document.createElement("div");
newDiv.setAttribute("id", "text");
document.body.appendChild(newDiv);

//3
window.addEventListener('keypress', function(event) {
  var textDiv = document.getElementById('text');
  textDiv.innerHTML += event.key;
});