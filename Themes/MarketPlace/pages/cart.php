<?php /* Template Name: Cart */ ?>
<?php get_header(); ?>
<section class="body">
    <div class="container"> 
    <div class="shadow"></div>
    <div class="squish">
        <h1 id="text-3d-loading" data-3d-text> </h1>
    </div>
    <div class="particles">
        <div class="floor"></div>
        <div class="air"></div>
    </div>
    </div> 
 </section>
 <main class="conteudo">
    <div class="shopping-cart">

    <div class="column-labels">
        <label class="product-image">Image</label>
        <label class="product-details">Product</label>
        <label class="product-quantity">Quantity</label>
        <label class="product-price">Price</label>
        <label class="product-removal">Remove</label>
        <label class="product-line-price">Total</label>
    </div>

    <div class="product">
        <div class="product-image">
        <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg">
        </div>
        <div class="product-details">
        <div class="product-title">Dingo Dog Bones</div>
        <p class="product-description">The best dog bones of all time. Holy crap. Your dog will be begging for these things! I got curious once and ate one myself. I'm a fan.</p>
        </div>
        <div class="product-quantity">
            <input type="number" value="2" min="1">
        </div>
        <div class="product-price">12.99</div>
        <div class="product-removal">
            <button class="remove-product">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="32" viewBox="0 0 35 32" fill="none">
                    <path d="M14.7432 8C15.1466 6.83481 16.2351 6 17.5146 6C18.7941 6 19.8826 6.83481 20.286 8" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M25.8403 10H9.18799" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M24.2079 12.5L23.7573 19.3991C23.5839 22.054 23.4972 23.3815 22.6499 24.1907C21.8026 25 20.4994 25 17.8931 25H17.1356C14.5292 25 13.226 25 12.3787 24.1907C11.5314 23.3815 11.4447 22.054 11.2713 19.3991L10.8208 12.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M15.0654 15L15.5552 20" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M19.9629 15L19.4731 20" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
        <div class="product-line-price">25.98</div>
    </div>

    <div class="product">
        <div class="product-image">
        <img src="https://s.cdpn.io/3/large-NutroNaturalChoiceAdultLambMealandRiceDryDogFood.png">
        </div>
        <div class="product-details">
        <div class="product-title">Nutro™ Adult Lamb and Rice Dog Food</div>
        <p class="product-description">Who doesn't like lamb and rice? We've all hit the halal cart at 3am while quasi-blackout after a night of binge drinking in Manhattan. Now it's your dog's turn!</p>
        </div>
        <div class="product-quantity">
            <input type="number" value="1" min="1">
        </div>
        <div class="product-price">45.99</div>
        <div class="product-removal">
            <button class="remove-product">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="32" viewBox="0 0 35 32" fill="none">
                    <path d="M14.7432 8C15.1466 6.83481 16.2351 6 17.5146 6C18.7941 6 19.8826 6.83481 20.286 8" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M25.8403 10H9.18799" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M24.2079 12.5L23.7573 19.3991C23.5839 22.054 23.4972 23.3815 22.6499 24.1907C21.8026 25 20.4994 25 17.8931 25H17.1356C14.5292 25 13.226 25 12.3787 24.1907C11.5314 23.3815 11.4447 22.054 11.2713 19.3991L10.8208 12.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M15.0654 15L15.5552 20" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M19.9629 15L19.4731 20" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
        <div class="product-line-price">45.99</div>
    </div>

    <div class="totals">
        <div class="totals-item">
        <label>Subtotal</label>
        <div class="totals-value" id="cart-subtotal">71.97</div>
        </div>
        <div class="totals-item">
        <label>Tax (5%)</label>
        <div class="totals-value" id="cart-tax">3.60</div>
        </div>
        <div class="totals-item">
        <label>Shipping</label>
        <div class="totals-value" id="cart-shipping">15.00</div>
        </div>
        <div class="totals-item totals-item-total">
        <label>Grand Total</label>
        <div class="totals-value" id="cart-total">90.57</div>
        </div>
    </div>
        
        <button class="checkout">Checkout</button>

    </div>
 </main>
<style>
.header,.conteudo{
    display: none;
}
</style>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/cart.js"></script>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/loading.js"></script>
<script>
// Load website
$( window ).on("load", function() { // Garante que todo o site seja carregado
        setTimeout(function() {
            // Esconde a div de loading e mostra a div de conteúdo após o "carregamento"
            $(".body").delay(550).fadeOut('slow');
            $(".header").delay(350).fadeIn();
            $(".conteudo").delay(350).fadeIn();
        }, 3000);
    })

</script>
<?php get_footer(); ?>