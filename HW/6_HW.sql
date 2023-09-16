#CREATE TABLE cars(
#    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
#    model VARCHAR(255) NOT NULL,
#    distance FLOAT UNSIGNED DEFAULT 0,
#    price FLOAT UNSIGNED DEFAULT 1
#    );

#CREATE TABLE drivers(
#    id INT UNSIGNED PRIMARY KEY  AUTO_INCREMENT,
#    car_id INT UNSIGNED,
#    name VARCHAR(50) NOT NULL,
#    PHONE VARCHAR(15) UNIQUE NOT NULL,
#
#    FOREIGN KEY (car_id) REFERENCES cars(id)
#);

#CREATE TABLE customers(
#    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
#    name VARCHAR(50) NOT NULL,
#    phone VARCHAR(15) UNIQUE NOT NULL
#);

#CREATE TABLE orders(
#    id INT UNSIGNED PRIMARY KEY  AUTO_INCREMENT,
#    customer_id INT UNSIGNED,
#    driver_id INT UNSIGNED,
#    start VARCHAR(255) NOT NULL,
#    finish VARCHAR(255) NOT NULL,
#    price FLOAT NOT NULL,
#    FOREIGN KEY (customer_id) REFERENCES customers(id),
#    FOREIGN KEY (driver_id) REFERENCES drivers(id)
#);

#CREATE TABLE test(
#    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT
#);

#ALTER TABLE test ADD COLUMN age INT NOT NULL DEFAULT 0

#ALTER TABLE test DROP COLUMN age

#DROP TABLE test

#INSERT INTO cars(model, price)
#VALUES (
#        'Toyota Supra', 50),
#    ('Porsche Cayenne' ,40),
#    ('Nissane GTR', 30)

#UPDATE cars SET distance = 50 WHERE model "Toyota Supra" or model = "Porshe Cayenne"
#UPDATE cars SET distance = 50 WHERE model IN ("Toyota Supra, Porshe Cayenne")
#UPDATE cars SET distance =150 WHERE id = 1
#UPDATE  cars SET price = 20 WHERE id = 1
#UPDATE  cars SET  price = distance * 1.2 WHERE 3
#DELETE FROM cars WHERE id= 1

#INSERT INTO cars
#    (model, distance, price)
#VALUES
#     ('Chevrolet Camaro', 125, 25.5)

#DELETE FROM cars WHERE id=6

#INSERT INTO cars
#    (model, distance, price)
#VALUES
#    ('Chevrolet Camaro',125, 25.5)

#INSERT INTO drivers
#    (car_id, name, PHONE)
#VALUES
#    (2, 'Oliver', '789'),
#    (3, 'Asher','987'),
#    (4, 'Theodore','456'),
#    (5, 'Declan','654'),
#    (7, 'Henry','123'),
#    (8, 'Silas','321')

#INSERT INTO customers
#    (name, phone)
#VALUES
#    ('Oliver', '111789'),
#    ('Asher','111987'),
#    ('Theodore','111456'),
#    ('Declan','111654'),
#    ('Henry','111123'),
#    ('Silas','111321')
#INSERT INTO orders
#    (customer_id, driver_id, start, finish, price)
#VALUES
#    (1, 5, 'A', 'B', 165),
#    (4, 2, 'B', 'A', 135),
#    (2, 3, 'A', 'C', 145),
#    (5, 6, 'C', 'B', 165),
#    (4, 1, 'F', 'A', 185),

#SELECT * FROM  cars
#SELECT model
#FROM cars
#SELECT model, id
#FROM cars
#SELECT * FROM cars WHERE price <30
#SELECT * FROM cars WHERE price <30 AND distance >100
#SELECT * FROM cars WHERE price <30 AND distance >100
#ORDER BY price
#SELECT drivers.*, cars.model
#FROM drivers, cars
#WHERE drivers.car_id= cars.id

#SELECT cars.*, d.name as driver_name
#FROM cars
#LEFT JOIN drivers d on cars.id = d.car_id

#select *
#from orders

#select start, count(id)
#from orders
#group by start


#select start, count(id) as orders_count
#from orders
#group by start

#select o. id,
#       c.name as "Client", c.phone as "Client phone",
#       d.name as "Driver", d.PHONE as "Driver phone",
#       o.start, o.finish, o.price
#from orders o, customers c, drivers d
#where o.driver_id = d.id and o.customer_id = c.id


#SELECT o. id,
#       c.name as "Client", c.phone as "Client phone",
#       d.name as "Driver", d.PHONE as "Driver phone",
#       cars.model as model
#FROM orders o, customers c, drivers d, cars
#WHERE o.driver_id = d.id
#  AND o.customer_id = c.id
#  AND d.car_id = cars.id
#ORDER BY o.price, d.PHONE



