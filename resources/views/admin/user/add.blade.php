@extends('layouts.adminmaster')
@section('bread')
Add User
@endsection
@section('myContent')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <form>
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-8 card_header_text">
                          <i class="fa fa-th"></i> User Registration
                      </div>
                      <div class="col-md-4 text-right">
                          <a href="{{url('admin/user')}}" class="btn btn-dark btn-sm card_button"><i class="fa fa-th"></i> All User</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-9 card_form_part">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Name:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Email:</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Password:</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Confirm Password:</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">User Role:</label>
                            <div class="col-sm-5">
                              <select id="" class="form-control select_box" name="">
                                <option value="" selected>Select Role</option>
                                <option value="1">1</option>
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-2"></div>
                  </div>
              </div>
              <div class="card-footer text-center">
                  <a href="#" class="btn btn-info btn-sm">REGISTRATION</a>
              </div>
           </form>
        </div>
      </div>
    </div>
</div>
@endsection
