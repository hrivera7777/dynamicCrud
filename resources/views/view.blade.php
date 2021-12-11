@extends('layout')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 container">View Products</h1>

    <div class="row">
        <div class="col-6">
    <div class="card mb-1" style="max-width: 480px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img
              src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg"
              alt="Trendy Pants and Shoes"
              class="img-fluid rounded-start"
            />
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <button type="button" class="btn btn-secondary btn-md mr-5 px-4">Edit</button>
              <button type="button" class="btn btn-danger btn-md px-4">Delete</button>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <div class="col-6">
        <div class="card mb-1" style="max-width: 480px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg"
                  alt="Trendy Pants and Shoes"
                  class="img-fluid rounded-start"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <button type="button" class="btn btn-secondary btn-md mr-5 px-4">Edit</button>
                  <button type="button" class="btn btn-danger btn-md px-4">Delete</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

</div>
@endsection