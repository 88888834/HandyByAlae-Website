function addToCart() {
    var cartCountElement = document.getElementById('cartCount');
    if (cartCountElement) {
        var currentCount = parseInt(cartCountElement.textContent) || 0;
        cartCountElement.textContent = currentCount + 1;
    } else {
        console.error('cartCountElement not found');
    }
}


document.addEventListener('DOMContentLoaded', function() {
    function toggleCartDisplay() {
        var cartContainer = document.getElementById('cartcontainer'); // Make sure ID matches the one in HTML
        if (cartContainer) {
            if (cartContainer.style.display === 'none' || cartContainer.style.display === '') {
                cartContainer.style.display = 'block';
            } else {
                cartContainer.style.display = 'none';
            }
        } else {
            console.error('cartContainer not found');
        }
    }
    var basketButton = document.getElementById('basketButton');
    if (basketButton) {
        basketButton.addEventListener('click', toggleCartDisplay);
    } else {
        console.error('basketButton not found');
    }
});
var cartContainer = document.getElementById('cartcontainer');
    if (cartContainer) {
        cartContainer.style.display = 'none';
    }
    
