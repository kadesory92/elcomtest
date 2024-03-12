-- Создание базы данных
CREATE DATABASE IF NOT EXISTS dbTest1;

-- Использование базы данных
USE dbTest1;

-- Создание первой таблицы (Table1)
CREATE TABLE IF NOT EXISTS Table1 (
    ID INT PRIMARY KEY,
    Name VARCHAR(50),
    Value INT
);

-- Вставка данных в первую таблицу (Table1)
INSERT INTO Table1 (ID, Name, Value) VALUES
(1, 'One', 100),
(2, 'Two', 200),
(3, 'Three', 300),
(4, 'Four', 400),
(5, 'Five', 500),
(6, 'Six', 600),
(7, 'Seven', 700);

-- Создание первой таблицы (Table2)
CREATE TABLE IF NOT EXISTS Table2 (
    ID INT PRIMARY KEY,
    Name VARCHAR(50),
    Value INT
);

-- Вставка данных в первую таблицу (Table2)
INSERT INTO Table2 (ID, Name, Value) VALUES
(70, 'Один', 100),
(60, 'Два', 200),
(50, 'Три', 300),
(40, 'Четыре', 400),
(30, 'Пять', 500),
(20, 'Шесть', 600),
(10, 'Семь', 700);

--Решение:

SELECT Table2.ID, Table2.Name, Table2.Value
FROM Table2
JOIN Table1 ON Table2.Value = Table1.Value
WHERE Table2.ID > 1 AND Table2.ID < 6;
