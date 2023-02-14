<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230214210518 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamtion DROP FOREIGN KEY FK_5C8EEBA17096529A');
        $this->addSql('DROP TABLE reclamtion');
        $this->addSql('ALTER TABLE reclamation ADD assistance_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064047096529A FOREIGN KEY (assistance_id) REFERENCES assistance (id)');
        $this->addSql('CREATE INDEX IDX_CE6064047096529A ON reclamation (assistance_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reclamtion (id INT AUTO_INCREMENT NOT NULL, assistance_id INT DEFAULT NULL, INDEX IDX_5C8EEBA17096529A (assistance_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE reclamtion ADD CONSTRAINT FK_5C8EEBA17096529A FOREIGN KEY (assistance_id) REFERENCES assistance (id)');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064047096529A');
        $this->addSql('DROP INDEX IDX_CE6064047096529A ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP assistance_id');
    }
}
