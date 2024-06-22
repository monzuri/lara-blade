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
            <div class="row">
                <div class="col-6">
                    <div class="content-header">
                        <h2 class="content-title">Add New Product</h2>
                        <div>
                            <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
                            <button class="btn btn-md rounded font-sm hover-up">Publich</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h6>1. General info</h6>
                                </div>
                                <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Product title</label>
                                        <input class="form-control" type="text" placeholder="Type here">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" placeholder="Type here" rows="4"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Brand name</label>
                                        <select class="form-select">
                                            <option> Adidas</option>
                                            <option> Nike</option>
                                            <option> Puma</option>
                                        </select>
                                    </div>
                                </div>
                                <hr class="mb-4 mt-0">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h6>2. Pricing</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="mb-4">
                                            <label class="form-label">Cost in USD</label>
                                            <input class="form-control" type="text" placeholder="$00.0">
                                        </div>
                                    </div>
                                    <hr class="mb-4 mt-0">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6>3. Category</h6>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="mb-4">
                                                <label class="mb-2 form-check form-check-inline" style="width: 45%;">
                                                    <input class="form-check-input" checked="" name="mycategory"
                                                        type="radio"><span class="form-check-label"> Clothes</span>
                                                </label>
                                                <label class="mb-2 form-check form-check-inline" style="width: 45%;">
                                                    <input class="form-check-input" name="mycategory"
                                                        type="radio"><span class="form-check-label"> Electronics</span>
                                                </label>
                                                <label class="mb-2 form-check form-check-inline" style="width: 45%;">
                                                    <input class="form-check-input" name="mycategory"
                                                        type="radio"><span class="form-check-label"> Sports</span>
                                                </label>
                                                <label class="mb-2 form-check form-check-inline" style="width: 45%;">
                                                    <input class="form-check-input" name="mycategory"
                                                        type="radio"><span class="form-check-label"> Automobiles</span>
                                                </label>
                                                <label class="mb-2 form-check form-check-inline" style="width: 45%;">
                                                    <input class="form-check-input" name="mycategory"
                                                        type="radio"><span class="form-check-label"> Home
                                                        interior</span>
                                                </label>
                                                <label class="mb-2 form-check form-check-inline" style="width: 45%;">
                                                    <input class="form-check-input" name="mycategory"
                                                        type="radio"><span class="form-check-label"> Smartphones</span>
                                                </label>
                                                <label class="mb-2 form-check form-check-inline" style="width: 45%;">
                                                    <input class="form-check-input" name="mycategory"
                                                        type="radio"><span class="form-check-label"> Books</span>
                                                </label>
                                                <label class="mb-2 form-check form-check-inline" style="width: 45%;">
                                                    <input class="form-check-input" name="mycategory"
                                                        type="radio"><span class="form-check-label"> Kids item</span>
                                                </label>
                                                <label class="mb-2 form-check form-check-inline" style="width: 45%;">
                                                    <input class="form-check-input" name="mycategory"
                                                        type="radio"><span class="form-check-label"> Others</span>
                                                </label>
                                            </div>
                                        </div>
                                        <hr class="mb-4 mt-0">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h6>4. Media</h6>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="mb-4">
                                                    <label class="form-label">Images</label>
                                                    <input class="form-control" type="file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
