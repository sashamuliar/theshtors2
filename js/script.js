var title = document.querySelector(".page-title");
var mainTitle = document.getElementById("mainTitle");
mainTitle.appendChild(title);
var categories = document.getElementById('categories-list');
var selectCaegories = document.querySelectorAll('.product-category');
for (var i = 0; i < selectCaegories.length; i++){
	categories.appendChild(selectCaegories[i]);
};
var clear = document.createElement("div");
clear.className = "clear";
categories.appendChild(clear);