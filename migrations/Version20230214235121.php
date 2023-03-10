<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230214235121 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE assist (id INT AUTO_INCREMENT NOT NULL, question LONGTEXT NOT NULL, reponse LONGTEXT NOT NULL, date_assist DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reclamation ADD assist_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404BE9A32E8 FOREIGN KEY (assist_id) REFERENCES assist (id)');
        $this->addSql('CREATE INDEX IDX_CE606404BE9A32E8 ON reclamation (assist_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404BE9A32E8');
        $this->addSql('DROP TABLE assist');
        $this->addSql('DROP INDEX IDX_CE606404BE9A32E8 ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP assist_id');
    }
}
