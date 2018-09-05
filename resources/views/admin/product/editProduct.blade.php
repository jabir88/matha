@extends('layouts.adminmaster')
@section('bread')
Add Product
@endsection
@section('myContent')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
         {!! Form::open(['url' =>'admin/product/edit/submit', 'method' => 'post', 'class'=> 'form-group' , 'enctype' => 'multipart/form-data'])!!}
         @csrf
         @if (session('status'))
   <div class="alert alert-success">
       {{ session('status') }}
   </div>
@endif
          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" for="product_name">Product Name</label>
            <input type="hidden" name="pro_id"  class="form-control" id="pro_id" value="{{$products->pro_id}}"  >
            <input type="text" name="product_name"  class="form-control" id="product_name" value="{{$products->product_name}}"  placeholder="Product Name">

          @if ($errors->has('product_name'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('product_name') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label  style="display: block; color:#f8812f; font-weight:700;" >Category Name</label>
            <!-- <option selected>Select Category</option> -->
            <select class="form-control"  name="cate_name">

            @foreach($categories as $category)
            <!-- <option value="{{$products->id}}">{{$category->cate_name}}</option> -->

            <option value="{{$category->id}}" {{ $selectedcate->id == $category->id ? 'selected="selected"' : ''}} >{{$category->cate_name}}</option>
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
            <option selected>Select Manufacturer</option>
            @foreach($manufacturers as $manufacturer)

            <option value="{{$products->manu_id}}" selected>{{$manufacturer->manu_name}}</option>
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
          <input type="number" name="product_price"  class="form-control" id="product_price" value="{{$products->product_price}}"  placeholder="Product Price">

        @if ($errors->has('product_price'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('product_price') }}</strong>
            </span>
        @endif
      </div>
        <div class="form-group">
          <label  style="display: block; color:#f8812f; font-weight:700;" for="product_quantity">Product Quantity</label>
          <input type="number" name="product_quantity"  class="form-control" id="product_quantity" value="{{$products->product_quantity}}"  placeholder="Product Quantity">

        @if ($errors->has('product_quantity'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('product_quantity') }}</strong>
            </span>
        @endif
      </div>
          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" for="product_short_des">Product Short Description</label>
            <textarea name="product_short_des" id="product_short_des" placeholder="Category Short Description...."  rows="3" cols="128"> {{$products->product_short_des}}</textarea>
            @if ($errors->has('product_short_des'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('product_short_des') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" for="product_long_des">Product Long Description</label>
            <textarea name="product_long_des" id="product_long_des" placeholder="Category Long Description...."  rows="5" cols="128"> {{$products->product_long_des}}</textarea>
            @if ($errors->has('product_long_des'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('product_long_des') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" for="product_short_des">Choose Another Product Image</label>
            <img  height="120" src="{{asset('/'.$products->product_img)}}" alt="">
          <input type="file" name="product_img" >

            @if ($errors->has('product_img'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('product_img')}}</strong>
                </span>
            @endif
          </div>

          <div class="form-group">
            <label  style="display: block; color:#f8812f; font-weight:700;" >Publication Status</label>
            <select class="form-control"  name="pub_status">
              <option value="{{$products->pub_status}}" selected>
                {{$products->pub_status==1 ? 'Published' : 'Unpublished'}}
              </option>


              <option value="1" >Published</option>

              <option value="0" >Unpublished</option>

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
