// Function to show edit form for products
function showEditForm(prodId, name, category, desc, price) {
    // Create the edit form element
    const editForm = document.createElement('div');
    editForm.classList.add('edit-form');
    editForm.innerHTML = `
        <div class="edit-form-container">
            <h4>Edit Product</h4>
            <label for="new_name">Product Name</label>
            <input type="text" id="new_name" name="new_name" value="${name}" required>
            <label for="new_category">Category</label>
            <input type="text" id="new_category" name="new_category" value="${category}" required>
            <label for="new_desc">Description</label>
            <input type="text" id="new_desc" name="new_desc" value="${desc}" required>
            <label for="new_price">Price</label>
            <input type="text" id="new_price" name="new_price" value="${price}" required>
            <div class="edit-form-buttons">
                <button type="button" onclick="updateProduct(${prodId})">Update</button>
                <button type="button" onclick="cancelEdit()">Cancel</button>
            </div>
        </div>
    `;
    
    // Append the edit form to the main content
    const mainContent = document.querySelector('.content');
    mainContent.appendChild(editForm);
}


// Function to update product details
function updateProduct() {
    // Retrieve updated product details from the form
    const prodId = document.getElementById('edit-prod-id').value;
    const newName = document.getElementById('edit-prod-name').value;
    const newCategory = document.getElementById('edit-prod-category').value;
    const newDesc = document.getElementById('edit-prod-desc').value;
    const newPrice = document.getElementById('edit-prod-price').value;

    // Perform client-side validation if needed

    // Create a FormData object to send data via POST request
    const formData = new FormData();
    formData.append('prod_id', prodId);
    formData.append('new_name', newName);
    formData.append('new_category', newCategory);
    formData.append('new_desc', newDesc);
    formData.append('new_price', newPrice);

    // Send an AJAX request to update the product details
    fetch('update_product.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (response.ok) {
            // If update successful, reload the page or update specific DOM elements as needed
            window.location.reload(); // Reload the page
        } else {
            // If update fails, handle the error (display a message, etc.)
            console.error('Update failed');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
