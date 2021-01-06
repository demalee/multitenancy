
@guest
    <div class="header-right-btn d-none d-lg-block ml-40">
        <a href="{{url('login')}}" class="btn"><i class="fas fa-user"></i>Login</a>
    </div>
@endguest
@auth


    <li>
        <a  href="{{ url('main') }}">Dashboard</a>
    </li>

    <!-- Logout nav link -->
    <li>
        <form class="" action="{{ route('logout') }}" method="post" id="logout_form">
            @csrf
        </form>

        <a href="#"  type="submit" onclick="logout()"><b>{{ __('Logout') }}</b></a>

        <script type="text/javascript" defer>
            function logout() {
                document.getElementById('logout_form').submit();
            }
        </script>
    </li>

@endauth
