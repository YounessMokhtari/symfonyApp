<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230716232443 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client ADD email VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE livreur ADD user_id INT DEFAULT NULL, ADD email VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE livreur ADD CONSTRAINT FK_EB7A4E6DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_EB7A4E6DA76ED395 ON livreur (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client DROP email');
        $this->addSql('ALTER TABLE livreur DROP FOREIGN KEY FK_EB7A4E6DA76ED395');
        $this->addSql('DROP INDEX UNIQ_EB7A4E6DA76ED395 ON livreur');
        $this->addSql('ALTER TABLE livreur DROP user_id, DROP email');
    }
}
