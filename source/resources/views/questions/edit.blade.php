@extends('layouts.horizontal')

@section('title', 'Chỉnh sửa câu hỏi')

@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Chỉnh sửa câu hỏi</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form action="{{ route('questions.update', $question->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        value="{{ old('title', $question->title) }}" />
                                    @error('title')
                                        <span class="form-control-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea class="form-control" rows="5" id="content" name="content">{{ old('content', $question->content) }}</textarea>
                                    @error('content')
                                        <span class="form-control-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Danh mục câu hỏi</label>
                                    <select class="custom-select" id="category_id" name="category_id">
                                        <option value="">Chọn danh mục câu hỏi</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @selected(old('category_id', $question->category_id) == $category->id)>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="form-control-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Loại câu hỏi</label>
                                    <select class="custom-select" id="type" name="type">
                                        <option value="choice" @selected(old('type', $question->type) == 'choice')>Trắc nghiệm</option>
                                        <option value="essay" @selected(old('type', $question->type) == 'essay')>Tự luận</option>
                                    </select>
                                    @error('type')
                                        <span class="form-control-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Điểm số</label>
                                    <input type="number" class="form-control" id="score" name="score"
                                        value="{{ old('score', $question->score) }}" />
                                    @error('score')
                                        <span class="form-control-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Trạng thái câu hỏi</label>
                                    <select class="custom-select" id="status" name="status">
                                        <option value="draft" @selected(old('status', $question->status) == 'draft')>draft</option>
                                        <option value="public" @selected(old('status', $question->status) == 'public')>public</option>
                                        <option value="cancel" @selected(old('status', $question->status) == 'cancel')>cancel</option>
                                    </select>
                                    @error('status')
                                        <span class="form-control-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
