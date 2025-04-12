<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateAnimalsTable extends AbstractMigration
{
    public function up(): void
    {
        $this->execute("
            CREATE TABLE animals (
                id INT AUTO_INCREMENT PRIMARY KEY,
                type VARCHAR(100) NOT NULL,
                name VARCHAR(255) NOT NULL,
                age INT,
                healthrecord VARCHAR(255),
                picture VARCHAR(255)
            )
        ");
    }

    public function down(): void
    {
        $this->execute("DROP TABLE animals");
    }
}
