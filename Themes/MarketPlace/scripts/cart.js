/* Set rates + misc */
var taxRate = 0.05;
var shippingRate = 15.00; 
var fadeTime = 300;


/* Assign actions */
$('.product-quantity').change( function() {
  // updateQuantity(this);
  console.log('mudou');
});

$('.remove-product').click( function() {
  removeItem(this);
});


/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;
  
  /* Sum up row totals */
  $('.product').each(function () {
    let valorItem = parseFloat($(this).children('.product-actions').children('.action-value').children('p').text());
    let quantidadeItem = parseInt($(this).children('.product-details').children('.input-quantity').children('input').val());
    subtotal += (valorItem * quantidadeItem);
    
  });
  /* Calculate totals */
  var tax = subtotal * taxRate;
  // var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax;
  
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    // $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    // $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent().parent();
  var price = parseFloat(productRow.children('.product-actions').children('.action-value').children('p').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
  
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}


/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}

$('.decrease').click( function () {
  var productRow = $(this).parent().parent().parent();
  decreaseValue(productRow);
});

$('.increase').click( function () {
  var productRow = $(this).parent().parent().parent();
  increaseValue(productRow);
});

/* Altera o valor do input da lista de itens */
function increaseValue(productRow) {
  var input = productRow.children('.product-details').children('.input-quantity').children('input');
  var value = parseInt(input.val(), 10);
  
  value = isNaN(value) ? 0 : value;
  value++;
  input.val(value);

  recalculateCart();
}

function decreaseValue(productRow) {
  var input = productRow.children('.product-details').children('.input-quantity').children('input');
  var value = parseInt(input.val(), 10);

  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  input.val(value);

  recalculateCart();
}