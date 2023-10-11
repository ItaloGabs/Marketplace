const $acHeader = document.querySelectorAll(".accordion-header");
console.log($acHeader)

Array.from($acHeader).forEach($el => {
  $el.addEventListener("click",toggleAccordion);
})

function toggleAccordion() {
    const $acc = document.querySelectorAll(".accordion");
    let i;
    for (i = 0; i < $acc.length; i++) {
      $acc[i].classList.toggle("active");
    }
}

// function resetAccordion() {

// }
