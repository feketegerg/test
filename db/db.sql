CREATE DATABASE test;

USE test;

CREATE TABLE users(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    uname TINYTEXT NOT NULL,
    pwd LONGTEXT NOT NULL
);

CREATE TABLE listElements(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    elementText TINYTEXT NOT NULL,
    side TINYTEXT NOT NULL,
    position INT(11) NOT NULL
);

INSERT INTO listElements(elementText,side)
VALUES  ('DOG','left'),
        ('CAT','left'),
        ('FROG','left'),
        ('COW','left'),
        ('BEAR','left'),
        ('PIG','left'),
        ('BIRD','right'),
        ('FLOWER','right'),
        ('T-REX','right'),
        ('LIZZARD','right'),
        ('BUTTERFLY','right'),
        ('SHIBA','right');

INSERT INTO users(uname,pwd)
VALUES  ('admin','$2y$10$GUMyNKvBZYml14YiyEekuu1hcqxrtbZxyn8osx66lWTSSkCXvCIAm');