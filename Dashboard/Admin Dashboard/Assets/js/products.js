/*-----------------
    Edit form - start
-------------------*/
   
const edtBtn = document.querySelectorAll('.productEdit'); 
const editForm = document.querySelector('#editFormContainer');
const closeForm = document.querySelector('.close');

// Form fields
const productNameInput = document.querySelector('input[name="productName"]');
const productCategorySelect = document.querySelector('select[name="productCatagory"]');
const productDescriptionTextarea = document.querySelector('textarea[name="productDescription"]');
const productPriceInput = document.querySelector('input[name="productPrice"]');
const productDiscountInput = document.querySelector('input[name="productDiscount"]');
const productIDInput = document.getElementById('productId');

// Event listener for each edit button
edtBtn.forEach(elems => {
    elems.addEventListener("click", (btn) => {
        
        const productName = elems.getAttribute('data-name');
        const productCategory = elems.getAttribute('data-category');
        const productDescription = elems.getAttribute('data-description');
        const productPrice = elems.getAttribute('data-price');
        const productDiscount = elems.getAttribute('data-discount');
        const productImage = elems.getAttribute('data-image'); 
        const productid = elems.getAttribute('data-id');
        
        productNameInput.value = productName;
        productCategorySelect.value = productCategory;
        productDescriptionTextarea.value = productDescription;
        productPriceInput.value = productPrice;
        productDiscountInput.value = productDiscount;
        productIDInput.value = productid;

        
        editForm.style.display = 'block';
    });
});

//close form
closeForm.addEventListener("click", (eve) => {
    editForm.style.display = 'none';
});

// Close the form when clicking outside form
window.addEventListener("click", (eve) => {
    if (eve.target === editForm) {
        editForm.style.display = 'none';
    }
});


/*-----------------
    Edit form - End
-------------------*/