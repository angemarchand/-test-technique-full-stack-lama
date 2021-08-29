<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210828190725 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidates (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, in_search TINYINT(1) NOT NULL, email VARCHAR(255) NOT NULL, profile_image VARCHAR(255) NOT NULL, birthday DATETIME NOT NULL, level_study VARCHAR(255) NOT NULL, formation VARCHAR(255) NOT NULL, professional_exp INT NOT NULL, soft_skills VARCHAR(255) NOT NULL, linked_in VARCHAR(255) NOT NULL, search_zone VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE candidates');
    }
}
