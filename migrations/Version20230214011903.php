<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230214011903 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat ADD rendz_vous_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_60349993F1AA0131 FOREIGN KEY (rendz_vous_id) REFERENCES rendez_vous (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_60349993F1AA0131 ON contrat (rendz_vous_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_60349993F1AA0131');
        $this->addSql('DROP INDEX UNIQ_60349993F1AA0131 ON contrat');
        $this->addSql('ALTER TABLE contrat DROP rendz_vous_id');
    }
}
