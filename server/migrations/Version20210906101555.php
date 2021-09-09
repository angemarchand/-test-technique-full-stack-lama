<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210906101555 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidate (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) DEFAULT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, profile_photo VARCHAR(255) NOT NULL, birth_date DATETIME NOT NULL, level_studies VARCHAR(255) NOT NULL, linkedin VARCHAR(255) NOT NULL, search_region VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE companies (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL, creation_date DATETIME NOT NULL, web_site VARCHAR(255) NOT NULL, presentation LONGTEXT NOT NULL, email_rh VARCHAR(255) NOT NULL, company_values VARCHAR(255) NOT NULL, employees_number INT NOT NULL, job_field VARCHAR(255) NOT NULL, regions VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE experiences (id INT AUTO_INCREMENT NOT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, domain_prof_category LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', domain_prof_subcategory LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', contract_type VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, id_candidate INT NOT NULL, company VARCHAR(255) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formations (id INT AUTO_INCREMENT NOT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, domain_prof_category LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', domain_prof_subcategory LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', entitled VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, id_candidate INT NOT NULL, city VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skills (id INT AUTO_INCREMENT NOT NULL, category LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', sub_category LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skills_candidate (skills_id INT NOT NULL, candidate_id INT NOT NULL, INDEX IDX_1C21EE3B7FF61858 (skills_id), INDEX IDX_1C21EE3B91BD8781 (candidate_id), PRIMARY KEY(skills_id, candidate_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE skills_candidate ADD CONSTRAINT FK_1C21EE3B7FF61858 FOREIGN KEY (skills_id) REFERENCES skills (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE skills_candidate ADD CONSTRAINT FK_1C21EE3B91BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE skills_candidate DROP FOREIGN KEY FK_1C21EE3B91BD8781');
        $this->addSql('ALTER TABLE skills_candidate DROP FOREIGN KEY FK_1C21EE3B7FF61858');
        $this->addSql('DROP TABLE candidate');
        $this->addSql('DROP TABLE companies');
        $this->addSql('DROP TABLE experiences');
        $this->addSql('DROP TABLE formations');
        $this->addSql('DROP TABLE skills');
        $this->addSql('DROP TABLE skills_candidate');
    }
}
