(function() {

    /**
    * Smooth scroll to anchor with dynamic offset
    */
    function scrollToAnchor(event) {
        const targetId = this.getAttribute('href');
        
        if (targetId.startsWith('#') && targetId.length > 1) {
          event.preventDefault();
        
          const targetElement = document.querySelector(targetId);
          const headerHeight = document.querySelector('header').offsetHeight;
        
          if (targetElement) {
            const elementPosition = targetElement.getBoundingClientRect().top + window.scrollY;
            const offsetPosition = elementPosition - headerHeight;
        
            window.scrollTo({
              top: offsetPosition,
              behavior: 'smooth'
            });
          }
        }
    }

    // Attach click listeners to all internal anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', scrollToAnchor);
    });
    
    // Optional: Adjust scroll if page loads with a hash in the URL
    window.addEventListener('load', () => {
        if (window.location.hash) {
          const targetElement = document.querySelector(window.location.hash);
          const headerHeight = document.querySelector('.header-homepage').offsetHeight;
          if (targetElement) {
            const elementPosition = targetElement.getBoundingClientRect().top + window.scrollY;
            window.scrollTo({
              top: elementPosition - headerHeight,
              behavior: 'instant' // No animation on page load
            });
          }
        }
    });
  
    // Demo Notes button modal
    document.addEventListener('DOMContentLoaded', function() {
        
        // Open Modal
        document.getElementById("openModal").onclick = function() {
            var body = document.body;
            var modal = document.getElementById("myModal");
            var closeButton = document.getElementsByClassName("close")[0];
            
            modal.style.setProperty("display", "unset", "important");
            body.style.overflow = "hidden";
        	
    	    closeButton.onclick = function() {
        	    closeModal(closeButton, modal, body);
            };
            
            document.addEventListener('keydown', (e) => {
    		    if (e.key === 'Escape') {
      			    closeModal(closeButton, modal, body);
    		    }
            });
    	};
    });
    
    function closeModal(modalCloseButton, modalElement, bodyElement) {
    	modalElement.style.display = "none";
    	bodyElement.style.overflow = "unset";
    }

})();