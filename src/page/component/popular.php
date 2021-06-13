<?
    $_SERVER["populars"] = [
        [
            'popular_image'=> '/img/cardimage/popular/card.png',
            'popular_title'=> 'Аюрведические препараты',
        ],
        [
            'popular_image'=> '/img/cardimage/popular/card2.png',
            'popular_title'=> 'Натуральные масла',
        ],
        [
            'popular_image'=> '/img/cardimage/popular/card3.png',
            'popular_title'=> 'Живое питание',
        ],
        [
            'popular_image'=> '/img/cardimage/popular/card4.png',
            'popular_title'=> 'Индийская косметика',
        ],
        [
            'popular_image'=> '/img/cardimage/popular/card5.png',
            'popular_title'=> 'Натуральная гигиена, экосредства',
        ],
        [
            'popular_image'=> '/img/cardimage/popular/card6.png',
            'popular_title'=> 'Аюрведические препараты',
        ],
        [
            'popular_image'=> '/img/cardimage/popular/card7.png',
            'popular_title'=> 'Аюрведические препараты',
        ],
        [
            'popular_image'=> '/img/cardimage/popular/card8.png',
            'popular_title'=> 'Аюрведические препараты',
        ],
        [
            'popular_image'=> '/img/cardimage/popular/card9.png',
            'popular_title'=> 'Аюрведические препараты',
        ],        
        [
            'popular_image'=> '/img/cardimage/popular/card10.png',
            'popular_title'=> 'Аюрведические препараты',
        ],
    ]
?>



<div class="block__popular">
    <div class="container">
        <div class="col-12 popular__header">
            <h2 class="header_title">
                ПОПУЛЯРНЫЕ КАТЕГОРИИ
            </h2>
            <a href="/" class="header_link">
                Весь каталог
            </a>
        </div>
        <div class="popular__wrapper">
            <div class="popular__cards">

                <? foreach($_SERVER["populars"] as $popular){ ?>
                <div class="popular_card">
                    <div class="card_wrapper">
                        <img class="card_image img-fluid" src="<? echo $popular['popular_image'] ?>" alt="">
                    </div>
                    <div class="card_text">
                        <p class="card_title">
                            <? echo $popular['popular_title'] ?>
                        </p>
                    </div>
                </div>
                <?}?>

            </div>
        </div>
    </div>
</div>


<style>
    .block__popular {
        margin-top: 45px;
    }

    .block__popular .popular__header {
        display: flex;
        align-items: flex-end;
        margin-bottom: 35px;
    }

    .block__popular .header_title {
        font-weight: bold;
        font-size: 24px;
        line-height: normal;
        color: #000000;
        margin-bottom: 0;
    }

    .block__popular .header_link {
        font-size: 16px;
        line-height: normal;
        color: #768492;
        margin-bottom: 0;
        margin-left: 25px;
    }

    .block__popular .popular__wrapper {
        background-color: #F5F5FB;
        border-radius: 10px;
        padding: 25px 25px 10px 25px;
    }

    .block__popular .popular__cards {
        margin: 0 -15px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .block__popular .popular_card {
        max-width: calc(20% - 30px);
        width: 100%;
        margin: 0 15px;
        margin-bottom: 25px;
        border: 1px solid #E7E7E7;
        background-color: white;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
    }

    .block__popular .card_wrapper {
        opacity: 0.9;
    }

    .block__popular .card_image {
        object-fit: cover;
        width: 100%;
    }

    .block__popular .card_text {
        padding: 6px 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .block__popular .card_title {
        font-weight: 600;
        font-size: 14px;
        line-height: normal;
        text-align: center;
        text-transform: uppercase;
        color: #000000;
        word-break: break-word;
        margin-bottom: 0;
    }


    @media only screen and (max-width : 992px){
        .block__popular .popular_card{
            max-width: calc(25% - 30px);
        }

        .block__popular .card_title{
            font-size: 12px;
        }
    }

    @media only screen and (max-width : 768px){
        .block__popular .popular_card{
            max-width: calc(50% - 30px);
        }
    }

    @media only screen and (max-width : 576px){
        .block__popular .popular__header{
            display: block;
        }

        .block__popular .popular__wrapper{
            padding: 15px 15px 0 15px;
        }

        .block__popular .header_link{
            margin-left: 0;
            display: block;
            margin-top: 15px;
        }

        .block__popular .header_title{
            font-size: 20px;
        }
    }
    
</style>