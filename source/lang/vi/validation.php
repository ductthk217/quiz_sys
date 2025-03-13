<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Trường này phải được chấp nhận.',
    'accepted_if' => 'Trường này phải được chấp nhận khi :other là :value.',
    'active_url' => 'Trường này phải là một URL hợp lệ.',
    'after' => 'Trường này phải là một ngày sau :date.',
    'after_or_equal' => 'Trường này phải là một ngày sau hoặc bằng :date.',
    'alpha' => 'Trường này chỉ được chứa các chữ cái.',
    'alpha_dash' => 'Trường này chỉ được chứa chữ cái, số, dấu gạch ngang và gạch dưới.',
    'alpha_num' => 'Trường này chỉ được chứa chữ cái và số.',
    'array' => 'Trường này phải là một mảng.',
    'ascii' => 'Trường này chỉ được chứa các ký tự và ký hiệu ASCII đơn byte.',
    'before' => 'Trường này phải là một ngày trước :date.',
    'before_or_equal' => 'Trường này phải là một ngày trước hoặc bằng :date.',
    'between' => [
        'array' => 'Trường này phải có từ :min đến :max mục.',
        'file' => 'Trường này phải có dung lượng từ :min đến :max kilobytes.',
        'numeric' => 'Trường này phải nằm trong khoảng từ :min đến :max.',
        'string' => 'Trường này phải có độ dài từ :min đến :max ký tự.',
    ],
    'boolean' => 'Trường này phải là true hoặc false.',
    'can' => 'Trường này chứa một giá trị không được phép.',
    'confirmed' => 'Xác nhận trường này không khớp.',
    'current_password' => 'Mật khẩu không chính xác.',
    'date' => 'Trường này phải là một ngày hợp lệ.',
    'date_equals' => 'Trường này phải là một ngày bằng :date.',
    'date_format' => 'Trường này phải khớp với định dạng :format.',
    'decimal' => 'Trường này phải có :decimal chữ số thập phân.',
    'declined' => 'Trường này phải bị từ chối.',
    'declined_if' => 'Trường này phải bị từ chối khi :other là :value.',
    'different' => 'Trường này và :other phải khác nhau.',
    'digits' => 'Trường này phải là :digits chữ số.',
    'digits_between' => 'Trường này phải có từ :min đến :max chữ số.',
    'dimensions' => 'Trường này có kích thước hình ảnh không hợp lệ.',
    'distinct' => 'Trường này có giá trị trùng lặp.',
    'doesnt_end_with' => 'Trường này không được kết thúc bằng một trong các giá trị sau: :values.',
    'doesnt_start_with' => 'Trường này không được bắt đầu bằng một trong các giá trị sau: :values.',
    'email' => 'Trường này phải là một địa chỉ email hợp lệ.',
    'ends_with' => 'Trường này phải kết thúc bằng một trong các giá trị sau: :values.',
    'enum' => 'Giá trị đã chọn trong trường này không hợp lệ.',
    'exists' => 'Giá trị đã chọn trong trường này không hợp lệ.',
    'extensions' => 'Trường này phải có một trong các phần mở rộng sau: :values.',
    'file' => 'Trường này phải là một tệp.',
    'filled' => 'Trường này phải có giá trị.',
    'gt' => [
        'array' => 'Trường này phải có nhiều hơn :value mục.',
        'file' => 'Trường này phải lớn hơn :value kilobytes.',
        'numeric' => 'Trường này phải lớn hơn :value.',
        'string' => 'Trường này phải dài hơn :value ký tự.',
    ],
    'gte' => [
        'array' => 'Trường này phải có :value mục trở lên.',
        'file' => 'Trường này phải lớn hơn hoặc bằng :value kilobytes.',
        'numeric' => 'Trường này phải lớn hơn hoặc bằng :value.',
        'string' => 'Trường này phải dài hơn hoặc bằng :value ký tự.',
    ],
    'hex_color' => 'Trường này phải là một màu hexadecimal hợp lệ.',
    'image' => 'Trường này phải là một hình ảnh.',
    'in' => 'Giá trị đã chọn trong trường này không hợp lệ.',
    'in_array' => 'Trường này phải tồn tại trong :other.',
    'integer' => 'Trường này phải là một số nguyên.',
    'ip' => 'Trường này phải là một địa chỉ IP hợp lệ.',
    'ipv4' => 'Trường này phải là một địa chỉ IPv4 hợp lệ.',
    'ipv6' => 'Trường này phải là một địa chỉ IPv6 hợp lệ.',
    'json' => 'Trường này phải là một chuỗi JSON hợp lệ.',
    'lowercase' => 'Trường này phải là chữ thường.',
    'lt' => [
        'array' => 'Trường này phải có ít hơn :value mục.',
        'file' => 'Trường này phải nhỏ hơn :value kilobytes.',
        'numeric' => 'Trường này phải nhỏ hơn :value.',
        'string' => 'Trường này phải ngắn hơn :value ký tự.',
    ],
    'lte' => [
        'array' => 'Trường này không được có nhiều hơn :value mục.',
        'file' => 'Trường này phải nhỏ hơn hoặc bằng :value kilobytes.',
        'numeric' => 'Trường này phải nhỏ hơn hoặc bằng :value.',
        'string' => 'Trường này phải ngắn hơn hoặc bằng :value ký tự.',
    ],
    'mac_address' => 'Trường này phải là một địa chỉ MAC hợp lệ.',
    'max' => [
        'array' => 'Trường này không được có nhiều hơn :max mục.',
        'file' => 'Trường này không được lớn hơn :max kilobytes.',
        'numeric' => 'Trường này không được lớn hơn :max.',
        'string' => 'Trường này không được dài hơn :max ký tự.',
    ],
    'max_digits' => 'Trường này không được có nhiều hơn :max chữ số.',
    'mimes' => 'Trường này phải là một tệp có định dạng: :values.',
    'mimetypes' => 'Trường này phải là một tệp có định dạng: :values.',
    'min' => [
        'array' => 'Trường này phải có ít nhất :min mục.',
        'file' => 'Trường này phải có ít nhất :min kilobytes.',
        'numeric' => 'Trường này phải có ít nhất :min.',
        'string' => 'Trường này phải dài ít nhất :min ký tự.',
    ],
    'min_digits' => 'Trường này phải có ít nhất :min chữ số.',
    'missing' => 'Trường này phải bị thiếu.',
    'missing_if' => 'Trường này phải bị thiếu khi :other là :value.',
    'missing_unless' => 'Trường này phải bị thiếu trừ khi :other là :value.',
    'missing_with' => 'Trường này phải bị thiếu khi :values có mặt.',
    'missing_with_all' => 'Trường này phải bị thiếu khi tất cả :values có mặt.',
    'multiple_of' => 'Trường này phải là bội số của :value.',
    'not_in' => 'Giá trị đã chọn trong trường này không hợp lệ.',
    'not_regex' => 'Định dạng của trường này không hợp lệ.',
    'numeric' => 'Trường này phải là một số.',
    'password' => [
        'letters' => 'Trường này phải chứa ít nhất một chữ cái.',
        'mixed' => 'Trường này phải chứa ít nhất một chữ cái viết hoa và một chữ cái viết thường.',
        'numbers' => 'Trường này phải chứa ít nhất một chữ số.',
        'symbols' => 'Trường này phải chứa ít nhất một ký hiệu.',
        'uncompromised' => 'Trường này đã bị lộ trong một sự cố rò rỉ dữ liệu. Vui lòng chọn này khác.',
    ],
    'present' => 'Trường này phải có mặt.',
    'present_if' => 'Trường này phải có mặt khi :other là :value.',
    'present_unless' => 'Trường này phải có mặt trừ khi :other là :value.',
    'present_with' => 'Trường này phải có mặt khi :values có mặt.',
    'present_with_all' => 'Trường này phải có mặt khi tất cả :values có mặt.',
    'prohibited' => 'Trường này bị cấm.',
    'prohibited_if' => 'Trường này bị cấm khi :other là :value.',
    'prohibited_unless' => 'Trường này bị cấm trừ khi :other nằm trong :values.',
    'prohibits' => 'Trường này cấm :other có mặt.',
    'regex' => 'Định dạng của trường này không hợp lệ.',
    'required' => 'Không được để trống.',
    'required_array_keys' => 'Trường này phải chứa các mục: :values.',
    'required_if' => 'Trường này là bắt buộc khi :other là :value.',
    'required_if_accepted' => 'Trường này là bắt buộc khi :other được chấp nhận.',
    'required_unless' => 'Trường này là bắt buộc trừ khi :other nằm trong :values.',
    'required_with' => 'Trường này là bắt buộc khi :values có mặt.',
    'required_with_all' => 'Trường này là bắt buộc khi tất cả :values có mặt.',
    'required_without' => 'Trường này là bắt buộc khi :values không có mặt.',
    'required_without_all' => 'Trường này là bắt buộc khi không có :values nào có mặt.',
    'same' => 'Trường này và :other phải khớp nhau.',
    'size' => [
        'array' => 'Trường này phải chứa :size mục.',
        'file' => 'Trường này phải có kích thước :size kilobytes.',
        'numeric' => 'Trường này phải có kích thước :size.',
        'string' => 'Trường này phải có độ dài :size ký tự.',
    ],
    'starts_with' => 'Trường này phải bắt đầu bằng một trong các giá trị sau: :values.',
    'string' => 'Trường này phải là một chuỗi.',
    'timezone' => 'Trường này phải là một múi giờ hợp lệ.',
    'unique' => 'Trường này đã được sử dụng.',
    'uploaded' => 'Tải lên trường này thất bại.',
    'uppercase' => 'Trường này phải là chữ hoa.',
    'url' => 'Trường này phải là một URL hợp lệ.',
    'ulid' => 'Trường này phải là một ULID hợp lệ.',
    'uuid' => 'Trường này phải là một UUID hợp lệ.',
    'custom_error_message' => 'Đã xảy ra lỗi xác thực. Vui lòng kiểm tra các dữ liệu truyền vào và thử lại.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
