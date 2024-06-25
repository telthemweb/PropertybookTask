@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">Banner Content <button class="btn btn-secondary float-right rounded-0"
                data-toggle="modal" data-target="#bannermodal">
                Add Post <i class="fa fa-plus"></i>
            </button></div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped" id="myTable">
                            <thead>
                                <tr>
                                    <th>Post Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($posts) > 0)
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td><img src="{{ $post->image }}" width="50"></td>
                                            <td>{{ $post->name }}</td>
                                            <td>{{ $post->description }}</td>
                                            <td>
                                                <a class="" href="{{route('post.edit',$post->id)}}"><i
                                                        class="fa fa-edit text-success"></i> </a>
                                                <a class="" href="{{route('post.destroy',$post->id)}}"><i
                                                        class="fa fa-trash text-danger"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <td colspan="4" class="text-danger text-center"><b>No post found</b></td>
                                @endif
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="modal fade" role="dialog" tabindex="-1" id="bannermodal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">CREATE BANNER POST</h5>
                    <button class="close text-white" data-dismiss="modal">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="py-1">
                        <form method="POST" action="{{ route('post.add') }}" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <label for="">Title</label>
                                <div class="rounded">
                                    <input type="text" class="form-control pl-3" name="name" placeholder="Post Title"
                                        required="required" id="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <div class="rounded">
                                    <input type="text" class="form-control pl-3" name="description"
                                        placeholder="Post Description" required="required" id="description">
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="">Post Image</label>
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
                                            <option value="" selected>Select  POST type</option>
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
            </div>
        </div>
    </div>
@endsection
