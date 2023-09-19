<!DOCTYPE html>
<html lang="<?php echo get_locale(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarketPlace Idigital</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/style.css" type="text/css" media="all">
    <?php wp_head(); ?>
    
</head>
<body>
<header class="header">
	<nav class="nav-bar default-centralize">
    <h1>LOGO</h1>
    <div class="nav-links">
      <ul class="onglets">
        <li class="nav-list">
          <a class="link active-nav-bar" href="">Inicio</a>
        </li>
        <li class="nav-list">
          <a class="link" href="">Novidade</a>
        </li>
        <li class="nav-list">
          <a class="link" href="">Loja</a>
        </li>
        <div class="icons-nav-bar">
          <div class="profile-icon-user">
            <svg
            class="bold-duotone-users-user-circle"
            width="42"
            height="42"
            viewBox="0 0 42 42"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
            opacity="0.5"
            d="M38.5 21C38.5 30.6649 30.6649 38.5 21 38.5C11.335 38.5 3.5 30.6649 3.5 21C3.5 11.335 11.335 3.5 21 3.5C30.6649 3.5 38.5 11.335 38.5 21Z"
            fill="#1C274C"
            />
            <path
            d="M29.4122 33.2696C27.0196 34.9132 24.1222 35.875 21 35.875C17.8778 35.875 14.9804 34.913 12.5877 33.2694C11.531 32.5435 11.0794 31.1609 11.6938 30.0356C12.9675 27.7029 15.592 26.25 21 26.25C26.408 26.25 29.0325 27.703 30.3061 30.0356C30.9206 31.1609 30.4689 32.5437 29.4122 33.2696Z"
            fill="#1C274C"
            />
            <path
            d="M21 21C23.8996 21 26.25 18.6496 26.25 15.75C26.25 12.8505 23.8996 10.5 21 10.5C18.1006 10.5 15.7501 12.8505 15.7501 15.75C15.7501 18.6496 18.1006 21 21 21Z"
            fill="#1C274C"
            />
          </svg>
        </div>
  
        <div class="cart-background">
          <svg
            class="bold-duotone-shopping-ecommerce-cart-large"
            width="42"
            height="42"
            viewBox="0 0 42 42"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M2.2552 4.83494C2.48444 4.14726 3.22773 3.77561 3.91539 4.00485L4.379 4.15937C4.4021 4.16707 4.42512 4.17475 4.44808 4.1824C5.54422 4.54775 6.47055 4.85648 7.19895 5.19534C7.97322 5.55554 8.64503 6.00195 9.15446 6.70872C9.66386 7.41551 9.87493 8.19401 9.97179 9.04245C10.0629 9.84062 10.0629 10.8171 10.0628 11.9725V16.625C10.0628 19.137 10.0656 20.8889 10.2434 22.2108C10.416 23.4948 10.7318 24.1749 11.2161 24.6593C11.7005 25.1435 12.3805 25.4594 13.6646 25.6319C14.9864 25.8097 16.7384 25.8125 19.2503 25.8125H31.5003C32.2252 25.8125 32.8128 26.4002 32.8128 27.125C32.8128 27.8499 32.2252 28.4375 31.5003 28.4375H19.1543C16.761 28.4375 14.832 28.4375 13.3148 28.2336C11.7396 28.0219 10.4133 27.5688 9.35996 26.5153C8.30662 25.462 7.85354 24.1357 7.64178 22.5605C7.4378 21.0434 7.43781 19.1144 7.43785 16.721V12.0453C7.43785 10.7976 7.43587 9.97196 7.36373 9.34021C7.29545 8.74197 7.17619 8.45342 7.02495 8.24359C6.87372 8.03377 6.63768 7.82937 6.09175 7.57541C5.51521 7.3072 4.73261 7.04423 3.54889 6.64967L3.0853 6.49513C2.39764 6.26592 2.02599 5.52262 2.2552 4.83494Z"
            fill="white"
            />
            <path
            opacity="0.5"
            d="M10.054 10.5C10.0626 10.9535 10.0626 11.4442 10.0626 11.9725L10.0626 16.625C10.0626 19.137 10.0654 20.8889 10.2431 22.2107C10.269 22.4037 10.2982 22.5829 10.3307 22.7501H28.0387C29.7176 22.7501 30.5571 22.7501 31.2146 22.3164C31.872 21.8829 32.2028 21.1114 32.8641 19.568L33.6142 17.818C35.0308 14.5126 35.739 12.8599 34.961 11.68C34.1829 10.5 32.3848 10.5 28.7887 10.5H10.054Z"
            fill="white"
            />
            <path
            d="M12.6875 15.75C12.6875 15.0251 13.2751 14.4375 14 14.4375H19.25C19.9749 14.4375 20.5625 15.0251 20.5625 15.75C20.5625 16.4749 19.9749 17.0625 19.25 17.0625H14C13.2751 17.0625 12.6875 16.4749 12.6875 15.75Z"
            fill="white"
            />
            <path
            d="M13.125 31.5C14.5748 31.5 15.75 32.6753 15.75 34.125C15.75 35.5747 14.5748 36.75 13.125 36.75C11.6752 36.75 10.5 35.5747 10.5 34.125C10.5 32.6753 11.6752 31.5 13.125 31.5Z"
            fill="white"
            />
            <path
            d="M31.5 34.1251C31.5 32.6752 30.3247 31.5001 28.875 31.5001C27.4253 31.5001 26.25 32.6752 26.25 34.1251C26.25 35.5748 27.4253 36.7501 28.875 36.7501C30.3247 36.7501 31.5 35.5748 31.5 34.1251Z"
            fill="white"
            />
          </svg>
          <div class="carrinho">Carrinho</div>
        </div>
      </ul>
    </div> 
    <div class="nav-bar-mobile">
      <div class="profile-icon-user-mobile">
        <svg
        class="bold-duotone-users-user-circle"
        width="42"
        height="42"
        viewBox="0 0 42 42"
        fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
        opacity="0.5"
        d="M38.5 21C38.5 30.6649 30.6649 38.5 21 38.5C11.335 38.5 3.5 30.6649 3.5 21C3.5 11.335 11.335 3.5 21 3.5C30.6649 3.5 38.5 11.335 38.5 21Z"
        fill="#1C274C"
        />
        <path
        d="M29.4122 33.2696C27.0196 34.9132 24.1222 35.875 21 35.875C17.8778 35.875 14.9804 34.913 12.5877 33.2694C11.531 32.5435 11.0794 31.1609 11.6938 30.0356C12.9675 27.7029 15.592 26.25 21 26.25C26.408 26.25 29.0325 27.703 30.3061 30.0356C30.9206 31.1609 30.4689 32.5437 29.4122 33.2696Z"
        fill="#1C274C"
        />
        <path
        d="M21 21C23.8996 21 26.25 18.6496 26.25 15.75C26.25 12.8505 23.8996 10.5 21 10.5C18.1006 10.5 15.7501 12.8505 15.7501 15.75C15.7501 18.6496 18.1006 21 21 21Z"
        fill="#1C274C"
        />
        </svg>
      </div>
      <a class="burger-menu" onclick="openBurgerMenu()">
        <div class="burger-line"></div>
        <div class="burger-line"></div>
        <div class="burger-line"></div>
      </a>
    </div>

	</nav>


</header>

<script>
  function openBurgerMenu() {
    let burgerMenu = document.querySelector(".onglets");
    burgerMenu.classList.toggle("active");
  }
</script>
