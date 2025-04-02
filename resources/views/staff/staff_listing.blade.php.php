<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Listing</title>
</head>
<body>
    <h1>Staff Listing</h1>

    <a href="{{ route('staff.create') }}">Add New Staff</a>

    <table border="1">
        <thead>
            <tr>
                <th>Index Number</th>
                <th>Full Names</th>
                <th>Email</th>
                <th>Current Location</th>
                <th>Highest Level of Education</th>
                <th>Duty Station</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($staff as $staffMember)
                <tr>
                    <td>{{ $staffMember->index_number }}</td>
                    <td>{{ $staffMember->full_names }}</td>
                    <td>{{ $staffMember->email }}</td>
                    <td>{{ $staffMember->current_location }}</td>
                    <td>{{ $staffMember->highest_level_of_education }}</td>
                    <td>{{ $staffMember->duty_station }}</td>
                    <td>
                        <a href="{{ route('staff.edit', $staffMember->id) }}">Edit</a> |
                        <form action="{{ route('staff.destroy', $staffMember->id) }}" method="POST" style="display:inline;">
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
