@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Staff Member</h1>

    <form action="{{ route('staff.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="index_number">Index Number</label>
            <input type="text" name="index_number" id="index_number" class="form-control" value="{{ old('index_number') }}" required>
        </div>

        <div class="form-group">
            <label for="full_names">Full Names</label>
            <input type="text" name="full_names" id="full_names" class="form-control" value="{{ old('full_names') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="current_location">Current Location</label>
            <input type="text" name="current_location" id="current_location" class="form-control" value="{{ old('current_location') }}" required>
        </div>

        <div class="form-group">
            <label for="highest_level_of_education">Highest Level of Education</label>
            <select name="highest_level_of_education" id="highest_level_of_education" class="form-control" required>
                <option value="">Select Education Level</option>
                @foreach($educationLevels as $educationLevel)
                    <option value="{{ $educationLevel->id }}" {{ old('highest_level_of_education') == $educationLevel->id ? 'selected' : '' }}>
                        {{ $educationLevel->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="duty_station">Duty Station</label>
            <select name="duty_station" id="duty_station" class="form-control" required>
                <option value="">Select Duty Station</option>
                @foreach($dutyStations as $dutyStation)
                    <option value="{{ $dutyStation->id }}" {{ old('duty_station') == $dutyStation->id ? 'selected' : '' }}>
                        {{ $dutyStation->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="availability_for_remote_work">Available for Remote Work?</label>
            <input type="checkbox" name="availability_for_remote_work" id="availability_for_remote_work" value="1" {{ old('availability_for_remote_work') ? 'checked' : '' }}>
        </div>

        <div class="form-group">
            <label for="software_expertise">Software Expertise</label>
            <input type="text" name="software_expertise" id="software_expertise" class="form-control" value="{{ old('software_expertise') }}" required>
        </div>

        <div class="form-group">
            <label for="software_expertise_level">Software Expertise Level</label>
            <input type="text" name="software_expertise_level" id="software_expertise_level" class="form-control" value="{{ old('software_expertise_level') }}" required>
        </div>

        <div class="form-group">
            <label for="language">Language</label>
            <input type="text" name="language" id="language" class="form-control" value="{{ old('language') }}" required>
        </div>

        <div class="form-group">
            <label for="level_of_responsibility">Level of Responsibility</label>
            <input type="text" name="level_of_responsibility" id="level_of_responsibility" class="form-control" value="{{ old('level_of_responsibility') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Staff Member</button>
    </form>
</div>
@endsection
