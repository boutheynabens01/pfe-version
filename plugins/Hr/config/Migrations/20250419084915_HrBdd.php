<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class HrBdd extends BaseMigration
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
-- 2. Job offers
CREATE TABLE job_offers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT NOT NULL,
    salary DECIMAL(10, 2),
    contract_type ENUM('CDI', 'CDD', 'Freelance', 'Stage', 'Alternance') NOT NULL,
    deadline DATE,
    status ENUM('open', 'closed') DEFAULT 'open',
    hr_id INT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (hr_id) REFERENCES users(id) ON DELETE CASCADE
);

-- 3. Applications (candidatures)
CREATE TABLE applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    job_offer_id INT NOT NULL,
    candidate_id INT NOT NULL,
    cv_url VARCHAR(255),
    motivation_letter TEXT,
    status ENUM('pending', 'accepted', 'rejected') DEFAULT 'pending',
    applied_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (job_offer_id) REFERENCES job_offers(id) ON DELETE CASCADE,
    FOREIGN KEY (candidate_id) REFERENCES users(id) ON DELETE CASCADE
);

-- 4. Employees (utilisateurs internes embauchés)
CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    position VARCHAR(100),
    hire_date DATE,
    salary DECIMAL(10, 2),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- 5. Interviews (facultatif, suivi des entretiens)
CREATE TABLE interviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    application_id INT NOT NULL,
    interview_date DATETIME NOT NULL,
    comment TEXT,
    FOREIGN KEY (application_id) REFERENCES applications(id) ON DELETE CASCADE
);
");
    }
}
