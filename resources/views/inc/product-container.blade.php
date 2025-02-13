<link rel="stylesheet" href="{{ asset('css/variables.css') }}">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        max-width: 1440px;
        margin: 0 auto;
    }

    .product-container {
        display: flex;
        overflow-x:hidden;
        max-width: 1440px;
        margin: 0 auto;
        padding-bottom: 10px;
        gap: 10px;
    }


</style>
<body>

    <div class="header">
        <h2 style="margin:0px">Odporúčané</h2>

        <a href="" style="display: flex; text-decoration:none; align-items:center;">
            <h3 style="color: var(--primary-blue); margin: 0px 10px 0px 0px">Zobraziť všetko</h3>
            <svg style="margin: 2px 0 0 0" width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.19994 0.78799C2.08669 0.664866 1.95011 0.565465 1.79813 0.495561C1.64615 0.425657 1.4818 0.386642 1.31461 0.38078C1.14743 0.374919 0.980747 0.402329 0.824244 0.461418C0.66774 0.520508 0.524535 0.610099 0.402942 0.72499C0.156695 0.957933 0.0121165 1.2785 0.000512231 1.61727C-0.011092 1.95604 0.111212 2.28574 0.340942 2.53499L5.92694 8.57999L0.340942 14.626C0.111517 14.8752 -0.0105971 15.2047 0.00100528 15.5432C0.0126076 15.8817 0.156994 16.2021 0.402942 16.435C0.524514 16.5497 0.667655 16.6392 0.824064 16.6982C0.980474 16.7572 1.14704 16.7846 1.3141 16.7787C1.48117 16.7728 1.64541 16.7339 1.7973 16.6641C1.94919 16.5942 2.08571 16.495 2.19894 16.372L8.59194 9.45299C8.81077 9.21492 8.93222 8.90335 8.93222 8.57999C8.93222 8.25663 8.81077 7.94506 8.59194 7.70699L2.19994 0.78799Z" fill="#009ADC"/>
            </svg>            
        </a>
    </div>

    <hr style="width: 100%; max-width: 1440px; margin: 20px auto; ">

    <div class="product-container">

        @include('inc.product-card')
        @include('inc.product-card')
        @include('inc.product-card')
        @include('inc.product-card')
        @include('inc.product-card')
        @include('inc.product-card')
        @include('inc.product-card')
        @include('inc.product-card')
        @include('inc.product-card')
        @include('inc.product-card')
    </div>

        
</body>
</html>