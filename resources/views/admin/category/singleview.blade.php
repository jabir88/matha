@extends('layouts.adminmaster')
@section('bread')
View Single Category
@endsection
@section('myContent')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_header_text">
                        <i class="fa fa-th"></i> View All Category
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('admin/category/view')}}" class="btn btn-dark btn-sm card_button"><i class="fa fa-th"></i> All Category</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 card_view_part">
                      <table class="category_single table table-striped table-bordered view_data_table">

                          <tr>
                            <td>Category Name</td>
                            <td>:</td>
                            <td>
                                {{$info->cate_name}}
                            </td>
                          </tr>
                          <tr>
                            <td>Category Description</td>
                            <td>:</td>
                            <td>
                                {{$info->cate_des}}
                            </td>
                          </tr>
                          <tr >
                            <td>Publication Status</td>
                            <td>:</td>
                            <td>
                                {{$info->pub_status}}
                            </td>
                          </tr>


                      </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="#" class="btn btn-info btn-sm">REGISTRATION</a>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
