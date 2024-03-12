-- Создание базы данных
CREATE DATABASE IF NOT EXISTS dbTest4;
--
-- Использование базы данных
USE dbTest4;

-- Создание первой таблицы (Table1)
CREATE TABLE IF NOT EXISTS Table1 (
    Product_ID INT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL
);

-- Вставка данных в первую таблицу (Table1)
INSERT INTO Table1 (Product_ID, Name) VALUES
(1, 'Телевизор'),
(2, 'Телефон'),
(3, 'Часы'),
(4, 'Машина'),
(5, 'Планшет'),
(6, 'Утюг'),
(7, 'Барабан'),
(8, 'Обруч'),
(9, 'Карусель'),
(10, 'Качель'),
(11, 'Корабль');

-- Создание первой таблицы (Table2)
CREATE TABLE IF NOT EXISTS Table2 (
    Product_ID INT PRIMARY KEY,
    Price1 INT,
    Price2 INT,
    Price3 INT
);

-- Вставка данных в первую таблицу (Table2)
INSERT INTO Table2 (Product_ID, Price1, Price2, Price3) VALUES
(1, 100, 1000, 10000),
(2, 200, 2000, 20000),
(3, 300, 3000, 30000),
(4, 400, 4000, 40000),
(5, 500, 5000, 50000),
(6, 100, 2000, 20000),
(7, 300, 5000, 20000),
(8, 400, 2000, 20000),
(9, 500, 5000, 50000),
(10, 600, 2500, 25000),
(11, 300, 3000, 30000);
