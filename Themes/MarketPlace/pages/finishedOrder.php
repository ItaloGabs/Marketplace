<?php /* Template Name: FinishedOrder */ ?>
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
  <div class="order-content">

    <div class="step-area">
      <div class="step">
        <div class="step-rounded">
          <p>1</p>
        </div>
        <p>Carrinho</p>
      </div>
      <div class="step">
        <div class="step-rounded">
          <p>2</p>
        </div>
        <p>Pagamento</p>
      </div>
      <div class="step active">
        <div class="step-rounded">
          <p>3</p>
        </div>
        <p>Pedido Finalizado</p>
      </div>
    </div>

    <div class="payment-area">
      <section class="order-box">

          <div class="order-product">
            <div class="order-product-details">
              <div class="info-order-header">
                <div>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/image-12.png">
                </div>
                <h4>Obrigado pelo seu pedido!</h4>
                <h5>Seu pedido foi enviado ao seu email: teste@gmail.com</h5>
              </div>
              <div class="info-order-date">
                <h4>Data da transação</h4>
                <h5>Quarta, Novembro 17, 2023</h5>
              </div>
            </div>
          </div>

          <div class="order-product">
            <div class="order-product-details">
              <h4 class="none-margin-bottom">Acompanhar Pedido</h4>
            </div>
          </div>

          <div class="order-product">
            <div class="order-product-image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/image-2.png">
            </div>
            <div class="order-product-details">
              <p class="order-product-title">Where does it come from?</p>
              <div class="order-product-description-order">
                <p class="order-product-description">Descrição</p>
                <p>XX</p>
              </div>
              <p>1X</p>
            </div>
          </div>

          <div class="order-product">
            <div class="order-product-image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/image-2.png">
            </div>
            <div class="order-product-details">
              <p class="order-product-title">Where does it come from?</p>
              <div class="order-product-description-order">
                <p class="order-product-description">Descrição</p>
                <p>XX</p>
              </div>
              <p>1X</p>
            </div>
          </div>

          <div class="order-product">
            <div class="order-product-image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/image-2.png">
            </div>
            <div class="order-product-details">
              <p class="order-product-title">Where does it come from?</p>
              <div class="order-product-description-order">
                <p class="order-product-description">Descrição</p>
                <p>XX</p>
              </div>
              <p>1X</p>
            </div>
          </div>

          <div class="order-total">
            <div class="border">
              <div class="order-product-description-order">
                <p>Total:</p>
                <p>XX</p>
              </div>
              <div class="order-payment-voucher">
                <p>Imprimir comprovante</p>
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.5475 2.33331H8.45252C7.1005 2.33331 6.42449 2.33331 5.87929 2.52302C4.84542 2.88277 4.03373 3.71837 3.68427 4.78268C3.5 5.34395 3.5 6.03987 3.5 7.43172V23.7699C3.5 24.7711 4.64917 25.3024 5.37612 24.6372C5.8032 24.2463 6.4468 24.2463 6.87388 24.6372L7.4375 25.153C8.18602 25.8379 9.31398 25.8379 10.0625 25.153C10.811 24.468 11.939 24.468 12.6875 25.153C13.436 25.8379 14.564 25.8379 15.3125 25.153C16.061 24.468 17.189 24.468 17.9375 25.153C18.686 25.8379 19.814 25.8379 20.5625 25.153L21.1261 24.6372C21.5532 24.2463 22.1968 24.2463 22.6239 24.6372C23.3508 25.3024 24.5 24.7711 24.5 23.7699V7.43172C24.5 6.03987 24.5 5.34395 24.3157 4.78268C23.9662 3.71837 23.1546 2.88277 22.1207 2.52302C21.5755 2.33331 20.8995 2.33331 19.5475 2.33331Z" stroke="#1C274C" stroke-width="1.5"/>
                  <path d="M12.25 12.8333H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                  <path d="M8.16699 12.8333H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                  <path d="M8.16699 8.75H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                  <path d="M8.16699 16.9167H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                  <path d="M12.25 8.75H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                  <path d="M12.25 16.9167H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
              </div>
            </div>
            
          </div>

        <div class="finish-order-area">
          <div class="finish-order-button">
            <button class="finish-button">Continue comprando</button>
          </div>
        </div>
      </section>
    </div>

  </div>
</main>
<style>
  .header {
    display: none;
  }
</style>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/loading.js"></script>
<script>
  // Carregamento da tela
  $(document).ready(() => {
    // Esconde os elementos da página
    $(".header").hide();
    $(".order-content").hide();
    $(".conteudo").hide();
    $(".footer-area").hide();

    setTimeout(function() {
      // Mostra os elementos da página
      $(".header").show();
      $(".order-content").show();
      $(".conteudo").show();
      $(".footer-area").show();

      // Esconde o carregamento da página
      $(".body").hide();
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