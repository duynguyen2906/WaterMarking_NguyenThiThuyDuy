- Phiên bản PHP: PHP7
- Chỉnh sửa file config php C:/xampp/php/php.ini
	post_max_size=100M
	post_max_size=50M
- Tài khoản quản trị
	acc: admin	
	password: admin123
- Chức năng
+ ADMIN : Admin toàn quyền, get chữ ký, tải nhạc, up nhạc. 
+ User: User có quyền mua nhạc, tải nhạc, get chữ ký. 
+ Khách: Khách có quyền get chữ ký mà không cần đăng nhập.
- Lưu ý: 
+ Đảm bảo file nhạc đúng dịnh dạng WAV. Một cách để test thử chắc chắn là download nhạc từ "nhaccuatui.com". 
  Sau đó truy cập trang "https://mp3cut.net" , load file vừa tải về.
  Chọn định dạng xuất file là *.WAV rồi tải về.  
+ Do file WAV có dung lượng lớn nên thời gian xử lý lâu.
+ Đảm bảo truy cập internet ổn định. 
- Demo: https://www.youtube.com/watch?v=ELInJG611XA&feature=youtu.be 
