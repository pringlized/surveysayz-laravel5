<tr>
    <td><a href="{{ url('/admin/users') }}/{{ $user->id }}">{{ $user->username }}</a></td>
    <td>{{ ucfirst($user->role) }}</td>
    <td>{{ ucfirst($user->user_status) }}</td>
    <td><li class="fa fa-clock-o"></li> {{ $user->created_at->format('h:m a - m.d.Y') }}</td>
	<td><li class="fa fa-clock-o"></li> {{ $user->last_login }}</td>
</tr>