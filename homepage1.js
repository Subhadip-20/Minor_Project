/* menu bar */
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

menu.addEventListener('click', () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('nav-toggle');
});

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('nav-toggle');
}


/* contact form */
document.addEventListener("DOMContentLoaded", function() {
  const contactForm = document.getElementById("contact-form");

  function handleFormSubmit(event) {
    event.preventDefault();
    alert("Form submitted!");
    contactForm.reset();
  }
  
  contactForm.addEventListener("submit", handleFormSubmit);
});
// JavaScript for opening and closing feature popups
document.addEventListener("DOMContentLoaded", function () {
    // Get references to the feature popups
    const feature1Popup = document.getElementById("feature1-popup");
    const feature2Popup = document.getElementById("feature2-popup");
    const feature3Popup = document.getElementById("feature3-popup");
    const feature4Popup = document.getElementById("feature4-popup");

    // Get references to the "Read More" buttons
    const feature1Button = document.getElementById("feature1");
    const feature2Button = document.getElementById("feature2");
    const feature3Button = document.getElementById("feature3");
    const feature4Button = document.getElementById("feature4");

    // Get references to the close buttons
    const feature1CloseButton = document.querySelector("#feature1-popup .feature-popup-close");
    const feature2CloseButton = document.querySelector("#feature2-popup .feature-popup-close");
    const feature3CloseButton = document.querySelector("#feature3-popup .feature-popup-close");
    const feature4CloseButton = document.querySelector("#feature4-popup .feature-popup-close");

    // Function to open a feature popup
    function openFeaturePopup(popup) {
        popup.style.display = "block";
    }

    // Function to close a feature popup
    function closeFeaturePopup(popup) {
        popup.style.display = "none";
    }

    // Event listeners for opening feature popups
    feature1Button.addEventListener("click", function () {
        openFeaturePopup(feature1Popup);
    });

    feature2Button.addEventListener("click", function () {
        openFeaturePopup(feature2Popup);
    });

    feature3Button.addEventListener("click", function () {
        openFeaturePopup(feature3Popup);
    });

    feature4Button.addEventListener("click", function () {
        openFeaturePopup(feature4Popup);
    });

    // Event listeners for closing feature popups
    feature1CloseButton.addEventListener("click", function () {
        closeFeaturePopup(feature1Popup);
    });

    feature2CloseButton.addEventListener("click", function () {
        closeFeaturePopup(feature2Popup);
    });

    feature3CloseButton.addEventListener("click", function () {
        closeFeaturePopup(feature3Popup);
    });

    feature4CloseButton.addEventListener("click", function () {
        closeFeaturePopup(feature4Popup);
    });
});

// JavaScript for opening and closing feature popups
document.addEventListener("DOMContentLoaded", function () {
    // Get references to the service popups
    const service1Popup = document.getElementById("service1-popup");
    const service2Popup = document.getElementById("service2-popup");
    const service3Popup = document.getElementById("service3-popup");
    const service4Popup = document.getElementById("service4-popup");
    const service5Popup = document.getElementById("service5-popup");
    const service6Popup = document.getElementById("service6-popup");
    const service7Popup = document.getElementById("service7-popup");
    const service8Popup = document.getElementById("service8-popup");
    const service9Popup = document.getElementById("service9-popup");


    // Get references to the "Read More" buttons for services
    const service1Button = document.getElementById("service1");
    const service2Button = document.getElementById("service2");
    const service3Button = document.getElementById("service3");
    const service4Button = document.getElementById("service4");
    const service5Button = document.getElementById("service5");
    const service6Button = document.getElementById("service6");
    const service7Button = document.getElementById("service7");
    const service8Button = document.getElementById("service8");
    const service9Button = document.getElementById("service9");

    // Get references to the close buttons for services
    const service1CloseButton = document.querySelector("#service1-popup .close");
    const service2CloseButton = document.querySelector("#service2-popup .close");
    const service3CloseButton = document.querySelector("#service3-popup .close");
    const service4CloseButton = document.querySelector("#service4-popup .close");
    const service5CloseButton = document.querySelector("#service5-popup .close");
    const service6CloseButton = document.querySelector("#service6-popup .close");
    const service7CloseButton = document.querySelector("#service7-popup .close");
    const service8CloseButton = document.querySelector("#service8-popup .close");
    const service9CloseButton = document.querySelector("#service9-popup .close");

    // Function to open a service popup
    function openServicePopup(popup) {
        popup.style.display = "block";
    }

    // Function to close a service popup
    function closeServicePopup(popup) {
        popup.style.display = "none";
    }

    // Event listeners for opening service popups
    service1Button.addEventListener("click", function () {
        openServicePopup(service1Popup);
    });

    service2Button.addEventListener("click", function () {
        openServicePopup(service2Popup);
    });

    service3Button.addEventListener("click", function () {
        openServicePopup(service3Popup);
    });

    service4Button.addEventListener("click", function () {
        openServicePopup(service4Popup);
    });
    
    service5Button.addEventListener("click", function () {
        openServicePopup(service5Popup);
    });

    service6Button.addEventListener("click", function () {
        openServicePopup(service6Popup);
    });

    service7Button.addEventListener("click", function () {
        openServicePopup(service7Popup);
    });

    service8Button.addEventListener("click", function () {
        openServicePopup(service8Popup);
    });

    service9Button.addEventListener("click", function () {
        openServicePopup(service9Popup);
    });

    // Event listeners for closing service popups
    service1CloseButton.addEventListener("click", function () {
        closeServicePopup(service1Popup);
    });

    service2CloseButton.addEventListener("click", function () {
        closeServicePopup(service2Popup);
    });
    
    service3CloseButton.addEventListener("click", function () {
        closeServicePopup(service3Popup);
    });

    service4CloseButton.addEventListener("click", function () {
        closeServicePopup(service4Popup);
    });

    service5CloseButton.addEventListener("click", function () {
        closeServicePopup(service5Popup);
    });

    service6CloseButton.addEventListener("click", function () {
        closeServicePopup(service6Popup);
    });

    service7CloseButton.addEventListener("click", function () {
        closeServicePopup(service7Popup);
    });

    service8CloseButton.addEventListener("click", function () {
        closeServicePopup(service8Popup);
    });

    service9CloseButton.addEventListener("click", function () {
        closeServicePopup(service9Popup);
    });
});