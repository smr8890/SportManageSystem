<?php
require_once './include/PDOConn.php';

$username = 'admin';
$password = 'admin'; // 设置初始密码
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO admin (username, password) VALUES (?, ?)";
$result = PDOQuery($dbcon, $sql, [$username, $hash], [PDO::PARAM_STR, PDO::PARAM_STR]);

if ($result[1] == 1) {
    echo "管理员账号初始化成功！";
} else {
    echo "初始化失败！";
}

$student_username = 'student001';
$student_password = '123456';
$student_hash = password_hash($student_password, PASSWORD_DEFAULT);
$student_name = '张三';
$student_gender = 'M';
$student_department = '计算机学院';
$student_class = '计科2021-1班';

$sql_student = "INSERT INTO student (username, password, name, gender, department, class) VALUES (?, ?, ?, ?, ?, ?)";
$result_student = PDOQuery(
    $dbcon,
    $sql_student,
    [$student_username, $student_hash, $student_name, $student_gender, $student_department, $student_class],
    [PDO::PARAM_STR, PDO::PARAM_STR, PDO::PARAM_STR, PDO::PARAM_STR, PDO::PARAM_STR, PDO::PARAM_STR]
);

if ($result_student[1] == 1) {
    echo "测试学生数据插入成功！";
} else {
    echo "测试学生数据插入失败！";
}

?>