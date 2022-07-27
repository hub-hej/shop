const numbers = document.querySelectorAll('.tile-product .number');
numbers.forEach((number) => {
    number.addEventListener('click', (e) => {
        const plus = number.querySelector('.plus');
        const minus = number.querySelector('.minus');
        const input = number.querySelector('input');

        if (e.target == plus && input.value < 10) {
            input.value = parseInt(input.value) + 1;
        } else if (e.target == minus && input.value > 0) {
            input.value = parseInt(input.value) - 1;
        }
    })
})
const number_cart = document.querySelectorAll('.tile-light .number-light');
number_cart.forEach((numbers) => {
    numbers.addEventListener('click', (e) => {
        const plus_light = numbers.querySelector('.plus-light');
        const minus_light = numbers.querySelector('.minus-light');
        const input = numbers.querySelector('input');

        if (e.target == plus_light && input.value < 10) {
            input.value = parseInt(input.value) + 1;
        } else if (e.target == minus_light && input.value > 0) {
            input.value = parseInt(input.value) - 1;
        }
    })
});