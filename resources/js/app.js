import "./bootstrap";

// Active Navbar
document.addEventListener("DOMContentLoaded", function () {
    const path = window.location.pathname;
    const links = document.querySelectorAll("#navbar a");

    links.forEach((link) => {
        if (link.getAttribute("href") === path) {
            link.classList.add("active");
        }
    });
});

// Mobile Navbar
document.addEventListener("DOMContentLoaded", function () {
    const menuBtn = document.getElementById("menuBtn");
    const closeBtn = document.getElementById("closeBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    const menuItems = document.querySelectorAll(".menu-item");

    menuBtn.addEventListener("click", function () {
        mobileMenu.classList.toggle("hidden");
        mobileMenu.classList.toggle("visible");
    });

    closeBtn.addEventListener("click", function () {
        mobileMenu.classList.add("hidden");
        mobileMenu.classList.remove("visible");
    });

    menuItems.forEach((item) => {
        item.addEventListener("click", function () {
            // Remove active class from all items
            menuItems.forEach((item) => {
                item.classList.remove("active");
            });

            // Add active class to the clicked item
            this.classList.add("active");

            // Close the mobile menu
            mobileMenu.classList.add("hidden");
            mobileMenu.classList.remove("visible");
        });
    });
});
