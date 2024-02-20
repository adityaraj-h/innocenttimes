var currentUrl = window.location.href;

// Get all the menu links
var menuLinks = document.querySelectorAll('.nav-link');

// Iterate through each link and check if it matches the current URL
menuLinks.forEach(function(link) {
    // If the link's href matches the current URL, add the 'active' class
    if (link.href === currentUrl) {
        link.parentNode.classList.add('active');
    }
});