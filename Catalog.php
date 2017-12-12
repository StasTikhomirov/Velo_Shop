<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" href="Catalog.css">
</head>
<body>

<header>
<div><img id="Logo" src="images/Shop_logo.png" ></div>

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

    <div id="container">
       
        	<?					
				$link = mysqli_connect("localhost", "root", "", "bikegoods"); // адрес хоста, пользователь, пароль, название БД

				if (!$link) { // если нет подключения
					echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
					echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
					echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
					exit;
				}
				$query = "SELECT * FROM `products` ";
				$result = mysqli_query($link, $query); // result = ответ БД на запрос квери по соединению линк
			?>
			<table class="table_col">
                <colgroup>
                    <col style="background:rgba(0,0,0,1.00);">
                </colgroup>
                <tr>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Цена</th>
                    <th>Код Разновидности</th>  
                                  
                </tr>
				<?php
					$i=0;
						
						while($eachProduct = mysqli_fetch_assoc($result)){ //на каждой итерации берем 1 из результатов (строк из БД) и обрабатываем.
						$name = $eachProduct['Name'];
						$description = $eachProduct['Description'];
					    $cost = $eachProduct['Price'];
						$typeId = $eachProduct['ProductTypeID'];										
											
						echo "<tr>
								<td>$name</td>
								<td>$description</td>
								<td>$cost</td>
								<td align=\"center\">$typeId</td>
								
								
							</tr>";
							
					} // while
				?>
                
            </table>  
            <table><tr><td width="20px"></td></tr></table>
                        
            <div align="center">
                <a href="re.php">Добавить</a>
                <span>/</span>
                <a href="re.php">Изменить</a>
                <span>/</span>
                <a href="re.php">Удалить</a>        
            </div>
        </div>
            
    
</body>
</html>
