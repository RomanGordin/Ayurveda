<div class="block__about">
    <div class="container">
        <div class="about__wrapper">
            <div class="about_image">
                <img src="/img/about/about.png" alt="">
            </div>
            <div class="about__content">
                <h2 class="content_title">О КОМПАНИИ</h2>
                <p class="content_text">Сайт, торгующий товарами в Интернете. Позволяет пользователям сформировать заказ
                    на покупку, выбрать
                    способ оплаты и доставки заказа в сети Интернет. Выбрав необходимые товары или услуги, пользователь
                    обычно имеет возможность тут же на сайте выбрать метод оплаты и доставки. <br>
                    <br>

                    Основное отличие Интернет-магазина от традиционного — в типе торговой площадки.
                </p>
                <a href="" class="orange_button content_button">
                    ПОДРОБНЕЕ
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .block__about {
        margin-top: 45px;
    }

    .block__about .about__wrapper {
        display: flex;
    }

    .block__about .about_image {
        height: 100%;
        border-radius: 50%;
    }

    .block__about .about_image img {
        object-fit: cover;
    }

    .block__about .about__content {
        margin-left: 60px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
    }

    .block__about .content_title {
        font-weight: bold;
        font-size: 24px;
        line-height: normal;
        color: #000000;
        margin-bottom: 45px;
    }

    .block__about .content_text {
        font-size: 14px;
        line-height: normal;
        display: flex;
        align-items: center;
        color: #000000;
        margin-bottom: 35px;
    }

    .block__about .content_button {
        padding: 8px 12px;
        font-weight: 600;
        font-size: 12px;
        line-height: normal;
        text-align: center;
        color: #FFFFFF;
    }

    @media only screen and (max-width : 768px) {
        .block__about .about__wrapper{
            display: block;
        }

        .block__about .about__content{
            margin-left: 0;
            align-items: center;
            text-align: center;
            padding: 0 15px;
        }

        .block__about .about_image{
            margin-bottom: 20px;
            text-align: center;
        }
    }
</style>