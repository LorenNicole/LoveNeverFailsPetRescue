const accordionSectionElement = document.querySelector('.application-form-accordions');
//const accordionElements = documaccordionSectionElement.querySelectorAll('.wp-block-accordion');
const dogAccordionElement = document.getElementById('dog-adoption-form-wrapper');
const catAccordionElement = document.getElementById('cat-adoption-form-wrapper');
const accordionElements = [dogAccordionElement, catAccordionElement];

for (var i = 0; i < 2; i++) {
    const accordionToggleElement = accordionElements[i].querySelector('.wp-block-accordion-heading__toggle');
    //const isDogAccordion = accordionElements[i].id == 'dog-adoption-form-wrapper';
    
    removeExistingToggleIcon(accordionElements[i]);
    createArrowPawElement(accordionToggleElement);
    rotateElementOnClick(accordionToggleElement);
    //rotateElementOnClick(accordionToggleElement, isDogAccordion
}

//window.addEventListener('load', () => {
    //const el = document.querySelector('#myElement');
    //if (el) {
    //    console.log('Element loaded:', el);
    //}
  //  addDogWishlist();
//});

// Copy/Paste DOM for wishlist because the Editor does not allow more than one Cart pattern per page, so this is a work around.
const dogWishlistInterval = setInterval(function(){
    const observeWishList = document.querySelector('.accordion--cat .wc-block-cart-item__image .wc-block-components-skeleton__element');
    if (!observeWishList) {
        addDogWishlist();
    }
},5);

//observer.disconnect();

function createArrowPawElement(accordionToggleElement) {
    const arrowPawImageElement = document.createElement('img');
    arrowPawImageElement.src = 'https://loveneverfailspetrescue.com/wp-content/uploads/2026/02/arrow-paw.svg';
    arrowPawImageElement.classList.add('arrowPawImage', 'form-closed');
    accordionToggleElement.insertBefore(arrowPawImageElement, accordionToggleElement.firstChild);
}

function rotateElementOnClick(accordionToggleElement) {
    const insertedArrowPawImageElement = accordionToggleElement.querySelector('.arrowPawImage');
    accordionToggleElement.addEventListener("click", () => {
        if (insertedArrowPawImageElement.classList.contains('form-opened')) {
            insertedArrowPawImageElement.classList.replace('form-opened', 'form-closed');
            accordionToggleElement.parentElement.classList.remove('opened');
        } else {
            insertedArrowPawImageElement.classList.replace('form-closed', 'form-opened');
            accordionToggleElement.parentElement.classList.add('opened');
        }
        
        updateAcccordionSectionStyling(accordionSectionElement);
    });
}

function updateAcccordionSectionStyling(accordionSectionElement) {
    const catAccordionIsOpen = catAccordionElement.querySelector('.arrowPawImage')?.classList.contains('form-opened');
    const dogAccordionIsOpen = dogAccordionElement.querySelector('.arrowPawImage')?.classList.contains('form-opened');

    (catAccordionIsOpen || dogAccordionIsOpen) 
        ? accordionSectionElement.classList.add('opened')
        : accordionSectionElement.classList.remove('opened');
}

function removeExistingToggleIcon(accordionElement) {
    const toggleIconElement = accordionElement.querySelector(".wp-block-accordion-heading__toggle-icon");
    toggleIconElement.remove();
}

function addDogWishlist() {
    const catWishListElement = document.querySelector('.adoption-form-wishlist--cat');
    const dogWishListElement = document.querySelector('.adoption-form-wishlist--dog');
    dogWishListElement.innerHTML = catWishListElement.innerHTML;

    const rowCat = catWishListElement.querySelector('.wc-block-cart-item__image');
    const rowDog = dogWishListElement.querySelector('.wc-block-cart-item__image');
    rowDog.innerHTML = rowCat.innerHTML;

    clearInterval(dogWishlistInterval);
}
