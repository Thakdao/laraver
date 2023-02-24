<div class="box_left">
    <ul class="list_fr">
        @foreach ($follwer as $follow)
        <li>
                <p class="avat"><img src="{{$follow?->toUser?->avatar_url}}" alt=""></p>
                {{-- {{dd($follow)}} --}}
                <p class="name">{{$follow?->toUser?->name}}</p>
                <form action="{{route('toggle_follow')}}" method="post">
                    @csrf
                    <input type="hidden" name="to_user_id" value="{{$follow?->toUser?->id}}">
                    <button type="submit">unlf</button>
                  </form>
            </li>
            @endforeach
        
    </ul>
</div>