<?php
$file=fopen("user.txt","r");
$user=$_POST["username"];
$psw=$_POST["password"];

while($user==fgets($file))
echo "?";
if($psw==fgets($file))
    {echo '登录成功';
		$expire=time()+60*60;
setcookie("username",$user,$expire);
setcookie("password",$psw,$expire);
	echo'<script>window.location.href="filelogin.php"</script>';
	}else{
		echo'登录失败';
		echo'<script>alert("密码错误")
		window.location.href="index.html"</script>';
	}

?>