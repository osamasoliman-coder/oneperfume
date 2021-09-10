<div class="header-top-right">
    <div class="account-menu text-right pull-right mt-10 home3-hover">
        <ul>
            <li><a href="#">My Account</a></li>
            <li><a href="{{ route('login') }}">SignIn</a></li>
            <li><a href="{{ route('register') }}">SignUp</a></li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
