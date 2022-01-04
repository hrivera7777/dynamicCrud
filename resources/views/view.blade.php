@extends('layout')

@section('content')
    <div class="container-fluid px-4">
        <h3 class="mt-4">View Products</h3>

        <div class="row">
            @foreach ($games as $game)
                <div class="col-6 my-2">
                    <div class="card" style="max-height: 240px;">
                        <div class="row g-0">
                            {{-- image --}}
                            <div class="col-md-4">
                                <img src="{{ url('storage/image/' . $game->fileName) }}" alt="{{ $game->name }}"
                                    class="img-fluid rounded-start" style="max-height: 230px;" />
                            </div>
                            {{-- card content --}}
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title mb-5">{{ $game->name }}</h2>
                                    <a class="btn btn-secondary btn-md mr-5 px-4" href="edit/{{$game->id}}">Edit</a>
                                    <button type="button" class="btn btn-danger btn-md px-4">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
