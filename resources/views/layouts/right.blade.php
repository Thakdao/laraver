<div class="box_right">
  <h4>Contacts</h4>
  <ul class="list_contact">
    @foreach ($users as $user)
      <li class="online">
        <a href="">
              <p class="avat"><img src="{{'images/img_avata.jpg'}}" alt=""></p>
              <p class="name"> {{ $user->name }}</p>
            </a>
            </li>
   @endforeach
  </ul>
</div>