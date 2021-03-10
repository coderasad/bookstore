 {{-- main content --}}
 <main class="col col-xl-12 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
     <div class="box shadow-sm border rounded bg-white mb-3 osahan-share-post">
         <div class="py-5 bg-primary">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12 mx-auto">
                         <h1 class="text-white font-weight-light"><span class="font-weight-bold">{{ $book->book_name }}
                             </span> Single</h1>
                         <p class="mb-2 text-white-50">Published :
                             {{ \Carbon\Carbon::parse($book->published_date)->format('F d, Y') }} (view archived
                             versions)
                         </p>
                     </div>
                 </div>
             </div>
         </div>
         <div class="py-5">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-8 col-md-8">
                         <div class="blog-card padding-card box shadow-sm rounded bg-white mb-3 border-0">
                             <img class="card-img-top" src="{{asset($book->book_img)}}" alt="Card image cap">
                             <div class="card-body">
                                 <span class="badge badge-success">{{$book->category->category_name}}</span>
                                 <h2>{{ Str::of($book->sort_des)->words(7,'...') }}</h2>
                                 <h6 class="mb-3"><i class="feather-calendar"></i> {{ \Carbon\Carbon::parse($book->published_date)->format('F d, Y') }}</h6>
                                 <p>
                                     {{ $book->main_book }}
                                 </p>
                                 
                             </div>
                             <div class="card-footer border-0">
                                 <div class="footer-social"><span>Share</span> : &nbsp;
                                     <a href="#"><i class="feather-facebook"></i></a>
                                     <a href="#"><i class="feather-twitter"></i></a>
                                     <a href="#"><i class="feather-instagram"></i></a>
                                 </div>
                             </div>
                         </div>                         
                     </div>
                     <div class="col-lg-4 col-md-4">
                         <div class="sidebar-card box shadow-sm rounded bg-white border-0">
                             <div class="card-body">
                                 <h5 class="card-title mb-4">Book Category</h5>  
                                @foreach ($category as $data)
                                    <a href="{{route('author.category.book', $data->id)}}">
                                        <h6>{{$data->category_name}}</h6>
                                    </a>  
                                @endforeach                  
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </main>
