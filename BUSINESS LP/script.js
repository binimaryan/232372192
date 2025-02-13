function showAlert() {
    alert("Thank you for your interest! Please explore our services.");
}

document.addEventListener("DOMContentLoaded", function() {
    const shopNowButton = document.querySelector('.cta-button');
    if (shopNowButton) {
        shopNowButton.addEventListener('click', showAlert);
    }
});