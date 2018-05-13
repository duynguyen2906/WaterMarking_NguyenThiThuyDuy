// JavaScript Document
function dongho()
{
	t = new Date();
	h = t.getHours();
	m = t.getMinutes();
	s = t.getSeconds();
	ng = t.getDate();
	th = t.getMonth() + 1;
	n = t.getFullYear();
 	document.getElementById('ngaythang').innerHTML = "Hôm nay: " + ng + " - " + th + " - " + n + " - " + h + " : " + m +  " : " + s;
	 setTimeout(dongho,1000);	
	
}
	t1 = new Array();
	t1[0] = "h1.jpg";
	t1[1] = "h2.jpg";
	t1[2] = "h3.jpg";
	t1[3] = "h4.jpg";
	i = 0;
	function doihinh()
{
	document.getElementById('liveshow').innerHTML = "<img src='hinh/" + t1[i] + "' width='550' height='245' />";
	i++;
	if(i >3)
	{
	i = 0;
	}
	 setTimeout(doihinh,2000);	
}
	
	
	
	
	t2 = 'BÁN LAPTOP ONLINE - CÔNG TY BÁN LAPTOP PIN PIN - 240 Võ Văn Ngân ,P Bình Thọ, Q.Thủ Đức, TP.HCM';
		i2 = 1;
function hienchu()
{
	document.getElementById('chuchay').innerHTML = t2.substring(0,i2);
	i2++;
	if(i2 > t2.length)
	{
	i2 = 1;	
	}
	 setTimeout(hienchu,200);
	
}

function allrun()
	{
		 dongho();
		 hienchu();
	}