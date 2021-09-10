<ul class="metismenu" id="menu">
    <li>
        <a class="has-arrow" href="#">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Dashboard</div>
        </a>
        <ul class="">
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> eCommerce v1</a>
            </li>
        </ul>
    </li>


        <li>
            <a class="has-arrow" href="#">
                <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                <div class="menu-title">User Management</div>
            </a>
            <ul class="">
                <li>
                    <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> index</a>
                </li>
                <li>
                    <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> User Role</a>
                </li>
            </ul>
        </li>



    <li>
        <a class="has-arrow" href="#">
            <div class="parent-icon"><i class="fa fa-shopping-cart"></i></div>
            <div class="menu-title">Product Management</div>
        </a>
        <ul class="">
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> All Product</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Add Product</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Brands</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Main Category</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Category</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Sub Category</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Color</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Size</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Unit</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Writer</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Publication</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Status</a>
            </li>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Vendor</a>
            </li>

        </ul>
    </li>

    <li>
        <a class="has-arrow" href="#">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Blank Pages</div>
        </a>
        <ul class="">
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> index</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> create</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> view</a>
            </li>
        </ul>
    </li>


    <li class="menu-label">Extra</li>
    <li>
        <a href="/" target="_blank">
            <div class="parent-icon"><i class="fa fa-globe"></i></div>
            <div class="menu-title">Website</div>
        </a>
    </li>
    <li>
        <a  href="{{ route('logout') }}"
            onclick="event.preventDefault(); confirm('sure!!') && document.getElementById('logout-form').submit();">
            <div class="parent-icon"><i class="fa fa-sign-out"></i></div>
            <div class="menu-title">Logout</div>
        </a>
    </li>

    {{--
        <li class="menu-label">Labels</li>
        <li>
            <a href="#">
                <div class="parent-icon"><i class="zmdi zmdi-coffee"></i></div>
                <div class="menu-title">Important</div>
            </a>
        </li>
    --}}

</ul>
