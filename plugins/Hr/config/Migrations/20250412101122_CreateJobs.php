<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateJobs extends AbstractMigration
{
    public function change(): void
    {
        $this->execute("
            CREATE TABLE jobs (
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                code VARCHAR(50) NOT NULL,
                qualification_required VARCHAR(255) NOT NULL,
                state VARCHAR(50) NOT NULL,
                description TEXT,
                benefits TEXT,
                department_id INT UNSIGNED,
                created DATETIME DEFAULT CURRENT_TIMESTAMP,
                modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                FOREIGN KEY (department_id) REFERENCES departments(id) ON DELETE SET NULL
            )
        ");
    }
}
