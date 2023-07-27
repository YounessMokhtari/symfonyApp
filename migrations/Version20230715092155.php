<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230715092155 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client ADD cin VARCHAR(10) NOT NULL, DROP cne, DROP motde_pass, DROP email, CHANGE date_naissance date_naissance DATETIME NOT NULL, CHANGE tel tel VARCHAR(20) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client ADD cne VARCHAR(50) NOT NULL, ADD motde_pass VARCHAR(255) NOT NULL, ADD email VARCHAR(255) NOT NULL, DROP cin, CHANGE date_naissance date_naissance DATE NOT NULL, CHANGE tel tel VARCHAR(50) NOT NULL');
    }
}
