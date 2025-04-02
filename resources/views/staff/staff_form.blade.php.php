<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Form</title>
</head>
<body>
    <h1>Create Staff</h1>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Staff Form -->
    <form action="{{ route('staff.store') }}" method="POST">
        @csrf
        <label for="index_number">Index Number</label>
        <input type="text" id="index_number" name="index_number" value="{{ old('index_number') }}" required>

        <label for="full_names">Full Names</label>
        <input type="text" id="full_names" name="full_names" value="{{ old('full_names') }}" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>

        <label for="current_location">Current Location</label>
        <input type="text" id="current_location" name="current_location" value="{{ old('current_location') }}" required>

        <label for="highest_level_of_education">Highest Level of Education</label>
        <select name="highest_level_of_education" required>
            <option value="">Select</option>
            <option value="High School">High School</option>
            <option value="Undergraduate">Undergraduate</option>
            <option value="Postgraduate">Postgraduate</option>
        </select>

        <label for="duty_station">Duty Station</label>
        <select name="duty_station" required>
            <option value="">Select</option>
            <option value="Headquarters">Headquarters</option>
            <option value="Branch Office">Branch Office</option>
        </select>

        <label for="availability_for_remote_work">Availability for Remote Work</label>
        <input type="checkbox" name="availability_for_remote_work" value="1">

        <label for="software_expertise">Software Expertise</label>
        <select name="software_expertise" required>
            <option value="">Select</option>
            <option value="Microsoft Office">Microsoft Office</option>
            <option value="Adobe Suite">Adobe Suite</option>
            <option value="Other">Other</option>
        </select>

        <label for="software_expertise_level">Software Expertise Level</label>
        <select name="software_expertise_level" required>
            <option value="">Select</option>
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Advanced">Advanced</option>
        </select>

        <label for="language">Language</label>
        <select name="language" required>
            <option value="">Select</option>
            <option value="English">English</option>
            <option value="French">French</option>
            <option value="Swahili">Swahili</option>
        </select>

        <label for="level_of_responsibility">Level of Responsibility</label>
        <select name="level_of_responsibility" required>
            <option value="">Select</option>
            <option value="Junior">Junior</option>
            <option value="Mid-Level">Mid-Level</option>
            <option value="Senior">Senior</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
