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
<div class="responsive-container">
		<div class="grid">
			<div class="grid-column">
								<a class="product" href="#">
					<div class="product-image">
						<img src="https://assets.codepen.io/285131/cosmonaut.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Cosmonaut</h2>
							<p class="product-price">$ 10</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>

				<a class="product" href="#">
					<div class="product-image">
						<img src="https://assets.codepen.io/285131/hand-drawn-monster-milkshake.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Monster Milkshake</h2>
							<p class="product-price">$ 9</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>
				<a class="product" href="#">
					<div class="product-image">
							<img src="https://assets.codepen.io/285131/pink-pastel-juicy-banana.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Juicy Banana</h2>
							<p class="product-price">$ 9</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>
			</div>
			<div class="grid-column">
				<a class="product" href="#">
					<div class="product-image">
						<img src="https://assets.codepen.io/285131/palmistry.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Palmistry</h2>
							<p class="product-price">$ 9</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>
				<a class="product" href="#">
					<div class="product-image"> 
						<img src="https://assets.codepen.io/285131/fish-gas-mark.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Fish With Gas Mask</h2>
							<p class="product-price">$ 12</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>
				<a class="product" href="#">
					<div class="product-image">
						<img src="https://assets.codepen.io/285131/mysterious-gangster-character-style.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Gangster</h2>
							<p class="product-price">$ 5</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>
			</div>
			<div class="grid-column">
				<a class="product" href="#">
					<div class="product-image">
						<img src="https://assets.codepen.io/285131/adventure.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Adventure in a Bottle</h2>
							<p class="product-price">$ 15</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>
				<a class="product" href="#">
					<div class="product-image">
						<img src="https://assets.codepen.io/285131/illustration-hand-with-cigarette-icon.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Smoking Ain't Cool</h2>
							<p class="product-price">$ 5</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>
			</div>
		</div>
	</div>
</main>
<style>
.header,.conteudo{
    display: none;
}
</style>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/loading.js"></script>
<script>
    $( window ).on("load", function() { // Garante que todo o site seja carregado
        // $('#status').fadeOut(); // primeiro desaparecerá a animação de carregamento
        // $('.body').delay(350).fadeOut('slow'); // desaparecerá o DIV branco que cobre o site.
        // $(body).removeClass('style-14'); // desaparecerá o DIV branco que cobre o site.
        // $(body).delay(350).css({'overflow':'visible'});
        // Simula um tempo de "carregamento" (3 segundos neste exemplo)
        setTimeout(function() {
            // Esconde a div de loading e mostra a div de conteúdo após o "carregamento"
            $(".body").delay(550).fadeOut('slow');
            $(".header").delay(350).fadeIn();
            $(".conteudo").delay(350).fadeIn();
        }, 10000);
    })
</script>
<?php get_footer(); ?>