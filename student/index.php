<?php
session_start();
// 假设已登录，获取学生姓名
$studentName = $_SESSION['student_name'] ?? '学生';

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>学生主页</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; }
        .container { max-width: 500px; margin: 50px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px #ccc; }
        h2 { text-align: center; }
        ul { list-style: none; padding: 0; }
        li { margin: 20px 0; }
        a { display: block; padding: 12px; background: #007bff; color: #fff; text-decoration: none; border-radius: 4px; text-align: center; transition: background 0.2s; }
        a:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <h2>欢迎，<?php echo htmlspecialchars($studentName); ?>！</h2>
        <ul>
            <li><a href="score.php">体测成绩</a></li>
            <li><a href="reserve.php">预约测试</a></li>
            <li><a href="profile.php">我的信息</a></li>
            <li><a href="password.php">修改密码</a></li>
            <li><a href="../logout.php">退出登录</a></li>
        </ul>
    </div>
</body>
</html>