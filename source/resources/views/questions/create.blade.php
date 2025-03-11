@extends('layouts.horizontal')

@section('title', 'Tạo câu hỏi')

@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Tạo câu hỏi</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Stexo</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Tạo câu hỏi</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form action="{{ route('question.store') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" />
                                    @error('title')
                                        <span class="form-control-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea class="form-control" rows="5" id="content" name="content">{{ old('content') }}</textarea>
                                    @error('content')
                                        <span class="form-control-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Danh mục câu hỏi</label>
                                    <select class="custom-select" id="category_id" name="category_id">
                                        <option value="">Chọn danh mục câu hỏi</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
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
                                        <option value="choice" @selected(old('type') == 'choice')>Trắc nghiệm</option>
                                        <option value="essay" @selected(old('type') == 'essay')>Tự luận</option>
                                    </select>
                                    @error('type')
                                        <span class="form-control-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Điểm số</label>
                                    <input type="number" class="form-control" id="score" name="score" value="{{ old('score', 1) }}" />
                                    @error('score')
                                        <span class="form-control-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Trạng thái câu hỏi</label>
                                    <select class="custom-select" id="status" name="status">
                                        <option value="draft" @selected(old('status') == 'draft')>draft</option>
                                        <option value="public" @selected(old('status') == 'public')>public</option>
                                        <option value="cancel" @selected(old('status') == 'cancel')>cancel</option>
                                    </select>
                                    @error('type')
                                        <span class="form-control-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div>
        <!-- end container-fluid -->
    </div>
@endsection
