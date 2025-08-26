<?php
// 管理员主页 index.php

session_start();
// 假设已完成登录验证

$adminName = "管理员"; // 可从session或数据库获取

$features = [
    ['title' => '个人信息管理', 'link' => 'profile.php'],
    ['title' => '通知管理', 'link' => 'notice_manage.php'],
    ['title' => '成绩标准管理', 'link' => 'score_standard.php'],
    ['title' => '院系和班级管理', 'link' => 'department_class.php'],
    ['title' => '学生管理', 'link' => 'student_manage.php'],
    ['title' => '缓考、免考审核管理', 'link' => 'exemption_review.php'],
    ['title' => '成绩管理', 'link' => 'score_manage.php'],
    ['title' => '成绩统计分析', 'link' => 'score_analysis.php'],
    ['title' => '场地管理', 'link' => 'venue_manage.php'],
    ['title' => '预约管理', 'link' => 'reservation_manage.php'],
];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>管理员主页</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; }
        .container { max-width: 500px; margin: 50px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px #ccc; }
        h2 { text-align: center; }
        ul { list-style: none; padding: 0; }
        li { margin: 20px 0; }
        a { display: block; padding: 12px; background: #007bff; color: #fff; text-decoration: none; border-radius: 4px; text-align: center; transition: background 0.2s; }
        a:hover { background: #0056b3; }
        .welcome { text-align: right; margin-bottom: 24px; color: #666; }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome">欢迎您，<?php echo htmlspecialchars($adminName); ?>！</div>
        <h1>管理员主页</h1>
        <ul>
            <?php foreach ($features as $feature): ?>
                <li>
                    <a href="<?php echo $feature['link']; ?>"><?php echo htmlspecialchars($feature['title']); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>