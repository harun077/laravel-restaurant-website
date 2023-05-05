@extends('backend.master')
@section('main-content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->

    <div class="row">
        <div class="col-lg-12">
            <form action="{{ Route('updateProduct', $product->id ) }}" method="POST">
                @csrf

                {{-- Error Message --}}
                {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}

                    @php

                    @endphp

                <div class="form-group mb-3">
                    <input type="text" placeholder="Enter Product Name" class="form-control" name="p_name" value="{{ $product->product_name }}">

                        @error('p_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="form-group mb-3">
                    <textarea placeholder="Enter Product Description" class="form-control" name="p_des" cols="30" rows="3">{{ $product->product_des }}</textarea>

                        @error('p_des')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Enter Product Quantity" class="form-control" name="p_qty" value="{{ $product->product_qty }}">

                            @error('p_qty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Enter Product Price" class="form-control" name="p_price" value="{{ $product->product_price }}">

                            @error('p_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <select name="p_status" class="form-control">
                        <option value="">-----Select Product-----</option>
                        <option value="1" @if($product->product_status==1)selected @endif>Active</option>
                        <option value="0"@if($product->product_status==0)selected @endif>Inactive</option>
                    </select>

                    @error('p_status')
                        <span class="text-danger">{{ $message }}</span>
                     @enderror

                </div>
                <div class="form-group mb-3">
                    <button trype="submit" class="btn btn-success">Update Product</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
