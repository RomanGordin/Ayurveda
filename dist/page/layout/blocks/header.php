<?
   $_SERVER["dropdown"] = [
      'Иркутск',
      'Ангарск',
   ]; // dropdown елементы

   $_SERVER["dropdown_icon"] = '/img/icon/LocationMarkerOutline.svg'; // иконка для dropdown 

   $_SERVER["header_logo"] = '/img/header/logo.svg'; // иконка для dropdown 

?>


<header>
   <div class="header__top">
      <div class="container container_position">
         <div class="dropdown">
            <div class="dropdown__title">
               <img class="title_icon" src="<?echo ($_SERVER['dropdown_icon']);?>" alt="">
               <p class="title_text">Ваш город: <b class="title_change"> Иркутск</b></p>
            </div>

            <div class="dropdown__items">
               <? $i = 0; ?>
               <? foreach($_SERVER["dropdown"] as $item){ ?>
               <div class="item_change" data-item="item<? echo $i ?>">
                  <? echo $item ?>
               </div>
               <?$i++;?>
               <? } ?>

            </div>
         </div>

         <div class="top__mobile">
            <div id="nav-icon3" class="d-block d-lg-none">
               <span></span>
               <span></span>
               <span></span>
            </div>
         </div>
      </div>
   </div>

   <div class="mobile_wrapper">
      <div class="header__main">
         <div class="container">
            <div class="main_wrapper d-flex">
               <div class="main__logo">
                  <img class="logo_image" src="<?echo ($_SERVER['header_logo']);?>" alt="">
               </div>
               <div class="main__search">
                  <input type="text" name="search" placeholder="Поиск по каталогу...">
               </div>

               <div class="main__action">
                  <button class="action_item">
                     <img src="/img/icon/ShoppingCartOutline.svg" alt="">
                     <p class="action_text">Корзина</p>
                     <div class="action_counter" data-counter="0"></div>
                  </button>
                  <button class="action_item">
                     <img src="/img/icon/HeartOutline.svg" alt="">
                     <p class="action_text">Избранное</p>
                     <div class="action_counter" data-counter="0"></div>
                  </button>
                  <button class="action_item">
                     <img src="/img/icon/UserCircleOutline.svg" alt="">
                     <p class="action_text">Войти</p>
                  </button>
               </div>
            </div>
         </div>
      </div>

      <div class="header__navigation">
         <div class="container d-block d-lg-flex justify-content-between navigation_overflow">
            <div class="navigation__dropdown">
               <button class="dropdown_title">
                  <div class="title_liner">
                     <sapn data_line="1"></sapn>
                     <sapn data_line="2"></sapn>
                     <sapn data_line="3"></sapn>
                  </div>
                  КАТАЛОГ ТОВАРОВ
               </button>
               <div class="dropdawn">

               </div>
            </div>
            <div class="navigation__menu">
               <nav class="menu__wrapper">
                  <ul class="menu__items">
                     <li class="item">
                        <a href="#qweqwe">АЮРВЕДА</a>
                     </li>
                     <li class="item">
                        <a href="#qweqwe">О КОМПАНИИ</a>
                     </li>
                     <li class="item">
                        <a href="#qweqwe">ПРОИЗВОДИТЕЛИ</a>
                     </li>
                     <li class="item">
                        <a href="#qweqwe">ОПЛАТА</a>
                     </li>
                     <li class="item">
                        <a href="#qweqwe">ДОСТАВКА</a>
                     </li>
                     <li class="item">
                        <a href="#qweqwe">КОНТАКТЫ</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</header>




<style>
   header .header__top {
      min-height: 50px;
      z-index: 7;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #3D946A;
      position: relative;
   }

   header .container_position {
      position: absolute;
      height: 100%;
      display: flex;
      align-items: center;
   }

   header .dropdown {
      cursor: pointer;
      height: 100%;
      display: flex;
      align-items: center;
      position: relative;
   }

   header .dropdown:hover .dropdown__items {
      display: block;
   }

   header .title_icon {
      margin-right: 5px;
   }

   header .logo_image {
      max-width: 100%;
      min-width: 290px;
      width: 100%;
   }


   header .dropdown__title {
      display: inline-flex;
      align-items: center;
   }

   header .title_text {
      font-size: 16px;
      line-height: 19px;
      align-items: center;
      color: #FFFFFF;
      margin-bottom: 0;
   }

   header .dropdown__items {
      position: absolute;
      z-index: 5;
      top: 100%;
      width: 100%;
      display: none;
   }

   header .item_change {
      padding: 5px 10px;
      border: 1px solid white;
      border-bottom: none;
      background-color: #3D946A;
      color: white;
      font-size: 16px;
   }

   header .header__main {
      padding: 20px 0;
   }

   header .main__search {
      max-width: 360px;
      width: 100%;
      position: relative;
      display: flex;
      align-items: center;
      margin-left: 50px;
   }

   header .main__search::before {
      content: url('/img/icon/search.svg');
      display: block;
      position: absolute;
      right: 12px;
      font-size: 0;
   }

   header [name="search"] {
      width: 100%;
      background: #FAFAFA;
      border: 1px solid #8DD4B4;
      border-radius: 10px;
      padding: 11px 45px 11px 20px;
      color: #606060;
      font-weight: 500;
   }

   header [name="search"]::placeholder {
      color: #768492;
   }

   header .main__action {
      width: 100%;
      list-style: none;
      display: flex;
      justify-content: flex-end;
      margin-left: 20px;
   }

   header .action_text {
      font-weight: 500;
      font-size: 16px;
      line-height: 19px;
      color: #6B7786;
      margin-bottom: 0;
      margin: 0 5px;
   }

   header .action_counter::before {
      content: attr(data-counter);
      display: flex;
      position: relative;
      align-items: center;
      justify-content: center;
      width: 25px;
      height: 25px;
      border-radius: 50%;
      font-weight: bold;
      font-size: 14px;
      color: #FAFAFA;
      background-color: #3D946A;
   }

   header .action_item {
      display: flex;
      align-items: center;
      margin-right: 22px;
      padding: 0;
      border: none;
      background-color: transparent;
   }

   header .action_item:last-child {
      margin-right: 0;
   }

   header .action_item:last-child .action_text {
      margin-right: 0;
   }

   .header__navigation .dropdown_title {
      padding: 15px 20px 14px 24px;
      background-color: #E05014;
      border-radius: 10px;
      border: none;
      display: flex;
      align-items: center;
      font-weight: bold;
      font-size: 16px;
      color: #FFFFFF;
   }

   .header__navigation .title_liner {
      width: 19px;
      margin-right: 16px;
   }

   .header__navigation [data_line] {
      background-color: #fff;
      display: block;
      max-width: 19px;
      margin: 4px 0;
      height: 2px;
   }

   .header__navigation [data_line="1"] {
      margin-top: 0;
   }

   .header__navigation [data_line="3"] {
      margin-bottom: 0;
   }

   .header__navigation .menu__wrapper {
      height: 100%;
   }

   .header__navigation .menu__items {
      padding: 0;
      margin: 0;
      list-style: none;
      display: flex;
      align-items: center;
      height: 100%;
      margin: 0 -22px;
   }

   .header__navigation .item {
      height: 100%;
      margin: 0 22px;
   }

   .header__navigation .item a {
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      font-size: 16px;
      color: #2D2D2D;
      position: relative;
      text-decoration: none;
   }

   .header__navigation .item a::before {
      content: '';
      display: block;
      bottom: -20px;
      transition: bottom 0.2s;
   }

   .header__navigation .item a.active::before {
      content: '';
      display: block;
      position: absolute;
      bottom: 10px;
      width: 60%;
      background-color: #E05014;
      height: 3px;
   }

   .header__navigation .navigation_overflow {
      overflow: hidden;
   }

   /* menu  */

   #nav-icon3 {
      width: 20px;
      height: 16px;
      -webkit-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
      transform: rotate(0deg);
      -webkit-transition: .5s ease-in-out;
      -o-transition: .5s ease-in-out;
      transition: .5s ease-in-out;
      cursor: pointer;
      right: 15px;
      top: 20px;
   }

   #nav-icon3 span {
      display: block;
      height: 2px;
      margin-top: 5px;
      width: 100%;
      background: white;
      opacity: 1;
      left: 0;
      -webkit-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
      transform: rotate(0deg);
      -webkit-transition: .25s ease-in-out;
      -o-transition: .25s ease-in-out;
      transition: .25s ease-in-out;
   }

   #nav-icon3 span:first-child {
      margin-top: 0;
   }

   #nav-icon3 span:nth-child(1) {
      top: 0px;
   }

   #nav-icon3 span:nth-child(2),
   #nav-icon3 span:nth-child(3) {
      top: 2px;
   }

   #nav-icon3 span:nth-child(4) {
      top: 36px;
   }

   #nav-icon3.open span:nth-child(1) {
      top: 15px;
      width: 0%;
      left: 50%;
   }

   #nav-icon3.open span:nth-child(2) {
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
   }

   #nav-icon3.open span:nth-child(3) {
      -webkit-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
      transform: rotate(-45deg);
   }

   #nav-icon3.open span:nth-child(4) {
      top: 18px;
      width: 0%;
      left: 50%;
   }

   #nav-icon3.open span {
      position: absolute;
   }

   .overflowBlock {
      overflow: hidden;
   }

   /* media  */

   @media only screen and (max-width : 1200px) {
      .header__navigation .item a {
         font-size: 15px;
      }

      .header__navigation .menu__items {
         margin: 0 -10px;
      }

      .header__navigation .item {
         margin: 0 10px;
      }

      .header__navigation .dropdown_title {
         padding: 12px 15px;
         font-size: 15px;
      }

      header .logo_image {
         min-width: 240px;
      }

      header .main__search {
         margin-left: 30px;
      }

      header .action_text {
         font-size: 15px;
      }

      header [name="search"] {
         padding: 7px 40px 7px 15px;
      }

      header .main__search::before {}
   }

   @media only screen and (max-width : 992px) {
      .mobile_wrapper {
         display: none;
         z-index: 6;
         width: 100%;
         background-color: white;
         position: absolute;
         top: 50px;
         overflow-x: hidden;
         height: calc(100% - 50px);
         padding: 0 15px;
         padding-bottom: 60px;
      }

      header .logo_image {
         max-width: 250px;
      }

      header .main__logo {
         text-align: center;
         margin-bottom: 20px;
      }

      header .main_wrapper {
         flex-direction: column;
         align-items: center;
      }

      header .main__search {
         margin: 0;
      }

      header .container_position {
         display: flex;
         justify-content: space-between;
         padding: 0 15px;
      }

      header .main__action {
         flex-wrap: wrap;
         justify-content: center;
         margin-top: 30px;
         margin-left: 0;
      }

      header .action_item {
         margin: 0 15px !important;
         margin-bottom: 10px !important;
      }

      .header__navigation .menu__items {
         display: block;
      }

      .header__navigation .menu__wrapper {
         height: auto;
      }

      .header__navigation .navigation__dropdown {
         display: flex;
         justify-content: center;
         margin-bottom: 20px;
      }

      .header__navigation .item {
         padding: 5px 0;
         margin: 0;
      }

      .header__navigation .item a.active::before {
         bottom: 0;
      }

      .header__navigation .item a {
         display: inline-flex;
      }

      .header__navigation .item {
         display: flex;
         justify-content: center;
      }

      .open-menu {
         display: block;
      }

      .fadeInDown {
         -webkit-animation-name: fadeInDown;
         animation-name: fadeInDown;
         -webkit-animation-duration: 1s;
         animation-duration: 1s;
         -webkit-animation-fill-mode: both;
         animation-fill-mode: both;
      }

      @-webkit-keyframes fadeInDown {
         0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
         }

         100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
         }
      }

      @keyframes fadeInDown {
         0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
         }

         100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
         }
      }

      .fadeOutUp {
         -webkit-animation-name: fadeOutUp;
         animation-name: fadeOutUp;
         -webkit-animation-duration: 1s;
         animation-duration: 1s;
         -webkit-animation-fill-mode: both;
         animation-fill-mode: both;
      }

      @-webkit-keyframes fadeOutUp {
         0% {
            opacity: 1;
         }

         100% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
         }
      }

      @keyframes fadeOutUp {
         0% {
            opacity: 1;
         }

         100% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
         }
      }
   }
</style>

<script>
   // dropdown
   window.addEventListener('DOMContentLoaded', function () {
      document.querySelectorAll('.dropdown').forEach(function (el, i, arr) {
         el.addEventListener('click', function (e) {
            let target = e.target

            if (target.getAttribute('data-item')) {
               el.querySelector('.title_change').textContent = target.textContent
            } else {
               return false
            }
         })
      })
   })
   // dropdown

   // active item menu 

   document.querySelector('.navigation__menu').addEventListener('click', function (e) {
      let target = e.target

      if (target.getAttribute('href')) {
         // удаляем у всех элементов меню активные классы
         this.querySelectorAll('.item a').forEach(function (el) {
            el.classList.remove('active')
         })

         // добавляем класс актив
         target.classList.add('active')
      } else {
         return false;
      }
   })

   // mobile menu 

   $('#nav-icon3').click(function () {
      $(this).toggleClass('open');
      if ($('#nav-icon3').hasClass('open')) {
         $('body').addClass('overflowBlock')
         $('.mobile_wrapper').removeClass('fadeOutUp');
         $('.mobile_wrapper').addClass('fadeInDown');
         $('.mobile_wrapper').addClass('open-menu');
      } else {
         $('.mobile_wrapper').removeClass('fadeInDown');
         $('.mobile_wrapper').addClass('fadeOutUp');
         setTimeout(function () {
            $('body').removeClass('overflowBlock')
            $('.mobile_wrapper').removeClass('open-menu');
         }, 500)
      }
   });
</script>