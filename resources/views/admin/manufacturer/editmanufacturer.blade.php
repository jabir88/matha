@extends('layouts.adminmaster')
@section('bread')
Edit Manufacturer
@endsection
@section('myContent')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
         {!! Form::open(['url' =>'admin/manufacturer/edit/submit', 'method' => 'post', 'class'=> 'form-group'])!!}
         @csrf

          <div class="form-group">
            <label  style="display: block; color:#3895D3; font-weight:700;" for="manu_name">Manufacturer Name</label>
            <input type="hidden" name="manu_id"  class="form-control" id="id" value="{{$editmanu['manu_id']}}"  placeholder="Manufacturer Name">
            <input type="text" name="manu_name"  class="form-control" id="manu_name" value="{{$editmanu['manu_name']}}"  placeholder="Manufacturer Name">


        </div>
          <div class="form-group">
            <label  style="display: block; color:#3895D3; font-weight:700;" for="manu_des">Manufacturer Description</label>
            <textarea name="manu_des" id="manu_des" placeholder="Manufacturer Description...."  rows="5" cols="128"> {{$editmanu['manu_des']}}</textarea>

          </div>
          <div class="form-group">
            <label  style="display: block; color:#3895D3; font-weight:700;" >Publication Status</label>
            <select class="form-control" name="pub_status">
               <option value="1" <?php if($editmanu['pub_status']== 1) echo "selected";?> >Published</option>
               <option value="0" <?php if($editmanu['pub_status']== 0) echo "selected";?>>Unpublished</option>
            </select>

          </div>
          <button type="submit" style="background:#3895D3;border:#3895D3;" class="btn btn-primary">Submit</button>
           {!! Form::close()!!}
      </div>
    </div>
  </div>
@endsection
