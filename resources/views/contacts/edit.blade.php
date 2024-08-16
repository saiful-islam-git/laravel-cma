<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $contact->name }}"><br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $contact->email }}"><br>
        <label>Phone:</label>
        <input type="text" name="phone" value="{{ $contact->phone }}"><br>
        <label>Address:</label>
        <input type="text" name="address" value="{{ $contact->address }}"><br>
        <button type="submit">Update</button>
    </form>

    <a href="{{ route('contacts.index') }}">Back to Contacts</a>
</body>
</html>
