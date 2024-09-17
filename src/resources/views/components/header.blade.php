<header class="header">
    <div class="header_inner">
        <div class="header-logo">
            <input type="checkbox" id="menu">
            <label class="menu-btn" for="menu">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    @if(Auth::check())
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button>logout</button>
                            </form>
                        </li>
                        <li><a href="/mypage">Mypage</a></li>
                    @else
                        <li><a href="/register">Registration</a></li>
                        <li><a href="/login">Login</a></li>
                    @endif
                </ul>
            </nav>
            <h1>Rese</h1>
        </div>
        @yield('search')
    </div>
</header>
@hasanyrole('admin')
    <div class="admin">
        <div class="admin_inner">
            <div class="admin_button">
                <form action="">
                    <button type="submit" value="">
                        Todoを作成しました
                    </button>
                </form>
            </div>
        </div>
    </div>
@endhasanyrole
