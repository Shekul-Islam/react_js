@extends('layouts.master')

@section('content')

 <!-- content -->
 <div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Manufacturer Ledger</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span><span class="d-none d-md-inline"></span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Last 7 Days</span></a></li>
                                                        <li><a href="#"><span>Last 30 Days</span></a></li>
                                                        <li><a href="#"><span>Last 6 Month</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nk-block-tools-opt">
                                            <a data-bs-toggle="modal" href="#addManLedger" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a data-bs-toggle="modal" href="#addManLedger" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Ledger</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner position-relative card-tools-toggle">
                                <div class="card-title-group">
                                    <div class="card-tools">
                                        <div class="form-inline flex-nowrap gx-3">
                                            <div class="form-wrap w-150px">
                                                <select class="form-select form-select-sm js-select2" data-search="off" data-placeholder="Bulk Action">
                                                    <option value="">Bulk Action</option>
                                                    <option value="today">Today</option>
                                                    <option value="tomorrow">Tomorrow</option>
                                                    <option value="days">Last 7 days</option>
                                                </select>
                                            </div>
                                            <div class="btn-wrap">
                                                <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                            </div>
                                        </div><!-- .form-inline -->
                                    </div><!-- .card-tools -->
                                    <div class="card-tools me-n1">
                                        <ul class="btn-toolbar gx-1">
                                            <li>
                                                <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                            </li><!-- li -->
                                            <li class="btn-toolbar-sep"></li><!-- li -->
                                            <li>
                                                <div class="toggle-wrap">
                                                    <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                    <div class="toggle-content" data-content="cardTools">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li class="toggle-close">
                                                                <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-setting"></em>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                        <ul class="link-check">
                                                                            <li><span>Show</span></li>
                                                                            <li class="active"><a href="#">10</a></li>
                                                                            <li><a href="#">20</a></li>
                                                                            <li><a href="#">50</a></li>
                                                                        </ul>
                                                                        <ul class="link-check">
                                                                            <li><span>Order</span></li>
                                                                            <li class="active"><a href="#">DESC</a></li>
                                                                            <li><a href="#">ASC</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- .dropdown -->
                                                            </li><!-- li -->
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .toggle-content -->
                                                </div><!-- .toggle-wrap -->
                                            </li><!-- li -->
                                        </ul><!-- .btn-toolbar -->
                                    </div><!-- .card-tools -->
                                </div><!-- .card-title-group -->
                                <div class="card-search search-wrap" data-search="search">
                                    <div class="card-body">
                                        <div class="search-content">
                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by Invoice No">
                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                        </div>
                                    </div>
                                </div><!-- .card-search -->
                            </div><!-- .card-inner -->
                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                <label class="custom-control-label" for="uid"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="sub-text">Invoice No</span></div>
                                        <div class="nk-tb-col tb-col-sm"><span class="sub-text">Date</span></div>
                                        <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Description</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Payment Term</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Debit (USD)</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Credit (USD)</span></div>
                                        <div class="nk-tb-col"><span class="sub-text">Balance (USD)</span></div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                <label class="custom-control-label" for="uid1"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <span class="fw-medium">#746f5k2</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>10 Feb 2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Purchase From Manufacturer #M-35</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>On Delivery</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>9875</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>-</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">9875</span>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid2">
                                                <label class="custom-control-label" for="uid2"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <span class="fw-medium">#75635k9</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>07 Feb 2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Purchase From Manufacturer #M-36</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>After Dispatch</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>-</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>2435</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">7440</span>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid3">
                                                <label class="custom-control-label" for="uid3"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <span class="fw-medium">#546H74W</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>04 Feb 2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Purchase From Manufacturer #M-26</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>Final Settlement</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>9874</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>-</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">17314</span>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid4">
                                                <label class="custom-control-label" for="uid4"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <span class="fw-medium">#87X6A44</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>01 Feb 2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Purchase From Manufacturer #M-98</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>After Dispatch</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>-</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>4324</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">12990</span>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid5">
                                                <label class="custom-control-label" for="uid5"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <span class="fw-medium">#986G531</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>31 Jan 2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Purchase From Manufacturer #M-98</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>Final Settlement</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>9876</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>-</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">21886</span>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid6">
                                                <label class="custom-control-label" for="uid6"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <span class="fw-medium">#326T4M9</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>18 Jan 2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Purchase From Manufacturer #M-98</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>After Dispatch</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>87534</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>-</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">109420</span>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid7">
                                                <label class="custom-control-label" for="uid7"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <span class="fw-medium">#87Z6A44</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>15 Jan 2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Purchase From Manufacturer #M-71</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>On Delivery</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>-</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>9876</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">99544</span>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid8">
                                                <label class="custom-control-label" for="uid8"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <span class="fw-medium">#746F5K2</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>08 Jan 2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Purchase From Manufacturer #M-67</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>Final Settlement</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>6325</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>-</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">105869</span>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid9">
                                                <label class="custom-control-label" for="uid9"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <span class="fw-medium">#685HFM1</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>02 Jan 2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Purchase From Manufacturer #M-22</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>After Dispatch</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>4563</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>-</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">110432</span>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid10">
                                                <label class="custom-control-label" for="uid10"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <span class="fw-medium"> #2385L1</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>25 Dec 2019</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Purchase From Manufacturer #M-27</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>Final Settlement</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>-</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>90432</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">40.432</span>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                </div><!-- .nk-tb-list -->
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        <ul class="pagination justify-content-center justify-content-md-start">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul><!-- .pagination -->
                                    </div>
                                    <div class="g">
                                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                            <div>Page</div>
                                            <div>
                                                <select class="form-select form-select-sm" data-search="on" data-dropdown="xs center">
                                                    <option value="page-1">1</option>
                                                    <option value="page-2">2</option>
                                                    <option value="page-4">4</option>
                                                    <option value="page-5">5</option>
                                                    <option value="page-6">6</option>
                                                    <option value="page-7">7</option>
                                                    <option value="page-8">8</option>
                                                    <option value="page-9">9</option>
                                                    <option value="page-10">10</option>
                                                    <option value="page-11">11</option>
                                                    <option value="page-12">12</option>
                                                    <option value="page-13">13</option>
                                                    <option value="page-14">14</option>
                                                    <option value="page-15">15</option>
                                                    <option value="page-16">16</option>
                                                    <option value="page-17">17</option>
                                                    <option value="page-18">18</option>
                                                    <option value="page-19">19</option>
                                                    <option value="page-20">20</option>
                                                </select>
                                            </div>
                                            <div>OF 102</div>
                                        </div>
                                    </div><!-- .pagination-goto -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .card-inner -->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content -->
@endsection