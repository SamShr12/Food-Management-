@extends('myViews.admin.admin')

@section('content')
<!-- Content Header -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{count($orders)}}</h3>

            <p>Total Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
          <div class="inner">
            <h3>{{count($pendingOrders)}}</h3>
            <p>Pending Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-clipboard"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{count($menu)}}<sup style="font-size: 20px"></sup></h3>
            <p>Total Items</p>
          </div>
          <div class="icon">
            <i class="ion ion-pizza"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{count($customers)}}</h3>
            <p>Customers</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{count($staff)}}</h3>
            <p>Staff Members</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->



</section>
</div>
</div>
</section>
@endsection