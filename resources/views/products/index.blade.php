@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">Services Content <button
                class="btn btn-secondary float-right rounded-0" data-toggle="modal" data-target="#product_modal">
                Add Services <i class="fa fa-plus"></i>
            </button></div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped" id="myTable">
                            <thead>
                                <tr>
                                    <th>Icon</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($products) > 0)
                                    @foreach ($products as $product)
                                        <tr>
                                            <td><i class="{{ $product->icon }}"></i></td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>
                                                <a class="" href="{{ route('product.edit', $product->id) }}"><i
                                                        class="fa fa-edit text-success"></i> </a>
                                                <a class="" href="{{ route('product.destroy', $product->id) }}"><i
                                                        class="fa fa-trash text-danger"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <td colspan="4" class="text-danger text-center"><b>No product found</b></td>
                                @endif
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="modal fade" role="dialog" tabindex="-1" id="product_modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">CREATE SERVICE</h5>
                    <button class="close text-white" data-dismiss="modal">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="py-1">
                        <form method="POST" action="{{ route('product.add') }}">
                            @csrf


                            <div class="form-group">
                                <label for="">Icon</label>
                                <div class="rounded">
                                    <input type="text" class="form-control pl-3" name="icon" placeholder="Icon"
                                        required="required" id="icon">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Service Name</label>
                                <div class="rounded">
                                    <input type="text" class="form-control pl-3" name="name"
                                        placeholder="Service Name" required="required" id="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Description</label>
                                <div class="rounded">
                                    <input type="text" class="form-control pl-3" name="description"
                                        placeholder="Post Description" required="required" id="description">
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
