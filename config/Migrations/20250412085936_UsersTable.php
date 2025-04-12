<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class UsersTable extends AbstractMigration
{
    public function up(): void
    {
        $this->execute("
            CREATE TABLE users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                fullname VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL,
                phone VARCHAR(20),
                address VARCHAR(255),
                age INT,
                birthdate DATE,
                profilepicture VARCHAR(255),
                bio TEXT,
                gender ENUM('man', 'woman'),
                role ENUM('admin', 'authenticated', 'staff') DEFAULT 'authenticated',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )
        ");
    }

    public function down(): void
    {
        $this->execute("DROP TABLE users");
    }
}
