<div class="user-banner">
        <img src="{{ asset('storage/' . $user->image) }}" alt="profile-picture"></img>
        @if($user->admin == 1)
        <i style="font-size: small;">User is admin</i>
        @endif
        <h2 style="margin: 10px; font-weight: bold;">{{$user->displayname}}<h2>
        <a href="{{ route('profile', ['user' => $user]) }}">Go to profile</a>
</div>