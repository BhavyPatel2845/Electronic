/*-----------------
    Edit form - start
-------------------*/
   
const edtBtn = document.querySelectorAll('.productEdit'); 
const editForm = document.querySelector('#editFormContainer');
const closeForm = document.querySelector('.close');

// Form fields
const productNameInput = document.querySelector('input[name="productName"]');
const productCategorySelect = document.querySelector('select[name="categoryName"]');
const productDetailTextarea = document.querySelector('textarea[name="detail"]');
const productPriceInput = document.querySelector('input[name="price"]');
const productDiscountInput = document.querySelector('input[name="discount"]');
const productQuantityInput = document.querySelector('input[name="quantity"]');
const productProcessorInput = document.querySelector('input[name="processor"]');
const productMemoryStorageInput = document.querySelector('input[name="memoryStorage"]');
const productRamInput = document.querySelector('input[name="ram"]');
const productFrontCameraInput = document.querySelector('input[name="frontCamera"]');
const productRearCameraInput = document.querySelector('input[name="rearCamera"]');
const productBatteryInput = document.querySelector('input[name="battery"]');
// const productFileInput = document.querySelector('input[name="file"]');
const productIDInput = document.getElementById('productId');

// Event listener for each edit button
edtBtn.forEach(elems => {
    elems.addEventListener("click", (btn) => {
        
        const productName = elems.getAttribute('data-productName');
        const productCategory = elems.getAttribute('data-categoryName');
        const productDetail = elems.getAttribute('data-detail');
        const productPrice = elems.getAttribute('data-price');
        const productDiscount = elems.getAttribute('data-discount');
        const productQuantity = elems.getAttribute('data-quantity');
        const productProcessor = elems.getAttribute('data-processor');
        const productMemoryStorage = elems.getAttribute('data-memoryStorage');
        const productRam = elems.getAttribute('data-ram');
        const productFrontCamera = elems.getAttribute('data-frontCamera');
        const productRearCamera = elems.getAttribute('data-rearCamera');
        const productBattery = elems.getAttribute('data-battery');
        // const productFile = elems.getAttribute('data-file');
        const productid = elems.getAttribute('data-productId');
        
        productNameInput.value = productName;
        productCategorySelect.value = productCategory;
        productDetailTextarea.value = productDetail;
        productPriceInput.value = productPrice;
        productDiscountInput.value = productDiscount;
        productQuantityInput.value = productQuantity;
        productProcessorInput.value = productProcessor;
        productMemoryStorageInput.value = productMemoryStorage;
        productRamInput.value = productRam;
        productFrontCameraInput.value = productFrontCamera;
        productRearCameraInput.value = productRearCamera;
        productBatteryInput.value = productBattery;
        // productFileInput.value = productFile;
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


/*--------------------
    delete Product - Start
---------------------*/

// deleteProductBtn = document.querySelectorAll('.productDelete');
// const productID = document.getElementById('productId');

// deleteProductBtn.forEach(element => {
//     element.addEventListener('click', function(){
//         alert('delete button clicked');
        
//         const productid = elems.getAttribute('data-productId');
//         productID.value = productid;
//     })
// });

/*--------------------
    delete Product - End
---------------------*/

