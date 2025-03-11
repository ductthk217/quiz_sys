@extends('layouts.horizontal')

@section('title', 'Thêm ứng viên')

@section('content')

    <body>
        <div class="form-container candidate-form">
            <h2>Add new candidates</h2>
            <form method="POST" action="{{ route('candidates.store') }}">
                @csrf
                <label for="name">Candidate's Name</label>
                <input type="text" id="name" name="name" required>
        
                <label for="phone_number">Candidate's Phone</label>
                <input type="tel" id="phone_number" name="phone_number" required>
        
                <label for="email">Candidate's Email</label>
                <input type="email" id="email" name="email" required>
        
                <button type="submit">Create a new</button>
            </form>
        </div>
    </body>
@endsection
