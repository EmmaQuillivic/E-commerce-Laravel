@extends('admin.app')

@section('content')
<script src="{{ asset('js/user.js') }}" defer></script>
<div class="container_user">
  <div class="user_account">
    <table>
      <p class="caption">Account User created</p>
      @foreach($users as $user)
        <tr>
          <td class="td_price">{{ $user->id }}</td>
          <td class="td_title">{{ $user->firstname }} {{ $user->lastname }}</td>
          <td class="td_title">{{ $user->email }}</td>
          <td class="td_title">Admin: {{ $user->admin }}</td>
        </tr>
      @endforeach
    </table>
  </div>
  <div class="user_online">
    <p class="caption">Online Users</p>
    <table id="table">
    </table>
    <input type="submit" class="refresh" onclick="display_users()" value="Refresh">
  </div>
</div>
@endsection
