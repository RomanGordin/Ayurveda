<footer>
    <div class="container">
        <div class="footer_top">
            <div class="link__wrapper">
                <div class="link__block">
                    <h3 class="block_header">КОМПАНИЯ</h3>
                    <a class="block_link" href="/">О компании</a>
                    <a class="block_link" href="/">Партнеры</a>
                    <a class="block_link" href="/">Контакты</a>
                </div>
                <div class="link__block">
                    <h3 class="block_header">ПОКУПАТЕЛЯМ</h3>
                    <a class="block_link" href="/">Личный кабинет</a>
                    <a class="block_link" href="/">Каталог</a>
                    <a class="block_link" href="/">Условия доставки</a>
                    <a class="block_link" href="/">Условия оплаты</a>
                    <a class="block_link" href="/">Помощь</a>
                </div>
            </div>
            <div class="contact__block">
                <h3 class="block_header">НАШИ КОНТАКТЫ</h3>
                <a class="contack_link" href="tel:+7 000 000-00-00">+7 000 000-00-00</a>
                <p class="contact_text">
                    г. Москва, ул. Пушкина 19
                    <a class="contack_link link_gray" href="mailto:info@ayurveda365.ru">info@ayurveda365.ru</a>
                </p>
            </div>
        </div>
        <div class="footer_bottom">
            <p class="copyrite">
                © 2021 «Ayurveda365» — Интернет-магазин
            </p>
            <div class="payment">
                <img src="/img/icon/mastercard.png" alt="">
                <img src="/img/icon/visa-logo.png" alt="">
                <img src="/img/icon/mir-logo.png" alt="">
            </div>
        </div>
    </div>
</footer>


<style>
    footer {
        margin-top: 40px;
        background-color: #131518;
    }

    .footer_top {
        padding: 30px 0 40px 0;
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #6F6F6F;
    }

    .footer_top .link__wrapper {
        display: flex;
        justify-content: space-between;
        max-width: 420px;
        width: 100%;
    }

    .footer_top .block_header {
        font-weight: bold;
        font-size: 16px;
        line-height: normal;
        color: #FFFFFF;
        margin-bottom: 18px;
    }

    .footer_top .block_link {
        display: block;
        font-weight: 600;
        font-size: 14px;
        line-height: normal;
        padding: 5px 0;
        color: #8A8A8A;
    }

    .contact__block .block_header {
        text-align: right;
    }

    .footer_top .contack_link {
        font-weight: 800;
        font-size: 18px;
        line-height: normal;
        color: #FFFFFF;
        margin-bottom: 18px;
        display: block;
        text-align: right;
    }

    .footer_top .contack_link.link_gray {
        font-weight: 600;
        font-size: 14px;
        color: #8A8A8A;
        margin-bottom: 0;
        margin-top: 5px;
    }

    .footer_top .contact_text {
        font-weight: 600;
        font-size: 14px;
        line-height: normal;
        text-align: right;
        color: #8A8A8A;
        margin-bottom: 0;
    }

    .footer_bottom {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        padding: 25px 0 45px 0;
    }

    .footer_bottom .copyrite {
        font-size: 14px;
        line-height: 25px;
        display: flex;
        align-items: center;
        text-align: justify;
        color: #8A8A8A;
        margin-bottom: 0;
    }

    .footer_bottom .payment {
        display: flex;
        margin: 0 -9px;
    }

    .footer_bottom .payment img {
        object-fit: contain;
        max-width: 100%;
        margin: 0 9px;
    }

    @media only screen and (max-width : 768px) {
        .footer_top{
            display: block;
        }

        .footer_top .link__wrapper{
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            max-width: 100%;
        }

        .footer_top .link__block{
            margin-bottom: 20px;
        }

        .footer_top .contact__block{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .footer_top .contack_link{
            text-align: center;
        }

        .footer_bottom{
            flex-direction: column;
            justify-content: center;
        }

        .footer_bottom .copyrite{
            margin-bottom: 15px;
            text-align: center;
        }

        footer{
            padding: 0 15px;
        }
    }
</style>