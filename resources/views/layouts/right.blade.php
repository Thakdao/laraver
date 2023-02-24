<div class="box_right">
  <h4>ユーザー一覧</h4>
  <ul class="list_contact">
    @foreach ($follow as $user)
      <li class="online">
       
          {{-- {{dd( $user)}} --}}
          <div class="inner">
            <p class="avat"><img src="{{ $user->avatar_url}}" alt=""></p>
            <p class="name"> {{ $user->name }}</p>

          </div>
              <form action="{{route('toggle_follow')}}" method="post">
                @csrf
                <input type="hidden" name="to_user_id" value="{{$user->id}}">
                <button type="submit">フォロー</button>
              </form>
            </li>
   @endforeach
  </ul>
</div>