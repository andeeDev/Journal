(function(window, document) {
    const typeOfPage = document.querySelector(".type-of-page");
    const menu = typeOfPage.querySelector(".menu");
    const li = typeOfPage.querySelectorAll("li");
    const a = menu.querySelectorAll("a");
    const typeOfDisplayedPage =  typeOfPage.querySelector(".type-of-page__menu");

    a.forEach(function(l) {
        l.addEventListener("click", function() {
            if ( typeOfDisplayedPage.text !== l.text ){
                typeOfDisplayedPage.textContent = l.text;
            }
        });
    });


    //let f = ul.getAttribute("aria-hidden");
    console.log(li[1].getAttribute("class"));

    console.log(typeOfDisplayedPage.text);
}(window,document));

