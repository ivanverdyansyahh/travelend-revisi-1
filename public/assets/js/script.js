const navbar = document.querySelector('.navbar');
const minus = document.querySelector('.minus');
const number = document.querySelector('.number');
const plus = document.querySelector('.plus');
const start_price = document.querySelector('.price-count').textContent;
const price = document.querySelector('.result-number');
const title = document.querySelector('title').textContent;


// window.addEventListener('scroll', function() {
//     navbar.classList.toggle('scroll', window.scrollY > 50);
// });

let ticket = 1;

plus.addEventListener('click', function() {
    ticket++;
    let count_ticket = ( ticket < 10 ) ? "0" + ticket : ticket;
    number.innerHTML = count_ticket;
    let result_price = parseInt(price.textContent) + parseInt(start_price);
    price.innerHTML = result_price;
});

minus.addEventListener('click', function() {
    if( ticket > 1 ) {
        ticket--;
        let count_ticket = ( ticket < 10 ) ? "0" + ticket : ticket;
        number.innerHTML = count_ticket;
        let result_price = parseInt(price.textContent) - parseInt(start_price);
        price.innerHTML = result_price;
    }
});