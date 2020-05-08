@extends('admin.layouts.master')

@section('title','Dashboard')

@section('content')
   <div class="container-fluid">

    
        <div class="row">

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                <h3>{{count($users)}}</h3>
    
                  <p>Total User</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
              <a href="{{url('admin/user')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                <h3>{{count($projects)}}</h3>
    
                  <p>Total Projects</p>
                </div>
                <div class="icon">
                  <i class="fas fa-home"></i>
                </div>
              <a href="{{url('admin/project')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                <h3>{{count($services)}}</h3>
    
                  <p>Total Service</p>
                </div>
                <div class="icon">
                  <i class="fas fa-tools"></i>
                </div>
              <a href="{{url('admin/service')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                <h3>{{count($categorys)}}</h3>
    
                  <p>Total Category</p>
                </div>
                <div class="icon">
                  <i class="fas fa-clipboard-list"></i>
                </div>
              <a href="{{url('admin/category')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
   
   
   

        </div>








    </div>
@endsection