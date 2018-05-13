// JavaScript Document
function kiemtradathang()
{
	with(document.formdathang)
	{
		if (diadiem.value=="")
		{
			alert("Bạn chưa nhập địa điểm!");
			diadiem.focus();
			diadiem.select();
			return false;
		}
		else
		if (ngay.value=="0")
		{
			alert("Bạn chưa nhập ngày!");
			ngay.focus();
			ngay.getSelection();
			return false;
		}
		else
		if (thang.value==0)
		{
			alert("Bạn chưa nhập tháng!");
			thang.focus();
			thang.getSelection();
			return false;
		}
		else
		if (nam.value==0)
		{
			alert("Bạn chưa nhập nam!");
			nam.focus();
			nam.getSelection();
			return false;
		}
	}
}