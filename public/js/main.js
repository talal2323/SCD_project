function openProductModal(imageSrc, title, price, description) {
    // Set the product image
    document.getElementById("productImage").src = imageSrc;
    document.getElementById("productImage").alt = title;

    // Set the product title
    document.getElementById("productModalLabel").textContent = title;

    // Set the product description
    document.getElementById("productDescription").textContent = description;

    // Set the product price
    document.getElementById("productPrice").innerHTML = `<strong>Price:</strong> ${price}`;
}


function initializeContactForm() {
    const contactForm = document.getElementById("contactForm");
    if (contactForm) {
        contactForm.addEventListener("submit", function (event) {
            event.preventDefault();
            alert("Thank you for contacting us!");
            location.reload();
        });
    }
}

// Initialize Pages
document.addEventListener("DOMContentLoaded", () => {
    initializeContactForm();
});
