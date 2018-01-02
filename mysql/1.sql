--1
SELECT * FROM products

--1.1 
SELECT name as TenSP, unit_price as DonGia, image as HinhAnh FROM products

--3
SELECT name, address,gender,phone_number FROM `customer` ORDER BY name ASC

--4
SELECT name as TenSP, unit_price as DonGia, image as HinhAnh FROM products ORDER BY DonGia DESC

--5
SELECT * FROM products WHERE name LIKE '%sầu riêng%'

--10
SELECT * FROM products
WHERE name LIKE 'Smoke Chicken Pizza'
OR name LIKE 'Bánh Gato Trái cây Việt Quất'
OR name LIKE 'Bánh Táo - Mỹ'

--11
SELECT name as TenSP, unit_price as DonGia, image as HinhAnh FROM products ORDER BY DonGia DESC LIMIT 0,10

--15
SELECT name as TenSP, unit_price as DonGia, image as HinhAnh FROM products ORDER BY name ASC, DonGia DESC

--22
SELECT avg(unit_price) as DGTB FROM products

SELECT sum(unit_price)/count(id) as DGTB FROM products

SELECT products.*, type_products.name FROM products,type_products
WHERE products.id_type = type_products.id


SELECT products.*, type_products.name as tenloai 
FROM products,type_products
WHERE products.id_type = type_products.id
ORDER BY tenloai ASC

SELECT products.*, type_products.name as tenloai  FROM products
INNER JOIN type_products
ON products.id_type = type_products.id
ORDER BY tenloai ASC


SELECT p.*, t.name as tenloai  
FROM products p
INNER JOIN type_products t
ON p.id_type = t.id
ORDER BY tenloai ASC



SELECT p.*, t.name as tenloai  
FROM products p
RIGHT JOIN type_products t
ON p.id_type = t.id
ORDER BY tenloai ASC


SELECT t.name as TenLoai
FROM type_products t
INNER JOIN products p 
    ON t.id = p.id_type
INNER JOIN bill_detail d 
    ON d.id_product = p.id
INNER JOIN bills b
    ON b.id = d.id_bill
INNER JOIN customer c
    ON c.id = b.id_customer
WHERE c.email = "huongnguyenak96@gmail.com" 


SELECT t.name as tenloai, count(p.id) as tongsoSP
FROM type_products t
LEFT JOIN products p 
    ON p.id_type = t.id
GROUP BY t.name