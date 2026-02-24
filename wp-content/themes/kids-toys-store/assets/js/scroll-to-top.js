// Show or hide the button based on scroll position
window.onscroll = function() {
    const kids_toys_store_button = document.querySelector('.scroll-top-button');
    if (kids_toys_store_button) {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            kids_toys_store_button.style.display = "block"; // Show button
        } else {
            kids_toys_store_button.style.display = "none"; // Hide button
        }
    }
};

// Scroll to the top of the page when the button is clicked
const scrollButtonElement = document.querySelector('.scroll-top-button a');
if (scrollButtonElement) {
    scrollButtonElement.onclick = function(event) {
        event.preventDefault(); // Prevent default link behavior
        window.scrollTo({top: 0, behavior: 'smooth'}); // Smooth scroll to top
    };
}