<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class PetBdd extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $this->execute('

-- 2. Table des localisations (wilaya, ville)
CREATE TABLE localisation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ville VARCHAR(100) NOT NULL,
    wilaya VARCHAR(100) NOT NULL
);

-- 3. Table des animaux
CREATE TABLE animaux (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50) NOT NULL,                -- ex: chien, chat
    race VARCHAR(100),
    nom VARCHAR(100),
    age INT,
    sexe ENUM("mâle", "femelle"),
    description TEXT,
    image_url VARCHAR(255),
    date_ajout DATETIME DEFAULT CURRENT_TIMESTAMP,
    statut ENUM("en_attente", "approuvé", "adopté") DEFAULT "en_attente",
    id_user INT,
    id_localisation INT,
    FOREIGN KEY (id_user) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (id_localisation) REFERENCES localisation(id) ON DELETE SET NULL
);

-- 4. Table des adoptions
CREATE TABLE adoptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_animal INT NOT NULL,
    id_adoptant INT NOT NULL,
    date_adoption DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_animal) REFERENCES animaux(id) ON DELETE CASCADE,
    FOREIGN KEY (id_adoptant) REFERENCES users(id) ON DELETE CASCADE
);

-- 5. Table des messages (optionnelle mais utile pour chat entre utilisateurs)
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_envoyeur INT NOT NULL,
    id_receveur INT NOT NULL,
    contenu TEXT NOT NULL,
    date_envoi DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_envoyeur) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (id_receveur) REFERENCES users(id) ON DELETE CASCADE
);


-- 7. Table de modération (historique des validations/refus d’annonces)
CREATE TABLE logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_animal INT NOT NULL,
    id_admin INT NOT NULL,
    action ENUM("approuvé", "refusé") NOT NULL,
    raison_refus TEXT,
    date_action DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_animal) REFERENCES animaux(id) ON DELETE CASCADE,
    FOREIGN KEY (id_admin) REFERENCES users(id) ON DELETE CASCADE
);
');
    }
}
