async function updateProfile(e) {
    e.preventDefault();
    let data = {
        name: $('#name').val(),
        email: $('#email').val(),
    };
    let result = await sendRequest(`${window.location.origin}/profile`, 'PATCH', data);
    if (result.status == 200) {
        showNotification({
            type: 'success',
            title: 'Success',
            text: result.message
        })
    } else {
        showNotification({
            text: result.message
        })
    }
}
async function updatePassword(e) {
    e.preventDefault();

    if ($('#update_password_password').val() != $('#update_password_password_confirmation').val()) {
        showNotification({
            message: 'Passwords do not match.'
        })
        return;
    }
    let data = {
        current_password: $('#update_password_current_password').val(),
        password: $('#update_password_password').val(),
        password_confirmation : $('#update_password_password_confirmation').val(),
    };
    let result = await sendRequest(`${window.location.origin}/password`, 'put', data);
    if (result.status == 200) {
        $('#update_password_current_password').val(''),
        $('#update_password_password').val(''),
        $('#update_password_password_confirmation').val(''),
        showNotification({
            type: 'success',
            title: 'Success',
            message: result.message
        })
    } else {
        showNotification({
            type: 'warning',
            text: result.message
        })
    }
}
async function deleteAccount(e) {
    e.preventDefault();

    if ($('#update_password_password').val() != $('#update_password_password_confirmation').val()) {
        showNotification({
            message: 'Passwords do not match.'
        })
        return;
    }
    let data = {
        password: $('#password_delete').val(),
    };
    let result = await sendRequest(`${window.location.origin}/profile`, 'delete', data);
    if (result.status == 200) {
        // window.location.href = `${window.location.origin}`;
    } else {
        showNotification({
            type: 'warning',
            text: result.message
        })
    }
}