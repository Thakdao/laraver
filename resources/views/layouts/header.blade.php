<div class="btn_logout">
    <form style="text-align: right; margin-right:5em;" method="POST" action="{{ route('logout') }}">
        @csrf
        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
</div>
{{-- logout form --}}
<p class="con_icon"><a href="/home"><i class="fa-solid fa-house"></i></a></p>
