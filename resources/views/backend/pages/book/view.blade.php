@extends('backend.layouts.app')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.jqueryui.min.css">
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
                    <li class="breadcrumb-item"><a href="{{ Route('admin.category.index') }}">Book</a></li>
                    <li class="breadcrumb-item active">Book Details</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div><!-- end row -->
    <div class="row">
        <div class="col-md-12">
            <div class="profile-bg-picture">
                <span class="picture-bg-overlay text-center mt-5 text-uppercase"><h1>Book Name: {{$book->book_name}}</h1></span><!-- overlay -->
            </div>
            <div class="profile-user-box">
                <div class="row">
                    <div class="col-sm-6">
                        <span class="pull-left m-r-15"><img src="{{asset($book->book_img)}}" alt="" class="thumb-lg rounded-circle"></span>
                        <div class="media-body">
                            <h4 class="m-t-5 m-b-5 font-18 ellipsis">{{$book->book_name}}</h4>
                            <p class="font-13"> {{$book->author_name}}</p>
                            <p class="text-muted m-b-0"><small>Published Date: {{ \Carbon\Carbon::parse($book->published_date)->format('d-m-Y')}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-20">Book Information</h4>
                <div class="panel-body">
                    <p class="text-muted font-13">
                        {{ $book->sort_des}}
                    </p>

                    <hr>

                    <div class="text-left">
                        <p class="text-muted font-13"><strong>Book Name :</strong> <span class="m-l-15"> {{ $book->book_name}} </span></p>

                        <p class="text-muted font-13"><strong>Author Name :</strong><span class="m-l-15">{{ $book->author_name }} </span></p>

                        <p class="text-muted font-13"><strong>Category :</strong> <span class="m-l-15">{{ $book->category->category_name }}</span></p>

                        <p class="text-muted font-13"><strong>Book Status :</strong> <span class="m-l-15">{{ $book->paid_free }}</span></p>

                        <p class="text-muted font-13"><strong>User Name :</strong> <span class="m-l-15">{{$book->user->name}}</span></p>

                        <p class="text-muted font-13"><strong>Published Date :</strong> <span class="m-l-15">{{ \Carbon\Carbon::parse($book->published_date)->format('d-m-Y')}}</span></p>

                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-8">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-20">Reading Now...</h4>
                <div class="">
                    <div class="">
                        <p class="text-muted font-13 m-b-0">
                            {{$book->main_book}}
                        </p>
                    </div>

                </div>
            </div>

        </div>
        <!-- end col -->

    </div>
  
@endsection