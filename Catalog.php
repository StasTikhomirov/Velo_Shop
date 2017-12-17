
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" href="Catalog.css">
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
<div id="welc"><h1 >Dmitry Bessonov</div>

<form action="" method="post">
    <div id="container">
       
        	<?					
			
			
				
				$link = mysqli_connect("localhost", "root", "", "bikegoods"); // адрес хоста, пользователь, пароль, название БД

				if (!$link) { // если нет подключения
					echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
					echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
					echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
					exit;
				}
				$query = "SELECT * FROM `products`";
				$result = mysqli_query($link, $query); // result = ответ БД на запрос квери по соединению линк
			?>
            <h2 align="center">Наши товары</h2>
			<table id="table" width="1200" border="1px">
                
                <tr>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Цена</th> 
                    <th>Заказать</th>                                                      
                </tr>
				<?php
					$Product;
					$i=1;
					$id="Name";
						
						while($eachProduct = mysqli_fetch_assoc($result)){ //на каждой итерации берем 1 из результатов (строк из БД) и обрабатываем.
						$name = $eachProduct['Name'];
						$description = $eachProduct['Description'];
					    $cost = $eachProduct['Price'];											
						$Product="Tovar".$i;
						$Prodname=$id.$i;
						
						 //setcookie("Product[i]",$name);
						
						echo "<tr>
								<td width=150 align=\"center\">$name<input type=\"radio\" name='$Prodname' value='$name' checked hidden='true'></td>
								<td width=1000 align=\"center\">$description</td>
								<td width=75 align=\"center\">$cost</td>
								<td align=\"center\"><input type=\"checkbox\" name='$Product'></td>					
							</tr>";
						$i++;
					} // while
				?>
                
        </table>
    </div>
    <div id="order" align="center">	
            <input type="submit" class="submit" name="order"  value="Заказать">	</div>
 </form>   
    		
            <form action="order.php" method="post"><a href="orders.php">Order</a></form>           

    <?
				$y=1;
			
				if (isset($_POST['order']))
				{
					while($y<=$i)
					{
						$tovar="Tovar".$y;
						$tovName="Name".$y;
						$tovCost="Cost".$y;
						
						if (isset($_POST[$tovar]))
						{	
							$orderName =($_POST[$tovName])	;
							$orderCost =($_POST[$tovCost])	;
							echo $order;	
										   
						}
						
						$y++;
					}
						
				}
			?>
</body>
</html>

