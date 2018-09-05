@extends('layouts.adminmaster')
@section('bread')
Contact Messages
@endsection
@section('myContent')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_header_text">
                        <i class="fa fa-th"></i> Contact Messages ({{$count}})
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
                                <th>Message</th>
                                <th>Time</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($con_all as $data)

                            <tr>
                                <td>{{$data->conus_name}}</td>
                                <td>{{$data->conus_email}}</td>
                                <td>{{$data->conus_mess}}</td>
                                <?php $m = $data->created_at; ?>
                                <td>{{\Carbon\ Carbon::parse($m)->diffForHumans()}}</td>
                                <td>
                                  <a href="{{url('admin/contact/mark/'.$data->conus_id)}}"><i class="fa fa-check"></i></a>

                                  <a href="{{url('admin/contact/delete/'.$data->conus_id)}}"><i class="fa fa-trash"></i></a>
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
