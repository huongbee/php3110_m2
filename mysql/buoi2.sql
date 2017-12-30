INSERT INTO role(id,name) VALUES (1,'admin')

INSERT INTO role(name) VALUES ('admin')

--1-5-6


INSERT INTO admin(name,email,id_role) 
VALUES 
('', 'huong3@gmail.com',5),
('Hương', 'huong2@gmail.com',6)


INSERT INTO `admin` (`id`, `name`, `email`, `id_role`) 
VALUES (NULL, 'KPT', 'huong4@gmail.com', '6');

UPDATE role SET name='admin' WHERE id=5

UPDATE admin SET 
    name="Huong Huong",
    id_role=1 
WHERE email='huong3@gmail.com'


UPDATE admin SET 
    name="Khoa pham training",
    id_role=6 
WHERE id_role=5


DELETE FROM role WHERE id=6


SELECT name,email 
FROM admin 
WHERE id IN (1,2,3,4)
--WHERE id between 1 and 4 
--WHERE id<5



SELECT *
FROM admin 
WHERE id NOT IN (5)
--WHERE id<>5  --!= <>




SELECT *
FROM admin 
WHERE id NOT IN (5)
    OR id_role<>6



SELECT *
FROM admin 
WHERE email LIKE '%huong%'
ORDER BY id DESC, id_role DESC 
LIMIT 1,1  -- vitri,soluong


-- Tong: 62
-- p1: 0,10
-- p2: 10,10
-- p3: 20,10
-- p4: 30,10 //10
-- p5: 40,10 //2


--14
 1: 0,3
 2: 3,3
 3: 6,3
 4: 9
 5: 12
 6: 15

 8: 
 15: 42,3

 21: 21*3 - 3*1 =  3*(21-1) = 60 