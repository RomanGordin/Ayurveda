<?
    $_SERVER["recomendations"] = [
        [
            'recomendation_image'=> '/img/cardimage/recomendation/card.png',
            'recomendation_title'=> 'Аюрведические препараты',
            'recomendation_price'=> '230 руб.',
        ],
        [
            'recomendation_image'=> '/img/cardimage/recomendation/card.png',
            'recomendation_title'=> 'Аюрведические препараты',
            'recomendation_price'=> '230 руб.',
        ],
        [
            'recomendation_image'=> '/img/cardimage/recomendation/card.png',
            'recomendation_title'=> 'Аюрведические препараты',
            'recomendation_price'=> '230 руб.',
        ],
        [
            'recomendation_image'=> '/img/cardimage/recomendation/card.png',
            'recomendation_title'=> 'Аюрведические препараты',
            'recomendation_price'=> '230 руб.',
        ],
        [
            'recomendation_image'=> '/img/cardimage/recomendation/card.png',
            'recomendation_title'=> 'Аюрведические препараты',
            'recomendation_price'=> '230 руб.',
        ],
        [
            'recomendation_image'=> '/img/cardimage/recomendation/card.png',
            'recomendation_title'=> 'Аюрведические препараты',
            'recomendation_price'=> '230 руб.',
        ],
        [
            'recomendation_image'=> '/img/cardimage/recomendation/card.png',
            'recomendation_title'=> 'Аюрведические препараты',
            'recomendation_price'=> '230 руб.',
        ],
        [
            'recomendation_image'=> '/img/cardimage/recomendation/card.png',
            'recomendation_title'=> 'Аюрведические препараты',
            'recomendation_price'=> '230 руб.',
        ],
        [
            'recomendation_image'=> '/img/cardimage/recomendation/card.png',
            'recomendation_title'=> 'Аюрведические препараты',
            'recomendation_price'=> '230 руб.',
        ],
        [
            'recomendation_image'=> '/img/cardimage/recomendation/card.png',
            'recomendation_title'=> 'Аюрведические препараты',
            'recomendation_price'=> '2303 руб.',
        ]
    ]
?>



<div class="block__recomendation">
    <div class="container">
        <div class="col-12 recomendation__header">
            <h2 class="header_title">
                РЕКОМЕНДУЕМ
            </h2>
            <a href="/" class="header_link">
                Все популярные товары
            </a>
        </div>
        <div class="recomendation__wrapper">
            <div class="recomendation__cards">

                <? foreach($_SERVER["recomendations"] as $recomendation){ ?>
                <div class="recomendation_card">
                    <div class="card_wrapper">
                        <img class="card_image img-fluid" src="<? echo $recomendation['recomendation_image'] ?>" alt="">
                    </div>
                    <div class="card_text">
                        <p class="card_title">
                            <? echo $recomendation['recomendation_title'] ?>
                        </p>
                    </div>
                    <div class="card_action">
                        <p class="action_price">
                            <? echo $recomendation['recomendation_price'] ?>
                        </p>
                        <div class="action_counter">
                            <span class="minus"></span>
                            <p class="counter">
                                0
                            </p>
                            <span class="plus"></span>
                        </div>
                        <button class="orange_button action_button">
                            <img src="/img/icon/ShoppingCartOutlineWhite.svg" alt="">
                            В корзину
                        </button>
                    </div>
                </div>
                <?}?>
            </div>
            <div class="wrapper__more">
                <button class="cards_more green_button">
                    ЗАГРУЗИТЬ ЕЩЕ
                </button>
            </div>
        </div>
    </div>
</div>


<style>
    .block__recomendation {
        margin-top: 45px;
    }

    .block__recomendation .recomendation__header {
        display: flex;
        align-items: flex-end;
        margin-bottom: 35px;
    }

    .block__recomendation .header_title {
        font-weight: bold;
        font-size: 24px;
        line-height: normal;
        color: #000000;
        margin-bottom: 0;
    }

    .block__recomendation .header_link {
        font-size: 16px;
        line-height: normal;
        color: #768492;
        margin-bottom: 0;
        margin-left: 25px;
    }

    .block__recomendation .recomendation__wrapper {
        background-color: #F5F5FB;
        border-radius: 10px;
        padding: 25px 15px 40px 15px;
    }

    .block__recomendation .recomendation__cards {
        margin: 0 -7.5px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .block__recomendation .recomendation_card {
        max-width: calc(25% - 15px);
        width: 100%;
        margin: 0 7.5px;
        padding: 20px 10px;
        margin-bottom: 15px;
        border: 1px solid #E7E7E7;
        background-color: white;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
    }

    .block__recomendation .card_wrapper {
        opacity: 0.9;
        margin-bottom: 35px;
    }

    .block__recomendation .card_image {
        object-fit: cover;
        width: 100%;
    }

    .block__recomendation .card_text {
        padding: 6px 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        margin-bottom: 15px;
    }

    .block__recomendation .card_title {
        font-size: 14px;
        line-height: normal;
        text-align: center;
        text-transform: uppercase;
        color: #000000;
        word-break: break-word;
        margin-bottom: 0;
    }

    .block__recomendation .card_action {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .block__recomendation .action_price {
        font-weight: bold;
        font-size: 22px;
        line-height: 27px;
        text-align: center;
        color: #000000;
        margin-bottom: 20px;
    }

    .block__recomendation .action_counter {
        margin-bottom: 20px;
        display: flex;
        align-items: center;
    }

    .block__recomendation .action_counter span.minus::before {
        content: url('/img/icon/MinusCircleOutline.svg');
        display: block;
        width: 100%;
        height: 100%;
        font-size: 0;
        cursor: pointer;
    }

    .block__recomendation .action_counter span.plus::before {
        content: url('/img/icon/PlusCircleOutline.svg');
        display: block;
        width: 100%;
        height: 100%;
        font-size: 0;
        cursor: pointer;
    }

    .block__recomendation .counter {
        font-weight: bold;
        font-size: 14px;
        line-height: normal;
        text-align: center;
        color: #000000;
        margin: 0 5px;
        margin-bottom: 0;
    }

    .block__recomendation .action_button {
        padding: 5px 10px;
    }

    .block__recomendation .wrapper__more {
        width: 100%;
        text-align: center;
        margin-top: 15px;
    }

    .block__recomendation .cards_more {
        padding: 6px 15px;
    }

    .block__recomendation .wrapper__more.d-none{
        margin: 0;
    }

    @media only screen and (max-width : 992px) {
        .block__recomendation .recomendation_card {
            max-width: calc(33% - 15px);
        }

        .block__recomendation .card_title {
            font-size: 12px;
        }
    }

    @media only screen and (max-width : 768px) {
        .block__recomendation .recomendation_card {
            max-width: calc(50% - 15px);
        }
    }

    @media only screen and (max-width : 576px) {
        .block__recomendation .recomendation__header {
            display: block;
        }

        .block__recomendation .recomendation__wrapper {
            padding: 15px;
        }

        .block__recomendation .header_link {
            margin-left: 0;
            display: block;
            margin-top: 15px;
        }

        .block__recomendation .header_title {
            font-size: 20px;
        }
    }

    @media only screen and (max-width : 480px) {
        .block__recomendation .recomendation_card {
            max-width: 100%;
        }
    }
</style>


<script>
    // функции показа и скрытия карточек 
    function showCard(element, index) {
        element[index].classList.remove('d-none')
    }

    function hideCard(element, index) {
        element[index].classList.add('d-none')
    }
    // функции показа и скрытия карточек 


    document.querySelectorAll('.block__recomendation').forEach(function (elem) {
        // indexHide сколько карточек показываем 
        // шаг показа карточек 
        // arrayCard массив для проверки для скрытия кнопки показа
        let indexHide = 8,
            indexStep = 4,
            arrayCard;

        // перебераем карточки 
        function sortArr(indexHiden) {
            elem.querySelectorAll('.recomendation_card').forEach(function (card, i, arr) {
                // если индекс меньше indexHide
                if (i >= indexHiden) {
                    hideCard(arr, i)
                } else {
                    showCard(arr, i)
                    return arrayCard = arr;
                }
            })
        }
        
        sortArr(indexHide)

        // показ карточек при клике на кнопку 
        elem.querySelector('.wrapper__more').addEventListener('click', function () {
            if(arrayCard.length >= indexHide){
                elem.querySelector('.wrapper__more').classList.add('d-none')
                indexHide += indexStep;
                sortArr(indexHide)
            } else{
                indexHide += indexStep;
                sortArr(indexHide)
            }
        })

        // перебераем карточки
        elem.querySelectorAll('.recomendation_card').forEach(function (card, i, arr) {
            card.addEventListener('click', function(e){
                let target = e.target,
                    cardCounter = 0,
                    plus = card.querySelector('.plus'),
                    minus = card.querySelector('.minus');
                
                // если нажали на минус, проверяем что число не отрицательное и ставим значение
                if(target == minus){
                    if(Number(this.querySelector('.counter').textContent) <= 0){
                        return false
                    } else{
                        this.querySelector('.counter').textContent = Number(this.querySelector('.counter').textContent) -1;
                    }
                } if(target == plus){
                    this.querySelector('.counter').textContent = Number(this.querySelector('.counter').textContent) +1;
                }
            })
        })
        
        
    })
</script>