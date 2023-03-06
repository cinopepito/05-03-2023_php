function startGame() {
  gameLoop();
}
let loops = 0;
let peopleVisible = false;
function gameLoop() {
  peopleVisible = !peopleVisible;
  createCharacter();
  flashCharacter();
  loops = loops + 1;
  if (loops < 12) {
    setTimeout(gameLoop, 3000);
  } else {
    alert("game over !");
  }
}
function flashCharacter() {
  let board = document.getElementById("board");
  let classToset = "";
  if (peopleVisible) {
    classToset = "character visible";
  } else {
    classToset = "character hidden";
  }
  for (let i = 0; i < 6; i++) {
    board.children[i].className = classToset;
  }
}
function createCharacter() {
  let board = document.getElementById("board");
  for (let i = 0; i < 6; i++) {
    board.children[i].innerHTML = "Guest";
  }
  let randomNumber = Math.floor(Math.random() * 6 + 1);
  board.children[randomNumber - 1].innerHTML = "Thief";
}
