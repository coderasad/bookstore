{{-- Right side bar  --}}
  <aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">
    <div class="box shadow-sm border rounded bg-white mb-3">
        <div class="box-title border-bottom p-3">
            <h6 class="m-0">People you might know</h6>
        </div>
        <div class="box-body p-3">
            @foreach ($user as $data)
                <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="{{asset('public/frontend/img/user/'.$data->img)}}" alt="" />
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold mr-2">
                        <div class="text-truncate">
                            <a class="text-white" href="{{ url($data->name.'_'.$data->id)}}">{{$data->name}}</a>
                            {{-- <a class="text-white" href="">{{$data->name}}</a> --}}
                        </div>
                        <div class="small text-gray-500">{{$data->occupation}}</div>
                    </div>
                    <span class="ml-auto">
                        <button type="button" class="btn btn-light btn-sm">
                            <i class="feather-user-plus"></i>
                        </button>
                    </span>
                </div>
            @endforeach
            <div class="float-right">{{ $user->links() }}</div>
        </div>
    </div>
    <div class="box shadow-sm border rounded bg-white mb-3">
        <div class="box-title border-bottom p-3 d-flex align-items-center">
            <h6 class="m-0">Books Category </h6>
            <a class="ml-auto" href="#">See All <i class="feather-chevron-right"></i></a>
        </div>
    </div>
  </aside>