<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

<title>Интернет-магазин Велотоваров</title>
</head>

<body>
<style>
body{
	background-image:url(background.jpg);
	font-family:Myriad Pro;
	color:rgba(206,0,3,1.00);
}


A {
    text-decoration: none; /* Убирает подчеркивание для ссылок */
} 

A:hover { 
    text-decoration: underline; /* Добавляем подчеркивание при наведении курсора на ссылку */
    color: red; /* Ссылка красного цвета */
} 

p { text-indent: 200px; }

input.text {
    
    height: 25px;
	font-size:18px;
    
}


#search {
  /* устанавливаем ширину формы,
  ** равную ширине поля ввода (183 + 37 + 15)	*/
  width: 235px;
  height: 29px;
}

/* делаем инпуты плавающими, чтобы убрать лишние отступы,
** и отключаем бордюры */
#search input {
  float: left;
  border: none;
}

/* стили для поля ввода */
#search .input {
  width: 183px;
  height: 28px;
  /* внутренний отступ справа (37px) делаем больше левого,
  ** т.к. там будет размещена кнопка отправки	*/
  padding: 0 37px 1px 15px;
  background: #EEE url(https://lh4.googleusercontent.com/-EllJnywnmlY/UAaKJYSYYMI/AAAAAAAABUU/IaRo-yUcRmc/s235/search.png) no-repeat;
  color: #555;
  font: 13px/28px Tahoma, Arial, sans-serif;
  outline: none;
}

/* приходится использовать хак для FireFox
** для вертикального выравнивания текста,
** т.к. у него свои особые представления об этом */
@-moz-document url-prefix() {
  #search .input {
    height: 27px;
    padding-bottom: 2px;
  }
}

/* меняем оформление поля ввода при фокусе */
#search .input:focus {
  background-color: #E8E8E8;
  background-position: 0 -29px;
  color: #333;
}

/* оформляем кнопку отправки */
#search .submit {
  width: 37px;
  height: 29px;
  cursor: pointer;

  /* смещаем кнопку влево на собственную ширину,
  ** чтобы она оказалась над полем ввода */
  margin-left: -37px;

  /* по-нормальному, здесь достаточно было бы указать background: none;
  ** но приходится указывать фон из-за бага в IE */
  background: url(search.jpg);
}
}
</style>

<table  border="0" align="right" width="100%">
<tr><img src="ikon.jpg" align="left" width="125"></td>
<font align="right" size="25" >Интернет-магазин Велотоваров</font></td>
</tr>

<tr>
<i><b><p align="left"><font align="center" size="25" >BikeGoods</font></p></b></i>
</tr>
<tr></tr><tr></tr>
</table>

<table align="right" width="100%">

<tr>
<td></td>
<td bordercolor="#FF0004" bgcolor="#FF8E00" align="center" width="100"><font  size="6"><a href="Autorisation.html">Вход</a></td>
<td bgcolor="#016C14" align="center" width="150"><font size="6" ><a href="Registration.html">Регистрация</a></td>
<td width="800"></td>
</tr>
</table>


<table border="0"  align="right" width="100%">
<tr height="30"></tr><tr><td width="10"></td><td >
<input align="left" id="quer" type=text class=text name="query" value="" placeholder="Поиск по каталогу" size="60" height="50">
<input type="submit" value="">

</td>
</tr>
</table>

<table border="0" align="right" width="100%">
<tr>
<td align="center" width="200"><font size="15"><a href="Catalog.html">Каталог</a></td>
<td align="center" width="200"><font size="15"><a href="Orders.html">Заказы</a></td>
<td align="center" width="200"><font size="15"><a href="Contacts.html">Контакты</a></td>
<td></td>
</tr>




</table>
<br>
<br>

 <input type="search" name="" placeholder="поиск" class="input" />
  <input type="submit" name="" value="" class="submit" />

<br />
<br />

  

</body>
</form>
</html>

