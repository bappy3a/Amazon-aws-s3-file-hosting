@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Post Data </div>

                <div class="card-body">

<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" placeholder="Enter Name" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="file" class="form-control" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

                </div>
            </div>
        </div>
        <div class="col-md-8">
             @foreach ($posts as $post)
                <div class="card" style="width: 13rem; float: left; margin: 1px ;">
                  <img src="{{ aws($post->image) }}" class="card-img-top" style="width: 100%;height: 150px">
                  <div class="card-body">
                    <h5 class="card-title">{{ $post->name }}</h5>
                  </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
