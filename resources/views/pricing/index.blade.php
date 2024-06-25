@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">Pricing Management <button
                class="btn btn-secondary float-right rounded-0" data-toggle="modal" data-target="#product_modal">
                Add Price <i class="fa fa-plus"></i>
            </button></div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped" id="myTable">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($pricings) > 0)
                                    @foreach ($pricings as $price)
                                        <tr>
                                            <td>{{ $price->title }}</td>
                                            <td>{{ $price->price }}</td>
                                            <td>
                                                <a class="" href="{{ route('price.edit', $price->id) }}"><i
                                                        class="fa fa-edit text-success"></i> </a>
                                                <a class="" href="{{ route('price.destroy', $price->id) }}"><i
                                                        class="fa fa-trash text-danger"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <td colspan="4" class="text-danger text-center"><b>No Price found</b></td>
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
                    <h5 class="modal-title text-white">CREATE PRICE</h5>
                    <button class="close text-white" data-dismiss="modal">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="py-1">
                        <form method="POST" action="{{ route('price.add') }}">
                            @csrf


                            <div class="form-group">
                                <label for="">Package Title</label>
                                <div class="rounded">
                                    <input type="text" class="form-control pl-3" name="title" placeholder="Package Title"
                                        required="required" id="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <div class="rounded">
                                    <input type="text" class="form-control pl-3" name="price"
                                        placeholder="Package Price" required="required" id="price">
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
