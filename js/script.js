document.querySelectorAll('.count-text').forEach(counter => {
  const speed = parseInt(counter.getAttribute('data-speed'));
  const stop = parseInt(counter.getAttribute('data-stop'));
  let count = 0;
  const increment = stop / (speed / 50); // update every 50ms

  const updateCounter = () => {
    if (count < stop) {
      count += increment;
      counter.innerText = Math.floor(count);
      setTimeout(updateCounter, 50);
    } else {
      counter.innerText = stop;
    }
  };

  updateCounter();
});

// 2 toggle burger 
document.addEventListener('DOMContentLoaded', () => {
    const mobileBreakpoint = 992;
    
    // Select ALL <a> tags that are direct children of any li.dropdown within the navigation.
    // This targets both top-level and nested dropdown links.
    const dropdownLinks = document.querySelectorAll('.navigation li.dropdown > a');

    const handleDropdownClick = (e) => {
        // 1. Check if we are in the mobile view
        if (window.innerWidth > mobileBreakpoint) {
            return; // Exit if it's desktop size
        }

        // Prevent the link from navigating
        e.preventDefault(); 
        
        const clickedLink = e.currentTarget;
        const parentLi = clickedLink.closest('li.dropdown');
        // Get the direct next sibling <ul> menu
        const subMenu = clickedLink.nextElementSibling; 

        // Ensure the element is a UL and not the .dropdown-btn
        if (subMenu && subMenu.tagName === 'UL') {
            
            // --- Logic to close sibling menus at the SAME level ---
            // Find the immediate parent <ul> of the current dropdown <li>
            const currentUl = parentLi.parentNode;
            
            // Iterate over all dropdown <li> items in the current <ul>
            currentUl.querySelectorAll(':scope > li.dropdown').forEach(li => {
                // Check if this <li> is NOT the one that was just clicked
                if (li !== parentLi) {
                    const siblingMenu = li.querySelector(':scope > ul');
                    if (siblingMenu && siblingMenu.style.display === 'initial') {
                        // Close the sibling menu
                        siblingMenu.style.display = 'none';
                        li.classList.remove('active');
                    }
                }
            });
            // ----------------------------------------
            
            // 2. Toggle the display style of the clicked subMenu
            if (subMenu.style.display === 'initial') {
                subMenu.style.display = 'none';
                parentLi.classList.remove('active');
            } else {
                subMenu.style.display = 'initial';
                parentLi.classList.add('active');
            }
        }
    };

    // Attach the click handler to ALL dropdown links
    dropdownLinks.forEach(link => {
        link.addEventListener('click', handleDropdownClick);
    });

    // Handle resizing back to desktop (optional: clear inline styles)
    window.addEventListener('resize', () => {
        if (window.innerWidth > mobileBreakpoint) {
            // Clear all inline styles that JS added to ALL sub-menus
            document.querySelectorAll('.navigation li.dropdown ul').forEach(ul => {
                ul.style.display = ''; 
            });
            // Remove 'active' class from all dropdowns
            document.querySelectorAll('.navigation li.dropdown').forEach(li => {
                li.classList.remove('active');
            });
        }
    });
});
// wow animation

// Get the header element
   
document.addEventListener('DOMContentLoaded', () => { 
    const scrollTriggerPoint = 100; 
    const header = document.querySelector('.main-header'); // ✅ Get the header element

    function handleScroll() {
        if (window.scrollY > scrollTriggerPoint) {
            header.classList.add('fixed-header');
        } else {
            header.classList.remove('fixed-header');
        }
    }

    window.addEventListener('scroll', handleScroll);
});

// box
document.addEventListener("DOMContentLoaded", () => {
  const boxes = document.querySelectorAll(".box");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("fadeInUp");
          // Optional: Stop observing once animated
          observer.unobserve(entry.target);
        }
      });
    },
  );

  boxes.forEach(box => observer.observe(box));
});

// box1 right
   document.addEventListener('DOMContentLoaded', () => { 

  const boxes = document.querySelectorAll(".box1");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("fadeInRight");
          // Optional: Stop observing once animated
          observer.unobserve(entry.target);
        }
      });
    },
  );

  boxes.forEach(box => observer.observe(box));

});

// box2 left
//    document.addEventListener('DOMContentLoaded', () => { 

//   const boxes = document.querySelectorAll(".box2");

//   const observer = new IntersectionObserver(
//     (entries) => {
//       entries.forEach(entry => {
//         if (entry.isIntersecting) {
//           entry.target.classList.add("fadeInLeft");
//           // Optional: Stop observing once animated
//           observer.unobserve(entry.target);
//         }
//       });
//     },
//   );

//   boxes.forEach(box => observer.observe(box));

// });
document.addEventListener('DOMContentLoaded', () => { 

  const boxes = document.querySelectorAll(".box2");

  // 1. Define the options object with the desired threshold
  const options = {
    root: null, // Default is the viewport
    rootMargin: '0px', // No margin around the root
    threshold: 0.0001 // Triggers when 0.01% of the element is visible
  };

  // 2. Pass the options object to the IntersectionObserver constructor
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("fadeInLeft");
          // Optional: Stop observing once animated
          observer.unobserve(entry.target);
        }
      });
    },
    options 
  );

  boxes.forEach(box => observer.observe(box));

});
// self practice
// document.addEventListener('DOMContentLoaded', () => { 
//   let allInput = document.querySelectorAll(".form-group .form-control"); 
//   let sendM = document.querySelector(".form-group .theme-btn");
// // get form
//   let form = document.querySelector(".contactForm");
// // get errorMessage
// //   let errorM =document.querySelectorAll(".with-errors");

//   sendM.addEventListener("submit" , ()=>{
 
//         let isValid = true;
//         allInput.forEach(input =>{
//           if(input.value.trim() === ""){
//           let errorMessage = input.getAttribute("data-error");
//           const errorM = this.nextElementSibling;
//           errorM.innerText(errorMessage);
//           isValid = false;
//           }
//           else{
//              if(form.checkVisibility()){
//              isValid=true;
//              alert("Form Submitted Successfully");
//              }

//             }
//         })
//     })

// });

document.addEventListener('DOMContentLoaded', () => {
    // 1. Get the form and all relevant fields
    const form = document.getElementById('contactForm');
    const allFields = document.querySelectorAll(".form-group .form-control");
    
    // --- Validation Helper Functions ---
    
    // Simple Email validation function
    const validateEmail = (email) => {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    };

    // Function to handle validation for a single field
    const validateField = (input) => {
        const inputValue = input.value.trim();
        const errorDiv = input.closest('.form-group').querySelector('.help-block.with-errors');
        let error = '';

        // Check 1: Required (empty) field check
        if (input.hasAttribute('required') && inputValue === "") {
            error = input.getAttribute("data-error") || "This field is required.";
        }
        // Check 2: Email format check
        else if (input.type === 'email' && inputValue !== "" && !validateEmail(inputValue)) {
            error = "Please enter a valid email address.";
        }

        // Display or clear the error
        if (errorDiv) {
            errorDiv.textContent = error;
            if (error) {
                // Add a class for visual feedback (e.g., red border)
                input.classList.add('input-error');
            } else {
                // Clear error styling
                input.classList.remove('input-error');
            }
        }
        
        return !error; // Returns true if valid, false if invalid
    };
    
    // --- Event Listeners for Real-time Feedback (Focus/Blur) ---

    allFields.forEach(input => {
        // Validation when the user leaves the field
        input.addEventListener('blur', () => {
            validateField(input);
        });

        // Optional: Clear error message as the user types
        input.addEventListener('input', () => {
            const errorDiv = input.closest('.form-group').querySelector('.help-block.with-errors');
            // We only clear the error text on input, validation runs on blur/submit
            if(errorDiv && errorDiv.textContent !== ''){
                errorDiv.textContent = '';
                input.classList.remove('input-error');
            }
        });
    });

    // --- Form Submission Event Listener ---

    form.addEventListener('submit', function(event) {
        // PREVENT the default form submission to run our custom validation
        event.preventDefault(); 

        let isFormValid = true;

        // Run validation on all fields again
        allFields.forEach(input => {
            // We use the AND assignment to ensure one failure makes isFormValid false forever
            isFormValid = validateField(input) && isFormValid;
        });

        // If all fields are valid, proceed with submission logic
        if (isFormValid) {
            
            // ----------------------------------------------------
            // In a real scenario, you would use AJAX here to send
            // the form data to 'assets/php/form-process.php'
            // ----------------------------------------------------
            
            // Required action: Show success alert
            alert("Form Submitted Successfully!");
            
            // Clear the form fields after successful (simulated) submission
            form.reset();

        } else {
            // Find the first invalid field and focus on it for user convenience
            const firstInvalid = Array.from(allFields).find(input => !validateField(input));
            if (firstInvalid) {
                firstInvalid.focus();
            }
        }
    });

});

  // Wait until the page finishes loading
  window.addEventListener('load', () => {
    setTimeout(() => {
      document.querySelector('.preloader').style.display = 'none';
       document.querySelector('.preloader').style.transition = '.3s';
    }, 900); // 2000ms = 2 seconds
  });

