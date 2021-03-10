{{-- left side bar  --}}
  <aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
    <div class="box mb-3 shadow-sm border rounded bg-white profile-box text-center">
        <div class="py-4 px-3 border-bottom">
            <img src="{{asset('public/frontend/img/user/'.Auth::user()->img)}}" class="img-fluid mt-2 rounded-circle" alt="Responsive image" />
            <h5 class="font-weight-bold text-dark mb-1 mt-4">
                {{Auth::user()->name}}
            </h5>
            <p class="mb-0 text-muted">{{Auth::user()->occupation}}</p>
        </div>
        <div class="overflow-hidden border-top">
            <a class="font-weight-bold p-3 d-block" href="{{url('edit-profile')}}">
                Edit my profile
            </a>
        </div>
    </div>
  </aside>
