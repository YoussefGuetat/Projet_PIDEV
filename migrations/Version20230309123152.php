<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309123152 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce ADD like_button INT DEFAULT NULL, ADD dislike_button INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bmc DROP FOREIGN KEY FK_B0FAE3548805AB2F');
        $this->addSql('ALTER TABLE bmc ADD CONSTRAINT FK_B0FAE3548805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ticket CHANGE nbrplace nbrplace INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce DROP like_button, DROP dislike_button');
        $this->addSql('ALTER TABLE bmc DROP FOREIGN KEY FK_B0FAE3548805AB2F');
        $this->addSql('ALTER TABLE bmc ADD CONSTRAINT FK_B0FAE3548805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('ALTER TABLE ticket CHANGE nbrplace nbrplace INT DEFAULT NULL');
    }
}
