// SHOW MORE COURSES
let confirm = document.getElementById("shomo").addEventListener("click", function(){
    if (confirm = true) {
        let showmore = document.getElementById("comen-more");
        showmore.style.display = 'flex';
        let showless = document.getElementById("shomo-button")
        showless.innerHTML = 'Veiw Less';
    }
    if (confirm = true) {
        document.getElementById("shomo").addEventListener('click', function(){
            let showmore = document.getElementById("comen-more");
            showmore.style.display = 'none';
            let showless = document.getElementById("shomo-button")
            showless.innerHTML = 'Show More';
        });
    }

})








// FOR NAVBAR
window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    var scrollThreshold = 600; // Change color after scrolling 70px

    if (window.scrollY >= scrollThreshold) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });





const texts = ["Acquire a Tech skill today and become great", "JAPA with a Teck skill", "Learning made easy with Ogalearn Digital", " We Build professional Website and Mobile App"]; // Add your texts here
let index = 0;
let textElement = document.getElementById("text");

function typeWriterEffect() {
    const currentText = texts[index];
    let charIndex = 0;

    // Type the text
    function type() {
        if (charIndex < currentText.length) {
            textElement.textContent += currentText.charAt(charIndex);
            charIndex++;
            setTimeout(type, 100); // Adjust typing speed here
        } else {
            setTimeout(() => erase(), 1000); // Wait before erasing
        }
    }

    // Erase the text completely
    function erase() {
        if (charIndex > 0) {
            textElement.textContent = currentText.substring(0, charIndex - 1);
            charIndex--;
            setTimeout(erase, 50); // Adjust erasing speed here
        } else {
            // Reset the border once the text is fully erased
            textElement.style.borderRight = 'none'; // Hide the border
            // Move to the next text when fully erased
            index = (index + 1) % texts.length; // Cycle through texts
            setTimeout(() => {
                // textElement.style.borderRight = '2px solid purple'; // Show the border
                typeWriterEffect(); // Restart typing the next text
            }, 500); // Wait before starting to type the next text
        }
    }

    // Show the border at the start of typing
    // textElement.style.borderRight = '2px solid purple';
    type();
}

// Start the typewriter effect
typeWriterEffect();



  // FOR EFFECT FOR BODY
  document.addEventListener("DOMContentLoaded", function() {
    // Define the elements to animate
    const imgSection = document.querySelector('.bod-img'); // Select the actual image
    const textSection = document.querySelector('.bod-text');

    // Create an intersection observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            console.log(`Is ${entry.target.className} intersecting? ${entry.isIntersecting}`);
            
            if (entry.isIntersecting) {
                // Add the 'visible' class to trigger the animation
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Stop observing once the animation is triggered
            }
        });
    }, {
        root: null, // Use the viewport as the root
        threshold: 0.1 // Trigger when 10% of the element is visible
    });

    // Start observing the elements
    observer.observe(imgSection);
    observer.observe(textSection);
});




// FOR EFFECT FOR ABOUT
document.addEventListener("DOMContentLoaded", function() {
  const aboutContent = document.querySelector('.about-content');
  const imgSection = document.querySelector('.about-img');
  const textSection = document.querySelector('.about-text');

  // Create an intersection observer
  const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              // Add the 'visible' class to trigger the animation
              aboutContent.classList.add('visible');
              imgSection.classList.add('visible');
              textSection.classList.add('visible');
              observer.unobserve(entry.target); // Stop observing once the animation is triggered
          }
      });
  }, {
      root: null, // Use the viewport as the root
      threshold: 0.2 // Change this value to adjust the scroll point
  });

  // Start observing the about content
  observer.observe(aboutContent);
});



// FOR EFFECT FOR JOIN
document.addEventListener("DOMContentLoaded", function() {
  const joinConElements = document.querySelectorAll('.join-con');
  const scrollPoint = window.innerHeight * 0.8; // Change this value to adjust when the effect triggers

  function checkScroll() {
      joinConElements.forEach((el, index) => {
          const elementPosition = el.getBoundingClientRect().top;
          if (elementPosition < scrollPoint) {
              setTimeout(() => {
                  el.classList.add('visible');
              }, index * 700); // Adjust the timing for the sequential effect
          }
      });
  }

  window.addEventListener('scroll', checkScroll);
  checkScroll(); // Initial check in case elements are already in view
});







// FOR EFFECT FOR CHOOSE










// FOR IMGAE_CLICK
document.addEventListener('DOMContentLoaded', function() {
    var popups = ['popup1', 'popup2', 'popup3', 'popup4', 'popup5', 'popup6'];
    var currentIndex = -1;

    function showPopup(index) {
        document.querySelectorAll('.popup-content').forEach(function(popup) {
            popup.classList.remove('show');
        });

        var popup = document.getElementById(popups[index]);
        popup.classList.add('show');

        document.querySelector('.overlay').style.display = 'block';
        document.querySelector('.job-content').classList.add('blur');

        document.querySelector('.popup-navigation').style.display = 'flex';
        
        updateNavigationButtons();

        currentIndex = index;
    }

    function updateNavigationButtons() {
        document.querySelector('.prev-btn').style.display = (currentIndex > 0) ? 'block' : 'none';
        document.querySelector('.next-btn').style.display = (currentIndex < popups.length - 1) ? 'block' : 'none';
    }

    document.querySelectorAll('.job-img').forEach(function(img) {
        img.addEventListener('click', function() {
            var popupId = this.getAttribute('data-popup');
            var index = popups.indexOf(popupId);
            showPopup(index);
        });
    });

    document.querySelectorAll('.cancel-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var popup = this.parentElement;
            popup.classList.remove('show');
            document.querySelector('.job-content').classList.remove('blur');
            document.querySelector('.overlay').style.display = 'none';
            document.querySelector('.popup-navigation').style.display = 'none';
        });
    });

    document.querySelector('.prev-btn').addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + popups.length) % popups.length;
        showPopup(currentIndex);
    });

    document.querySelector('.next-btn').addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % popups.length;
        showPopup(currentIndex);
    });
});


