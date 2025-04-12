<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateCoursesTables extends BaseMigration
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
        $this->execute("
        CREATE TABLE courses (
            id INT AUTO_INCREMENT PRIMARY KEY,
            user_id INT NOT NULL,
            name VARCHAR(255) NOT NULL,
            picture VARCHAR(255),
            description TEXT,
            categorie_id INT NOT NULL,
            file_path VARCHAR(255),
            status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
            level ENUM('level1', 'level2', 'level3') DEFAULT 'level1',
            lesseons INT,
            pages INT,
            FOREIGN KEY (categorie_id) REFERENCES categories(id),
            FOREIGN KEY (user_id) REFERENCES users(id)
        )
    ");
    }
}
