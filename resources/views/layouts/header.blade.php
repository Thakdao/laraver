
<header class="con_header">
    <p class="con_icon"><a href="/home">ホームページ</a></p>
    <p class="con_icon key"><a href="/change-password">パスワード変更</a></p>
    <p class="con_icon user"><a href="/profile">プロファイル変更</a></p>
    <div class="btn_logout">
        <form style="text-align: right; margin-right:5em;" method="POST" action="{{ route('logout') }}">
            @csrf
            <p class="con_icon" :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('ログアウト') }}
            </p>
        </form>
    </div>
    {{-- logout form --}}
</header>
