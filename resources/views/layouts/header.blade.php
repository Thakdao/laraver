<header class="con_header">
    <p class="logo"><img src="{{'images/logo.gif'}}" alt=""></p>
    <div class="box_nav">
        <p class="con_icon"><a href="/home"></a></p>
        <p class="con_icon key"><a href="/change-password"></a></p>
        <p class="con_icon user"><a href="/profile"></a></p>
    </div>
   
    <div class="box_user">
        <div class="inner_user">
            <p class="avat"><img src="{{ auth()->user()->avatarUrl }}" alt=""></p>
            <p class="name"> {{ Auth::user()->name }}</p>
        </div>
        <div class="btn_logout">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <p class="logout" :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                    {{ __('ログアウト') }}
                </p>
            </form>
        </div>
    </div>
    {{-- logout form --}}
</header>
