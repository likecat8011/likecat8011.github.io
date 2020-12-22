<?php

return [
    'id'               => 'ID',
    'sort'             => 'Sắp xếp',
    'status'           => 'Status',
    'smtp_host'        => 'Server SMTP',
    'smtp_user'        => 'Tài khoản SMTP',
    'smtp_password'    => 'Mật khẩu SMTP',
    'smtp_security'    => 'Bảo mật SMTP',
    'smtp_port'        => 'Cổng kết nối SMTP',
    'smtp_load_config' => 'Tải thông tin cấu hình',
    'smtp_load_config_file' => 'Sử dụng file cấu hình',
    'smtp_load_config_database' => 'Sử dụng database',
    'admin'            => [
        'title'          => 'Cấu hình email',
        'create_success' => 'Tạo mới thành công!',
        'edit_success'   => 'Cập nhật thành công!',
        'list'           => 'Danh sách cấu hình',
        'field'          => 'Các trường',
        'value'          => 'Giá trị',
        'config_mode'    => 'Cấu hình mode',
        'config_smtp'    => 'Cấu hình SMTP',
        'status'         => 'Status',
        'action'         => 'Hành động',
        'delete'         => 'Xóa',
        'edit'           => 'Chỉnh sửa',
        'add_new'        => 'Thêm mới',
        'export'         => 'Xuất',
        'refresh'        => 'Làm mới',
        'result_item'    => 'Hiển thị <b>:item_from</b> tới <b>:item_to</b> trong số <b>:item_total</b> kết quả</b>',
        'sort'           => 'Sắp xếp',
        'search'         => 'Tìm kiếm',
        'add_new_title'  => 'Tạo cấu hình',
        'add_new_des'    => 'Tạo mới cấu hình',
        'smtp_mode'      => 'Sử dụng SMTP',
        'smtp_port'      => 'Cổng SMTP',
        'smtp_security'  => 'Bảo mật SMTP',
        'smtp_password'  => 'Mật khẩu SMTP',
        'smtp_user'      => 'User SMTP',
        'smtp_host'      => 'Server SMTP',
        'help_note'      => '<span class="text-red">(*)</span>: Email sẽ không được gửi trực tiếp, mà thông qua hàng đợi. Bạn cần phải cài đặt "artisan schedule:run" trước,  chi tiết <a href="https://s-cart.org/docs/'.config('s-cart.version').'/email.html">TẠI ĐÂY</a>',
    ],

    'email_action'     => [
        'manager'                  => 'Quản lý action',
        'type'                     => 'Loại gửi mail',
        'mode'                     => 'Chế độ',
        'sort'                     => 'Sắp xếp',
        'order_success_to_admin'   => 'Gửi đơn hàng thành công cho admin',
        'order_success_to_cutomer' => 'Gửi đơn hàng thành công cho khách',
        'forgot_password'          => 'Gửi mail quên mật khẩu',
        'welcome_customer'         => 'Gửi mail chào mừng',
        'contact_to_customer'      => 'Gửi mail form liên hệ cho khách',
        'contact_to_admin'         => 'Gửi mail form liên hệ cho admin',
        'email_action_mode'        => 'Tắt/Mở chức năng gửi mail',
        'email_action_queue'       => 'Gửi mail qua hàng đợi <span class="text-red">(*)</span>',
        'email_action_smtp_mode'   => 'Sử dụng SMTP',
        'config_smtp'              => 'Cấu hình SMTP',
        'other'                    => 'Loại khác',
    ],

    'forgot_password'  => [
        'title'        => 'Xin chào!',
        'reset_button' => 'Tạo lại mật khẩu',
        'reason_sendmail'        => 'Bạn đang nhận email này vì chúng tôi nhận được yêu cầu thiết lập lại mật khẩu cho tài khoản của bạn.',
        'note_sendmail'        => 'Liên kết mật khẩu này sẽ hết hạn trong vòng 60 phút.<br><br>Nếu bạn không yêu cầu một thiết lập lại mật khẩu, bạn không cần làm gì cả.<br><br>Trân trọng,<br>:site_admin',
        'note_access_link'        => 'Nếu bạn gặp sự cố cách nhấn vào nút ":reset_button", sao chép và dán URL dưới đây vào trình duyệt web của bạn:',
    ],
    'welcome_customer' => [
        'title' => 'Chào mừng!',
    ],
    'order'            => [
        'title_1'      => 'Xin chào! :website trang web có đơn hàng mới!',
        'order_id'     => 'Mã đơn hàng',
        'toname'       => 'Tên khách hàng',
        'address'      => 'Địa chỉ',
        'phone'        => 'Điện thoại',
        'note'         => 'Ghi chú',
        'order_detail' => 'Chi tiết đặt hàng',
        'sort'         => 'Thứ tự',
        'sku'          => 'SKU',
        'price'        => 'Giá',
        'name'         => 'Tên',
        'qty'          => 'Số lượng',
        'total'        => 'Tổng',
        'sub_total'    => 'Tiền hàng',
        'shipping_fee' => 'Phí vận chuyển',
        'discount'     => 'Giảm giá',
        'order_total'  => 'Tổng số đơn hàng',

    ],
];
