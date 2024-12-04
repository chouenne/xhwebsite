// js for the header bk scroll down

window.addEventListener('scroll', function () {
  const header = document.getElementById('header');
  const scrollPosition = window.scrollY; // Get the current scroll position

  if (scrollPosition > window.innerHeight * 0.2) { // Check if scrolled down 20vh
    header.style.backgroundColor = '#241c0d';
  } else {
    header.style.backgroundColor = 'transparent'; // Change back to transparent
  }
});

// js for home page testimonial slider
jQuery(document).ready(function ($) {
  $('.testimonial-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 6000,
    arrows: true,
    dots: true,
  });
});

// right flower wiseclock

const flowerRight = document.querySelector("#flower-right");
const testimonialsSection = document.querySelector("#testimonials");

// Use IntersectionObserver to track visibility of #testimonials section
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      // If the section is in view, add the class to trigger the rotation
      flowerRight.classList.add("rotate-clockwise");
    } else {
      // When the section is out of view, reset the rotation
      flowerRight.classList.remove("rotate-clockwise");
    }
  });
}, { threshold: 0.5 });  // Trigger when 50% of the section is visible

// Start observing the #testimonials section
observer.observe(testimonialsSection);


//js code for the back to top button
document.addEventListener("DOMContentLoaded", function () {
  const backToTopButton = document.getElementById("back-to-top");

  // Show/Hide button based on scroll position
  window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
      backToTopButton.style.display = "block";
      backToTopButton.style.transform = "translateX(0)"; // Slide in
    } else {
      backToTopButton.style.transform = "translateX(-100%)"; // Slide out
      setTimeout(() => {
        backToTopButton.style.display = "none";
      }, 300); // Matches the CSS transition duration
    }
  });

  // Scroll to top on click
  backToTopButton.querySelector("a").addEventListener("click", (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});

// js for header menu popup
document.addEventListener('DOMContentLoaded', function () {
  const burger = document.getElementById('burger');
  const popupMenu = document.createElement('div'); // Create popup menu div

  // Create the popup menu for left and right menus
  popupMenu.classList.add('popup-menu');

  // Add left menu
  const leftMenu = document.createElement('ul');
  leftMenu.className = 'menu-list';
  leftMenu.innerHTML = menuData.leftMenu; // Use localized data


  // Append menus to popup
  popupMenu.appendChild(leftMenu);
  document.body.appendChild(popupMenu); // Append popup to body

  // Toggle popup menu on burger click
  burger.addEventListener('click', function () {
    popupMenu.classList.toggle('show'); // Toggle show class
  });

  // Hide popup menu when clicking outside of it
  document.addEventListener('click', function (event) {
    if (!popupMenu.contains(event.target) && !burger.contains(event.target)) {
      popupMenu.classList.remove('show'); // Hide popup if clicked outside
    }
  });
});