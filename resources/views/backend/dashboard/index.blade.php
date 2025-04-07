@extends('backend.layout.index')

@section("content")

 <!-- Content wrapper -->
 <div class="content-wrapper">
 <!-- Content -->

 <div class="container-xxl flex-grow-1 container-p-y">

  <div class="row">
    <!-- View sales -->
    <div class="col-xl-4 mb-4 col-lg-5 col-12">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-7">
            <div class="card-body text-nowrap">
              <h5 class="card-title mb-0">Congratulations John! 🎉</h5>
              <p class="mb-2">Best seller of the month</p>
              <h4 class="text-primary mb-1">$48.9k</h4>
              <a href="javascript:;" class="btn btn-primary">View Sales</a>
            </div>
          </div>
          <div class="col-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img src="../../backend_assets/img/illustrations/card-advance-sale.png" height="140" alt="view sales">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- View sales -->
  
    <!-- Statistics -->
    <div class="col-xl-8 mb-4 col-lg-7 col-12">
      <div class="card h-100">
        <div class="card-header">
          <div class="d-flex justify-content-between mb-3">
            <h5 class="card-title mb-0">Statistics</h5>
            {{-- <small class="text-muted">Updated 1 month ago</small> --}}
          </div>
        </div>
        <div class="card-body">
          <div class="row gy-3">
            @if(Auth::user()->role == 1)
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="badge rounded-pill bg-label-primary me-3 p-2">
                    <i class="menu-icon fa-regular fa-building p-0"></i>
                  </div>
                  <div class="card-info">
                    <h5 class="mb-0">{{$property}}</h5>
                    <a href="/property/view" class="text-dark">Property</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="badge rounded-pill bg-label-info me-3 p-2"><i class="menu-icon fa-solid fa-credit-card"></i></div>
                  <div class="card-info">
                    <h5 class="mb-0">{{$subscription}}</h5>
                    <a href="/subscription/view" class="text-dark">Subscription</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="badge rounded-pill bg-label-danger me-3 p-2"><i class="ti ti-users ti-sm"></i></div>
                  <div class="card-info">
                    <h5 class="mb-0">{{$consultant}}</h5>
                    <a href="/consultant/view" class="text-dark">Consultant</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="badge rounded-pill bg-label-success me-3 p-2"><i class="menu-icon fa-solid fa-building-columns"></i></div>
                  <div class="card-info">
                    <h5 class="mb-0">{{$bank}}</h5>
                    <a href="/bank/view" class="text-dark">Bank</a>
                  </div>
                </div>
              </div>
              @elseif(Auth::user()->role == 2)
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="badge rounded-pill bg-label-primary me-3 p-2">
                    <i class="menu-icon fa-regular fa-building p-0"></i>
                  </div>
                  <div class="card-info">
                    <h5 class="mb-0">{{$consultantProperty}}</h5>
                    <a href="/property/view" class="text-dark">Property</a>
                  </div>
                </div>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
    <!--/ Statistics -->
  </div>
             
  </div>
<!-- / Content -->

@endsection
