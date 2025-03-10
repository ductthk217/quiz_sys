@extends('layouts.app')

@section('content')
    <h1>Thêm danh mục câu hỏi mới</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('question_categories.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Tên danh mục:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="description">Mô tả:</label>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
        </div>
        <button type="submit">Thêm mới</button>
    </form>
@endsection
