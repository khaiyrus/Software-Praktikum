<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>Daftar Users</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}
                <form action="{{ route('admin.users.approve', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit">Approve</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('admin.dashboard') }}">Kembali ke Dashboard</a>
</body>
</html>

