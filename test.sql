-- 创建数据库
CREATE DATABASE IF NOT EXISTS pe_test_system DEFAULT CHARACTER SET utf8mb4 DEFAULT COLLATE utf8mb4_general_ci;

USE pe_test_system;

-- 管理员表
CREATE TABLE Admin (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- 学生表
CREATE TABLE student (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(50) NOT NULL,
    gender ENUM('M', 'F') NOT NULL, -- M=男, F=女
    department VARCHAR(100) NOT NULL,
    class VARCHAR(100) NOT NULL
);

-- 初始化管理员账号 (账号：admin 密码：admin)
INSERT INTO Admin (username, password) VALUES ('admin', 'admin');