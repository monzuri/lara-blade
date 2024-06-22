@extends('Layout.master')
@section('content')
    <main class="main-wrap">
        <header class="main-header navbar">
            <div class="col-search">
                <form class="searchform">
                    <div class="input-group">
                        <input class="form-control" list="search_terms" type="text" placeholder="Search term">
                        <button class="btn btn-light bg" type="button"><i class="material-icons md-search"></i></button>
                    </div>
                    <datalist id="search_terms">
                        <option value="Products"></option>
                        <option value="New orders"></option>
                        <option value="Apple iphone"></option>
                        <option value="Ahmed Hassan"></option>
                    </datalist>
                </form>
            </div>
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"><i
                        class="material-icons md-apps"></i></button>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link btn-icon" href="#"><i
                                class="material-icons md-notifications animation-shake"></i><span
                                class="badge rounded-pill">3</span></a></li>
                    <li class="nav-item"><a class="nav-link btn-icon darkmode" href="#"><i
                                class="material-icons md-nights_stay"></i></a></li>
                    <li class="nav-item"><a class="requestfullscreen nav-link btn-icon" href="#"><i
                                class="material-icons md-cast"></i></a></li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle" id="dropdownLanguage" data-bs-toggle="dropdown"
                            href="#" aria-expanded="false"><i class="material-icons md-public"></i></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage"><a
                                class="dropdown-item text-brand" href="#"><img src="assets/imgs/theme/flag-us.png"
                                    alt="English">English</a><a class="dropdown-item" href="#"><img
                                    src="assets/imgs/theme/flag-fr.png" alt="Français">Fran&ccedil;ais</a><a
                                class="dropdown-item" href="#"><img src="assets/imgs/theme/flag-jp.png"
                                    alt="Français">&#x65E5;&#x672C;&#x8A9E;</a><a class="dropdown-item" href="#"><img
                                    src="assets/imgs/theme/flag-cn.png" alt="Français">&#x4E2D;&#x56FD;&#x4EBA;</a></div>
                    </li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle" id="dropdownAccount" data-bs-toggle="dropdown"
                            href="#" aria-expanded="false"><img class="img-xs rounded-circle"
                                src="assets/imgs/people/avatar2.jpg" alt="User"></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount"><a
                                class="dropdown-item" href="#"><i class="material-icons md-perm_identity"></i>Edit
                                Profile</a><a class="dropdown-item" href="#"><i
                                    class="material-icons md-settings"></i>Account Settings</a><a class="dropdown-item"
                                href="#"><i class="material-icons md-account_balance_wallet"></i>Wallet</a><a
                                class="dropdown-item" href="#"><i class="material-icons md-receipt"></i>Billing</a><a
                                class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Help
                                center</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#"><i
                                    class="material-icons md-exit_to_app"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Order Tracking</h2>
                    <p>Details for Order ID: 3453012</p>
                </div>
            </div>
            <div class="card">
                <header class="card-header">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 mb-lg-0 mb-15"><span><i
                                    class="material-icons md-calendar_today"></i><b>Wed, Aug 13, 2022,
                                    4:34PM</b></span><br><small class="text-muted">Order ID: 3453012</small><br><small
                                class="text-muted">Your order has been delivered</small></div>
                        <div class="col-lg-6 col-md-6 ms-auto text-md-end">
                            <select class="form-select d-inline-block mb-lg-0 mb-15 mw-200 mr-15">
                                <option>Change status</option>
                                <option>Awaiting payment</option>
                                <option>Confirmed</option>
                                <option>Shipped</option>
                                <option>Delivered</option>
                            </select><a class="btn btn-primary" href="#">Screenshot</a><a
                                class="btn btn-secondary print ms-2" href="#"><i
                                    class="icon material-icons md-print mr-5"></i>Print</a>
                        </div>
                    </div>
                </header>
                <div class="card-body">
                    <div class="order-tracking mb-100">
                        <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between">
                            <div class="step completed">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="material-icons md-shopping_cart"></i></div>
                                </div>
                                <h4 class="step-title">Confirmed Order</h4><small class="text-muted text-sm">15 March
                                    2022</small>
                            </div>
                            <div class="step completed">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="material-icons md-settings"></i></div>
                                </div>
                                <h4 class="step-title">Processing Order</h4><small class="text-muted text-sm">16 March
                                    2022</small>
                            </div>
                            <div class="step completed">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="material-icons md-shopping_bag"></i></div>
                                </div>
                                <h4 class="step-title">Quality Check</h4><small class="text-muted text-sm">17 March
                                    2022</small>
                            </div>
                            <div class="step">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="material-icons md-local_shipping"></i></div>
                                </div>
                                <h4 class="step-title">Product Dispatched</h4><small class="text-muted text-sm">18 March
                                    2022</small>
                            </div>
                            <div class="step">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="material-icons md-check_circle"></i></div>
                                </div>
                                <h4 class="step-title">Product Delivered</h4><small class="text-muted text-sm">20 March
                                    2022</small>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-50 mt-20 order-info-wrap text-center">
                        <div class="col-md-4">
                            <article class="icontext align-items-start">
                                <div class="text">
                                    <h6 class="mb-1">Customer</h6>
                                    <p class="mb-1">John Alexander<br> alex@example.com<br> +998 99 22123456</p><a
                                        href="#">View profile</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="icontext align-items-start">
                                <div class="text">
                                    <h6 class="mb-1">Order info</h6>
                                    <p class="mb-1">Shipping: Fargo express<br> Pay method: card<br> Status: new</p><a
                                        href="#">Download info</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="icontext align-items-start">
                                <div class="text">
                                    <h6 class="mb-1">Deliver to</h6>
                                    <p class="mb-1">City: Tashkent, Uzbekistan<br>Block A, House 123, Floor 2<br> Po Box
                                        10000</p><a href="#">View profile</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center mt-100 mb-50"><a class="btn btn-primary"
                                href="page-orders-detail.html">View Order Details</a></div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
