@extends('layout')

@section('content')
    <form method="POST" action="{{ route('buyGame') }}" class="container my-6 " style="max-width: 480px;"
        enctype="multipart/form-data">
        @csrf
        <h1 class="my-2">Buy a new Game </h1>
        <div class="my-2" id="Title">
            <label for="Title">Title Game</label>
            <input type="text" class="form-control" id="Title" value="{{ $game->name }}" disabled>
            <input type="hidden" id="idGame" name="idGame" value="{{ $game->id }}">
        </div>
        <div class="my-2">
            <img src="{{ url('storage/image/' . $game->fileName) }}" alt="{{ $game->name }}"
                class="img-fluid rounded-start" style="max-height: 230px;" />
        </div>
        <button type="submit" class="btn btn-info my-2" value="Save">Buy</button>

    </form>

@endsection
