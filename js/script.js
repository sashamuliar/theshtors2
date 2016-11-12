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
var dark = document.getElementById('darkness');
var humbIcon = document.getElementById("hamburger-icon");
humbIcon.addEventListener("click", activate);
function activate(){
	humbIcon.className += " active";

}
hamb.addEventListener("click", openMenu);
function openMenu(){
	page.className += " openned_right";
	event.stopPropagation();
	console.log(dark);
	darkness.className += " show";
};
page.addEventListener("click", closeMenu);
		function closeMenu(){
			page.className = "page_wrapper";
			darkness.className = "darkness";
			humbIcon.className = "hamburger-icon";
			test.className = "test_wrapper";
			arrow.className = "arrow-icon";		
};
var arrow = document.getElementById("arrow-icon");
var test = document.getElementById("test_wrapper");
arrow.addEventListener("click", activateSidebar);
function activateSidebar(){
	arrow.className += " active";
	/*page.className += " left";*/
	test.className += " openned_left";
	event.stopPropagation();
	console.log(page.className);
	darkness.className += " show";
} ;