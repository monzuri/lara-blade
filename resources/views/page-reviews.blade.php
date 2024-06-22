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
                    <h2 class="content-title card-title">Reviews</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div>
                    <input class="form-control bg-white" type="text" placeholder="Search by name">
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input class="form-control" type="text" placeholder="Search...">
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <select class="form-select">
                                <option>Status</option>
                                <option>Active</option>
                                <option>Disabled</option>
                                <option>Show all</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <select class="form-select">
                                <option>Show 20</option>
                                <option>Show 30</option>
                                <option>Show 40</option>
                            </select>
                        </div>
                    </div>
                </header>
                <!-- card-header end//-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </th>
                                    <th>#ID</th>
                                    <th>Product</th>
                                    <th>Name</th>
                                    <th>Rating</th>
                                    <th>Date</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>23</td>
                                    <td><b>A-Line Mini Dress in Blue</b></td>
                                    <td>Devon Lane</td>
                                    <td>
                                        <ul class="rating-stars">
                                            <li class="stars-active" style="width: 60%;"><img
                                                    src="assets/imgs/icons/stars-active.svg" alt="stars"></li>
                                            <li><img src="assets/imgs/icons/starts-disable.svg" alt="stars"></li>
                                        </ul>
                                    </td>
                                    <td>10.03.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                        <!-- dropdown //end-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>24</td>
                                    <td><b>Fashion Woman Bag</b></td>
                                    <td>Guy Hawkins</td>
                                    <td>
                                        <ul class="rating-stars">
                                            <li class="stars-active" style="width: 80%;"><img
                                                    src="assets/imgs/icons/stars-active.svg" alt="stars"></li>
                                            <li><img src="assets/imgs/icons/starts-disable.svg" alt="stars"></li>
                                        </ul>
                                    </td>
                                    <td>04.12.2019</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                        <!-- dropdown //end-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>25</td>
                                    <td><b>Air Jordan 1 Top 3 Sneaker (DS)</b></td>
                                    <td>Savannah Nguyen</td>
                                    <td>
                                        <ul class="rating-stars">
                                            <li class="stars-active" style="width: 90%;"><img
                                                    src="assets/imgs/icons/stars-active.svg" alt="stars"></li>
                                            <li><img src="assets/imgs/icons/starts-disable.svg" alt="stars"></li>
                                        </ul>
                                    </td>
                                    <td>25.05.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                        <!-- dropdown //end-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>26</td>
                                    <td><b>Samsung Galaxy S20 (SM-G980F/DS) Dual SIM</b></td>
                                    <td>Kristin Watson</td>
                                    <td>
                                        <ul class="rating-stars">
                                            <li class="stars-active" style="width: 90%;"><img
                                                    src="assets/imgs/icons/stars-active.svg" alt="stars"></li>
                                            <li><img src="assets/imgs/icons/starts-disable.svg" alt="stars"></li>
                                        </ul>
                                    </td>
                                    <td>01.06.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                        <!-- dropdown //end-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>27</td>
                                    <td><b>Macbook Pro 16 inch (2022 ) For Sale</b></td>
                                    <td>Jane Cooper</td>
                                    <td>
                                        <ul class="rating-stars">
                                            <li class="stars-active" style="width: 100%;"><img
                                                    src="assets/imgs/icons/stars-active.svg" alt="stars"></li>
                                            <li><img src="assets/imgs/icons/starts-disable.svg" alt="stars"></li>
                                        </ul>
                                    </td>
                                    <td>13.03.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                        <!-- dropdown //end-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>28</td>
                                    <td><b>Gaming Chair, local pickup only</b></td>
                                    <td>Courtney Henry</td>
                                    <td>
                                        <ul class="rating-stars">
                                            <li class="stars-active" style="width: 100%;"><img
                                                    src="assets/imgs/icons/stars-active.svg" alt="stars"></li>
                                            <li><img src="assets/imgs/icons/starts-disable.svg" alt="stars"></li>
                                        </ul>
                                    </td>
                                    <td>21.02.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                        <!-- dropdown //end-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>29</td>
                                    <td><b>Coach Tabby 26 for sale</b></td>
                                    <td>Ralph Edwards</td>
                                    <td>
                                        <ul class="rating-stars">
                                            <li class="stars-active" style="width: 90%;"><img
                                                    src="assets/imgs/icons/stars-active.svg" alt="stars"></li>
                                            <li><img src="assets/imgs/icons/starts-disable.svg" alt="stars"></li>
                                        </ul>
                                    </td>
                                    <td>23.03.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                        <!-- dropdown //end-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>30</td>
                                    <td><b>Oneplus 7 Pro GM1910 256GB</b></td>
                                    <td>Courtney Henry</td>
                                    <td>
                                        <ul class="rating-stars">
                                            <li class="stars-active" style="width: 70%;"><img
                                                    src="assets/imgs/icons/stars-active.svg" alt="stars"></li>
                                            <li><img src="assets/imgs/icons/starts-disable.svg" alt="stars"></li>
                                        </ul>
                                    </td>
                                    <td>20.02.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                        <!-- dropdown //end-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>31</td>
                                    <td><b>DJI Mavic Pro 2</b></td>
                                    <td>Theresa Webb</td>
                                    <td>
                                        <ul class="rating-stars">
                                            <li class="stars-active" style="width: 20%;"><img
                                                    src="assets/imgs/icons/stars-active.svg" alt="stars"></li>
                                            <li><img src="assets/imgs/icons/starts-disable.svg" alt="stars"></li>
                                        </ul>
                                    </td>
                                    <td>10.03.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                        <!-- dropdown //end-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>32</td>
                                    <td><b>Heimer Miller Sofa (Mint Condition)</b></td>
                                    <td>Darrell Steward</td>
                                    <td>
                                        <ul class="rating-stars">
                                            <li class="stars-active" style="width: 80%;"><img
                                                    src="assets/imgs/icons/stars-active.svg" alt="stars"></li>
                                            <li><img src="assets/imgs/icons/starts-disable.svg" alt="stars"></li>
                                        </ul>
                                    </td>
                                    <td>10.04.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                        <!-- dropdown //end-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>33</td>
                                    <td><b>Dell XPS 13 9380, 13.3" 4K UHD (3840X2160)</b></td>
                                    <td>Leslie Alexander</td>
                                    <td>
                                        <ul class="rating-stars">
                                            <li class="stars-active" style="width: 50%;"><img
                                                    src="assets/imgs/icons/stars-active.svg" alt="stars"></li>
                                            <li><img src="assets/imgs/icons/starts-disable.svg" alt="stars"></li>
                                        </ul>
                                    </td>
                                    <td>25.05.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                        <!-- dropdown //end-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>34</td>
                                    <td><b>Fashion Woman Bag</b></td>
                                    <td>Esther Howard</td>
                                    <td>
                                        <ul class="rating-stars">
                                            <li class="stars-active" style="width: 100%;"><img
                                                    src="assets/imgs/icons/stars-active.svg" alt="stars"></li>
                                            <li><img src="assets/imgs/icons/starts-disable.svg" alt="stars"></li>
                                        </ul>
                                    </td>
                                    <td>07.04.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                        <!-- dropdown //end-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>35</td>
                                    <td><b>iPad Pro 2017 Model</b></td>
                                    <td>Savannah Nguyen</td>
                                    <td>
                                        <ul class="rating-stars">
                                            <li class="stars-active" style="width: 100%;"><img
                                                    src="assets/imgs/icons/stars-active.svg" alt="stars"></li>
                                            <li><img src="assets/imgs/icons/starts-disable.svg" alt="stars"></li>
                                        </ul>
                                    </td>
                                    <td>10.10.2019</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                        <!-- dropdown //end-->
                                        <!-- table-responsive//end-->
                                        <!-- card-body end//-->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
