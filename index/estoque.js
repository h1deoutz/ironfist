const submit = document.querySelector("#submitproduct"),
createProduct = document.querySelector("#add-product"),
closeit = document.querySelector("#close");
addproduct = document.querySelector(".addproduct");


createProduct.addEventListener("click", () => addproduct.classList.add("active"));
submit.addEventListener("click", () => addproduct.classList.remove("active"));
closeit.addEventListener("click", () => { addproduct.classList.remove("active");

})

