<?php
require_once 'd:/smr/Desktop/sport/SportManageSystem/include/PDOConn.php';

$username = 'admin';
$password = '你的密码'; // 设置初始密码
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO admin (username, password) VALUES (?, ?)";
$result = PDOQuery($dbcon, $sql, [$username, $hash], [PDO::PARAM_STR, PDO::PARAM_STR]);

if ($result[1] == 1) {
    echo "管理员账号初始化成功！";
} else {
    echo "初始化失败！";
}
?>