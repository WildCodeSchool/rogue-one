const buttons = document.querySelectorAll(".main-button a");
const productDetails = document.querySelector(".product-details");
const categories = document.getElementById("categories");

buttons.forEach((button, index) => {
  button.addEventListener("click", (event) => {
    event.preventDefault();

    const mocktailsDataScript = document.getElementById("mocktails-data");
    const mocktailsData = JSON.parse(mocktailsDataScript.textContent);
    const productName = Object.keys(mocktailsData)[index];
    const selectedProduct = mocktailsData[productName];

    document.getElementById("product-name").innerText = productName;
    document.getElementById(
      "product-category"
    ).innerText = `Catégorie: ${selectedProduct.category}`;
    document.getElementById("product-detail").innerText =
      selectedProduct.detail;
    document.getElementById(
      "product-image"
    ).src = `../assets/images/mocktails/${selectedProduct.image}`;

    categories.style.display = "none";

    const allItems = document.querySelectorAll(".mocktails-items");
    allItems.forEach((item) => {
      item.style.display = "none";
    });

    productDetails.style.display = "block";
    productDetails.scrollIntoView({
      behavior: "auto",
      block: "start",
    });
  });
});

document.querySelector(".close-btn").addEventListener("click", () => {
  categories.style.display = "block";

  const allItems = document.querySelectorAll(".mocktails-items");
  allItems.forEach((item) => {
    item.style.display = "block";
  });

  productDetails.style.display = "none";
});
