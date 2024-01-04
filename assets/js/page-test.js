document.addEventListener("DOMContentLoaded", function () {
    const mocktails = <?php echo json_encode($mocktails); ?>;

    // Récupérer tous les éléments .item et leur ajouter un gestionnaire d'événements click
    document.querySelectorAll('.item').forEach(function (item) {
        item.addEventListener('click', function () {
            const productName = item.getAttribute('data-product-name');
            const productDetails = mocktails[productName];
            displayProductDetails(productDetails);
        });
    });

    document.getElementById('btnClose').addEventListener('click', function () {
        hideProductDetails();
    });
});

function displayProductDetails(productDetails) {
    document.getElementById('productName').innerText = productDetails ? productDetails['category'] : '';
    document.getElementById('productCategory').innerText = productDetails ? productDetails['category'] : '';
    document.getElementById('productDetail').innerText = productDetails ? productDetails['detail'] : '';
    document.getElementById('productImage').src = productDetails ? '../assets/images/mocktails/' + productDetails['image'] : '';
    document.querySelector('.product-details').style.display = 'block';
}

function hideProductDetails() {
    document.querySelector('.product-details').style.display = 'none';
}
