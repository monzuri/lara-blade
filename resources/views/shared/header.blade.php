<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/imgs/theme/favicon.svg') }}">
    <link href="{{ asset('/assets/css/style.css?v=1.0.0') }}" rel="stylesheet">
    <title>Ecom - Marketplace Dashboard Template</title>
</head>

<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top"><a class="brand-wrap" href="{{ url('') }}"><img class="logo"
                    src="{{ asset('/assets/imgs/theme/logo.svg') }}" alt="Evara Dashboard"></a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"><i
                        class="text-muted material-icons md-menu_open"></i></button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item active"><a class="menu-link" href="{{ url('') }}"><i
                            class="icon material-icons md-home"></i><span class="text">Dashboard</span></a></li>
                <li class="menu-item has-submenu"><a class="menu-link" href="{{ url('page-products-list') }}"><i
                            class="icon material-icons md-shopping_bag"></i><span class="text">Products</span></a>
                    <div class="submenu"><a href="{{ url('page-products-list') }}">Product List</a><a
                            href="{{ url('page-products-grid') }}">Product grid</a><a
                            href="{{ url('page-products-grid-2') }}">Product
                            grid 2</a><a href="{{ url('page-categories') }}">Categories</a></div>
                </li>
                <li class="menu-item has-submenu"><a class="menu-link" href="{{ url('page-orders-1') }}"><i
                            class="icon material-icons md-shopping_cart"></i><span class="text">Orders</span></a>
                    <div class="submenu"><a href="{{ url('page-orders-1') }}">Order list 1</a><a
                            href="{{ url('page-orders-2') }}">Order
                            list 2</a><a href="{{ url('page-orders-detail') }}">Order detail</a><a
                            href="{{ url('page-orders-tracking') }}">Order tracking</a><a
                            href="{{ url('page-invoice') }}">Invoice</a>
                    </div>
                </li>
                <li class="menu-item has-submenu"><a class="menu-link" href="{{ url('page-sellers-cards') }}"><i
                            class="icon material-icons md-store"></i><span class="text">Sellers</span></a>
                    <div class="submenu"><a href="{{ url('page-sellers-cards') }}">Sellers cards</a><a
                            href="{{ url('page-sellers-list') }}">Sellers list</a><a
                            href="{{ url('page-seller-detail') }}">Seller
                            profile</a></div>
                </li>
                <li class="menu-item has-submenu"><a class="menu-link" href="{{ url('page-form-product-1') }}"><i
                            class="icon material-icons md-add_box"></i><span class="text">Add product</span></a>
                    <div class="submenu"><a href="{{ url('page-form-product-1') }}">Add product 1</a><a
                            href="{{ url('page-form-product-2') }}">Add product 2</a><a
                            href="{{ url('page-form-product-3') }}">Add
                            product 3</a><a href="{{ url('page-form-product-4') }}">Add product 4</a></div>
                </li>
                <li class="menu-item has-submenu"><a class="menu-link" href="{{ url('page-transactions-1') }}"><i
                            class="icon material-icons md-monetization_on"></i><span
                            class="text">Transactions</span></a>
                    <div class="submenu"><a href="{{ url('page-transactions-1') }}">Transaction 1</a><a
                            href="{{ url('page-transactions-2') }}">Transaction 2</a><a
                            href="{{ url('page-transactions-details') }}">Transaction Details</a></div>
                </li>
                <li class="menu-item has-submenu"><a class="menu-link" href="{{ url('#') }}"><i
                            class="icon material-icons md-person"></i><span class="text">Account</span></a>
                    <div class="submenu"><a href="{{ url('/page-account-login') }}">User login</a><a
                            href="{{ url('page-account-register') }}">User registration</a><a
                            href="{{ url('page-error-404') }}">Error
                            404</a></div>
                </li>
                <li class="menu-item"><a class="menu-link" href="{{ url('page-reviews') }}"><i
                            class="icon material-icons md-comment"></i><span class="text">Reviews</span></a></li>
                <li class="menu-item"><a class="menu-link" href="{{ url('page-brands') }}"><i
                            class="icon material-icons md-stars"></i><span class="text">Brands</span></a></li>
                <li class="menu-item"><a class="menu-link" disabled="" href="{{ url('#') }}"><i
                            class="icon material-icons md-pie_chart"></i><span class="text">Statistics</span></a>
                </li>
            </ul>
            <hr>
            <ul class="menu-aside">
                <li class="menu-item has-submenu"><a class="menu-link" href="{{ url('#') }}"><i
                            class="icon material-icons md-settings"></i><span class="text">Settings</span></a>
                    <div class="submenu"><a href="{{ url('page-settings-1') }}">Setting sample 1</a><a
                            href="{{ url('page-settings-2') }}">Setting sample 2</a></div>
                </li>
                <li class="menu-item"><a class="menu-link" href="{{ url('page-blank') }}"><i
                            class="icon material-icons md-local_offer"></i><span class="text"> Starter
                            page</span></a></li>
            </ul>
        </nav>
    </aside>
