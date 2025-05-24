<?php

use App\Models\User;

    $users = User::all();
?>

<table class="user-table">
    @foreach($users as $user)
        <?php
            $isAdmin = "";
            if($user->admin == true){
                $isAdmin = "ADMIN";
            }else{
                $isAdmin = "USER";
            }
        ?>
        <tr class="user-row">
            <td>{{$user->name}} [{{$user->displayname}}]</td>
            <td>{{$isAdmin}}</td>
            <td class="admin-button"><a href="#">DELETE USER</a></td>
            @if($user->admin == false)
                <td>
                    <form method="POST" action="{{ route('makeadmin') }}">
                        @method('PATCH')
                        @csrf
                        <input type="hidden" value="{{$user->id}}" id="id" name="id">
                        <button type="submit">Make admin</button>
                    </form>
                </td>
            @endif
            @if($user->admin == true)
                <td>
                    @csrf
                    <form method="POST" action="{{ route('removeadmin') }}">
                        @method('PUT')
                        @csrf
                        <button type="submit" value="{{$user}}">Remove admin</button>
                    </form>
                </td>
            @endif              

        </tr>
    @endforeach
</table>

