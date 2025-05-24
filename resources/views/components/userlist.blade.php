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
            <td>
                <form method="POST" action="{{ route('deleteuser') }}">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" value="{{$user->id}}" id="user" name="user">
                    <button type="submit">DELETE USER</button>
                </form>
            </td>
            @if($user->admin == false)
                <td>
                    <form method="POST" action="{{ route('makeadmin') }}">
                        @method('PATCH')
                        @csrf
                        <input type="hidden" value="{{$user->id}}" id="user" name="user">
                        <button type="submit">Make admin</button>
                    </form>
                </td>
            @endif
            @if($user->admin == true)
                <td>
                    @csrf
                    <form method="POST" action="{{ route('removeadmin') }}">
                        @method('PATCH')
                        @csrf
                        <input type="hidden" value="{{$user->id}}" id="user" name="user">
                        <button type="submit">Remove admin</button>
                    </form>
                </td>
            @endif              

        </tr>
    @endforeach
</table>

