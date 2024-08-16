<!DOCTYPE html>
<html>
<head>
    <title>Create Contact</title>
</head>
<body>
    <h1>Create New Contact</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}"><br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}"><br>
        <label>Phone:</label>
        <input type="text" name="phone" value="{{ old('phone') }}"><br>
        <label>Address:</label>
        <input type="text" name="address" value="{{ old('address') }}"><br>
        <button type="submit">Create</button>
    </form>

    <a href="{{ route('contacts.index') }}">Back to Contacts</a>
</body>
</html>
