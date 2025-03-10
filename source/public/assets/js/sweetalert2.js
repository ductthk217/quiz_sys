// const event = {
//     type:'warning, error, success, info, and question',
//     title:'content'
// }

function showNotification(event) {
    if (!event || typeof event !== "object") event = {};

    Swal.fire({
        position: "top-end",
        title: event.title,
        text: event.message,
        type: event.type,
        timer: 900,
        showConfirmButton: false,
    });
}
function showNotificationNoIcon(message) {
    Swal.fire({
        position: "top-end",
        text: message ?? "",
        timer: 900,
        showConfirmButton: false,
    });
}
function showNotificationDelete(event) {
    Swal.fire({
        title: "Thông báo",
        text: "Bạn có chắc muốn xóa",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonText: "Hủy",
        cancelButtonColor: "#d33",
        confirmButtonText: "Xác nhận!",
    }).then((result) => {
        if (result.isConfirmed && typeof callback === "function") {
            callback(); // Gọi callback nếu có
        }
    });
}
function showNotificationConfirm(event, call) {
    if (!event || typeof event !== "object") event = {};

    Swal.fire({
        title: event.title ?? "Thông báo",
        type: event.icon ?? "error",
        text: event.text ?? "Có lỗi xảy ra",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonText: "Hủy",
        cancelButtonColor: "#d33",
        confirmButtonText: "Xác nhận!",
    }).then((result) => {
        if (result.isConfirmed && typeof callback === "function") {
            callback(); // Gọi callback nếu có
        }
    });
}
