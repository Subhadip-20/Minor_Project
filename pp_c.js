// Function to open the booking modal
function openBookingModal() {
    document.getElementById("booking-modal").style.display = "block";
}

// Function to open the payment modal
function openPaymentModal() {
    document.getElementById("payment-modal").style.display = "block";
}

// Function to close the modals
function closeModals() {
    document.getElementById("booking-modal").style.display = "none";
    document.getElementById("payment-modal").style.display = "none";
}

// Attach event listeners to the buttons
document.getElementById("book-now-button").addEventListener("click", openBookingModal);
document.getElementById("proceed-to-pay-button").addEventListener("click", openPaymentModal);

// Close modals when clicking outside of them
window.onclick = function (event) {
    if (event.target.classList.contains("modal")) {
        closeModals();
    }
};


