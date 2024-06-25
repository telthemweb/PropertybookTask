@extends('layouts.admin')

@section('content')
   
<div class="card-body">
    <div class="card-title">
        <h6 class="mr-2"><span>UPDATE </span><small class="px-1"></small></h6>
    </div>

    <div class="py-1">
        <form method="POST" action="{{ route('post.update',$post->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="">Title</label>
                <div class="rounded">
                    <input type="text" class="form-control pl-3" name="name" value="{{$post->name}}"
                        required="required" id="name">
                </div>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <div class="rounded">
                    <input type="text" class="form-control pl-3" name="description"
                    value="{{$post->description}}" required="required" id="description">
                </div>
            </div>



            <div class="form-group">
                <label for="">Post Image <img src="{{ asset($post->image) }}" width="50"></label>
                <div class="rounded">
                    <div class="rounded">
                        <input type="file" class="form-control pl-3" name="image" required
                            accept="image/jpeg, image/png, image/jpg">
                    </div>
                </div>
            </div>

            <div class="form-group">
                    <label>Select POST type</label>
                    <div class="rounded">
                        <select class="form-control" name="type">
                            <option value="{{$post->type}}" selected>{{$post->type}}</option>
                            <option value="BANNER">BANNER</option>
                            <option value="OURSTORY">STORIES</option>
                        </select>
                    </div>
                </div>





            <div class="float-lg-right">
                <div class="">
                    <button type="submit" class="btn btn-success login-btn btn-block">SUBMIT</button>
                </div>
            </div>
        </form>

    </div>


</div>
@endsection
