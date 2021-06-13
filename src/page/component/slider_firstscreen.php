<?
    $_SERVER["slider"] = [
        [
            'slide_background'=> '/img/sliderHome/slide.png',
            'slide_title'=> 'ИНДИЙСКИЕ СПЕЦИИ',
            'slide_text'=> 'Самые лучшие специи из Индии с доставкой в ваш город',
            'slide_link'=> '/',
            'slide_button_text'=> 'ВЫБРАТЬ',
        ],
        [
            'slide_background'=> '/img/sliderHome/GZ3A3722.jpg',
            'slide_title'=> 'Китайские СПЕЦИИ',
            'slide_text'=> 'Самые лучшие специи из Индии с доставкой в ваш город',
            'slide_link'=> '/',
            'slide_button_text'=> 'ВЫБРАТЬ',
        ],
    ]

?>

<div class="block__slider">
    <div class="container">
        <div class="slider_order">
            <? $i = 0; ?>
            <!-- если слайд не первый, добавляем display: none !important, после инициялизации
            diplay: none перебьем display: flex; именно стилями, нужно для того
            что бы слайд не прыгал в высоту, так как инициялизация слика происходи
            после загрузки дом, 2 и более слайдов будут друг под другом.
            для того что бы увидеть это, удалите строку
            if($i > 0) { echo 'display: none !important;'; -->
            <? foreach($_SERVER["slider"] as $slide){ ?>
            <div class="slide"
                style="background: url('<? echo $slide['slide_background'] ?>') center center no-repeat;
                <? if($i > 0) { echo 'display: none !important;'; }?>">
                
                <h2 class="slide_title">
                    <? echo $slide['slide_title'] ?>
                </h2>
                <!-- если есть текст  -->
                <? if(isset($slide['slide_text']) && $slide['slide_text']) { ?>
                <p class="slide_text">
                    <? echo $slide['slide_text'] ?>
                </p>
                <?}?>
                <!-- если есть кнопка  -->
                <? if(isset($slide['slide_text']) && $slide['slide_text']) { ?>
                <a class="slide_button orange_button" href="<? echo $slide['slide_link'] ?>">
                    <? echo $slide['slide_button_text'] ?>
                </a>
                <?}?>
            </div>
            <?$i++;?>
            <?}?>

        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.slider_order').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            nextArrow: '<button type="button" class="slick_next"><i class="icon-arrow"></i></button>',
            prevArrow: '<button type="button" class="slick_prev"><i class="icon-arrow"></i></button>',
        });
    });
</script>


<style>
    .block__slider {
        margin-top: 30px;
    }

    .block__slider .slider_order{
        border-radius: 10px;
        overflow: hidden;
    }

    .block__slider .slide {
        display: flex !important;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 370px;
        background-size: cover !important;
        background-color: #c7c7c7 !important;
        padding: 40px;
    }

    .block__slider .slide_title {
        font-weight: bold;
        font-size: 48px;
        line-height: normal;
        text-align: center;
        color: #FFFFFF;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
        margin-bottom: 0;
        text-transform: uppercase;
    }

    .block__slider .slide_text {
        font-weight: 500;
        font-size: 16px;
        text-align: center;
        line-height: normal;
        color: #FFFFFF;
        margin-bottom: 0;
    }

    .block__slider .slide_button {
        padding: 14px 25px;
        margin-top: 27px;
        font-weight: bold;
        font-size: 16px;
        line-height: normal;
        display: flex;
        align-items: center;
        text-align: center;
        color: #FFFFFF;
    }

    .block__slider .slick_next {
        position: absolute;
        top: calc(50% - 22px);
        right: 5px;
        width: 43px;
        height: 43px;
        z-index: 1;
        padding: 0;
        margin: 0;
        border: none;
        background-color: transparent;
    }

    .block__slider .slick_prev {
        position: absolute;
        top: calc(50% - 22px);
        left: 5px;
        width: 43px;
        height: 43px;
        z-index: 1;
        padding: 0;
        margin: 0;
        border: none;
        background-color: transparent;
        transform: rotate(180deg);
    }

    .block__slider .icon-arrow {
        width: 100%;
        height: 100%;
        display: block;
        font-size: 43px;
    }

    .icon-arrow:hover:before{
        color: #ce3c00;
    }

    
    @media only screen and (max-width : 992px){
        .block__slider .slide{
            border-radius: 0;
        }

        .block__slider .slide_title{
            font-size: 26px;
        }

        .block__slider .icon-arrow{
            font-size: 25px;
        }

        .block__slider .slick_next, .block__slider .slick_prev{
            width: 25px;
            height: 25px;
        }

        .block__slider .slider_order{
            border-radius: 0;
        }
    }

    
</style>