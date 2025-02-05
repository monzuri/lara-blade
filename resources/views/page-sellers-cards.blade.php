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
                <h2 class="content-title">Sellers cards</h2>
                <div><a class="btn btn-primary" href="#"><i class="material-icons md-plus"></i> Create new</a></div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input class="form-control" type="text" placeholder="Search...">
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>Show 20</option>
                                <option>Show 30</option>
                                <option>Show 40</option>
                                <option>Show all</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>Status: all</option>
                                <option>Active only</option>
                                <option>Disabled</option>
                            </select>
                        </div>
                    </div>
                </header>
                <!-- card-header end//-->
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header"><img class="img-md img-avatar"
                                        src="assets/imgs/people/avatar1.jpg" alt="User pic"></div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">Mary Sandra</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #409</p>
                                        <p>mary90@example.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col.//-->
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header"><img class="img-md img-avatar"
                                        src="assets/imgs/people/avatar2.jpg" alt="User pic"></div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">Leslie Alexander</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #478</p>
                                        <p>leslie@example.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col.//-->
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header"><img class="img-md img-avatar"
                                        src="assets/imgs/people/avatar3.jpg" alt="User pic"></div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">Leslie Alexander</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #478</p>
                                        <p>leslie@example.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col.//-->
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header"><img class="img-md img-avatar"
                                        src="assets/imgs/people/avatar4.jpg" alt="User pic"></div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">Floyd Miles</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #171</p>
                                        <p>fedor12@example.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col.//-->
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header"><img class="img-md img-avatar"
                                        src="assets/imgs/people/avatar1.jpg" alt="User pic"></div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">John Alexander</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #987</p>
                                        <p>john@mymail.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col.//-->
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header"><img class="img-md img-avatar"
                                        src="assets/imgs/people/avatar3.jpg" alt="User pic"></div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">Albert Flores</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #478</p>
                                        <p>leslie@example.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col.//-->
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header"><img class="img-md img-avatar"
                                        src="assets/imgs/people/avatar4.jpg" alt="User pic"></div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">Leslie Alexander</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #478</p>
                                        <p>leslie@example.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col.//-->
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header"><img class="img-md img-avatar"
                                        src="assets/imgs/people/avatar1.jpg" alt="User pic"></div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">Marx Alberto</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #478</p>
                                        <p>leslie@example.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col.//-->
                        <!-- row.//-->
                        <!-- card-body end//-->
                    </div>
                </div>
            </div>
            <!-- card end//-->
            <div class="pagination-area mt-15 mb-50">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">16</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="material-icons md-chevron_right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </section>
    @endsection
