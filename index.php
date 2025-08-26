<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>体质测试管理系统 - 登录</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f2f2f2; }
        .container { width: 350px; margin: 80px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px #ccc; }
        h2 { text-align: center; margin-bottom: 25px; }
        .role-select { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; }
        input[type="text"], input[type="password"] {
            width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;
        }
        button { width: 100%; padding: 10px; background: #007bff; color: #fff; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <h2>体质测试管理系统登录</h2>
        <form action="login.php" method="post">
            <div class="role-select">
                <label>选择身份：</label>
                <input type="radio" id="student" name="role" value="student" checked>
                <label for="student" style="display:inline;">学生</label>
                <input type="radio" id="admin" name="role" value="admin">
                <label for="admin" style="display:inline;">管理员</label>
            </div>
            <label for="username">用户名：</label>
            <input type="text" id="username" name="username" required>
            <label for="password">密码：</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">登录</button>
        </form>
    </div>
</body>
</html>