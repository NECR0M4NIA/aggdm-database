CREATE DATABASE aggdm_db;
USE aggdm_db;

CREATE TABLE characters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    gender ENUM('male', 'female') NOT NULL,
    age INT NOT NULL,
    is_muted BOOLEAN DEFAULT FALSE
);

CREATE TABLE center (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    style ENUM('futuristic', 'manga', 'post-apocalyptic', 'retro', 'natural', 'cyberpunk', 'classic') NOT NULL,
    population_count INT DEFAULT 0,
    description TEXT DEFAULT NULL
);

INSERT INTO characters (name, gender, age, is_muted) VALUES
('Steve Hawkins', 'male', 14, FALSE),
('John Peterson', 'male', 14, FALSE),
('Skye', 'female', 18, FALSE),
('Toona', 'male', 18, TRUE),
('Zoe', 'female', 18, TRUE),
('Abi', 'female', 22, FALSE),
('Tabi', 'female', 22, FALSE),
('Conrad', 'male', 33, FALSE),
('Beverly', 'female', 24, TRUE),
('Teddy', 'male', 29, FALSE),
('Ivan', 'male', 20, FALSE),
('Brittanie', 'female', 28, FALSE),
('Gary', 'male', 15, FALSE);

INSERT INTO center (name, style, population_count, description) VALUES
('MegaWorld Center', 'futuristic', 120000, 'Main area filled with arcades, cinemas, and glowing neon lights.'),
('Old Pixel Town', 'retro', 45000, 'Vintage neighborhood where everything looks like an 8-bit game.'),
('The Bloom District', 'natural', 70000, 'A peaceful green zone with waterfalls, flowers, and small cozy houses.'),
('Ironwave Sector', 'cyberpunk', 95000, 'Dark, neon-soaked streets filled with robots and electronic stores.'),
('Ruins of Code', 'post-apocalyptic', 30000, 'An abandoned area full of broken programs and lost memories.'),
('Neon Shibuya', 'manga', 110000, 'A Japanese-inspired district with cafés, music, and colorful outfits.'),
('Central Plaza', 'classic', 80000, 'The main meeting point where everyone gathers for big events.');

ALTER TABLE characters
ADD COLUMN center_id INT,
ADD FOREIGN KEY (center_id) REFERENCES center(id);