@extends('layouts.horizontal')

@section('title', 'Danh sách câu hỏi')

@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Danh sách câu hỏi</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Danh sách câu hỏi</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <table id="questions-table" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Danh mục</th>
                                        <th>Nội dung</th>
                                        <th>Điểm</th>
                                        <th width="110px">Loại</th>
                                        <th>Trạng thái</th>
                                        <th>Người tạo</th>
                                        <th width="100px">Hành động</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#questions-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('questions.data') }}',
                pageLength: 10,
                order: [[0, 'desc']],
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'category_id', name: 'category_id' },
                    { data: 'content', name: 'content' },
                    { data: 'score', name: 'score' },
                    { data: 'type', name: 'type' },
                    { data: 'status', name: 'status' },
                    { data: 'created_by', name: 'created_by' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ],
                language: {
                    lengthMenu: "Hiển thị _MENU_ mục mỗi trang",
                    search: "Tìm kiếm:",
                    info: "Hiển thị từ _START_ đến _END_ trong tổng số _TOTAL_ mục",
                    infoEmpty: "Không có dữ liệu",
                    infoFiltered: "(lọc từ _MAX_ mục)",
                    emptyTable: "Không có dữ liệu trong bảng"
                }
            });
        });


        document.addEventListener("DOMContentLoaded", function () {
            $(document).on("click", ".delete-question", function () {
                let questionId = $(this).data("id");
                Swal.fire({
                    title: "Bạn có chắc chắn?",
                    text: "Sau khi xóa, bạn không thể khôi phục lại này!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Xóa ngay!",
                    cancelButtonText: "Hủy"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: `/questions/${questionId}`,
                            type: "DELETE",
                            headers: {
                                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                            },
                            success: function (response) {
                                Swal.fire({
                                    icon: "success",
                                    title: "Xóa thành công!",
                                    showConfirmButton: false,
                                    timer: 2000
                                });
                                $("#questions-table").DataTable().ajax.reload();
                            },
                            error: function (xhr) {
                                Swal.fire({
                                    icon: "error",
                                    title: "Lỗi!",
                                    text: "Không thể xóa câu hỏi.",
                                });
                            }
                        });

                    }
                });
            });
        });
    </script>
@endpush
