<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

<title>��������-������� �����������</title>
</head>

<body>
<style>
body{
	background-image:url(Background-full_cuclist.png);
	font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	
}


A {
    text-decoration: none; /* ������� ������������� ��� ������ */
	color:rgba(255,255,255,1.00);
} 

A:hover { 
    text-decoration: underline; /* ��������� ������������� ��� ��������� ������� �� ������ */
    color: red; /* ������ �������� ����� */
} 

p { text-indent: 200px; }

input.text {
    
    height: 25px;
	font-size:18px;
    
}

#quer{
	background-color:transparent;
	border-color:rgba(131,131,131,1.00);
}


#search {
  /* ������������� ������ �����,
  ** ������ ������ ���� ����� (183 + 37 + 15)	*/
  width: 235px;
  height: 29px;
}

/* ������ ������ ����������, ����� ������ ������ �������,
** � ��������� ������� */
#search input {
  float: left;
  border: none;
}

/* ����� ��� ���� ����� */
#search .input {
  width: 183px;
  height: 28px;
  /* ���������� ������ ������ (37px) ������ ������ ������,
  ** �.�. ��� ����� ��������� ������ ��������	*/
  padding: 0 37px 1px 15px;
  background: #EEE url(https://lh4.googleusercontent.com/-EllJnywnmlY/UAaKJYSYYMI/AAAAAAAABUU/IaRo-yUcRmc/s235/search.png) no-repeat;
  color: #555;
  font: 13px/28px Tahoma, Arial, sans-serif;
  outline: none;
}

/* ���������� ������������ ��� ��� FireFox
** ��� ������������� ������������ ������,
** �.�. � ���� ���� ������ ������������� �� ���� */
@-moz-document url-prefix() {
  #search .input {
    height: 27px;
    padding-bottom: 2px;
  }
}

/* ������ ���������� ���� ����� ��� ������ */
#search .input:focus {
  background-color: #E8E8E8;
  background-position: 0 -29px;
  color: #333;
}

/* ��������� ������ �������� */
#search .submit {
  width: 37px;
  height: 29px;
  cursor: pointer;

  /* ������� ������ ����� �� ����������� ������,
  ** ����� ��� ��������� ��� ����� ����� */
  margin-left: -37px;

  /* ��-�����������, ����� ���������� ���� �� ������� background: none;
  ** �� ���������� ��������� ��� ��-�� ���� � IE */
  background: url(search.jpg);
}
}
</style>

<table  border="0" align="right" width="100%">
<tr><td></td>
<td><img src="ikon.png" align="left" width="125"></td>

<td></td>
<td align="right" width="100" id=""><font  size="6"><a href="Autorisation.html">����</a></td>
<td width="5" height="15"><font color="#FFFFFF">/</font></td>
<td align="right" width="150"><font size="6" ><a href="Registration.html">�����������</a></td>
</tr>

<tr>
<td></td><td width="900"></td><td width="200"></td><td align="right" width="500"><a href="Basket.html">�������</a></td>
</tr>
</table>


<table border="0" align="right" width="100%">
<tr>
<td align="center" width="200"><font size="15"><a href="Catalog.html">�������</a></td>
<td align="center" width="200"><font size="15"><a href="Orders.html">???</a></td>
<td align="center" width="200"><font size="15"><a href="Contacts.html">��������</a></td>
<td></td>
</tr>
</table>

<table border="0"  align="right" width="100%">
<tr height="30"></tr><tr><td width="10"></td><td >
<input align="left" id="quer" type=text class=text name="query" value="" placeholder="����� �� ��������" size="60" height="50">
<input type="submit" value="">

</td>
</tr>
</table>


<br>
<br>

 <input type="search" name="" placeholder="�����" class="input" />
  <input type="submit" name="" value="" class="submit" />

<br />
<br />

  

</body>
</form>
</html>

