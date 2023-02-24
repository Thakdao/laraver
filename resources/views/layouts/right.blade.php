<div class="box_right">
  <h4>Contacts</h4>
  <ul class="list_contact">
    @foreach ($follow as $user)
      <li class="online">
       
          {{-- {{dd( $user)}} --}}
              {{-- <p class="avat"><img src="{{ $user->avatar_url}}" alt=""></p> --}}
              <p class="name"> {{ $user->name }}</p>
              <form action="{{route('toggle_follow')}}" method="post">
                @csrf
                <input type="hidden" name="to_user_id" value="{{$user->id}}">
                <button type="submit">FL</button>
              </form>
            </li>
   @endforeach
  </ul>
</div>