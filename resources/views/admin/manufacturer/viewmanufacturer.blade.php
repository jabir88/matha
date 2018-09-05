@extends('layouts.adminmaster')
@section('bread')
Manage Manufacturer
@endsection
@section('myContent')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_header_text">
                        <i class="fa fa-th"></i> Manage Manufacturer
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('admin/manufacturer/add')}}" class="btn btn-dark btn-sm card_button"><i class="fa fa-plus-circle"></i> Add Manufacturer</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="allTable" class="table table-bordered table-striped table-hover customize_table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Manufacturer Name</th>
                                <th>Manufacturer  Description</th>
                                <th>Publication Status</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $i=1;?>
                          @foreach($manu_all as $data)
                          <tr>

                              <td>{{$i}}  </td>
                              <td>{{$data->manu_name}}</td>
                              <td>{{str_limit($data->manu_des, 30)}}</td>
                              <td>{{$data->pub_status == 1 ? 'Published' :'Unpublished'}}</td>
                              <td>
                                <a href="{{url('admin/manufacturer/singleview/'.$data->manu_id)}}"><i class="fa fa-plus-square"></i></a>
                                <a href="{{url('admin/manufacturer/edit/'.$data->manu_id)}}"><i class="fa fa-pencil-square"></i></a>
                                <a href="{{url('admin/manufacturer/delete/'.$data->manu_id)}}"><i class="fa fa-trash"></i></a>
                              </td>
                            </tr>

                                                            <?php $i++; ?>
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
