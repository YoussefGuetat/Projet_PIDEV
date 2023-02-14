<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230214011431 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bmc ADD id_annonce_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bmc ADD CONSTRAINT FK_B0FAE3542D8F2BF8 FOREIGN KEY (id_annonce_id) REFERENCES annonce (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B0FAE3542D8F2BF8 ON bmc (id_annonce_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bmc DROP FOREIGN KEY FK_B0FAE3542D8F2BF8');
        $this->addSql('DROP INDEX UNIQ_B0FAE3542D8F2BF8 ON bmc');
        $this->addSql('ALTER TABLE bmc DROP id_annonce_id');
    }
}
