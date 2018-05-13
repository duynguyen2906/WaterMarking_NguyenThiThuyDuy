<?php
session_start();
if (session_destroy()) { ?>

    <script>
		alert('Đăng xuất thành công!');
		location.href='index.php';
		</script>
<?php } ?>