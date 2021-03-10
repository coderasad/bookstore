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
                    <li class="breadcrumb-item"><a href="{{ Route('admin.book.index') }}">Book</a></li>
                    <li class="breadcrumb-item active">Book Create</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div><!-- end row -->
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card-box">
                <form action="{{ Route('admin.book.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group {{ $errors->has('book_name') ? ' has-danger ' : '' }}">
                        <label for="book_name">Book Name</label>
                        <input type="text" class="form-control {{ $errors->has('book_name') ? 'form-control-danger' : '' }}"  value="{{ old('book_name') }}" maxlength="30" name="book_name" id="defaultconfig" placeholder="Enter Book Name" required>
                        @error('book_name')
                            <span class="form-control-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group {{ $errors->has('sort_des') ? ' has-danger ' : '' }}">
                        <label for="sort_des">Author Name</label>
                        <input type="text" class="form-control {{ $errors->has('author_name') ? 'form-control-danger' : '' }}"  value="{{ old('author_name') }}" maxlength="30" name="author_name" id="defaultconfig" placeholder="Enter Author Name" required >
                        @error('author_name')
                            <span class="form-control-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="category_id" class="select2 select2-active form-control @error('category_id') is-invalid @enderror" id="category_id" >
                            <option value="" >-- Select --</option>
                            @foreach ($category as $data)
                                <option value="{{ $data->id }}">{{ $data->category_name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group {{ $errors->has('sort_des') ? ' has-danger ' : '' }}">
                        <label for="sort_des">Book Title</label>
                        <input type="text" class="form-control {{ $errors->has('sort_des') ? 'form-control-danger' : '' }}"  value="{{ old('sort_des') }}" name="sort_des" id="defaultconfig" maxlength='190' placeholder="Enter Book Title" required>
                        @error('sort_des')
                            <span class="form-control-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group {{ $errors->has('main_book') ? ' has-danger ' : '' }}">
                        <label for="main_book">Book Upload</label>
                        <textarea name="main_book" class="form-control {{ $errors->has('main_book') ? 'form-control-danger' : '' }}" id="" placeholder="Full Book Content write here..." required >{{ old('main_book') }}</textarea>                       
                        @error('main_book')
                            <span class="form-control-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group {{ $errors->has('paid_free') ? ' has-danger ' : '' }}">
                        <label for="paid_free">Paid/Free</label>
                        <select name="paid_free" class="select2 select2-active form-control @error('paid_free') is-invalid @enderror" id="paid_free">
                            <option value="" >-- Select --</option>
                                <option value="Free">Free</option>
                                <option value="Paid">Paid</option>
                        </select>   
                        @error('paid_free')
                            <span class="form-control-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>                    
                    <div class="form-group {{ $errors->has('published_date') ? ' has-danger ' : '' }}">
                        <label for="published_date">Published Date</label>
                        <input type="date" class="form-control {{ $errors->has('published_date') ? 'form-control-danger' : '' }}"  value="{{ old('published_date') }}" name="published_date" placeholder="Enter Published Date" required >
                        @error('published_date')
                            <span class="form-control-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group  {{ $errors->has('book_img') ? ' has-danger ' : '' }}">
                        <label for="">Book Cover Image</label>
                        <input  name="book_img" type="file" class="filestyle {{ $errors->has('book_img') ? 'form-control-danger' : '' }}"  data-iconname="fa fa-cloud-upload" data-buttonname="btn-secondary" id="imgInp" tabindex="-1" required>
                        @error('book_img')
                            <span class="form-control-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="mt-2">
                            <img id='img_show' src="" alt="" class="img-thumbnail w-25">
                        </div>
                    </div>
                    <input type="hidden" value="{{ Auth::user()->id}}" name="user_id">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success waves-effect" >Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  
@endsection