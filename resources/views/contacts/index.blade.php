<!DOCTYPE html>
<html>
<head>
    <title>Contact Manager</title>
</head>
<body>
    <h1>All Contacts</h1>

    <form action="{{ route('contacts.index') }}" method="GET">
        <input type="text" name="search" placeholder="Search by name or email" value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

    <a href="{{ route('contacts.create') }}">Create New Contact</a>

    <table border="1">
        <thead>
            <tr>
                <th><a href="?sort=name&direction={{ request('direction', 'asc') === 'asc' ? 'desc' : 'asc' }}">Name</a></th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th><a href="?sort=created_at&direction={{ request('direction', 'asc') === 'asc' ? 'desc' : 'asc' }}">Created At</a></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>
                        <a href="{{ route('contacts.show', $contact->id) }}">View</a>
                        <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
