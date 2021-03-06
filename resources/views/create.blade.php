@extends('layout')

@section('content')

    <form method="POST" action="{{ route('newGame') }}" class="container my-6 "style="max-width: 480px;" enctype="multipart/form-data">
        @csrf 
        <div class="my-2">
            <label for="title">Title </label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="my-2" id="file">
            <label for="image">Add File </label>
            <input type="file"  class="form-control-file" id="image"  name="image" required>
        </div>
        <button type="submit" class="btn btn-info my-2" value="Save">Save</button>

    </form>

@endsection
