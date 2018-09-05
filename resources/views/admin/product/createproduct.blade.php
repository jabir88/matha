@extends('layouts.adminmaster')
@section('bread')
Add Product
@endsection
@section('myContent')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
         {!! Form::open(['url' =>'admin/product/save', 'method' => 'post', 'class'=> 'form-group' , 'enctype' => 'multipart/form-data'])!!}
         @csrf
         @if (session('status'))
   <div class="alert alert-success">
       {{ session('status') }}
   </div>
@endif
          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" for="product_name">Product Name</label>
            <input type="text" name="product_name"  class="form-control" id="product_name" value="{{old('product_name')}}"  placeholder="Product Name">

          @if ($errors->has('product_name'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('product_name') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label  style="display: block; color:#f8812f; font-weight:700;" >Category Name</label>
          <select class="form-control"  name="cate_name">
            <option value="old('cate_name')" selected>Select Category</option>
            @foreach($categories as $category)

            <option value="{{$category->id}}">{{$category->cate_name}}</option>
            @endforeach
          </select>
          @if ($errors->has('cate_name'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('cate_name') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label  style="display: block; color:#f8812f; font-weight:700;" >Manufacturer Name</label>
          <select class="form-control"  name="manu_name">
            <option  selected>Select Manufacturer</option>
            @foreach($manufacturers as $manufacturer)

            <option value="{{$manufacturer->manu_id}}">{{$manufacturer->manu_name}}</option>
            @endforeach
          </select>
          @if ($errors->has('manu_name'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('manu_name') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label  style="display: block; color:#f8812f; font-weight:700;" for="product_price">Product Price</label>
          <input type="number" name="product_price"  class="form-control" id="product_price" value="{{old('product_price')}}"  placeholder="Product Price">

        @if ($errors->has('product_price'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('product_price') }}</strong>
            </span>
        @endif
      </div>
        <div class="form-group">
          <label  style="display: block; color:#f8812f; font-weight:700;" for="product_quantity">Product Quantity</label>
          <input type="number" name="product_quantity"  class="form-control" id="product_quantity" value="{{old('product_quantity')}}"  placeholder="Product Quantity">

        @if ($errors->has('product_quantity'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('product_quantity') }}</strong>
            </span>
        @endif
      </div>
          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" for="product_short_des">Product Short Description</label>
            <textarea name="product_short_des" id="product_short_des" placeholder="Category Short Description...."  rows="3" cols="128"> {{old('product_short_des')}}</textarea>
            @if ($errors->has('product_short_des'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('product_short_des') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" for="product_long_des">Product Long Description</label>
            <textarea name="product_long_des" id="product_long_des" placeholder="Category Long Description...."  rows="5" cols="128"> {{old('product_long_des')}}</textarea>
            @if ($errors->has('product_long_des'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('product_long_des') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" for="product_short_des">Product Image</label>
          <input type="file" name="product_img" value="{{old('product_img')}}">
            @if ($errors->has('product_img'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('product_img')}}</strong>
                </span>
            @endif
          </div>

          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" >Publication Status</label>
            <select class="form-control"  name="pub_status">
              <option value="{{old('pub_status')}}" selected>Select Publication</option>
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
