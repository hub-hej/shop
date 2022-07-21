const numbers = document.querySelectorAll('.tile-product .number');
numbers.forEach((number) => {
    number.addEventListener('click', (e) => {
        const plus = number.querySelector('.plus');
        const minus = number.querySelector('.minus');
        const input = number.querySelector('input');

        if (e.target == plus) {
            input.value = parseInt(input.value) + 1;
        } else if (e.target == minus) {
            input.value = parseInt(input.value) - 1;
        }
            if (input.value < 10) {
                input.value++;
            } else{
                input.value = 11;
            }

            if (input.value > 0){
                input.value--;
            } else {
                input.value = 0;
            }
    })
});

/*function increment(target) {
    const plus = target;
    const input = plus.previousElementSibling;
    input.value = parseInt(input.value) + 1;
 }
 function decrement(target) {
  const minus = target;
  const input = minus.nextElementSibling;
  input.value = parseInt(input.value) -  1;
 }
 */
