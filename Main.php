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
    <li><a href=#>�������</a>       
    </li>
    <li><a href="Catalog.php">�������</a>
        <ul class="submenu">
            <li><a href=#>�������</a></li>
            <li><a href=#>������</a></li>
            <li><a href=#>����������</a></li>
        </ul>
    </li>
    <li><a href=#>�������</a>
        <ul class="submenu">
            <li><a href=#>����� ������</a></li>
            <li><a href=#>�����</a></li>
        </ul>
    </li>
    <li><a href=#>��������</a>        
    </li>
</ul>


<div id="Sign">
	<form method="post">
    <table>    
    <td>�����</td>
		<td><input type="text" class="subm" name="login" value=""         > </td>
		</tr>
        
        <tr>		
		<td>������</td>
		<td><input type="text" class="subm" name="password" value=""    > </td>
       </tr>
      
      </table>
      
    <input  type="submit" class="subm" name="Log" value="�����">	
    <span>/</span>
    
    <a href="Autorisation.php" id="registrate">�����������</a>
    </form>
</div>



</header>



<?
if (isset($_POST['Log']))
{
	$link = mysqli_connect("localhost", "root", "", "bikegoods"); // ����� �����, ������������, ������, �������� ��
		
				
		$login=$_POST['login'];
		$password=$_POST['password'];
		
		$query = "SELECT Firstname FROM `users` WHERE Login='$login' AND password='$password' ";
				$result = mysqli_query($link, $query); // result = ����� �� �� ������ ����� �� ���������� ����
			
			$res=mysqli_fetch_array($result);
			
		if ($res['Firstname'] == true) {
			echo "������ ������� �������!";
			echo $res['0'];
		}
		else {
			echo "��������� ������, ���������� ��������� �������.";
		} 

}
?>

<div id="ModalOpen" class="Window">
     
     <div>
      <a href="#close" title="�������" class="close">X</a>
            
      <table align="center">
      <tr><td></td><td>���� � �������</td><td></td></tr>
      <tr style="height:10px"><tr>
      <tr>		
		<td>�����</td>
		<td><input type="text" class="subm" name="login" value=""         > </td>
	</tr>
        
       <tr>		
		<td>������</td>
		<td><input type="text" class="subm" name="password" value=""    > </td>
	</tr>        
        <tr><td style="height:10px"></td></tr>
       </table>
       
       
       
       <div align="center"> <input  type=submit class=subm name=Logsa value="�����">	</div>
      
     </div> 
    </div>
	

<input id="search_area" type=text name="query" class=text value="" placeholder="  ����� �� ��������" size="60" height="50"></div>

</body>
</form>
</html>

