<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231127153910 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recipe CHANGE recette_id recette_id INT NOT NULL');
        $this->addSql('ALTER TABLE user DROP nom, DROP prenom, DROP ville, DROP allergenes, DROP types_regimes');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recipe CHANGE recette_id recette_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL, ADD ville VARCHAR(255) NOT NULL, ADD allergenes LONGTEXT NOT NULL, ADD types_regimes LONGTEXT NOT NULL');
    }
}
