<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from themeholy.com/html/invar/demo2/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2024 20:02:30 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MagicShop -  Factory dark</title>
    <meta name="author" content="themeholy">
    <meta name="description" content="MagicShop -  Factory dark">
    <meta name="keywords" content="MagicShop -  Factory dark">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link href="{{ asset('images/logob.svg') }}" rel="icon">
    <link rel="manifest" href="Factory/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="Factory/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Factory/css/app.min.css">
    <link rel="stylesheet" href="Factory/css/style.css">
</head>

<body>
    <div class="invoice-container-wrap">
        <div class="invoice-container">
            <main>
                <div class="themeholy-invoice invoice_style2 dark_mode">
                    <div class="download-inner" id="download_section">
                        <header class="themeholy-header header-layout1">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">

                                    @foreach ($orders as $order)
                                    <p class="mb-0"><b>INVOICE NO: {{ $order->id }}</b></p>
                                </div>
                                <div class="col-auto">
                                    <div class="logoFactory"><a href="/">MagicShop</a></div>
                                </div>
                                <p>{{ $order->OrderItem }}</p>
                            </div>
                            <div class="header-bottom">
                                <div class="row align-items-center justify-content-between">

                                    <div class="col-auto">
                                        <div class="header-bottom_left">
                                            <p><b>Guest Name : </b>{{ $order->Full_Name }}</p>
                                            <div class="shape"></div>
                                            <div class="shape"></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="header-bottom_right">
                                            <div class="shape"></div>
                                            <div class="shape"></div>
                                            <p><b>Date: </b>{{ $order->created_at->format('Y-m-d') }}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </header>
                        <br>


                        <div class="row gx-0">
                            <div class="col-6">
                                <div class="address-box address-left"><b>Hosted Information:</b>
                                    <address>{{ $order->Full_Name }}<br>Phone: {{ $order->telephone_number }}<br>Email:
                                        {{ $order->email }}<br></address>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="address-box address-right"><b>Hotel Details:</b>
                                    <address>{{ $order->shipping_address }}<br> <br>
                                    {{ $order->zip_code }}</address>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <table class="invoice-table">

                            <thead>
                                <tr>
                                    <th>Products</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($OrderItems as $OrderItem)
                                <tr>
                                    <td>{{ $OrderItem->product->name }}</td>
                                    <td>x {{ $OrderItem->quantity }}</td>
                                    <td>${{ $OrderItem->unit_price }}</td>
                                </tr>
                                <tr>

                                    <td colspan="3">&nbsp;</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row justify-content-between">
                            <div class="col-auto">

                            </div>
                            <div class="col-auto">
                                <table class="total-table">
                                    @foreach ($orders as $item)
                                   <tr>
                                        <th>Total:</th>
                                        <td>${{ $item->total_cost }}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        @foreach ($orders as $item)
                        <p class="company-address"><b>Invar Inc:</b><br>{{ $item->shipping_address }}</p>
                        @endforeach
                        <p class="invoice-note mt-3 text-center"><svg width="14" height="18" viewBox="0 0 14 18"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.64581 13.7917H10.3541V12.5417H3.64581V13.7917ZM3.64581 10.25H10.3541V9.00002H3.64581V10.25ZM1.58331 17.3334C1.24998 17.3334 0.958313 17.2084 0.708313 16.9584C0.458313 16.7084 0.333313 16.4167 0.333313 16.0834V1.91669C0.333313 1.58335 0.458313 1.29169 0.708313 1.04169C0.958313 0.791687 1.24998 0.666687 1.58331 0.666687H9.10415L13.6666 5.22919V16.0834C13.6666 16.4167 13.5416 16.7084 13.2916 16.9584C13.0416 17.2084 12.75 17.3334 12.4166 17.3334H1.58331ZM8.47915 5.79169V1.91669H1.58331V16.0834H12.4166V5.79169H8.47915ZM1.58331 1.91669V5.79169V1.91669V16.0834V1.91669Z"
                                    fill="#ff014fff" />
                            </svg> <b>NOTE: </b>Thank you for embarking on a magical journey with MagicShop!</p>
                    </div>
                    <div class="invoice-buttons">

                        <button class="print_btn"><svg width="20" height="21"
                                viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.25 13H3.75C3.38542 13 3.08594 13.1172 2.85156 13.3516C2.61719 13.5859 2.5 13.8854 2.5 14.25V19.25C2.5 19.6146 2.61719 19.9141 2.85156 20.1484C3.08594 20.3828 3.38542 20.5 3.75 20.5H16.25C16.6146 20.5 16.9141 20.3828 17.1484 20.1484C17.3828 19.9141 17.5 19.6146 17.5 19.25V14.25C17.5 13.8854 17.3828 13.5859 17.1484 13.3516C16.9141 13.1172 16.6146 13 16.25 13ZM16.25 19.25H3.75V14.25H16.25V19.25ZM17.5 8V3.27344C17.5 2.90885 17.3828 2.60938 17.1484 2.375L15.625 0.851562C15.3646 0.617188 15.0651 0.5 14.7266 0.5H5C4.29688 0.526042 3.71094 0.773438 3.24219 1.24219C2.77344 1.71094 2.52604 2.29688 2.5 3V8C1.79688 8.02604 1.21094 8.27344 0.742188 8.74219C0.273438 9.21094 0.0260417 9.79688 0 10.5V14.875C0.0260417 15.2656 0.234375 15.474 0.625 15.5C1.01562 15.474 1.22396 15.2656 1.25 14.875V10.5C1.25 10.1354 1.36719 9.83594 1.60156 9.60156C1.83594 9.36719 2.13542 9.25 2.5 9.25H17.5C17.8646 9.25 18.1641 9.36719 18.3984 9.60156C18.6328 9.83594 18.75 10.1354 18.75 10.5V14.875C18.776 15.2656 18.9844 15.474 19.375 15.5C19.7656 15.474 19.974 15.2656 20 14.875V10.5C19.974 9.79688 19.7266 9.21094 19.2578 8.74219C18.7891 8.27344 18.2031 8.02604 17.5 8ZM16.25 8H3.75V3C3.75 2.63542 3.86719 2.33594 4.10156 2.10156C4.33594 1.86719 4.63542 1.75 5 1.75H14.7266L16.25 3.27344V8ZM16.875 10.1875C16.3021 10.2396 15.9896 10.5521 15.9375 11.125C15.9896 11.6979 16.3021 12.0104 16.875 12.0625C17.4479 12.0104 17.7604 11.6979 17.8125 11.125C17.7604 10.5521 17.4479 10.2396 16.875 10.1875Z"
                                    fill="#00C764" />
                            </svg></button>


                        <a href="/">
                            <button id="download_btn" class="download_btn">
                                <svg   xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 100 100">
                                    <path fill="#fb7369" d="M91.974,39.775c-0.004-0.004-0.008-0.015-0.012-0.017C79.987,29.693,67.912,20.26,57.173,13.347	c-1.183-0.761-2.431-1.415-3.762-1.857c-0.02-0.007-0.04-0.013-0.06-0.02c-1.073-0.352-2.192-0.529-3.312-0.536v-0.003	c-0.013,0-0.026,0.001-0.039,0.002c-0.013,0-0.026-0.002-0.039-0.002v0.003c-1.12,0.008-2.239,0.185-3.312,0.536	c-0.02,0.007-0.04,0.013-0.06,0.02c-1.331,0.442-2.58,1.095-3.762,1.857C32.088,20.26,20.013,29.693,8.037,39.757	c-0.003,0.003-0.008,0.014-0.012,0.017c-1.803,1.483-2.466,3.788-1.454,5.491c1.144,1.924,3.987,2.344,6.35,0.939	c0.117-0.07,0.215-0.156,0.326-0.232c12.269,0.954,24.506,1.419,36.713,1.428v0.001c0.013,0,0.026,0,0.039,0s0.026,0,0.039,0v-0.001	c12.208-0.01,24.445-0.475,36.713-1.428c0.11,0.076,0.208,0.162,0.326,0.232c2.363,1.405,5.206,0.985,6.35-0.939	C94.441,43.563,93.777,41.257,91.974,39.775z"></path><path fill="#c9dcf4" d="M86.755,45.974l0.008-0.004c-13.426-7.7-25.521-15.401-35.778-21.726c-0.653-0.403-1.481-0.409-2.142-0.018	c-11.11,6.584-22.981,14.07-35.59,21.747c-0.002,0-0.004,0-0.006,0c-0.004,0.003-0.007,0.005-0.011,0.008	c0.865,11.972,2.129,23.603,3.643,34.818c0.803,4.868,4.069,8.202,8.8,8.202h48.641c4.731,0,7.774-3.539,8.8-8.202	c2.118-11.675,3.372-23.263,3.722-34.761C86.814,46.016,86.785,45.995,86.755,45.974z"></path><path fill="#4a254b" d="M50,74.104c3.655,0,6.664-2.76,7.06-6.309C57.108,67.357,56.803,67,56.362,67c-2.45,0-10.274,0-12.724,0	c-0.44,0-0.746,0.357-0.697,0.795C43.335,71.344,46.345,74.104,50,74.104z"></path><circle cx="32.927" cy="59.747" r="6.991" fill="#fff"></circle><circle cx="32.927" cy="59.747" r="3.178" fill="#4a254b"></circle><circle cx="67.073" cy="59.747" r="6.991" fill="#fff"></circle><circle cx="67.073" cy="59.747" r="3.178" fill="#4a254b"></circle><path fill="#fb7369" d="M81,33H69V20.691C69,19.205,70.205,18,71.691,18h6.617C79.795,18,81,19.205,81,20.691V33z"></path>
                                    </svg>
                                    width="25" height="19"
                                viewBox="0 0 25 19" fill="none"

                        </button>
                        </a>

                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="Factory/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="Factory/js/app.min.js"></script>
    <script src="Factory/js/main.js"></script>
</body>
<!-- Mirrored from themeholy.com/html/invar/demo2/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2024 20:02:37 GMT -->

</html>
