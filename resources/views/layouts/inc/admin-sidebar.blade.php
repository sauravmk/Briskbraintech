<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link {{Request::is('admin/dashboard')? 'active':''}}" href="{{url('admin/dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link {{Request::is('admin/category') || Request::is('admin/edit-category/*')|| Request::is('admin/add-category') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{Request::is('admin/category') || Request::is('admin/dd-category')||Request::
                    is('admin/edit-category/*')? 'show':''}}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{Request::is('admin/add-category')? 'active':''}}" href="{{url('admin/add-category')}}">Add Category</a>
                        <a class="nav-link {{Request::is('admin/category') || Request::is('admin/edit-category/*')? 'active':''}}" href="{{url('admin/category')}}">View Category</a>
                    </nav>
                </div>
                <a class="nav-link {{Request::is('admin/posts') || Request::is('admin/post/*')|| Request::is('admin/add-post') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePost" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{Request::is('admin/add-post') || Request::is('admin/post/*')|| Request::is('admin/posts')? 'show':''}}" id="collapsePost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{Request::is('admin/add-post')? 'active':''}}" href="{{url('admin/add-post')}}">Add Post</a>
                        <a class="nav-link {{Request::is('admin/posts')||Request::is('admin/post/*')? 'active':''}}" href="{{url('admin/posts')}}">View Posts</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link {{Request::is('admin/settings')? 'active':''}}" href="{{url('admin/settings')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-wrench"></i></div>
                    Setting
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
           {{Auth::user()->name}}
        </div>
    </nav>
</div>
