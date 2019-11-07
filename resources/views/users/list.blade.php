<table border="1">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Email</td>
        <td></td>
    </tr>
    @foreach($users as $key => $user)
    <tr>
        <td>{{ ++$key }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            @can('crud-user')
            <a href="{{  route('user.destroy', $user->id) }}">Delete</a>
            @endcan
        </td>
    </tr>
    @endforeach
</table>
