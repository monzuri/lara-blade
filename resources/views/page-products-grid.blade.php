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
                    <h2 class="content-title card-title">Products grid</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div><a class="btn btn-light rounded font-md" href="#">Export</a><a
                        class="btn btn-light rounded font-md" href="#">Import</a><a
                        class="btn btn-primary btn-sm rounded" href="#">Create new</a></div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input class="form-control" type="text" placeholder="Search...">
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>All category</option>
                                <option>Electronics</option>
                                <option>Clothings</option>
                                <option>Something else</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>Latest added</option>
                                <option>Cheap first</option>
                                <option>Most viewed</option>
                            </select>
                        </div>
                    </div>
                </header>
                <!-- card-header end//-->
                <div class="card-body">
                    <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5">
                        <div class="col">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/1.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title text-truncate" href="#">Just another product
                                        name</a>
                                    <div class="price mb-2">$179.00</div>
                                    <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i
                                            class="material-icons md-edit"></i> Edit</a><a
                                        class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                            class="material-icons md-delete_forever"></i> Delete</a>
                                </div>
                            </div>
                            <!-- card-product  end//-->
                            <!-- col.//-->
                        </div>
                        <div class="col">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/2.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title text-truncate" href="#">Brown Winter Jacket
                                        for Men</a>
                                    <div class="price mb-2">$179.00</div>
                                    <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i
                                            class="material-icons md-edit"></i> Edit</a><a
                                        class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                            class="material-icons md-delete_forever"></i> Delete</a>
                                </div>
                            </div>
                            <!-- card-product  end//-->
                            <!-- col.//-->
                        </div>
                        <div class="col">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/3.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title text-truncate" href="#">Jeans short new
                                        model</a>
                                    <div class="price mb-2">$179.00</div>
                                    <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i
                                            class="material-icons md-edit"></i> Edit</a><a
                                        class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                            class="material-icons md-delete_forever"></i> Delete</a>
                                </div>
                            </div>
                            <!-- card-product  end//-->
                            <!-- col.//-->
                        </div>
                        <div class="col">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/4.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title text-truncate" href="#">Travel Bag XL</a>
                                    <div class="price mb-2">$179.00</div>
                                    <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i
                                            class="material-icons md-edit"></i> Edit</a><a
                                        class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                            class="material-icons md-delete_forever"></i> Delete</a>
                                </div>
                            </div>
                            <!-- card-product  end//-->
                            <!-- col.//-->
                        </div>
                        <div class="col">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/5.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title text-truncate" href="#">Just another product
                                        name</a>
                                    <div class="price mb-2">$179.00</div>
                                    <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i
                                            class="material-icons md-edit"></i> Edit</a><a
                                        class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                            class="material-icons md-delete_forever"></i> Delete</a>
                                </div>
                            </div>
                            <!-- card-product  end//-->
                            <!-- col.//-->
                        </div>
                        <div class="col">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/6.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title text-truncate" href="#">Just another product
                                        name</a>
                                    <div class="price mb-2">$179.00</div>
                                    <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i
                                            class="material-icons md-edit"></i> Edit</a><a
                                        class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                            class="material-icons md-delete_forever"></i> Delete</a>
                                </div>
                            </div>
                            <!-- card-product  end//-->
                            <!-- col.//-->
                        </div>
                        <div class="col">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/7.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title text-truncate" href="#">Just another product
                                        name</a>
                                    <div class="price mb-2">$179.00</div>
                                    <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i
                                            class="material-icons md-edit"></i> Edit</a><a
                                        class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                            class="material-icons md-delete_forever"></i> Delete</a>
                                </div>
                            </div>
                            <!-- card-product  end//-->
                            <!-- col.//-->
                        </div>
                        <div class="col">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/8.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title text-truncate" href="#">Apple Airpods
                                        CB-133</a>
                                    <div class="price mb-2">$179.00</div>
                                    <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i
                                            class="material-icons md-edit"></i> Edit</a><a
                                        class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                            class="material-icons md-delete_forever"></i> Delete</a>
                                </div>
                            </div>
                            <!-- card-product  end//-->
                            <!-- col.//-->
                        </div>
                        <div class="col">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/9.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title text-truncate" href="#">Apple Airpods
                                        CB-133</a>
                                    <div class="price mb-2">$179.00</div>
                                    <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i
                                            class="material-icons md-edit"></i> Edit</a><a
                                        class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                            class="material-icons md-delete_forever"></i> Delete</a>
                                </div>
                            </div>
                            <!-- card-product  end//-->
                            <!-- col.//-->
                        </div>
                        <div class="col">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/10.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title text-truncate" href="#">Apple Airpods
                                        CB-133</a>
                                    <div class="price mb-2">$179.00</div>
                                    <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i
                                            class="material-icons md-edit"></i> Edit</a><a
                                        class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                            class="material-icons md-delete_forever"></i> Delete</a>
                                </div>
                            </div>
                            <!-- card-product  end//-->
                            <!-- col.//-->
                            <!-- row.//-->
                            <!-- card-body end//-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- card end//-->
            <div class="pagination-area mt-30 mb-50">
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
