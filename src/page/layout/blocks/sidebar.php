

<script>
   $('.sidebar-menu > ul > li > a').click(function () {
      $('#nav-icon3').toggleClass('open');
      if ($('#nav-icon3').hasClass('open')) {
         $('.sidebar').removeClass('noopacityAnimation');
         $('.sidebar').addClass('opacityAnimation');
         $('.sidebar').addClass('open-menu');
         $('.circle').addClass('expand');
         $('.header__up').addClass('fixed_noposition');
         $('body').addClass('overflowBlock');
      } else {
         $('.sidebar').removeClass('opacityAnimation');
         $('.sidebar').addClass('noopacityAnimation');
         $('.circle').removeClass('expand');
         $('body').removeClass('overflowBlock');
         $('.header__up').removeClass('fixed_noposition');
         setTimeout(function () {
            $('.sidebar').removeClass('open-menu');
         }, 500)
      }
   })
</script>

<style>
   .fixed_noposition{
      position: inherit !important;
      height: 0;
   }

   .fixed_noposition img{
      display: none;
   }

   .fixed_noposition #nav-icon3{
      position: fixed;
   }

   .sidebar {
      max-width: 100%;
      position: fixed;
      z-index: 4;
      height: 100vh;
      overflow-x: scroll;
      top: 0;
      padding-top: 8px;
      display: none;
   }

   div.circle {
      width: 0px;
      height: 0px;
      z-index: 3;
      position: fixed;
      top: 0;
      right: 0;
      background: linear-gradient(174.38deg, #EE5521 1.12%, #FFB801 99.12%);
      ;
      opacity: 1;
      transition: all 0.3s;
   }

   div.circle.expand {
      width: 100vw;
      height: 100vh;
      top: 0;
      right: 0;
   }

   .animationblop {
      -webkit-animation-name: animationblop;
      animation-name: animationblop;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
   }

   @-webkit-keyframes animationblop {
      0% {
         border-bottom-left-radius: 100%;
      }

      70% {
         border-bottom-left-radius: 50%;
      }

      100% {
         border-bottom-left-radius: 0;
      }
   }

   @keyframes animationblop {
      0% {
         border-bottom-left-radius: 100%;
      }

      50% {
         border-bottom-left-radius: 50%;
      }

      100% {
         border-bottom-left-radius: 0;
      }
   }

   .noanimationblop {
      -webkit-animation-name: noanimationblop;
      animation-name: noanimationblop;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
   }

   @-webkit-keyframes noanimationblop {
      0% {
         border-bottom-left-radius: 100%;
      }

      100% {
         border-bottom-left-radius: 100%;
      }
   }

   @keyframes noanimationblop {
      0% {
         border-bottom-left-radius: 100%;
      }

      100% {
         border-bottom-left-radius: 100%;
      }
   }

   @media only screen and (max-width: 992px) {
      .open-menu {
         display: block !important;
      }
   }
</style>