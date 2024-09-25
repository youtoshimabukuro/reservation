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
                    @hasanyrole('admin')
                        <li>
                            <form action="/admin/register">
                                @csrf
                                <button type="submit" value="">
                                    管理者画面
                                </button>
                            </form>
                        </li>
                    @endhasanyrole
                    @hasanyrole('representative')
                        <li>
                            <form action="/representative/reservationConfirm">
                                @csrf
                                <button type="submit" value="">
                                    予約確認
                                </button>
                            </form>
                        </li>
                        <li>
                            <form action="/representative/addStore">
                                @csrf
                                <button type="submit" value="">
                                    店舗情報作成
                                </button>
                            </form>
                        </li>
                    @endhasanyrole
                </ul>
            </nav>
            <h1>Rese</h1>
        </div>
        @yield('search')
    </div>
</header>

<div class="todo__alert">
    @if (session('message'))
        <div class="alert--success">
            {{session('message')}}
        </div>
    @endif
    @if (!str_contains(url()->previous(), 'reserve/confirm') && $errors->any())
        <div class="alert--danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

