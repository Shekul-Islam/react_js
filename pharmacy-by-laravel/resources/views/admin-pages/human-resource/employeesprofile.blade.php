@extends('layouts.master')

@section('content')

      <!-- content @s -->



                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-between">
                                         <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Personal Information</h4>
                                                <div class="nk-block-des">
                                                    <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                                                </div>
                                            </div>
                                            <div class="nk-block-head-content align-self-start d-lg-none">
                                                <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <div class="nk-data data-list">
                                            <div class="data-head">
                                                <h6 class="overline-title">Basics</h6>
                                            </div>
                                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                <div class="data-col">
                                                    <span class="data-label">Full Name</span>
                                                    <span class="data-value">Abu Bin Ishtiyak</span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                            </div><!-- data-item -->
                                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                <div class="data-col">
                                                    <span class="data-label">Display Name</span>
                                                    <span class="data-value">Ishtiyak</span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                            </div><!-- data-item -->
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">Email</span>
                                                    <span class="data-value">info@softnio.com</span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                            </div><!-- data-item -->
                                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                <div class="data-col">
                                                    <span class="data-label">Phone Number</span>
                                                    <span class="data-value text-soft">Not add yet</span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                            </div><!-- data-item -->
                                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                <div class="data-col">
                                                    <span class="data-label">Date of Birth</span>
                                                    <span class="data-value">29 Feb, 1986</span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                            </div><!-- data-item -->
                                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                                <div class="data-col">
                                                    <span class="data-label">Address</span>
                                                    <span class="data-value">2337 Kildeer Drive,<br>Kentucky, Canada</span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                            </div><!-- data-item -->
                                        </div><!-- data-list -->
                                        <div class="nk-data data-list">
                                            <div class="data-head">
                                                <h6 class="overline-title">Preferences</h6>
                                            </div>
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">Language</span>
                                                    <span class="data-value">English (United State)</span>
                                                </div>
                                                <div class="data-col data-col-end"><a href="#" class="link link-primary">Change Language</a></div>
                                            </div><!-- data-item -->
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">Date Format</span>
                                                    <span class="data-value">M d, YYYY</span>
                                                </div>
                                                <div class="data-col data-col-end"><a href="#" class="link link-primary">Change</a></div>
                                            </div><!-- data-item -->
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">Timezone</span>
                                                    <span class="data-value">Bangladesh (GMT +6)</span>
                                                </div>
                                                <div class="data-col data-col-end"><a href="#" class="link link-primary">Change</a></div>
                                            </div><!-- data-item -->
                                        </div><!-- data-list -->
                                    </div><!-- .nk-block -->
                                </div>
                                <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                    <div class="card-inner-group" data-simplebar>
                                        <div class="card-inner">
                                            <div class="user-card">
                                                <div class="user-avatar bg-primary">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">Abu Bin Ishtiyak</span>
                                                    <span class="sub-text">info@softnio.com</span>
                                                </div>
                                                <div class="user-action">
                                                    <div class="dropdown">
                                                        <a class="btn btn-icon btn-trigger me-n2" data-bs-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .user-card -->
                                        </div><!-- .card-inner -->

                                    </div><!-- .card-inner-group -->



    <!-- content @e -->



@endsection
