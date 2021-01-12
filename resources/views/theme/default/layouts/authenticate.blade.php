
@guest

    <li>  <a href="{{url('login')}}" class="btn">Login</a></li>


    <li>   <a href="{{url('login')}}" class="btn">sign up</a></li>

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
