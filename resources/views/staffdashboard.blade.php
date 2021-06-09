@extends('Admin.layouts.master')

@section('title','Dashboard')

@section('css')


<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/vendors/css/forms/icheck/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/vendors/css/timeline/vertical-timeline.css')}}">
    <!-- END: Vendor CSS-->


      <!-- BEGIN: Page CSS-->
      <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/fonts/simple-line-icons/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/css/pages/chat-application.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/admin/app-assets/css/pages/advanced-cards.css')}}">
    <!-- END: Page CSS-->
@endsection
@section('content')

<!-- Minimal statistics with bg color section start -->
<section id="minimal-statistics-bg">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            
                        </div>
                    </div>
                    <div class="row">
                
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-gradient-x-purple-blue">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-top">
                                                <i class="icon-eye icon-opacity text-white font-large-4 float-left"></i>
                                            </div>
                                            <div class="media-body text-white text-right align-self-bottom mt-3">
                                                <span class="d-block mb-1 font-medium-1">Total leaves</span>
                                                <h1 class="text-white mb-0">{{$total_leaves}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-gradient-x-purple-blue">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-top">
                                                <i class="icon-eye icon-opacity text-white font-large-4 float-left"></i>
                                            </div>
                                            <div class="media-body text-white text-right align-self-bottom mt-3">
                                                <span class="d-block mb-1 font-medium-1">Total Approved leaves</span>
                                                <h1 class="text-white mb-0">{{$total_approved}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-gradient-x-purple-blue">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-top">
                                                <i class="icon-eye icon-opacity text-white font-large-4 float-left"></i>
                                            </div>
                                            <div class="media-body text-white text-right align-self-bottom mt-3">
                                                <span class="d-block mb-1 font-medium-1">Total Rejected leaves</span>
                                                <h1 class="text-white mb-0">{{$total_rejected}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                      
                    </div>
                </section>
              

@endsection
@section('js')
 
@endsection