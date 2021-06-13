<?
    $_SERVER["advantages"] = [
        [
            'advantage_images'=> '/img/icon/box.png',
            'advantage_text'=> 'Подарочные сертификаты',
        ],
        [
            'advantage_images'=> '/img/icon/shield.png',
            'advantage_text'=> 'Весь товар сертифицирован',
        ],
        [
            'advantage_images'=> '/img/icon/refund.png',
            'advantage_text'=> '30 дней на обмен и возврат',
        ],
        [
            'advantage_images'=> '/img/icon/truck.png',
            'advantage_text'=> 'Удобная и быстрая доставка',
        ]
    ]
?>



<div class="block__advantage">
    <div class="container">
        <div class="row">
            <? foreach($_SERVER["advantages"] as $advantage){ ?>
            <div class="col-12 col-md-6 col-lg-3 advantage__card">
                <div class="card_image">
                    <img class="img-fluid" src="<? echo $advantage['advantage_images'] ?>" alt="">
                </div>
                <p class="card_text">
                    <? echo $advantage['advantage_text'] ?>
                </p>
            </div>
            <?}?>
        </div>
    </div>
</div>

<style>
    .block__advantage {
        margin-top: 50px;
    }

    .block__advantage .advantage__card {
        display: flex;
        align-items: center;
    }

    .block__advantage .card_image {
        background-color: #F5F5FB;
        min-height: 80px;
        min-width: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        overflow: hidden;
    }

    .block__advantage .card_image img {
        object-fit: cover;
    }

    .block__advantage .card_text {
        font-size: 16px;
        line-height: 19px;
        color: #000000;
        margin-bottom: 0;
        margin-left: 25px;
        word-break: break-word;
    }

    @media only screen and (max-width : 992px){
        .block__advantage .advantage__card{
            margin-bottom: 20px;
        }
    }

    @media only screen and (max-width : 576px){
        .block__advantage{
            padding: 0 15px;
        }
    }




</style>