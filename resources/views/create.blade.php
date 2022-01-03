@extends('layout')

@section('content')

    <form action="" class="container my-6 "style="max-width: 480px;">
        <div class="my-2">
            <label for="title">Title </label>
            <input type="text" class="form-control" id="title" required>
        </div>
        <div class="my-2" id="file">
            <label for="title">Add File </label>
            <input type="file" class="form-control-file" required>
        </div>
        <button type="submit" class="btn btn-info my-2" value="Save">Save</button>

    </form>

@endsection
