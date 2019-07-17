DELIMITER $$
CREATE PROCEDURE sp_count_units
(
OUT units INT
)
BEGIN
	SELECT COUNT(*) INTO units FROM units_measurement;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE sp_units_measurement ()
BEGIN
	SELECT * FROM units_measurement;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE sp_insert_unit_measurement
(
IN id INT,
IN name VARCHAR(50),
IN abrev VARCHAR(5),
OUT last_id INT
)
BEGIN
	INSERT INTO units_measurement(id,name,abrev) VALUES(id,name, abrev);

 SELECT
    um.id
INTO last_id FROM
    units_measurement AS um
WHERE
    um.id = id;
END$$
DELIMITER ;
