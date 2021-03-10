@extends('layouts.app')
@section('title')
  Home Page
@endsection

@section('content')
<div class="py-4">
  <div class="container">
      <div class="row">
        {{-- Main Content --}}
        @include ('pages.component.book.categoryBook')
      </div>
  </div>
</div>


@endsection