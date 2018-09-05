@extends('layouts.adminmaster')
@section('bread')
Add Manufacturer
@endsection
@section('myContent')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
         {!! Form::open(['url' =>'admin/manufacturer/save', 'method' => 'post', 'class'=> 'form-group'])!!}
         @csrf
         @if (session('status'))
   <div class="alert alert-success">
       {{ session('status') }}
   </div>
@endif
          <div class="form-group">
            <label  style="display: block; color:#3895D3; font-weight:700;" for="manu_name">Manufacturer Name</label>
            <input type="text" name="manu_name"  class="form-control" id="manu_name" value="{{old('manu_name')}}"  placeholder="Manufacturer Name">

          @if ($errors->has('manu_name'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('manu_name') }}</strong>
              </span>
          @endif
        </div>
          <div class="form-group">
            <label  style="display: block; color:#3895D3; font-weight:700;" for="manu_des">Manufacturer Description</label>
            <textarea name="manu_des" id="manu_des" placeholder="Manufacturer Description...."  rows="5" cols="128"> {{old('manu_des')}}</textarea>
            @if ($errors->has('manu_des'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('manu_des') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label  style="display: block; color:#3895D3; font-weight:700;" >Publication Status</label>
            <select class="form-control" value="{{old('pub_status')}}" name="pub_status">
              <option selected>Select Publication</option>
              <option value="1">Published</option>
              <option value="0">Unpublished</option>
            </select>
            @if ($errors->has('pub_status'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('pub_status') }}</strong>
                </span>
            @endif
          </div>
          <button type="submit" style="background:#3895D3;border:#3895D3;" class="btn btn-primary">Submit</button>
           {!! Form::close()!!}
      </div>
    </div>
  </div>
@endsection
