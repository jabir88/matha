@extends('layouts.adminmaster')
@section('bread')
All Users Information
@endsection
@section('myContent')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_header_text">
                        <i class="fa fa-th"></i> All User
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('admin/user/add')}}" class="btn btn-dark btn-sm card_button"><i class="fa fa-plus-circle"></i> Add User</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="allTable" class="table table-bordered table-striped table-hover customize_table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Address</th>
                                <th>Reg. Time</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($allUser as $data)

                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->roleName->role_name}}</td>
                                <td>{{$data->address}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>
                                  <a href="{{url('admin/user/view/'.$data->id)}}"><i class="fa fa-plus-square"></i></a>
                                  <a href="#"><i class="fa fa-pencil-square"></i></a>
                                  <a href="#"><i class="fa fa-trash"></i></a>
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
