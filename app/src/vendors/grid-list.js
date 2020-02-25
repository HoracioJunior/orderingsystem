

var gridmenu;
var  listmenu;


window.onload= function(){
	gridmenu = document.getElementById("grid-menu");
	listmenu = document.getElementById("list-menu");

	var grid= document.getElementById("grid");
	grid.onclick=mostrarGrid;
	var list= document.getElementById("list");
	list.onclick=mostrarList;
	listmenu.classList.add("esconder");

}

function mostrarGrid() {
	gridmenu.classList.remove("esconder");
	listmenu.classList.add("esconder");
}

function mostrarList() {
	listmenu.classList.remove("esconder");
	gridmenu.classList.add("esconder");
}