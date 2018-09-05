@extends('layouts.adminmaster')
@section('bread')
All Products Details
@endsection
@section('myContent')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_header_text">
                        <i class="fa fa-th"></i> All Products
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('admin/user/add')}}" class="btn btn-dark btn-sm card_button"><i class="fa fa-plus-circle"></i> Add Product</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="allTable" class="table table-bordered table-striped table-hover customize_table">
                        <thead>
                            <tr>
                                <th>Products Name</th>
                                <th>Category Name</th>
                                <th>Manufacturer Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Publication Status</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach( $producdet as $data)

                            <tr>
                                <td>{{$data->product_name}}</td>
                                <td>{{$data->cate_name}}</td>
                                <td>{{$data->manu_name}}</td>
                                <td>{{$data->product_price}}</td>
                                <td>{{$data->product_quantity}}</td>
                                <td>{{$data->pub_status}}</td>
                                <td>
                                  <a href="{{url('admin/product/view/'.$data->pro_id)}}"><i class="fa fa-plus-square"></i></a>
                                  <a href="{{url('admin/product/edit/'.$data->pro_id)}}"><i class="fa fa-pencil-square"></i></a>
                                  <a href="{{url('admin/product/delete/'.$data->pro_id)}}"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-info btn-sm">Print</a>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
