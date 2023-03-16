<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="my-flex-cont-img">
    <div class="my-flex-box-img">
        <div class="head-desktop">
            <h1><?= $arSection["UF_BANNER_HEADER"] ?> </h1>
        </div>

        <div class="head-mobile">
            <div class="head-img">
                <? $sPicture = CFile::GetPath($arSection['PICTURE']); ?>
                <img src="<?= $sPicture ?>" alt="">
            </div>
            <div class="head-h1">
                <h1><?= $arSection["UF_BANNER_HEADER"] ?></h1>
                <p>Диагностика <?= $arSection["UF_AMOUNT"] ?></p>
            </div>
        </div>
        <ul>
            <li>
                <p>Диагностика длится 1-3 дня в зависимости от загруженности мастеров.</p>
            </li>
            <li>
                <p>Стоимость диагностики <?= $arSection["UF_AMOUNT"] ?> в случае отказа от ремонта.</p>
            </li>
            <li>
                <p>Срок ремонта зависит от наличия запасных частей, если запчасти в наличие то, как правило, вместе с диагностикой и производится ремонт.</p>
            </li>
        </ul>
        <div class="my-flex-cont-icons">
            <div class="my-flex-box-icons my-flex-box-cash">
                <div class="my-flex-box-description">Наличные или карта для физичечких лиц.</div>
            </div>
            <div class="my-flex-box-icons my-flex-box-card">
                <div class="my-flex-box-description">Безналичная оплата для юридических лиц.</div>
            </div>
        </div>
    </div>
    <div class="my-flex-box-img">
        <? $sPicture = CFile::GetPath($arSection['PICTURE']); ?>
        <img src="<?= $sPicture ?>" alt="">
    </div>
</div>

<!-- <hr class="hr-shelf"> -->

<style>
    #pagetitle {
        display: none;
    }

    .my-flex-box-img .head-mobile {
        display: none;
    }

    .my-flex-box-img .head-desktop {
        display: block;
    }

    h1 {
        font-size: 38px;
        font-weight: bold;
        position: relative;
        margin-bottom: 35px;
        margin-top: 0;
        text-transform: uppercase;
    }

    .my-flex-cont-icons {
        display: flex;
        justify-content: space-between;
        align-items: end;
        height: 65px;
        width: 76%;
    }

    .my-flex-box-icons {
        flex: 0 1 auto;
    }

    .my-flex-box-icons:nth-child(1) {
        flex: 1 1 auto;
    }

    .my-flex-box-icons:nth-child(2) {
        flex: 1 1 auto;
    }

    .my-flex-box-icons:nth-child(3) {
        flex: 1 1 auto;
        text-align: center;
        /* width: 40%; */
    }

    .my-flex-box-icons:nth-child(3)>.fa-brands {
        margin: 0px 10px 0px 10px;
    }

    .my-flex-box-icons>.flex-social {
        margin: 0 10px 0 10px;
        width: 40px;
    }

    .fa-brands {
        font-size: 40px;
    }

    .my-flex-box-cash::before {
        content: url('/local/templates/universe_s1/icons/iko1.png');
        margin-right: 30px;
    }

    .my-flex-box-card::before {
        content: url('/local/templates/universe_s1/icons/iko1.png');
        margin-right: 30px
    }

    .my-flex-box-description {
        display: inline-block;
        max-width: 200px;
        font-weight: 500;
        font-size: 17px;
    }

    .hr-shelf {
        padding: 0;
        height: 40px;
        border: none;
        border-bottom: 1px solid #393c4b;
        /* box-shadow: 0 20px 20px -20px #393c4b; */
    }

    .my-flex-cont-img {
        font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        display: flex;
        justify-content: space-between;
        align-items: stretch;
        color: #393c4b;
        margin-bottom: 27px;

        max-width: 1384px;
        min-width: 320px;
        margin: 0 auto;
        clear: both;
        padding: 0 20px 0 20px;
    }

    .container-345.element-page .catalog-wrapper.intec-content.intec-content-visible {
        max-width: 100%;
    }

    .container-345.element-page .catalog-wrapper-2.intec-content-wrapper {
        margin-left: 0px;
        margin-right: 0px;
    }

    .my-flex-box-img {
        flex: 0 1 auto;
        align-self: flex-start;
        width: 29%;
    }

    .my-flex-box-img:nth-child(1) {
        flex: 2 1 auto;
    }

    .my-flex-box-img img {
        max-width: 390px;
    }

    .my-flex-box-img li {
        font-size: 20px;
    }

    .my-flex-box-img li p {
        margin-left: 40px;
        width: 90%;
        font-size: 21px;
        line-height: 35px;
        font-weight: bold;
    }

    .my-flex-box-img li:before {
        content: url('/local/templates/universe_s1/icons/znak.png');
    }

    .my-flex-box-img h2 {
        margin-bottom: 50px;
        font-weight: 800;
        font-size: 30px;
    }

    @media (max-width: 1024px) {
        .container-345 {
            padding: 40px 0px 0px 0px !important;
        }

        .my-flex-box-img {
            flex: 0 1 auto;
            align-self: flex-start;
            width: 29%;
            margin-left: 20px;
            margin-right: 20px;
        }

        .my-flex-cont-img {
            margin: -80px 0px 0px 0px;
        }

        .my-flex-box-img .head-desktop {
            display: none;
        }

        .my-flex-box-img .head-mobile {
            display: flex;
            align-items: center;
            margin: 0px 0px 20px 0px;
        }

        .my-flex-box-img .head-mobile h1 {
            text-transform: uppercase;
            font-size: 25px;
            font-weight: bold;
            position: relative;
            margin: 0;
        }

        .my-flex-box-img .head-mobile .head-h1 {
            font-size: 19px;
            font-weight: bold;
            margin-left: 10px;
        }

        .my-flex-box-img .head-img img {
            max-width: 140px;
        }

        .my-flex-box-img li p {
            margin-left: 35px;
            width: 90%;
            font-size: 18px;
            line-height: 22px;
            font-weight: bold;
        }

        .my-flex-box-img:nth-child(2) {
            display: none;
        }

        .my-flex-cont-icons {
            display: flex;
            justify-content: space-between;
            align-items: end;
            height: 65px;
            width: 100%;
            margin-bottom: 30px;
        }

        .container-345 .catalog-wrapper-2.intec-content-wrapper {
            margin-left: 0px;
            margin-right: 0px;
        }
    }

    @media (max-width: 720px) {
        .container-345 {
            padding: 40px 0px 0px 0px !important;
        }

        .my-flex-box-img {
            flex: 0 1 auto;
            align-self: flex-start;
            width: 29%;
            margin-left: 20px;
            margin-right: 20px;
        }

        .my-flex-cont-img {
            margin: -80px 0px 0px 0px;
        }

        .my-flex-box-img .head-desktop {
            display: none;
        }

        .my-flex-box-img .head-mobile {
            display: flex;
            align-items: center;
            margin: 0px 0px 20px 0px;
        }

        .my-flex-box-img .head-mobile h1 {
            text-transform: uppercase;
            font-size: 20px;
            font-weight: bold;
            position: relative;
            margin: 0;
        }

        .my-flex-box-img .head-mobile .head-h1 {
            font-size: 16px;
            font-weight: bold;
            margin-left: 10px;
        }

        .my-flex-box-img .head-img img {
            max-width: 92px;
        }

        .my-flex-box-img li p {
            margin-left: 35px;
            width: 90%;
            font-size: 18px;
            line-height: 22px;
            font-weight: bold;
        }

        .my-flex-box-img:nth-child(2) {
            display: none;
        }

        .my-flex-cont-icons {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            height: 130px;
            align-items: center;
            width: 100%;
            margin-bottom: 0px;
        }

        .container-345 .catalog-wrapper-2.intec-content-wrapper {
            margin-left: 0px;
            margin-right: 0px;
        }
    }
</style>