@extends('layouts.adminmaster')
@section('bread')
View User
@endsection
@section('myContent')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_header_text">
                        <i class="fa fa-th"></i> View User Information
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('admin/user')}}" class="btn btn-dark btn-sm card_button"><i class="fa fa-th"></i> All User</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 card_view_part">
                      <table class="table table-striped table-bordered view_data_table">

                          <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>
                                {{$viewUser->name}}
                            </td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>
                                {{$viewUser->email}}
                            </td>
                          </tr>
                          <tr>
                            <td>Phone</td>
                            <td>:</td>
                            <td>
                                {{$viewUser->phone}}
                            </td>
                          </tr>
                          <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>
                                {{$viewUser->address}}
                            </td>
                          </tr>
                          <tr>
                            <td>Reg. Time</td>
                            <td>:</td>
                            <td>
                                {{$viewUser->created_at}}
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
