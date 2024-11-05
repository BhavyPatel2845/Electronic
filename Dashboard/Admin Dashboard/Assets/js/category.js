/*-----------------
    Edit form - start
-------------------*/
   
const edtBtn = document.querySelectorAll('.categoryEdit'); 
const editForm = document.querySelector('#editFormContainer');
const closeForm = document.querySelector('.close');

console.log(edtBtn);
edtBtn.forEach(element => {
    
element.addEventListener('click', function(){
    editForm.style.display = 'block';
})
})
// Form fields
const categoryNameInput = document.querySelector('input[name="categoryName"]');
const categoryDetailTextarea = document.querySelector('textarea[name="categoryDetail"]');
const categoryIDInput = document.getElementById('categoryId');

// Event listener for each edit button
edtBtn.forEach(elems => {
    elems.addEventListener("click", (btn) => {
        
        const categoryName = elems.getAttribute('data-categoryName');
        const categoryDetail = elems.getAttribute('data-categoryDetail'); 
        const categoryid = elems.getAttribute('data-categoryId');
        
        categoryNameInput.value = categoryName;
        categoryDetailTextarea.value = categoryDetail;
        categoryIDInput.value = categoryid;

        
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