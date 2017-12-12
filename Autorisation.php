<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8"" />
<title>Вход в систему тестирования</title>
<style type="text/css" media="all">@import "Autorisation.css";</style>
</head>

<body>

<header>
<div><img id="Logo" src="images/Shop_logo.png"></div>

<ul class="menu">
    <li><a href="Main.php">Главная</a>       
    </li>
    <li><a href="Catalog.php">Каталог</a>
        <ul class="submenu">
            <li><a href=#>Запчати</a></li>
            <li><a href=#>Одежда</a></li>
            <li><a href=#>Аксессуары</a></li>
        </ul>
    </li>
    <li><a href=#>Новости</a>
        <ul class="submenu">
            <li><a href=#>Новые товары</a></li>
            <li><a href=#>Акции</a></li>
        </ul>
    </li>
    <li><a href=#>Контакты</a>        
    </li>
</ul>

</header>

<form action="" method="post"> 	

<div id="form">
<h2 align=center>Регистрация нового пользователя</h2>
<h3 align=center>Введите свои данные</h3>
</div>

 <table id="table" align="center">		
		<tr>		
		<td>Логин</td>
		<td><input type="text" class="subm" name="login" value=""         > </td>
		</tr>
        
        <tr>		
		<td>Пароль</td>
		<td><input type="text" class="subm" name="password" value=""    > </td>
		</tr>
        
        <tr>		
		<td>Фамилия</td>
		<td><input type="text" class="subm" name="last_name" value="" > </td>
		</td>
		</tr>
		
		<tr>		
		<td>Имя</td>
		<td><input type="text" class="subm" name="first_name" value=""> </td>
		</tr>
        
        <tr>		
		<td>E-mail</td>
		<td><input type="text" class="subm" name="email" value="" >        </td>
		</tr>
        
        <tr>		
		<td>Телефон</td>
		<td><input type="text" class="subm" name="phone" value="" >        </td>
		</tr>
		
		
		</table>
        
        
		<div id="buttons">	
		<input type="submit" class="submit" name="logtosystem"  value="Зарегистрироваться">	
		<span></span>
		<input type="reset" class="subm" value="Сбросить">	
		</div>			
        </form>
        
<?php  
if (isset($_POST['logtosystem']))
{

		$link = mysqli_connect("localhost", "root", "", "bikegoods"); // адрес хоста, пользователь, пароль, название БД
			mysqli_set_charset($link, 'utf8');
				
		$login=$_POST['login'];
		$password=$_POST['password'];
		$surname = $_POST['last_name'];
		$firstname=$_POST['first_name'];
		$email=$_POST['email'];
		$phone = $_POST['phone'];
		
	$result = mysqli_query($link,"INSERT INTO users VALUES ('$login','$password','$surname','$firstname','$email','$phone')");
		if ($result == true) {
			echo "Данные успешно сохранены!";
		}
		else {
			echo "Произошла ошибка, пожалуйста повторите попытку.";
		} 

}


 ?>   
        
		
		
</body>
</form>
</html>

