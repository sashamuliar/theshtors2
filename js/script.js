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
var hamb = document.getElementById("hamb");
var page = document.getElementById("page");
var arrow = document.getElementById("arrow-icon");
var sec = document.getElementById("sec_wrapper");
var menuM = document.getElementById("menu-m");
var sideM = document.getElementById("side-m");


hamb.addEventListener("click", openMenu);
function openMenu(){
	page.className += " openned_right";
	event.stopPropagation();
	menuM.style.zIndex = 5;
};
page.addEventListener("click", closeMenu);
		function closeMenu(){
			page.className = "page_wrapper";
			menuM.style.zIndex = 3;
			setTimeout(function(){
				sideM.style.zIndex = 3;	
			},400);
				
};

arrow.addEventListener("click", activateSidebar);
function activateSidebar(){
	
	page.className += " openned_left";
		event.stopPropagation();
	sideM.style.zIndex = 5;

} ;