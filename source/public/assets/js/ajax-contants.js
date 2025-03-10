$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function ajaxContants(_url, kind, data, callback = null) {
    return new Promise(function (resolve, reject) {
        try {
            var formData = new FormData();
            if (typeof data.is_api === 'undefined') {
                data.is_api = false;
            }
            Object.keys(data).forEach(function (key) {
                var value = data[key];
                formData.append(key, value);
            });

            $.ajax({
                url: _url,
                type: kind,
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.status === 504) {
                        location.reload();
                    }
                    if (callback) {
                        callback(response);
                    }
                    return resolve(response)
                },
                error: function (error) {
                    var reuslt = {
                        status: error.status,
                        error: error,
                        message: 'Lỗi 501 khi cố gắng gọi đến serve'
                    };
                    if (error && callback) {
                        callback(reuslt);
                    }
                    if (error.status == 422) {
                        return resolve({
                            status: error.status,
                            error: error.responseJSON.errors,
                            message: 'Lỗi 501 khi cố gắng gọi đến serve'
                        });
                    } else {
                        return resolve(error);
                    }
                }

            });
        } catch (error) {
            return resolve({
                status: 303,
                message: 'Xảy ra lỗi không xác định'
            });
        }
    });

}

function ajaxPostHTML(_url, data, id, callback = null, load = true) {
    
    if (load == true) {
        $('#' + id).html(onLoadContentHTML());
    }
    if (typeof data.is_api === 'undefined') {
        data.is_api = false;
    }
    $.ajax({
        url: _url,
        type: 'POST',
        data: data,
        success: function (response) {
            if (response.status == 504) {
                location.reload();
            }
            if (response.status === 200) {
                $('#' + id).html(response.html);
                if (callback != null) {
                    callback(response)
                }
            } else {
                $('#' + id).html('<p class="text-secondary text-center">Xảy ra lỗi khi cố gắng tải dữ liệu</p>');
            }
        },
        error: function (error) {
            $('#' + id).html('<p class="text-secondary text-center">Xảy ra lỗi khi cố gắng tải dữ liệu</p>');
            console.log(error);
        }

    });
}

function sendRequest(_url, method, data, is_form_data = false) {
    return new Promise(function (resolve, reject) {
        try {
            $.ajax({
                url: _url,
                type: method,
                data: data,
                processData: !is_form_data,
                contentType: is_form_data ? false : 'application/x-www-form-urlencoded; charset=UTF-8',
                success: function (response) {
                    if (response.status == 504) {
                        location.reload();
                    }
                    if (response.status === undefined || response.status === null || response.status == 401) {
                        // location.reload();
                        return reject({
                            status: 401,
                            message: {
                                title: 'Lỗi xác thực!',
                                text: 'Phiên làm việc đã hết, xin hãy đăng nhập lại!',
                                icon: 'error',
                            }
                        });
                    }
                    resolve(response);
                },
                error: function (error) {
                    if (error.status == 412) {
                        // location.reload();
                    }
                    if (error.status != 422) {
                        return reject({
                            status: 500,
                            message: {
                                title: 'Đã xảy ra lỗi!',
                                text: 'Lỗi không xác định, hãy thông báo với chúng tôi để khắc phục sớm nhất có thể!',
                                icon: 'error',
                            }
                        });
                    }
                    reject(error);
                }
            });
        } catch (error) {
            reject({
                status: 500,
                message: {
                    title: 'Đã xảy ra lỗi!',
                    text: 'Lỗi không xác định, hãy thông báo với chúng tôi để khắc phục sớm nhất có thể!',
                    icon: 'error',
                }
            });
        }
    });
}


function ajaxContants2(_url, kind, data, is_form_data = false, callback = null) {
    return new Promise(function (resolve, reject) {
        try {
            if (typeof data.is_api === 'undefined') {
                data.is_api = false;
            }
            if (is_form_data) {
                var formData = new FormData();
                Object.keys(data).forEach(function (key) {
                    var value = data[key];
                    formData.append(key, value);
                });
            }

            

            $.ajax({
                url: _url,
                type: kind,
                data: is_form_data ? formData : data,
                processData: !is_form_data,
                contentType: is_form_data ? false : 'application/x-www-form-urlencoded; charset=UTF-8',
                success: function (response) {
                    
                    if (response.status === 504) {
                        location.reload();
                    }
                    if (response && (!response.status || response.status == 401)) {
                        location.reload();
                        response = {
                            status: 401,
                            message: {
                                title: 'Lỗi xác thực!',
                                text: 'Phiên làm việc đã hết, xin hãy đăng nhập lại!',
                                icon: 'error',
                            }
                        }
                        callback(response);
                        return resolve(response);
                    }
                    if (callback) {
                        callback(response);
                    }
                    
                    return resolve(response)
                    
                },
                error: function (error) {
                    if (error.status == 412) {
                        location.reload();
                    }
                    var reuslt = {
                        status: error.status,
                        error: error,
                        message: 'Lỗi 501 khi cố gắng gọi đến serve'
                    };
                    if (error && callback) {
                        callback(reuslt);
                    }
                    if (error.status == 422) {
                        return resolve({
                            status: error.status,
                            error: error.responseJSON.errors,
                            message: 'Lỗi nhập liệu, vui lòng kiểm tra dữ liệu đã nhập vào'
                        });
                    } else {
                        return resolve(error);
                    }
                }

            });
        } catch (error) {
            return resolve({
                status: 303,
                message: 'Xảy ra lỗi không xác định'
            });
        }
    });

}










function onLoadContentHTML() {
    $html =
        `
    <div class="d-flex flex-row justify-content-center align-items-center m-3">
    <div class="spinner-grow" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <p class="text-secondary p-0 m-0">Đang tải dữ liệu...</p>
</div>
    `;
    return $html;
}

function iconLoadingHtml() {
    return `<div class="spinner-border" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>`
}

function onLoadingIcon(id, disabled = true, html = '') {
    $(id).html(disabled ? iconLoadingHtml() : html)
    $(id).prop('disabled', disabled);
    
    
}

function loadingHtml(status = false) {
    document.getElementById('my-loading').style.display = status ? 'block' : 'none';
}