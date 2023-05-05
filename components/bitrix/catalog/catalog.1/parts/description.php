<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (($arResult["SECTION"]["DESCRIPTION"] !== "") && $arResult["SECTION"]["UF_TABLE"] !== "") { ?>
    <div class="-img">
        <div class="wrapper-img">
            <div class="my-flex-box">
                <?= $arDescription['VALUE'] ?>
            </div>
            <div class="my-flex-box">
                <?= $arSection["UF_TABLE"] ?>
            </div>
        </div>
    </div>


    <style>
        /* Made by cssworld.ru */
        .-img {
            background-color: #393c4b;
            color: #ffffff;
            padding-bottom: 80px;
            width: 100%;
        }

        .wrapper-img {
            display: flex;
            justify-content: center;
            max-width: 1384px;
            min-width: 320px;
            margin: 0 auto;
            clear: both;
            padding: 0 20px 0 20px;
            margin-top: 30px;
            align-items: baseline;
        }

        .-img::after {
            display: none !important;
        }

        .my-flex-box {
            flex: 0 1 auto;
        }

        .my-flex-box:nth-child(1) {
            flex: 0 1 65%;
            margin-right: 40px;
            margin-top: 60px;
            color: #7cc842;
            font-weight: bold;
            font-size: 17px;
        }

        .my-flex-box:nth-child(2) {
            flex: 1 1 35%;
            margin-left: 40px;
            margin-top: 80px;
        }

        /* Стили таблицы (IKSWEB) */
        table.iksweb {
            text-decoration: none;
            border-collapse: collapse;
            width: 100%;
        }

        table.iksweb th {
            font-weight: 700;
            font-size: 16px;
            color: #7cc842;
        }

        table.iksweb td {
            font-size: 14px;
        }

        table.iksweb td,
        table.iksweb th {
            border-bottom: 1px solid dimgray;
            ;
            /* text-align: left; */
            height: 36px;
        }

        table.iksweb td:nth-child(2n) {
            color: #7cc842 !important;
            font-weight: 700;
            text-align: right;
        }

        @media (max-width: 1024px) {
            .wrapper-img {
                flex-direction: column-reverse;
                width: 100%;
                margin-top: 30px;
                align-items: normal;
            }

            .wrapper-img .my-flex-box:nth-child(2) {
                flex: auto;
                margin: 45px 0px 0px 125px;
            }

            .my-flex-box:nth-child(1) {
                margin: 15px 30px 10px 10px;
            }
        }

        @media (max-width: 720px) {
            .my-flex-box:nth-child(1) {
                flex: 0 1 65%;
                color: #7cc842;
                font-weight: bold;
                font-size: 17px;
                margin: 10px 10px 10px 10px;
            }

            .wrapper-img {
                flex-wrap: wrap;
                display: flex;
                justify-content: center;
                background-color: #393c4b;
                color: #ffffff;
                margin-top: 70px;
                /* padding-bottom: 50px; */
                width: 100%;
                flex-direction: column-reverse;
                align-items: normal;
            }

            table.iksweb {
                text-decoration: none;
                border-collapse: collapse;
                width: auto;
            }

            .wrapper-img .my-flex-box:nth-child(2) {
                flex: auto;
                margin: 45px 10px 0px 10px;
            }

            .wrapper-img::after {
                display: none;
            }

            .wrapper-img table.iksweb td {
                border-bottom: 1px solid dimgray;
                text-align: left;
                height: 40px;
                width: 80%;
            }
        }
    </style>
<?php } ?>