<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateDepartments extends AbstractMigration
{
    public function change(): void
    {
        $this->execute("
            CREATE TABLE departments (
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                code VARCHAR(50) NOT NULL,
                email VARCHAR(255) NOT NULL,
                created DATETIME DEFAULT CURRENT_TIMESTAMP,
                modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )
        ");
    }
}
