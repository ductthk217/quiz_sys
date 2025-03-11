@extends('layouts.horizontal')

@section('title', 'Cập nhật ứng viên')

@section('content')
    <body>
        <div class="form-container candidate-form">
            <h2>Update candidates</h2>
            <form method="POST" action="{{ route('candidates.update', $candidate->id) }}">
                @csrf
                @method('PUT')
                <label for="name">Candidate's Name</label>
                <input type="text" id="name" name="name" required value="{{ $candidate->name }}">
        
                <label for="phone_number">Candidate's Phone</label>
                <input type="tel" id="phone_number" name="phone_number" required value="{{ $candidate->phone_number }}">
        
                <label for="email">Candidate's Email</label>
                <input type="email" id="email" name="email" required value="{{ $candidate->email }}">
        
                <button type="submit">Update</button>
            </form>
        </div>
    </body>
@endsection
