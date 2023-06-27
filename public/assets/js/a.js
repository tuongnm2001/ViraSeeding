console.log('hello');

const menuAccordionItem = document.querySelector('.menu-item.menu-accordion');

menuAccordionItem.addEventListener('click', function () {
    if (!menuAccordionItem.classList.contains('show')) {
        menuAccordionItem.classList.add('show');
    } else {
        menuAccordionItem.classList.remove('show');
    }
});

