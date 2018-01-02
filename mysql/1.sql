--1
SELECT * FROM products

--1.1 
SELECT name as TenSP, unit_price as DonGia, image as HinhAnh FROM products

--3
SELECT name, address,gender,phone_number FROM `customer` ORDER BY name ASC

--4
SELECT name as TenSP, unit_price as DonGia, image as HinhAnh FROM products ORDER BY DonGia DESC