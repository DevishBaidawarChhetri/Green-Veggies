@extends('layouts.dashboard.dashboardLayout')
@section('title', 'Home')
@section('main-section')
    @if($errors->isEmpty())
        <p class="container mt-3 alert-success alert col-md-7 text-center"><i class="far fa-smile-beam"></i> {{ __('Welcome back, ') . Auth::user()->name . '!' }}</p>
  @endif
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0 text-dark">Welcome {{ Auth::user()->name }}, to your dashboard.</h1>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                @if(Auth::user()->isAdmin == true && Auth::user()->regType == 'ADMIN')
                    <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{!! \App\Product::count(); !!}</h3>

                                <p>Total Products</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{url('/addedProducts')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{!! \App\User::count(); !!}</h3>

                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{ url('/getAllUsers') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{!! \App\Contact::count(); !!}</h3>
                                <p>Form Contacts</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{!! url('/viewContacts') !!}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{!! \App\Subscription::count(); !!}</h3>

                                <p>Subscribers</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{!! url('/viewSubscribers') !!}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                @else
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{!! \App\Product::count(); !!}</h3>

                                    <p>Total Products</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="javascript:void(0)" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{!! \App\User::count(); !!}</h3>

                                    <p>Total Registered User</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="javascript:void(0)" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{!! \App\Contact::count(); !!}</h3>
                                    <p>Form Contacts</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="javascript:void(0)" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{!! \App\Subscription::count(); !!}</h3>

                                    <p>Subscribers</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="javascript:void(0)" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                @endif
                <!-- /.row -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        <section class="content">
            <div class="torch-container">
                <div class="torch-image">
                    <h3 class="text-white  text-center help-text first-text"></h3>
                </div>
                <div class="torch">
                    <h3 class="particletext-uppercase text-center help-text second-text" style="color:#fff700; text-shadow: 0 0 12px #000;"></h3>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
    <script>
        var date = new Date();
        var hour = date.getHours();
        if(hour < 12){
            document.querySelector(".first-text").innerHTML =  "Good Morning!";
            document.querySelector(".second-text").innerHTML =  "Hope you have a wonderful morning!";
        }else if(hour <= 16){
            document.querySelector(".first-text").innerHTML = "Good Afternoon!";
            document.querySelector(".second-text").innerHTML =  "Have a nice day!";
        }else{
            document.querySelector(".first-text").innerHTML = "Good Evening!";
            document.querySelector(".second-text").innerHTML =  "Have a wonderful evening!";
        }
    </script>
@endsection
