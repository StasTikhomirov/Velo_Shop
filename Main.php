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
	background-image:url(background.jpg);
	font-family:Myriad Pro;
	color:rgba(206,0,3,1.00);
}


A {
    text-decoration: none; /* ������� ������������� ��� ������ */
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
<tr><img src="ikon.jpg" align="left" width="125"></td>
<font align="right" size="25" >��������-������� �����������</font></td>
</tr>

<tr>
<i><b><p align="left"><font align="center" size="25" >BikeGoods</font></p></b></i>
</tr>
<tr></tr><tr></tr>
</table>

<table align="right" width="100%">

<tr>
<td></td>
<td bordercolor="#FF0004" bgcolor="#FF8E00" align="center" width="100"><font  size="6"><a href="Autorisation.html">����</a></td>
<td bgcolor="#016C14" align="center" width="150"><font size="6" ><a href="Registration.html">�����������</a></td>
<td width="800"></td>
</tr>
</table>


<table border="0"  align="right" width="100%">
<tr height="30"></tr><tr><td width="10"></td><td >
<input align="left" id="quer" type=text class=text name="query" value="" placeholder="����� �� ��������" size="60" height="50">
<input type="submit" value="">

</td>
</tr>
</table>

<table border="0" align="right" width="100%">
<tr>
<td align="center" width="200"><font size="15"><a href="Catalog.html">�������</a></td>
<td align="center" width="200"><font size="15"><a href="Orders.html">������</a></td>
<td align="center" width="200"><font size="15"><a href="Contacts.html">��������</a></td>
<td></td>
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

