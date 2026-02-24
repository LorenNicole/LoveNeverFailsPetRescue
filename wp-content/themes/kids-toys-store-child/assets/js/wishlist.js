const pdfButtonElement = document.querySelector('.wishlistCtas__print a');
if (pdfButtonElement) {
    pdfButtonElement.addEventListener('click', () => {
        const printBlock = document.querySelector('body');
        if (printBlock) {
            printBlock.classList.add('printable');
            window.print();

             window.onafterprint = function () {
                printBlock.classList.remove('printable');
            };
        }
       
    });
}

