@extends('layouts.master')

@section('content')

    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Employee</h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have total 56 Employees.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <a href="html/pharmacy/add-member.html" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                <a href="html/pharmacy/add-member.html" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Employe</span></a>
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
                                                        <option value="email">Send Email</option>
                                                        <option value="suspend">Suspend</option>
                                                        <option value="delete">Delete</option>
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
                                                                            <div class="dot dot-primary"></div>
                                                                            <em class="icon ni ni-filter-alt"></em>
                                                                        </a>
                                                                        <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                            <div class="dropdown-head">
                                                                                <span class="sub-title dropdown-title">Filter Employe</span>
                                                                                <div class="dropdown">
                                                                                    <a href="#" class="btn btn-sm btn-icon">
                                                                                        <em class="icon ni ni-more-h"></em>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="dropdown-body dropdown-body-rg">
                                                                                <div class="row gx-6 gy-3">
                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label class="overline-title overline-title-alt">Designation</label>
                                                                                            <select class="form-select form-select-sm js-select2">
                                                                                                <option value="any">Any Sector</option>
                                                                                                <option value="medicine">Admin</option>
                                                                                                <option value="gastroenterology">Manager</option>
                                                                                                <option value="cardiology">Pharmacist</option>
                                                                                                <option value="orthopaedics">Accountant</option>
                                                                                                <option value="neurology">Salesman</option>
                                                                                                <option value="urology">Cleaner</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label class="overline-title overline-title-alt">Status</label>
                                                                                            <select class="form-select form-select-sm js-select2">
                                                                                                <option value="any">Any Status</option>
                                                                                                <option value="active">Active</option>
                                                                                                <option value="inactive">Inactive</option>
                                                                                                <option value="suspend">Suspend</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <button type="button" class="btn btn-secondary">Filter</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="dropdown-foot between">
                                                                                <a class="clickable" href="#">Reset Filter</a>
                                                                                <a href="#">Save Filter</a>
                                                                            </div>
                                                                        </div><!-- .filter-wg -->
                                                                    </div><!-- .dropdown -->
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
                                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by Member name or email">
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
                                            <div class="nk-tb-col"><span class="sub-text">Employees</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></div>
                                            <div class="nk-tb-col tb-col-mb"><span class="sub-text">Designation</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Document</span></div>
                                            <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Address</span></div>
                                            <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Joining Date</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1 my-n1">
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend Selected</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#addMember"><em class="icon ni ni-edit"></em><span>Edit Selected</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                                    <label class="custom-control-label" for="uid1"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col">
                                                <a href="html/pharmacy/Members-profile-regular.html">
                                                    <div class="user-card">
                                                        <div class="user-avatar sm bg-primary">
                                                            <span>AB</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">Md. Sakul Islam <span class="dot dot-success d-md-none ms-1"></span></span>
                                                            <span>shekul.bd201@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>+880173-1320664</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <span class="fw-bold">Admin</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <ul class="list-inline list-download">
                                                    <li>National Id <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                    <li>Certificates <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>Large cottage</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>10 Feb 2020</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-success">Active</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                            <em class="icon ni ni-mail-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="html/pharmacy/members-profile-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#addMember"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                                <a href="html/pharmacy/members-profile-regular.html">
                                                    <div class="user-card">
                                                        <div class="user-avatar sm">
                                                            <img src="./images/avatar/a-sm.jpg" alt="">
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">Ashley Lawson <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                            <span>ashley@softnio.com</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>+124 394-1787</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <span class="fw-bold">Manager</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <ul class="list-inline list-download">
                                                    <li>National Id <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                    <li>Certificates <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>Near Roberts Lake</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>07 Feb 2020</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-warning">Inactive</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                            <em class="icon ni ni-mail-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="html/pharmacy/members-profile-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#addMember"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                                <a href="html/pharmacy/Members-profile-regular.html">
                                                    <div class="user-card">
                                                        <div class="user-avatar sm bg-info">
                                                            <span>JL</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">Joe Larson <span class="dot dot-success d-md-none ms-1"></span></span>
                                                            <span>larson@example.com</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>+168 603-2320</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <span class="fw-bold">Delivery Man</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <ul class="list-inline list-download">
                                                    <li>National Id <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                    <li>Certificates <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>Uttara,sector 10</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>04 Feb 2020</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-success">Active</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                            <em class="icon ni ni-mail-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="html/pharmacy/members-profile-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#addMember"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                                <a href="html/pharmacy/Members-profile-regular.html">
                                                    <div class="user-card">
                                                        <div class="user-avatar sm bg-danger">
                                                            <span>JM</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">Jane Montgomery <span class="dot dot-danger d-md-none ms-1"></span></span>
                                                            <span>jane84@example.com</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>+439 271-5360</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <span class="fw-bold">Accountant</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <ul class="list-inline list-download">
                                                    <li>National Id <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                    <li>Certificates <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>Dhanmondi 9/A</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>01 Feb 2020</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-danger">Suspend</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                            <em class="icon ni ni-mail-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="html/pharmacy/members-profile-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#addMember"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                                <a href="html/pharmacy/Members-profile-regular.html">
                                                    <div class="user-card">
                                                        <div class="user-avatar sm">
                                                            <img src="./images/avatar/b-sm.jpg" alt="">
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">Frances Burns <span class="dot dot-success d-md-none ms-1"></span></span>
                                                            <span>frances@example.com</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>+639 130-3150</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <span class="fw-bold">Pharmacist</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <ul class="list-inline list-download">
                                                    <li>National Id <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                    <li>Certificates <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>HNo 76</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>31 Jan 2020</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-success">Active</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                            <em class="icon ni ni-mail-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="html/pharmacy/members-profile-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#addMember"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                                <a href="html/pharmacy/Members-profile-regular.html">
                                                    <div class="user-card">
                                                        <div class="user-avatar sm">
                                                            <img src="./images/avatar/c-sm.jpg" alt="">
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">Alan Butler <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                            <span>butler@example.com</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>+963 309-1706</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <span class="fw-bold">Salesman</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <ul class="list-inline list-download">
                                                    <li>National Id <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                    <li>Certificates <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>Dhanmondi 15,Staff Quater</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>18 Jan 2020</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-warning">Inactive</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                            <em class="icon ni ni-mail-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="html/pharmacy/members-profile-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#addMember"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                                <a href="html/pharmacy/Members-profile-regular.html">
                                                    <div class="user-card">
                                                        <div class="user-avatar sm bg-warning">
                                                            <span>VL</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">Victoria Lynch <span class="dot dot-success d-md-none ms-1"></span></span>
                                                            <span>victoria@example.com</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>+811 985-4846</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <span class="fw-bold">Cleaner</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <ul class="list-inline list-download">
                                                    <li>National Id <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                    <li>Certificates <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>Near at spiral School</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>15 Jan 2020</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-success">Active</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                            <em class="icon ni ni-mail-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="html/pharmacy/members-profile-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#addMember"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                                <a href="html/pharmacy/Members-profile-regular.html">
                                                    <div class="user-card">
                                                        <div class="user-avatar sm bg-success">
                                                            <span>PN</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">Patrick Newman <span class="dot dot-success d-md-none ms-1"></span></span>
                                                            <span>patrick@example.com</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>+942 238-4474</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <span class="fw-bold">Salesman</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <ul class="list-inline list-download">
                                                    <li>National Id <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                    <li>Certificates <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>Near at Gulshan Lake</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>08 Jan 2020</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-success">Active</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                            <em class="icon ni ni-mail-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="html/pharmacy/members-profile-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#addMember"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                                <a href="html/pharmacy/Members-profile-regular.html">
                                                    <div class="user-card">
                                                        <div class="user-avatar sm">
                                                            <img src="./images/avatar/d-sm.jpg" alt="">
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">Jane Harris <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                            <span>harris@example.com</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>+123 447-2384</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <span class="fw-bold">Pharmacist</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <ul class="list-inline list-download">
                                                    <li>National Id <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                    <li>Certificates <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>Near at Mountain college</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>02 Jan 2020</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-warning">Inactive</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                            <em class="icon ni ni-mail-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="html/pharmacy/members-profile-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#addMember"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                                <a href="html/pharmacy/Members-profile-regular.html">
                                                    <div class="user-card">
                                                        <div class="user-avatar sm bg-purple">
                                                            <span>EW</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">Emma Walker <span class="dot dot-success d-md-none ms-1"></span></span>
                                                            <span>walker@example.com</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>+463 471-7173</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <span class="fw-bold">Salesman</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <ul class="list-inline list-download">
                                                    <li>National Id <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                    <li>Certificates <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>HNo 58,Banani</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>25 Dec 2019</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-success">Active</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                            <em class="icon ni ni-mail-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="html/pharmacy/members-profile-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#addMember"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                                    <select class="form-select form-select-sm js-select2" data-search="on" data-dropdown="xs center">
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
    <!-- content @e -->

@endsection
