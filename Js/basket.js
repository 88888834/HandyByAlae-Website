function addToCart() {
    var cartCountElement = document.getElementById('cartCount');
    var currentCount = parseInt(cartCountElement.textContent) || 0;
    cartCountElement.textContent = currentCount + 1;
}