@extends('layout')

@section('content')
<div class="container-fluid px-4">
    <h3 class="mt-4">View Products</h3>

    <div class="row">
        @for ($i = 0; $i < 10; $i++)
        <div class="col-6 my-2">
    <div class="card" style="max-height: 240px;">
        <div class="row g-0" >
          <div class="col-md-4">
            <img
              src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg"
              alt="Trendy Pants and Shoes"
              class="img-fluid rounded-start" style="max-height: 230px;"
            />
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h2 class="card-title mb-5">Card title</h2>
              <a class="btn btn-secondary btn-md mr-5 px-4" href="edit">Edit</a>
              <button type="button" class="btn btn-danger btn-md px-4">Delete</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endfor

    </div>

</div>
@endsection