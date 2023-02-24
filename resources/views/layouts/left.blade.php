<div class="box_left">
    <ul class="list_fr">
        <h4>フォローユーザー一覧</h4>
        @foreach ($follwer as $follow)
        <li>
            <div class="inner">
                <p class="avat"><img src="{{$follow?->toUser?->avatar_url}}" alt=""></p>
                {{-- {{dd($follow)}} --}}
                <p class="name">{{$follow?->toUser?->name}}</p>
            </div>
                <form action="{{route('toggle_follow')}}" method="post">
                    @csrf
                    <input type="hidden" name="to_user_id" value="{{$follow?->toUser?->id}}">
                    <button type="submit">削除</button>
                  </form>
            </li>
            @endforeach
        
    </ul>
</div>