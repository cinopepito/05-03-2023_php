function addItem() {
  let newItem = document.createElement("div");
  newItem.innerHTML = document.getElementById("box").value;
  newItem.onclick = removeItem;
  document.getElementById("list").appendChild(newItem);
  saveList();
}
function removeItem() {
  document.getElementById("list").removeChild(this);
  saveList();
}
function saveList() {
  localStorage.weList = document.getElementById("list").innerHTML;
}
function loadList() {
  document.getElementById("list").innerHTML = localStorage.weList;
  for (let i = 0; i < weList.children.length; i++) {
    weList.children[i].onclick = removeItem;
  }
}
if (localStorage.weList) {
  loadList();
}
