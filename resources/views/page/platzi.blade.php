<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 18px;
        }
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        header {
            display: flex;
            height: 40px;
            justify-content: space-between;
            align-items: center;
            background: rgb(104, 104, 209);
            color: #fefefe;
        }
        header h3 {
            margin-left: 8px;
        }
        header .cart {
            background: rgb(82, 82, 194);
            padding: 8px;
            color: white;
            border: none;
            height: 100%;
            cursor: pointer;
            outline: none;
        }
        header .cart-content {
            position: absolute;
            right: 0;
            top: 40px;
            background: white;
            padding: 16px;
            color: black;
            border-bottom: 1px solid black;
            border-left: 1px solid black;
            border-bottom-left-radius: 14px;
            border-bottom-right-radius: 14px;
        }
        header .cart-content .cart-content__product {
            display: flex;
            align-items: center;
            padding: 8px;
            border-radius: 8px;
            background: rgb(129, 129, 129, 0.2);
            margin-bottom: 4px;
        }
        header .cart-content .cart-content__product.bg-gray {
            background: rgb(129, 129, 129, 0.4);
        }
        header .cart-content .cart-content__product img {
            width: 50px;
        }
        main {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            padding: 16px;
        }

        main .product {
            display: grid;
            grid-template-columns: 0.2fr 0.8fr;
        }

        main .product .product__thumbnails {
            width: 90px;
        }
        main .product .product__thumbnails .thumb {
            width: 100%;
            height: 90px;
            background-repeat: no-repeat;
            background-position: center;
            margin-bottom: 8px;
        }
        main .product .product__thumbnails .thumb.active {
            border-bottom: 1px solid rgb(82, 82, 194);
        }

        main .description h4 {
            display: inline-block;
            font-size: 24px;
        }
        main .description .description__status {
            font-size: 16px;
            font-weight: lighter;
            color: rgb(129, 129, 129);
        }
        main .description .description__price {
            font-weight: bold;
            color: rgb(104, 104, 209);
        }
        main .description .description__content {
            margin-top: 8px;
        }
        main .description .discount {
            margin: 8px 0 8px 0;
        }
        main .description .discount span {
            font-size: 14px;
            margin-right: 8px;
        }
        main .description .discount input {
            padding: 8px;
            border: 1px solid #616161;
            border-radius: 4px;
        }
        main .description button {
            padding: 8px;
            font-size: 18px;
            background: rgb(104, 104, 209);
            color: #fefefe;
            border: none;
            border-radius: 8px;
        }
        main .description button:disabled {
            background: rgb(159, 159, 228);
        }
        .badge {
            font-size: 14px;
            font-weight: normal;
            padding: 8px;
            border-radius: 8px;
            color: white;
            margin-right: 4px;
            vertical-align: text-top;
        }
        .badge.new {
            background-color: rgb(103, 172, 13);
        }
        .badge.offer {
            background-color: rgb(197, 107, 33);
        }
    </style>
</head>
<body>
<div id="app">
    <example-component></example-component>
{{--    <option-component></option-component>--}}
{{--    <composition-component></composition-component>--}}

</div>
<script src="{{mix("js/app.js")}}"></script>
<script src="{{mix("js/plugins.js")}}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>--}}
</body>
</html>
