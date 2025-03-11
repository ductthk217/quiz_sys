async function updateProfile(e) {
    e.preventDefault();
    let data = {
        name: $('#name').val(),
        email: $('#email').val(),
    };

    $('.error-span').text('');

    try {
        let result = await sendRequest(`${window.location.origin}/profile`, 'PATCH', data);
        showNotification({
            type: 'success',
            title: 'Thành công',
            text: result.message || 'Cập nhật thành công!',
        });
    } catch (error) {

        if (error.status === 422) {
            Object.entries(error.errors || {}).forEach(([key, messages]) => {
                $('#error-' + key).text(messages.join("\n")); 
            });
        } else {
            showNotification({
                type: 'error',
                title: 'Lỗi',
                text: error.message?.text || 'Có lỗi xảy ra, vui lòng thử lại.',
            });
        }
    }
}

async function updatePassword(e) {
    e.preventDefault();

    // Xóa thông báo lỗi cũ
    $('.error-span').text('');

    // Kiểm tra xác nhận mật khẩu trước khi gửi request
    if ($('#update_password_password').val() !== $('#update_password_password_confirmation').val()) {
        $('#error-new_password_confirmation').text('Mật khẩu không trùng khớp.');
        return;
    }

    let data = {
        current_password: $('#update_password_current_password').val(),
        new_password: $('#update_password_password').val(),
        new_password_confirmation: $('#update_password_password_confirmation').val(),
    };

    try {
        let result = await sendRequest(`${window.location.origin}/password`, 'PUT', data);

        // Xóa input sau khi đổi mật khẩu thành công
        $('#update_password_current_password').val('');
        $('#update_password_password').val('');
        $('#update_password_password_confirmation').val('');

        showNotification({
            type: 'success',
            title: 'Thành công',
            text: result.message || 'Mật khẩu đã được cập nhật!',
        });
    } catch (error) {
        if (error.status === 422) {
            // Xử lý lỗi validation từ Laravel
            Object.entries(error.errors || {}).forEach(([key, messages]) => {
                $('#error-' + key).text(messages.join("\n"));
            });
        } else {
            showNotification({
                type: 'error',
                title: 'Lỗi',
                text: error.message?.text || 'Có lỗi xảy ra, vui lòng thử lại.',
            });
        }
    }
}
