@extends('backend.layouts.app')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
@endpush
@section('title')
    Book
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title float-left">Book</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="{{ Route('admin.book.index') }}">Book</a></li>
                    <li class="breadcrumb-item active">Book List</li>
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
                                <th>Book Name</th>
                                <th>Author Name</th>
                                <th>Book Title</th>
                                <th>Book Category</th>
                                <th>User Name</th>
                                <th>Published Date</th>
                                <th>Free/Paid</th>
                                <th width="20%">Book Cover</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($book as $data)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td> {{$data->book_name}} </td>
                                    <td> {{$data->author_name}} </td>
                                    <td> {{Str::of($data->sort_des)->words(5,'...')}} </td>
                                    <td> {{$data->category->category_name}} </td>
                                    <td> {{$data->user->name}} </td>
                                    <td> {{ \Carbon\Carbon::parse($data->published_date)->format('d-m-Y')}} </td>
                                    <td> {{$data->paid_free}} </td>
                                    <td> <img class='w-75' src="{{asset($data->book_img)}}" alt=""> </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin.book.show', $data->id)}}" class="btn btn-info" ><span class="fa fa-edit"></span></a>
                                            
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