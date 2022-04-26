<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('public/admin_assets/images/logo.png') }}" class="logo-icon" alt="logo icon">
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
                <li> <a href="{{ url('admin/slider') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>All Slider
                    </a>
                </li>
            </ul>
        </li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <ion-icon name="newspaper-sharp"></ion-icon>
                </div>
                <div class="menu-title">News</div>
            </a>
            <ul>
                <li> <a href="{{ url('news/slider') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>News Slider
                    </a>
                <li> <a href="{{ url('admin/news') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>All News
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <ion-icon name="copy-sharp"></ion-icon>
                </div>
                <div class="menu-title">Blogs</div>
            </a>
            <ul>
                <li> <a href="{{ url('blog/slider') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Blog Slider
                    </a>
                </li>
                <li> <a href="{{ url('admin/blogs') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>All Blogs
                    </a>
                </li>
            </ul>
        </li>


    </ul>
    <!--end navigation-->
</aside>
