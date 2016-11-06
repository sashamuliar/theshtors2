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
var cart = document.querySelectorAll( ".add_to_cart_button");
var price = document.querySelectorAll(".price");
for (var a = 0; a < cart.length; a++){
	cart[a].onclick = function(){
		this.className += " go_cart";
		this.parentNode.querySelector(".price").className += " hide_price";
		console.log("a");
	};
};
console.log(cart);
