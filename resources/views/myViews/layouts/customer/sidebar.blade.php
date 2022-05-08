<?php

use App\Http\Controllers\CustomerController;

$customer = CustomerController::customer();
$cart = CustomerController::cartCount();
?>


<aside class="main-sidebar elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="" style="font-size: 22px; padding-top: 20px;">
    <p class="yes" style="font-family: Arial, 'Times New Roman'; margin-left: 60px;">GoodLife</p>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        @foreach ($customer as $c)
        <img src="{{asset('assets/upload/customer/small/'.$c->image)}}" class="img-circle elevation-2" width="60" height="60" alt="User Image">
        @endforeach
      </div>
      <div class="info">
        @foreach ($customer as $c)
        <?php
        $firstname = explode(" ", $c->name);
        ?>
        <a href="#" style="font-family: 'Arial', 'Times New Roman';" class="d-block">{{$firstname[0]}}</a>
        @endforeach
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="customerdashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="loadmenu" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
              Menu
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="showcart" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart"></i>
            <p>
              Cart ({{count($cart)}})
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="viewcustomerorders" class="nav-link">
            <i class="nav-icon fas fa-shopping-bag"></i>
            <p>
              My Orders
            </p>
          </a>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>