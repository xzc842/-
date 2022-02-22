<?php
if($_COOKIE["username"]=="")
{
    echo "登录超时或未登录请重新登录";
    echo'<script>window.location.href="index.html"</script>';
}
?>
<html>
<head>
<meta charset="utf-8">
<title>xzc打印服务程序</title>
</head>
<body>
<div style="background-color:#">
<form action="upload.php" method="post" enctype="multipart/form-data">
	<label for="file">文件名：</label>
	<input type="file" name="file" id="file"><br>
	<input type="submit" name="submit" value="提交">
</form>
</div>
</body>
</html>