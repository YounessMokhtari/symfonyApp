<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230715092426 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client ADD roles JSON NOT NULL, ADD username VARCHAR(50) DEFAULT NULL, ADD local VARCHAR(10) NOT NULL, ADD is_verified TINYINT(1) NOT NULL, ADD cin VARCHAR(10) NOT NULL, DROP cne, CHANGE date_naissance date_naissance DATETIME NOT NULL, CHANGE tel tel VARCHAR(20) NOT NULL, CHANGE email email VARCHAR(180) NOT NULL, CHANGE motde_pass password VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C7440455E7927C74 ON client (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_C7440455E7927C74 ON client');
        $this->addSql('ALTER TABLE client ADD cne VARCHAR(50) NOT NULL, DROP roles, DROP username, DROP local, DROP is_verified, DROP cin, CHANGE email email VARCHAR(255) NOT NULL, CHANGE date_naissance date_naissance DATE NOT NULL, CHANGE tel tel VARCHAR(50) NOT NULL, CHANGE password motde_pass VARCHAR(255) NOT NULL');
    }
}
