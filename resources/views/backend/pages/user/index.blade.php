@extends('backend.layouts.app')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
@endpush
@section('title')
    user
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title float-left">user</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="{{ Route('admin.user-list') }}">user</a></li>
                    <li class="breadcrumb-item active">user List</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div><!-- end row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="table-responsive"> 
                    <table id="example" class="table table-striped table-bordered text-nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th width="5%">Sl No</th>
                                <th>User Name</th>
                                <th>User Type</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $data)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td> {{$data->name}} </td>
                                    <td> 
                                        <div class="btn-group">
                                            <a class="{{ $data->user_type=='paid' ? 'btn btn-success' : 'btn btn-primary' }}" >{{$data->user_type}}</a>
                                        </div>                                        
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin.user-status-update', $data->id)}}" class="btn btn-info" >Type Update</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  
@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#example').DataTable();
        } );
    </script>
@endpush