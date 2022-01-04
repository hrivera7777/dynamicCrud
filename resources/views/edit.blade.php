@extends('layout')

@section('content')

    <form method="POST" action="{{ route('changeGame') }}" class="container my-6 "style="max-width: 480px;" enctype="multipart/form-data">
        @csrf 
        <div class="my-2" id="oldTitle">
            <label for="oldTitle">Old Game</label>
            <input type="text" class="form-control" id="oldTitle" value="{{$oldGame->name}}" disabled>
            <input type="hidden" id="idGame" name="idGame" value="{{$oldGame->id}}">
        </div>
        <div class="my-2">
            <img src="{{ url('storage/image/' . $oldGame->fileName) }}" alt="{{ $oldGame->name }}"
                class="img-fluid rounded-start" style="max-height: 230px;" />
        </div>
        <div class="my-2" id="newTitle">
            <label for="title">New Title </label>
            <input type="text" class="form-control" id="title" name="title" value="{{$oldGame->name}}" required>
        </div>
        <div class="my-2" id="file">
            <label for="title">Add a new File </label>
            <input type="file" class="form-control-file" id="image"  name="image" required>
        </div>
        <button type="submit" class="btn btn-info my-2" value="Save">Save</button>

    </form>

@endsection
