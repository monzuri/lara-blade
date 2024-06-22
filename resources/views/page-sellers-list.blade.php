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
                <h2 class="content-title">Sellers list</h2>
                <div><a class="btn btn-primary" href="#"><i class="material-icons md-plus"></i> Create new</a></div>
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
                                    <th>Seller</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Registered</th>
                                    <th class="text-end"> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="40%"><a class="itemside" href="#">
                                            <div class="left"><img class="img-sm img-avatar"
                                                    src="assets/imgs/people/avatar1.jpg" alt="Userpic"></div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6><small class="text-muted">Seller
                                                    ID: #439</small>
                                            </div>
                                        </a></td>
                                    <td>eleanor2022@example.com</td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a></td>
                                </tr>
                                <tr>
                                    <td width="40%"><a class="itemside" href="#">
                                            <div class="left"><img class="img-sm img-avatar"
                                                    src="assets/imgs/people/avatar2.jpg" alt="Userpic"></div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Mary Monasa</h6><small class="text-muted">Seller
                                                    ID: #129</small>
                                            </div>
                                        </a></td>
                                    <td>monalisa@example.com</td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>11.07.2022</td>
                                    <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a></td>
                                </tr>
                                <tr>
                                    <td width="40%"><a class="itemside" href="#">
                                            <div class="left"><img class="img-sm img-avatar"
                                                    src="assets/imgs/people/avatar3.jpg" alt="Userpic"></div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Jonatan Ive</h6><small class="text-muted">Seller
                                                    ID: #400</small>
                                            </div>
                                        </a></td>
                                    <td>mrjohn@example.com</td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a></td>
                                </tr>
                                <tr>
                                    <td width="40%"><a class="itemside" href="#">
                                            <div class="left"><img class="img-sm img-avatar"
                                                    src="assets/imgs/people/avatar4.jpg" alt="Userpic"></div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6><small class="text-muted">Seller
                                                    ID: #439</small>
                                            </div>
                                        </a></td>
                                    <td>eleanor2022@example.com</td>
                                    <td><span class="badge rounded-pill alert-danger">Inactive</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a></td>
                                </tr>
                                <tr>
                                    <td width="40%"><a class="itemside" href="#">
                                            <div class="left"><img class="img-sm img-avatar"
                                                    src="assets/imgs/people/avatar1.jpg" alt="Userpic"></div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Albert Pushkin</h6><small class="text-muted">Seller
                                                    ID: #439</small>
                                            </div>
                                        </a></td>
                                    <td>someone@mymail.com</td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>20.11.2019</td>
                                    <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a></td>
                                </tr>
                                <tr>
                                    <td width="40%"><a class="itemside" href="#">
                                            <div class="left"><img class="img-sm img-avatar"
                                                    src="assets/imgs/people/avatar2.jpg" alt="Userpic"></div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Alexandra Pena</h6><small class="text-muted">Seller
                                                    ID: #439</small>
                                            </div>
                                        </a></td>
                                    <td>eleanor2022@example.com</td>
                                    <td><span class="badge rounded-pill alert-danger">Inactive</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a></td>
                                </tr>
                                <tr>
                                    <td width="40%"><a class="itemside" href="#">
                                            <div class="left"><img class="img-sm img-avatar"
                                                    src="assets/imgs/people/avatar3.jpg" alt="Userpic"></div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6><small class="text-muted">Seller
                                                    ID: #439</small>
                                            </div>
                                        </a></td>
                                    <td>eleanor2022@example.com</td>
                                    <td><span class="badge rounded-pill alert-danger">Inactive</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a></td>
                                </tr>
                                <tr>
                                    <td width="40%"><a class="itemside" href="#">
                                            <div class="left"><img class="img-sm img-avatar"
                                                    src="assets/imgs/people/avatar4.jpg" alt="Userpic"></div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Alex Pushkina</h6><small class="text-muted">Seller
                                                    ID: #439</small>
                                            </div>
                                        </a></td>
                                    <td>alex@gmail.org</td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a></td>
                                </tr>
                                <tr>
                                    <td width="40%"><a class="itemside" href="#">
                                            <div class="left"><img class="img-sm img-avatar"
                                                    src="assets/imgs/people/avatar1.jpg" alt="Userpic"></div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6><small class="text-muted">Seller
                                                    ID: #439</small>
                                            </div>
                                        </a></td>
                                    <td>eleanor2022@example.com</td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a></td>
                                </tr>
                                <tr>
                                    <td width="40%"><a class="itemside" href="#">
                                            <div class="left"><img class="img-sm img-avatar"
                                                    src="assets/imgs/people/avatar2.jpg" alt="Userpic"></div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6><small class="text-muted">Seller
                                                    ID: #439</small>
                                            </div>
                                        </a></td>
                                    <td>eleanor2022@example.com</td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15"
                                            href="#">View details</a></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- table-responsive.//-->
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
