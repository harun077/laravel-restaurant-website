@extends('backend.master')
@section('main-content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Product</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->

    <div class="row">
        <div class="col-12">
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> Product List</h6>
                    @if ($message = Session::get('success'))
                        <span class="text-success">
                            {{ $message }}
                        </span>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#p_id</th>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#p_id</th>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @php
                                    $x = 1;
                                @endphp

                                @if (count($products)>0)

                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $x++ }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->product_des  }}</td>
                                        <td>{{ $product->product_qty  }}</td>
                                        <td>{{ $product->product_price }}</td>
                                        <td>
                                            @if ($product->product_status ==1 )
                                                <a href="{{ Route('activeProduct',$product->id ) }}" class="btn btn-success btn-sm">
                                                    <i class="fas fa-check"></i>

                                                </a>
                                            @else
                                                <a href="{{ Route('inactiveProduct',$product->id ) }}" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-times"></i>

                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ Route('editProduct',$product->id) }}" class="btn btn-primary btn-circle btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deleteProduct"">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>

                                   <!-- Delete Product Modal-->
                                        <div class="modal fade" id="deleteProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Are you sure want to delete this item?</div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                    <a class="btn btn-danger" href="{{ Route('deleteProduct',$product->id) }}">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                @endforeach

                                @else
                                    <p>Products Not Found</p>
                                @endif



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
