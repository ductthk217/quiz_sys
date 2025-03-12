@extends('layouts.horizontal')

@section('title',  __('Profile') )

@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">{{ __('title.profile') }}</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">{{ WEB_NAME}}</a></li>
                            <li class="breadcrumb-item active">{{ __('title.profile') }}</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>

            <div class="p-3">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 rounded my-5 shadow text-white block ">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
        
                    <div class="p-4 rounded my-5 shadow text-white block ">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end container-fluid -->
    </div>
@endsection
@push('styles')
<style>
    .block{
        background: #1f2937;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }
    input.form-control{
        background-color: rgb(15 21 35) !important;
        border-color: rgb(56 65 81);
        color: rgb(211 215 221) !important;
        border-width: 1px;
        padding: .5rem .75rem;
        font-size: 1rem;
        line-height: 1.5rem;
    }
    input.form-control:focus{
        border-color: rgb(80 71 229);
    }
</style>

@endpush
@push('scripts')
    <script src="{{ asset('assets/js/ajax-contants.js') }}"></script>
    <script src="{{ asset('assets/js/profile/profile.js') }}"></script>
@endpush
