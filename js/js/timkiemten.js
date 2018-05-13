// JavaScript Document

function timkiemten()
{
	if(document.formtimkiem.ten.value == "Nhập từ khóa tìm kiếm")
		{
			document.formtimkiem.ten.value="";
		}
		else
		if(document.formtimkiem.ten.value == "")
		{
			document.formtimkiem.ten.value="Nhập từ khóa tìm kiếm";
		}
}


function CheckSignup()
	{
		var s=document.formdangky;
		if(s.hoten.value=='')
		{
			document.getElementById("hoten_error").style.display = "block";
			document.getElementById("hoten_error").innerHTML="Bạn chưa nhập họ tên!";
			s.hoten.focus();
			return false;	
		}
		else
			document.getElementById("hoten_error").style.display = "none";
			
		if(s.diachi.value=='')
		{
			document.getElementById("diachi_error").style.display = "block";
			document.getElementById("diachi_error").innerHTML=" Bạn chưa nhập địa chỉ!";
			s.diachi.focus();
			return false;	
		}
		else
			document.getElementById("diachi_error").style.display = "none";
			
		if(s.dienthoai.value=='')
		{
			document.getElementById("dienthoai_error").style.display= "block";
			document.getElementById("dienthoai_error").innerHTML=" Bạn chưa nhập điện thoại!";
			s.dienthoai.focus();
			return false;	
		}
		else
			document.getElementById("dienthoai_error").style.display = "none";
			
			
					if(isNaN(s.dienthoai.value))
		{
			document.getElementById("dienthoai_error").style.display= "block";
			document.getElementById("dienthoai_error").innerHTML="Điện thoại phải là số!";
			s.dienthoai.focus();
			return false;	
		}
		else
			document.getElementById("dienthoai_error").style.display = "none";
			
			
		if(s.email.value=='')
		{
			document.getElementById("email_error").style.display = "block";
			document.getElementById("email_error").innerHTML=" Bạn chưa nhập email!";
			s.email.focus();
			return false;	
		}
		else
		{
			var email = document.getElementById('email');
	 		 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (!filter.test(email.value)) {
				document.getElementById("email_error").style.display = "block";
			    document.getElementById("email_error").innerHTML=" Bạn nhập email chưa đúng!";
			    s.email.focus();
				return false;
			 }
			else
			{
				document.getElementById("email_error").style.display = "none";	
			}
		}
			

			
			
				
			
if(s.user.value=='')
		{
			document.getElementById("user_error").style.display= "block";
			document.getElementById("user_error").innerHTML=" Bạn chưa nhập user!";
			s.user.focus();
			return false;	
		}
		else
			document.getElementById("user_error").style.display = "none";

	
		if(s.matkhau.value=='')
		{
			document.getElementById("matkhau_error").style.display= "block";
			document.getElementById("matkhau_error").innerHTML="Bạn chưa nhập mật khẩu!";
			s.matkhau.focus();
			return false;	
		}
		else
			document.getElementById("matkhau_error").style.display = "none";
			
			if(s.capcha.value=='')
		{
			document.getElementById("capcha_error").style.display= "block";
			document.getElementById("capcha_error").innerHTML="Bạn chưa nhập mật mã!";
			s.capcha.focus();
			return false;	
		}
		else
			document.getElementById("capcha_error").style.display = "none";


if(s.xacnhanmatkhau.value=='')
		{
			document.getElementById("xacnhanmatkhau_error").style.display= "block";
			document.getElementById("xacnhanmatkhau_error").innerHTML="Bạn chưa nhập xác nhận mật khẩu!";
			s.xacnhanmatkhau.focus();
			return false;	
		}
		else
			document.getElementById("xacnhanmatkhau_error").style.display = "none";

		
		if(s.xacnhanmatkhau.value!=s.matkhau.value)
		{
			document.getElementById("xacnhanmatkhau_error").style.display= "block";
			document.getElementById("xacnhanmatkhau_error").innerHTML="Mật khẩu không trùng!";
			s.xacnhanmatkhau.focus();
			return false;	
		}
		else
			document.getElementById("xacnhanmatkhau_error").style.display = "none";
		return true;	
	}
	
	


function validForm_search(){
	if (document.search_form.gia_tu.selectedIndex=="0") {
			alert("Bạn chưa chọn giá từ");
			document.search_form.gia_tu.focus();
			return false;
		}
	if (document.search_form.gia_den.selectedIndex=="0") {
			alert("Bạn chưa chọn giá đến");
			document.search_form.gia_den.focus();
			return false;
		}
	if (document.search_form.gia_tu.selectedIndex > document.search_form.gia_den.selectedIndex) {
			alert("Giá đến không được nhỏ hơn giá từ");
			document.search_form.gia_den.focus();
			return false;
		}		
}
