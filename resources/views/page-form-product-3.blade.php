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
                <div class="col-9">
                    <div class="content-header">
                        <h2 class="content-title">Add New Product</h2>
                        <div>
                            <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
                            <button class="btn btn-md rounded font-sm hover-up">Publich</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-4">
                                <label class="form-label" for="product_title">Product title</label>
                                <input class="form-control" id="product_title" type="text" placeholder="Type here">
                            </div>
                            <div class="row gx-3">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label" for="product_sku">SKU</label>
                                    <input class="form-control" id="product_sku" type="text" placeholder="Type here">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label" for="product_color">Color</label>
                                    <input class="form-control" id="product_color" type="text"
                                        placeholder="Type here">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label" for="product_size">Size</label>
                                    <input class="form-control" id="product_size" type="text"
                                        placeholder="Type here">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="product_brand">Brand</label>
                                <input class="form-control" id="product_brand" type="text" placeholder="Type here">
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div>
                                <label class="form-label">Description</label>
                                <textarea class="form-control" placeholder="Type here" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div>
                                <label class="form-label">Images</label>
                                <input class="form-control" type="file">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-4">
                                <label class="form-label">Price</label>
                                <input class="form-control" type="text" placeholder="Type here">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option>Published</option>
                                    <option>Draft</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Tags</label>
                                <input class="form-control" type="text" placeholder="Type here">
                            </div><a class="font-xs hover-up mr-15" href="#"><i
                                    class="font-xs material-icons md-close text-body"></i> Tech</a><a
                                class="font-xs hover-up mr-15" href="#"><i
                                    class="font-xs material-icons md-close text-body"></i> Mobile</a><a
                                class="font-xs hover-up mr-15" href="#"><i
                                    class="font-xs material-icons md-close text-body"></i> Apple</a>
                            <hr>
                            <h5 class="mb-3">Categories</h5>
                            <div class="form-check">
                                <input class="form-check-input" id="product-cat" type="checkbox" value="">
                                <label class="form-check-label" for="product-cat"> Shirt</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="product-cat-1" type="checkbox" value="">
                                <label class="form-check-label" for="product-cat-1"> T-Shirt</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="product-cat-2" type="checkbox" value="">
                                <label class="form-check-label" for="product-cat-2"> Sneakers</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="product-cat-3" type="checkbox" value="">
                                <label class="form-check-label" for="product-cat-3"> Joggers</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="product-cat-4" type="checkbox" value="">
                                <label class="form-check-label" for="product-cat-4"> Vests</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="product-cat-5" type="checkbox" value="">
                                <label class="form-check-label" for="product-cat-5"> Knitwear</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="product-cat-8" type="checkbox" value="">
                                <label class="form-check-label" for="product-cat-8"> Shorts</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
