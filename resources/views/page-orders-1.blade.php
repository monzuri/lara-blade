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
                    <h2 class="content-title card-title">Order List</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div>
                    <input class="form-control bg-white" type="text" placeholder="Search order ID">
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input class="form-control" type="text" placeholder="Search...">
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>Status</option>
                                <option>Active</option>
                                <option>Disabled</option>
                                <option>Show all</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>Show 20</option>
                                <option>Show 30</option>
                                <option>Show 40</option>
                            </select>
                        </div>
                    </div>
                </header>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                    <th class="text-end" scope="col"> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0901</td>
                                    <td><b>Marvin McKinney</b></td>
                                    <td>marvin@example.com</td>
                                    <td>$9.00</td>
                                    <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                                    <td>03.12.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2323</td>
                                    <td><b>Leslie Alexander</b></td>
                                    <td>leslie@example.com</td>
                                    <td>$46.61</td>
                                    <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                                    <td>21.02.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1233</td>
                                    <td><b>Esther Howard</b></td>
                                    <td>esther@example.com</td>
                                    <td>$12.00</td>
                                    <td><span class="badge rounded-pill alert-danger">Canceled</span></td>
                                    <td>03.07.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1233</td>
                                    <td><b>Esther Howard</b></td>
                                    <td>esther@example.com</td>
                                    <td>$12.00</td>
                                    <td><span class="badge rounded-pill alert-danger">Canceled</span></td>
                                    <td>03.07.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2323</td>
                                    <td><b>Jenny Wilson</b></td>
                                    <td>jenny@example.com</td>
                                    <td>$589.99</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>22.05.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2112</td>
                                    <td><b>Marvin McKinney</b></td>
                                    <td>marvin@example.com</td>
                                    <td>$16.58</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>23.04.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7897</td>
                                    <td><b>Albert Flores</b></td>
                                    <td>albert@example.com</td>
                                    <td>$10.00</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>13.03.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2323</td>
                                    <td><b>Wade Warren</b></td>
                                    <td>wade@example.com</td>
                                    <td>$105.55</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>23.09.2019</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2324</td>
                                    <td><b>Jane Cooper</b></td>
                                    <td>jane@example.com</td>
                                    <td>$710.68</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>28.04.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2325</td>
                                    <td><b>Savannah Nguyen</b></td>
                                    <td>savannah@example.com</td>
                                    <td>$710.68</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>23.03.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2326</td>
                                    <td><b>Guy Hawkins</b></td>
                                    <td>guy@example.com</td>
                                    <td>$767.50</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>28.04.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2327</td>
                                    <td><b>Darrell Steward</b></td>
                                    <td>darrel@example.com</td>
                                    <td>$406.27</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>14.07.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2328</td>
                                    <td><b>Jane Cooper</b></td>
                                    <td>jane@example.com</td>
                                    <td>$601.13</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>18.03.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2329</td>
                                    <td><b>Darlene Robertson</b></td>
                                    <td>deriene@example.com</td>
                                    <td>$948.55</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>03.07.2022</td>
                                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                href="#" data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">View
                                                    detail</a><a class="dropdown-item" href="#">Edit info</a><a
                                                    class="dropdown-item text-danger" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
