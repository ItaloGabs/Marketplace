<?php /* Template Name: Checkout */ ?>
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
<main class="checkout-content">
  <div class="step-area">
    <div id="steps">
      <div class="step" data-desc="Carrinho">1</div>
      <div class="step active" data-desc="Pagamento">2</div>
      <div class="step" data-desc="Pedido finalizado">3</div>
    </div>
  </div>
  <div class="payment-area default-centralize">
    <section class="user-data-area">
      <div class="address-area box-padding">
        <div class="title-box">
          <h1 class="user-data-title">Seus dados e endereço</h1>
        </div>
        <div class="info-box">
          <p class="user-data-info">Seu Nome: Faiska</p>
          <p class="user-data-info">Email: faiskamscr@email.com</p>
          <p class="user-data-info">Endereço: Rua dali, 1, centro</p>
          <p class="user-data-info">Cidade/Estado: Satuba/AL</p>
          <p class="user-data-info">CEP: 123456987</p>
        </div>
        <div class="link-option-box">
          <a href="#">Usar Este</a>
        </div>
        <!-- <svg class="open-box-button" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22.1663 8.16667L13.9997 15.1667L5.83301 8.16667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M22.1663 12.8333L13.9997 19.8333L5.83301 12.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> -->
      </div>
      <div class="add-address-area box-padding">
        <div class="add-address-selection">
          <h1 class="user-data-title">Novo endereço?</h1>
          <svg class="open-box-button" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.1663 8.16667L13.9997 15.1667L5.83301 8.16667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M22.1663 12.8333L13.9997 19.8333L5.83301 12.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="add-address-form">
          <div class="address">
            <div class="form-input">
              <label class="input-label" for="endereco">Endereço*</label>
              <input type="text" id="endereco">
            </div>
            
            <div class="form-input">
              <label class="input-label" for="cep">Cep*</label>
              <input type="text" id="cep">
            </div>
          </div>

          <div class="form-input">
            <label class="input-label" for="complemente">Complemento*</label>
            <input type="text" id="complemento">
          </div>

          <div class="state">
            <div class="form-input">
              <label class="input-label" for="estado">Estado*</label>
              <input type="text" id="estado">
            </div>

            <div class="form-input">
              <label class="input-label" for="cidade">Cidade*</label>
              <input type="text" id="cidade">
            </div>
          </div>
        </div>
      </div>
      <div class="payment-type-area box-padding">
        <div class="payment-type-text">
          <h1 class="user-data-title">Pagamento</h1>
          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/image-10.png" alt="" srcset="">
        </div>
        <div class="payment-type-select">
          <select name="payment-type" id="payment">
            <option selected disabled>Selecione a forma de pagamento</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
        </div>
      </div>
    </section>
    <section class="checkout-box">
      <div class="checkout-list">
        <div class="checkout-product">
          <div class="checkout-product-image">
            <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg">
          </div>
          <div class="checkout-product-details">
            <div class="checkout-product-detail-text">
              <h1 class="checkout-product-title">Dingo Dog Bones</h1>
              <p class="checkout-product-description">The best dog bones of all time. Holy crap. Your dog will be begging for these things! I got curious once and ate one myself. I'm a fan.</p>
            </div>
          </div>
        </div>
        <div class="checkout-product">
          <div class="checkout-product-image">
            <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg">
          </div>
          <div class="checkout-product-details">
            <div class="checkout-product-detail-text">
              <h1 class="checkout-product-title">Dingo Dog Bones</h1>
              <p class="checkout-product-description">The best dog bones of all time. Holy crap. Your dog will be begging for these things! I got curious once and ate one myself. I'm a fan.</p>
            </div>
          </div>
        </div>
        <div class="checkout-product">
          <div class="checkout-product-image">
            <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg">
          </div>
          <div class="checkout-product-details">
            <div class="checkout-product-detail-text">
              <h1 class="checkout-product-title">Dingo Dog Bones</h1>
              <p class="checkout-product-description">The best dog bones of all time. Holy crap. Your dog will be begging for these things! I got curious once and ate one myself. I'm a fan.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="finish-order-area">
        <div class="order-value">
          <h1 class="order-value-text">Total:</h1>
          <p class="order-value-price">XX</p>
        </div>
        <div class="finish-order-button">
          <button class="finish-button">Finalizar Pedido</button>
      </div>
    </section>
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
<script>
  $(document).ready( function() {
    $('.step').each(function(index, element) {
      // element == this
      $(element).not('.active').addClass('done');
      if($(this).is('.active')) {
        return false;
      }
    });
  });
</script>
<script>

</script>
<?php get_footer(); ?>