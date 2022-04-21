@extends('myViews.customer.customer')

@section('content')
<div class="">
  <div class="card">
    <div class="card-body">
      <form method="post" action="searchbyname" style="float: left;">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="">Search by Name</label>
            <input type="text" class="form-control" name="name_search" placeholder="Product Name" required>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Search</button>
          </div>
        </div>
      </form>

      <form method="post" action="searchbycategory" style="float: right;">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="">Select Category</label>
            <br>
            <select class="form-control" name="category_search">
              @foreach ($category as $c)
              <option value="{{$c['name']}}">{{$c['name']}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Search</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
<div class="py-5">
  <div class="container">
    <div class="row">
      @foreach ($data as $d)
      <div class="col-md-3">
        <div class="card text-center">
          <img src="{{ asset('assets/upload/menu/'.$d->image) }}" alt="image here">
          <div class="card-body">
            <?php
            $firstname = explode(" ", $d->itemname);
            ?>
            <h3>{{$firstname[0]}}</h3>
            <button class="btn btn-primary btn-sm">
              <a href="detail/{{$d->id}}" style='color:white;text-decoration:none;'>
                Detail
                <i class="nav-icon fas fa-info-circle""></i>
              </a>
            </button>
            <button type='button' class='btn btn-primary btn-sm'>
              <a href='addsingleitem/{{$d->id}}' style='color:white;text-decoration:none;'>
                Add to Cart
                <i class=" nav-icon fas fa-shopping-cart"></i>
              </a>
            </button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection