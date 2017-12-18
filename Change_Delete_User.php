<?

				
		$login = $_GET['Please'];		
		//echo $login;
		
		$link = mysqli_connect("localhost", "root","", "bikegoods"); // адрес хоста, пользователь, пароль, название БД
		if (!$link) { // если нет подключения
					echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
					echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
					echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
					exit;
				}		
				
		$query = "SELECT * FROM `users` WHERE Login='$login'";
		$result = mysqli_query($link, $query); // result = ответ БД на запрос квери по соединению линк
			
			//$res=mysqli_fetch_array($result);
			
			
			
			while($userData = mysqli_fetch_assoc($result)) //на каждой итерации берем 1 из результатов (строк из БД) и обрабатываем.
			{			
						$password=	$userData['password']; 
						$Surname = $userData['Surname'];		
						$Firstname = $userData['Firstname'];					    									
						$email=$userData['email'];	
						$phone=$userData['Phone'];	
			}
			

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8"" />
<title>Изменение данных</title>
<style type="text/css" media="all">@import "Autorisation.css";</style>
</head>

<body>

<header>
<div><a href="Main.php"><img id="Logo" src="images/Shop_logo.png" ></a></div>

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
<h2 align=center>Изменение данных пользователя</h2>
</div>

 <table id="table" align="center">		
		<tr>		
		<td>Логин</td>
		<td><input  type="text" class="subm" name="login"  value="<? echo $login;?>"       > </td>
		</tr>
        
        <tr>		
		<td>Пароль</td>
		<td><input type="text" class="subm" name="password" value="<? echo $password;?>"    > </td>
		</tr>
        
        <tr>		
		<td>Фамилия</td>
		<td><input type="text" class="subm" name="last_name" value="<? echo $Surname;?>" > </td>
		</td>
		</tr>
		
		<tr>		
		<td>Имя</td>
		<td><input type="text" class="subm" name="first_name" value="<? echo $Firstname;?>"> </td>
		</tr>
        
        <tr>		
		<td>E-mail</td>
		<td><input type="text" class="subm" name="email" value="<? echo $email;?>" >        </td>
		</tr>
        
        <tr>		
		<td>Телефон</td>
		<td><input type="text" class="subm" name="phone" value="<? echo $phone;?>" >        </td>
		</tr>		
		</table>
                
		<div id="buttons">	
		<input type="submit" class="subm" name="saveChanges"  value="Сохранить изменения">	
		<span></span>
		<input type="submit" class="subm" name="Delete" value="Удалить пользователя">	
		</div>			
        </form>
        
<?php  
if (isset($_POST['change']))
{
		$link = mysqli_connect("localhost", "root", "", "bikegoods"); // адрес хоста, пользователь, пароль, название БД
						
		$login=$_POST['login'];
		$password=$_POST['password'];
		
		$query = "SELECT * FROM `users` WHERE Login='$login'";
				$result = mysqli_query($link, $query); // result = ответ БД на запрос квери по соединению линк
			
			$res=mysqli_fetch_array($result);
			
		if ($res['0'] !="")
		 {			
			$login = $res['0'];			
			$password=$res['1'];	
			$surname = $res['2'];	
			$firstname=$res['3'];	
			$email=$res['4'];	
			$phone = $res['5'];	
			
		 }
}
		
if (isset($_POST['saveChanges']))
{
		$login=$_POST['login'];
		$password=$_POST['password'];
		$surname = $_POST['last_name'];
		$firstname=$_POST['first_name'];
		$email=$_POST['email'];
		$phone = $_POST['phone'];
		
		echo $login;
		
	$query="UPDATE  users SET  password = '$password', Surname = '$surname', Firstname = '$firstname', email = '$email', 
	Phone = '$phone' WHERE  Login =  '$login';";
	
	$result = mysqli_query($link,$query)or die("Ошибка " . mysqli_error($link)); 
		if ($result == true) {
			echo "Данные успешно сохранены!";			 
		}
		else {
			echo "Произошла ошибка, пожалуйста повторите попытку.";
		} 
		
}

if (isset($_POST['Delete']))
{
		$login=$_POST['login'];
		$query="DELETE FROM users WHERE Login = '$login'";
		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
		if ($result == true) {
			echo "Пользлватель удален";
			echo $login;
		}
		else {
			echo "Произошла ошибка, пожалуйста повторите попытку.";
		} 
}


 ?>
</body>
</html>

