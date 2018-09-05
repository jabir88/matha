@extends('layouts.adminmaster')
@section('bread')
Edit Category
@endsection
@section('myContent')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
         {!! Form::open(['url' =>'admin/category/edit/submit', 'method' => 'post', 'class'=> 'form-group'])!!}
         @csrf

          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" for="cate_name">Category Name</label>
            <input type="hidden" name="id"  class="form-control" id="id" value="{{$editcate['id']}}"  placeholder="Category Name">
            <input type="text" name="cate_name"  class="form-control" id="cate_name" value="{{$editcate['cate_name']}}"  placeholder="Category Name">


        </div>
          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" for="cate_des">Category Description</label>
            <textarea name="cate_des" id="cate_des" placeholder="Category Description...."  rows="5" cols="128"> {{$editcate['cate_des']}}</textarea>

          </div>
          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" >Publication Status</label>
            <select class="form-control" name="pub_status">
               <option value="1" <?php if($editcate['pub_status']== 1) echo "selected";?> >Published</option>
               <option value="0" <?php if($editcate['pub_status']== 0) echo "selected";?>>Unpublished</option>
            </select>

          </div>
          <button type="submit" style="background:#F8812F;border:#F8812F;" class="btn btn-primary">Submit</button>
           {!! Form::close()!!}
      </div>
    </div>
  </div>
@endsection
