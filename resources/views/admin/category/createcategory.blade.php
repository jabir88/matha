@extends('layouts.adminmaster')
@section('bread')
Add Category
@endsection
@section('myContent')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
         {!! Form::open(['url' =>'admin/category/save', 'method' => 'post', 'class'=> 'form-group'])!!}
         @csrf
         @if (session('status'))
   <div class="alert alert-success">
       {{ session('status') }}
   </div>
@endif
          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" for="cate_name">Category Name</label>
            <input type="text" name="cate_name"  class="form-control" id="cate_name" value="{{old('cate_name')}}"  placeholder="Category Name">

          @if ($errors->has('cate_name'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('cate_name') }}</strong>
              </span>
          @endif
        </div>
          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" for="cate_des">Category Description</label>
            <textarea name="cate_des" id="cate_des" placeholder="Category Description...."  rows="5" cols="128"> {{old('cate_des')}}</textarea>
            @if ($errors->has('cate_des'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('cate_des') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" >Publication Status</label>
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
          <button type="submit" style="background:#F8812F;border:#F8812F;" class="btn btn-primary">Submit</button>
           {!! Form::close()!!}
      </div>
    </div>
  </div>
@endsection
