
 <!-- Layout wrapper -->
 <div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">

    <!-- Menu -->
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
            <a href="/dashboard" class="app-brand-link">
              <img src="{{asset('assest/images/logo1.png')}}" alt="" style="width:60%;">
              <!-- <span class="app-brand-text demo menu-text fw-bold">ADA</span> -->
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
              <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
        </div>
        
      <div class="menu-inner-shadow"></div>
      <ul class="menu-inner py-1">
        
          <li class="menu-item active">
            <a href="/dashboard" class="menu-link">
              <div data-i18n="Dashboard">Dashboard</div>
            </a>
          </li>
         
        @if(session()->get("adminAuthentication") == "admin")
       
          <!-- property -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon fa-regular fa-building"></i>
              <div data-i18n="Property">Property</div>
            </a>

            <ul class="menu-sub">
            <li class="menu-item">
              <a href="/property/index" class="menu-link">
                <div data-i18n="Add Property">Add Property</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/property/view" class="menu-link">
                <div data-i18n="View Property">View Property</div>
              </a>
            </li>
            </ul>
          </li>

          <!-- Subscription -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon fa-solid fa-credit-card"></i>
              <div data-i18n="Subscription">Subscription</div>
            </a>

            <ul class="menu-sub">
            <li class="menu-item">
              <a href="/subscription/index" class="menu-link">
                <div data-i18n="Add Subscription">Add Subscription</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/subscription/view" class="menu-link">
                <div data-i18n="View Subscription">View Subscription</div>
              </a>
            </li>
            </ul>
          </li>

          <!-- Consultant -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon fa-solid fa-user"></i>
              <div data-i18n="Consultant">Consultant</div>
            </a>

            <ul class="menu-sub">
            <li class="menu-item">
              <a href="/consultant/index" class="menu-link">
                <div data-i18n="Add Consultant">Add Consultant</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/consultant/view" class="menu-link">
                <div data-i18n="View Consultant">View Consultant</div>
              </a>
            </li>
            </ul>
          </li>

          <!-- bank -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon fa-solid fa-building-columns"></i>
              <div data-i18n="Bank">Bank</div>
            </a>

            <ul class="menu-sub">
            <li class="menu-item">
              <a href="/bank/index" class="menu-link">
                <div data-i18n="Add Bank">Add Bank</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/bank/view" class="menu-link">
                <div data-i18n="View Bank">View Bank</div>
              </a>
            </li>
            </ul>
          </li>

          <!-- Setting -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon fa-solid fa-gear"></i>
              <div data-i18n="Setting">Setting</div>
            </a>

            <ul class="menu-sub">
            <li class="menu-item">
              <a href="/setting/terms-conditions" class="menu-link">
                <div data-i18n="Term & Conditions">Terms & Conditions</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/setting/privacy-policy" class="menu-link">
                <div data-i18n="Privacy Policy">Privacy Policy</div>
              </a>
            </li>
            {{-- <li class="menu-item">
              <a href="/setting/terms-of-use" class="menu-link">
                <div data-i18n="Term Of Use">Terms Of Use</div>
              </a>
            </li> --}}
            </ul>
          </li>

          <!-- contact list -->
          <li class="menu-item">
            <a href="/contact-list/view" class="menu-link">
              <i class="menu-icon fa-solid fa-address-book"></i>
              <div data-i18n="Contact List">Contact List</div>
            </a>
          </li>

          <!-- Request inquiry -->
          <li class="menu-item">
            <a href="/request-inquiry/view" class="menu-link">
              <i class="menu-icon fa-solid fa-circle-question"></i>
              <div data-i18n="Request Inquiry">Request Inquiry</div>
            </a>
          </li>

          <!-- Join us  -->
          <li class="menu-item">
            <a href="/join-us/view" class="menu-link">
              <i class="menu-icon fa-solid fa-handshake-angle"></i>
              <div data-i18n="Join Us">Join Us</div>
            </a>
          </li>

           <!-- Subscriber  -->
           <li class="menu-item">
            <a href="/subscriber/view" class="menu-link">
              <i class="menu-icon fa-solid fa-bell"></i>
              <div data-i18n="Subscriber">Subscriber</div>
            </a>
          </li>

           <!-- location -->
          {{-- <li class="menu-item">
            <a href="/location/index" class="menu-link">
              <i class="menu-icon fa-solid fa-location-dot"></i>
              <div data-i18n="Location">Location</div>
            </a>
          </li> --}}
        

        @elseif(session()->get("adminAuthentication") == "employee")
            <!-- property -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon fa-regular fa-building"></i>
              <div data-i18n="Property">Property</div>
            </a>

            <ul class="menu-sub">
            <li class="menu-item">
              <a href="/property/index" class="menu-link">
                <div data-i18n="Add Property">Add Property</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/property/view" class="menu-link">
                <div data-i18n="View Property">View Property</div>
              </a>
            </li>
            </ul>
          </li>

          <!-- Request inquiry -->
          <li class="menu-item">
            <a href="/request-inquiry/view" class="menu-link">
              <i class="menu-icon fa-solid fa-circle-question"></i>
              <div data-i18n="Request Inquiry">Request Inquiry</div>
            </a>
          </li>
        @else
          <script>window.location = "/admin";</script>
        @endif
      </ul>
    </aside>
<!-- / Menu -->
@include("backend.layout.sidebar")