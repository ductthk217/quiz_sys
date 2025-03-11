@extends('layouts.horizontal')
@section('title', 'Chỉnh sửa danh mục câu hỏi')

@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h1 class="page-title">Sửa danh mục câu hỏi</h1>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <!-- Error Messages -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Form -->
                            <form action="{{ route('question_categories.update', $categories->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                                <div class="form-group">
                                    <label for="name">Tên danh mục:</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ $categories->name }}" placeholder="Nhập tên danh mục" required>
                                </div>

                                <div class="form-group">
                                    <label for="description">Mô tả:</label>
                                    <textarea name="description" id="description" class="form-control" rows="4" placeholder="Nhập mô tả">{{ $categories->description }}</textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Sửa</button>
                                <a href="{{ route('question_categories.index') }}" class="btn btn-secondary">Quay lại</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


