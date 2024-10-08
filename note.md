# Giới hạn một thiết bị đăng nhập

-   Bảng users: Tạo cột last_session_id ==> Lưu trữ session id gần nhất
-   Kiểm tra xác bằng middleware => Kiểm tra session id hiện tại với last_session_id

*   Khớp nhau: Tiếp tục request
*   Không khớp nhau: Đăng xuất
