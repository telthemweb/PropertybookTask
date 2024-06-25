@extends('layouts.admin')

@section('content')
   
<div class="card">
    <div class="card shadow">
        <div class="card-body">
            <div class="card-title">
                <h6 class="mr-2"><span>UPDATE </span><small class="px-1"></small></h6>
            </div>
        
            <div class="py-1">
                <form method="POST" action="{{ route('product.update',$product->id) }}">
                    @csrf
                    @method('PATCH')
        
                    <div class="form-group">
                        <label for="">Icon</label>
                        <div class="rounded">
                            <input type="text" class="form-control pl-3" name="icon" value="{{$product->icon}}"
                                required="required" id="icon">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <div class="rounded">
                            <input type="text" class="form-control pl-3" name="name" value="{{$product->name}}"
                                required="required" id="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <div class="rounded">
                            <input type="text" class="form-control pl-3" name="description"
                            value="{{$product->description}}" required="required" id="description">
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
@endsection
