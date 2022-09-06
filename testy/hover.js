const products = [
    { name: "Macbook Air", price: "180000", ram: 16 },
    { name: "Samsung Galaxy M21", price: "13999", ram: 4 },
    { name: "Redmi Note 9", price: "11999", ram: 4 },
    { name: "OnePlus 8T 5G", price: "45999", ram: 12 }
  ];
  
  const sortByDropdown = document.querySelector(".sort-by");
  const sortOrderDropdown = document.querySelector(".sort-order");
  const container = document.querySelector(".products");
  
  const displayProducts = (products) => {
    let result = "";
  
    products.forEach(({ name, price, ram }) => {
      result += `
     <div class="product">
      <div><strong>Name:</strong><span>${name}</span></div>
      <div><strong>Price:</strong><span>${price}</div>
      <div><strong>Ram:</strong><span>${ram} GB</div>
     </div>
    `;
    });
  
    container.innerHTML = result;
  };
  
  sortByDropdown.addEventListener("change", () => {
    const sortByValue = sortByDropdown.value; // price or ram value
    const sortOrderValue = sortOrderDropdown.value; // asc or desc value
  
    const sorted = _.orderBy(products, [sortByValue], sortOrderValue);
  
    displayProducts(sorted);
  });
  
  sortOrderDropdown.addEventListener("change", () => {
    const event = new Event("change");
    const sortByValue = sortByDropdown.value;
  
    if (sortByValue) {
      sortByDropdown.dispatchEvent(event);
    }
  });
  
  displayProducts(products);
  