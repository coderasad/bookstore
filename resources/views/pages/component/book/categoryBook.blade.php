 {{-- main content --}}
 <main class="col col-xl-12 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
     <div class="box shadow-sm border rounded bg-white mb-3 osahan-share-post">
         <div class="py-5 bg-primary">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12 mx-auto">
                         <h1 class="text-white font-weight-light">
                            <span class="font-weight-bold">{{ $category->category_name }}
                            </span> Category</h1>
                     </div>
                 </div>
             </div>
         </div>
         <div class="py-5">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12 col-md-12">
                         <div class="row">
                             @foreach ($book as $data)
                                <div class="col-lg-4 col-md-4">
                                    <div class="box shadow-sm rounded bg-white mb-3 blog-card border-0">
                                        <a href="{{route('author.bookView',$data->id)}}"><img class="card-img-top" src="{{asset($data->book_img)}}" alt="Card image cap">
                                            <div class="card-body">
                                                <span class="badge badge-success">{{$data->book_name}}</span>
                                                <h6 class="text-dark">{{ Str::of($data->sort_des)->words(7,'...') }}</h6>
                                                <p class="mb-0">{{ Str::of($data->main_book)->words(7,'...') }}</p>
                                            </div>
                                            <div class="card-footer border-0">
                                                <p class="mb-0">
                                                    <strong>{{$data->author_name}}</strong> {{ \Carbon\Carbon::parse($data->published_date)->format('F d, Y') }}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div> 
                             @endforeach                            
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </main>
