# Hitlist

Insert into hitman (codename, description,image,email,password,nationality) Values 
("Igor", "Igor is our special agent in charges of single target using improvised explosives. DO NOT PROVOKE HIM", "V/IMG/HITMAN/Igor.jpg", "igor@specialservices.gov", "IG0rt&Gunes_", "Russian"),
("Jeff", "Jeff is our Jack of all trades, if you need a competent men in almost every field it's your guy. P.S. : Dress Good", "V/IMG/HITMAN/Jeff.jpg", "jeff@specialservices.gov", "Jeff1Explosie$", "Italian"),
("Luigi", "Luigi is an expert of cleaning the floor of VIP target. Might have troubles RN", "V/IMG/HITMAN/Luigi.jpg", "Luigi@specialservices.gov", "Luig1ng00dh&alth", "American"),
("Tony", "Tony is really the Walter White of the band, he can make you sarin gaz, cyanide or meth. Don't try is special recipe", "V/IMG/HITMAN/Tony.jpg", "Tony@specialservices.gov", "T0nyWh1teM&th", "Mexican");

Insert into target (name, description, image, nationality) VALUES
("Anne", "Single Women Digging through illegal activities in Mexico must be removed", "V/IMG/TARGET/Anne.jpg", "Mexican"),
("Brian", "VIP very dangerous refused to pay for my back pain even though is had insurance", "V/IMG/TARGET/Anne.jpg" , "American" ),
("Françoise", "Single Women head of the russian Mob *Хорошее вино* need to be taken care of", "V/IMG/TARGET/Françoise.jpg" , "Russian"),
("Jhon", "Last Winner of the Pulitzer price on the boeing affair, need another *trophy*", "V/IMG/TARGET/Jhon.jpg", "Italian");

CREATE TABLE IF NOT EXISTS `target` (
  `id_target` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `description` TEXT,
  `image` VARCHAR(255),
  `nationality` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_target`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `hitman` (
  `hitman_id` INT NOT NULL AUTO_INCREMENT,
  `codename` VARCHAR(100) NOT NULL,
  `description` TEXT,
  `image` VARCHAR(255),
  `email` VARCHAR(255) DEFAULT NULL,
  `password` VARCHAR(255) NOT NULL,
  `nationality` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`hitman_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;