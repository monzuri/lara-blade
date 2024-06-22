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
                <h2 class="content-title">Site settings</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row gx-5">
                        <aside class="col-lg-3 border-end">
                            <nav class="nav nav-pills flex-lg-column mb-4"><a class="nav-link active" aria-current="page"
                                    href="#">General</a><a class="nav-link" href="#">Moderators</a><a
                                    class="nav-link" href="#">Admin account</a><a class="nav-link"
                                    href="#">SEO settings</a><a class="nav-link" href="#">Mail settings</a><a
                                    class="nav-link" href="#">Newsletter</a></nav>
                        </aside>
                        <div class="col-lg-9">
                            <section class="content-body p-xl-4">
                                <form>
                                    <div class="row border-bottom mb-4 pb-4">
                                        <div class="col-md-5">
                                            <h5>Website name</h5>
                                            <p class="text-muted" style="max-width:90%">Supported languages of all pages
                                                including each product lorem ipsum dolor sit amet, consectetur adipisicing
                                            </p>
                                        </div>
                                        <!-- col.//-->
                                        <div class="col-md-7">
                                            <div class="mb-3">
                                                <label class="form-label">Home page title</label>
                                                <input class="form-control" type="text" name=""
                                                    placeholder="Type here">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control" type="text"></textarea>
                                            </div>
                                        </div>
                                        <!-- col.//-->
                                        <!-- row.//-->
                                    </div>
                                    <div class="row border-bottom mb-4 pb-4">
                                        <div class="col-md-5">
                                            <h5>Access</h5>
                                            <p class="text-muted" style="max-width:90%">
                                                Give access of all pages including each product lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                            </p>
                                        </div>
                                        <!-- col.//-->
                                        <div class="col-md-7">
                                            <label class="mb-2 form-check">
                                                <input class="form-check-input" checked="" name="mycheck_a1"
                                                    type="radio"><span class="form-check-label"> All registration is
                                                    enabled</span>
                                            </label>
                                            <label class="mb-2 form-check">
                                                <input class="form-check-input" name="mycheck_a1" type="radio"><span
                                                    class="form-check-label"> Only buyers is enabled</span>
                                            </label>
                                            <label class="mb-2 form-check">
                                                <input class="form-check-input" name="mycheck_a1" type="radio"><span
                                                    class="form-check-label"> Only buyers is enabled</span>
                                            </label>
                                            <label class="mb-2 form-check">
                                                <input class="form-check-input" name="mycheck_a1" type="radio"><span
                                                    class="form-check-label"> Stop new shop registration</span>
                                            </label>
                                        </div>
                                        <!-- col.//-->
                                        <!-- row.//-->
                                    </div>
                                    <div class="row border-bottom mb-4 pb-4">
                                        <div class="col-md-5">
                                            <h5>Notification</h5>
                                            <p class="text-muted" style="max-width:90%">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing something about this</p>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="mycheck_notify" type="checkbox"
                                                    value="" checked="">
                                                <label class="form-check-label" for="mycheck_notify">Send notification on
                                                    each user registration</label>
                                            </div>
                                            <div class="mb-3">
                                                <input class="form-control" placeholder="Text">
                                            </div>
                                        </div>
                                        <!-- col.//-->
                                        <!-- row.//-->
                                    </div>
                                    <div class="row border-bottom mb-4 pb-4">
                                        <div class="col-md-5">
                                            <h5>Currency</h5>
                                            <p class="text-muted" style="max-width:90%"> Lorem ipsum dolor sit amet,
                                                consectetur adipisicing something about this</p>
                                        </div>
                                        <!-- col.//-->
                                        <div class="col-md-7">
                                            <div class="mb-3" style="max-width: 200px">
                                                <label class="form-label">Main currency</label>
                                                <select class="form-select">
                                                    <option>US Dollar</option>
                                                    <option>EU Euro</option>
                                                    <option>RU Ruble</option>
                                                    <option>UZ Som</option>
                                                </select>
                                            </div>
                                            <div class="mb-3" style="max-width: 200px">
                                                <label class="form-label">Supported curencies</label>
                                                <select class="form-select">
                                                    <option>US dollar</option>
                                                    <option>RUBG russia</option>
                                                    <option>INR india</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- col.//-->
                                        <!-- row.//-->
                                    </div>
                                </form>
                                <button class="btn btn-primary" type="submit">Save all changes</button>
                                <button class="btn btn-light rounded font-md" type="reset">Reset</button>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
