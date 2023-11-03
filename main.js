const movingText = document.getElementById("moving");
let position = 0; 

function moveText() {
  position += 1;
  movingText.style.left = position + "px";
  if (position >= 1000) {
    position = 0;
  }
  requestAnimationFrame(moveText);
}

moveText();