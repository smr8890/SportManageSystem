<?php

require_once '../include/public.func.php';

if(isset($_POST) && $_POST){
	$username=$_POST['username'];
	$password=$_POST['password'];
    $username = urldecode($username);
    $password = urldecode($password);

	$query=PDOQuery($dbcon,"SELECT * FROM student WHERE username=?",[$username],[PDO::PARAM_STR]);

    if($query[1]!=1){
        echo json_encode([
            'success' => false,
            'status' => 401,
            'message' => '用户名或密码错误！'
        ]);
        exit;
    }

    if(password_verify($password, $query[0][0]['password'])) {
        $_SESSION['admin']=$username;
        echo json_encode([
            'success' => true,
            'status' => 200,
            'message' => '登录成功'
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'status' => 402,
            'message' => '用户名或密码错误！'
        ]);
    }
}

?>