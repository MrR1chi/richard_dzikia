
USE kool;

CREATE TABLE IF NOT EXISTS kasutajad (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nimi VARCHAR(100) NOT NULL,
    vanus INT NOT NULL
);

INSERT INTO kasutajad (nimi, vanus)
VALUES
    ('Richard', 20),
    ('Maria', 21),
    ('Aleks', 22);
