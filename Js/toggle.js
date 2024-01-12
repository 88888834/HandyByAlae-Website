function toggleSearch() {
    var searchBlock = document.getElementById('searchBlock');
    searchBlock.style.display = searchBlock.style.display === 'none' ? 'block' : 'none';
}
function toggleMenu() {
var menuContent = document.getElementById('menuContent');
var display = menuContent.style.display;
menuContent.style.display = display === 'none' ? 'block' : 'none';
}
function toggleCart() {
var cartContainer = document.getElementById('cartContainer');
if (cartContainer.style.display === 'none') {
cartContainer.style.display = 'block';
} else {
cartContainer.style.display = 'none';
}
}
function togglebyCart() {
    var cartBlock = document.getElementById('cartcontainer');
    cartBlock.style.display = cartBlock.style.display === 'none' ? 'block' : 'none';
}