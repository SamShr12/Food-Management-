<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('fav.ico') }}">
  <title>Invoice</title>
  <style>
    body {
      background-color: #F6F6F6;
      margin: 0;
      padding: 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin: 0;
      padding: 0;
    }

    p {
      margin: 0;
      padding: 0;
    }

    .container {
      width: 80%;
      margin-right: auto;
      margin-left: auto;
    }

    .brand-section {
      background-color: #329ea8;
      padding: 10px 40px;
    }

    .logo {
      width: 50%;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
    }

    .col-6 {
      width: 50%;
      flex: 0 0 auto;
    }

    .text-white {
      color: #fff;
    }

    .company-details {
      float: right;
      text-align: right;
    }

    .body-section {
      padding: 16px;
      border: 1px solid gray;
    }

    .heading {
      font-size: 20px;
      margin-bottom: 08px;
    }

    .sub-heading {
      color: #262626;
      margin-bottom: 05px;
    }

    table {
      background-color: #fff;
      width: 100%;
      border-collapse: collapse;
    }

    table thead tr {
      border: 1px solid #111;
      background-color: #f2f2f2;
    }

    table td {
      vertical-align: middle !important;
      text-align: center;
    }

    table th,
    table td {
      padding-top: 08px;
      padding-bottom: 08px;
    }

    .table-bordered {
      box-shadow: 0px 0px 5px 0.5px gray;
    }

    .table-bordered td,
    .table-bordered th {
      border: 1px solid #dee2e6;
    }

    .text-right {
      text-align: end;
    }

    .w-20 {
      width: 20%;
    }

    .float-right {
      float: right;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="brand-section">
      <div class="row">
        <div class="col-6">
          <h1 class="text-white">Company Name</h1>
        </div>
        <div class="col-6">
          <div class="company-details">
            <p class="text-white">Company Address</p>
            <p class="text-white">Company Phone #</p>
          </div>
        </div>
      </div>
    </div>

    <div class="body-section">
      <div class="row">
        <div class="col-6">
          <h2 class="heading">Invoice No.: {{$invoice}}</h2>
          <p class="sub-heading">Order Date: {{$date}}</p>
          <p class="sub-heading">Customer Name: {{$name}}</p>
          <p class="sub-heading">Email Address: {{$email}}</p>
          <p class="sub-heading">Delivery Address: {{$address}}</p>
        </div>
      </div>
    </div>

    <div class="body-section">
      <h3 class="heading">Ordered Items</h3>
      <br>
      <table class="table-bordered">
        <thead>
          <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cart as $c)
          <tr>
            <td>{{$c->product_name}}</td>
            <td>{{$c->product_quantity}}</td>
            <td>{{$c->price}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <br>
      <h2 class="heading">Payment Mode: Cash on Delivery</h2>
      <h3>Amount: {{$amount}}</h3>
      <h3>Tax 10%: {{($amount/100)*10}}</h3>
      <h3>Total Amount: {{$amount+(($amount/100)*10)}}</h3>
    </div>

    <div class="body-section">
      <p>&copy; Copyright 2021 - Company Name. All rights reserved.
        <a href="#" class="float-right">company</a>
      </p>
    </div>
  </div>

</body>

</html>