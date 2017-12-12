<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

<title>VeloGoods</title>
<link rel="stylesheet" type="text/css" href="Main.css">
</head>

<body>

<header>
<div><a href="Main.php"><img id="Logo" src="images/Shop_logo.png" ></a></div>

<ul class="menu">
    <li><a href=#>Главная</a>       
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


<div id="Sign">
	<form method="post">
    <table>    
    <td>Логин</td>
		<td><input type="text" class="subm" name="login" value=""         > </td>
		</tr>
        
        <tr>		
		<td>Пароль</td>
		<td><input type="text" class="subm" name="password" value=""    > </td>
       </tr>
      
      </table>
      
    <input  type="submit" class="subm" name="Log" value="Войти">	
    <span>/</span>
    
    <a href="Autorisation.php" id="registrate">Регистрация</a>
    </form>
</div>



</header>



<?
if (isset($_POST['Log']))
{
	$link = mysqli_connect("localhost", "root", "", "bikegoods"); // адрес хоста, пользователь, пароль, название БД
		
				
		$login=$_POST['login'];
		$password=$_POST['password'];
		
		$query = "SELECT Firstname FROM `users` WHERE Login='$login' AND password='$password' ";
				$result = mysqli_query($link, $query); // result = ответ БД на запрос квери по соединению линк
			
			$res=mysqli_fetch_array($result);
			
		if ($res['Firstname'] == true) {
			echo "Данные успешно Найдены!";
			echo $res['0'];
		}
		else {
			echo "Произошла ошибка, пожалуйста повторите попытку.";
		} 

}
?>

<div id="ModalOpen" class="Window">
     
     <div>
      <a href="#close" title="Закрыть" class="close">X</a>
            
      <table align="center">
      <tr><td></td><td>Вход в систему</td><td></td></tr>
      <tr style="height:10px"><tr>
      <tr>		
		<td>Логин</td>
		<td><input type="text" class="subm" name="login" value=""         > </td>
	</tr>
        
       <tr>		
		<td>Пароль</td>
		<td><input type="text" class="subm" name="password" value=""    > </td>
	</tr>        
        <tr><td style="height:10px"></td></tr>
       </table>
       
       
       
       <div align="center"> <input  type=submit class=subm name=Logsa value="Войти">	</div>
      
     </div> 
    </div>
	

<input id="search_area" type=text name="query" class=text value="" placeholder="  Поиск по каталогу" size="60" height="50"></div>

</body>
</form>
</html>

