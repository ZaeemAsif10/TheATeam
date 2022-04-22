<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('public/admin_assets/images/logo.png') }}" class="logo-icon"
                alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">SYN-UI</h4>
        </div>
        <div class="toggle-icon ms-auto">
            <ion-icon name="menu-sharp"></ion-icon>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="menu-title">Dashboard</div>
            </a>
        </li>





        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <ion-icon name="briefcase-sharp"></ion-icon>
                </div>
                <div class="menu-title">Slider</div>
            </a>
            <ul>
                <li> <a href="{{ url('slider') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>View Slider
                    </a>
                </li>
            </ul>
        </li>


    </ul>
    <!--end navigation-->
</aside>
