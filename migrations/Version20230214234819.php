<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230214234819 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404F7DB512D');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA39D6A1065');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(60) NOT NULL, adresse LONGTEXT NOT NULL, photo LONGTEXT NOT NULL, nbrplaces INT NOT NULL, objet LONGTEXT NOT NULL, description LONGTEXT NOT NULL, dateevent DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE assistances');
        $this->addSql('DROP TABLE events');
        $this->addSql('DROP INDEX IDX_CE606404F7DB512D ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP assistances_id');
        $this->addSql('DROP INDEX IDX_97A0ADA39D6A1065 ON ticket');
        $this->addSql('ALTER TABLE ticket CHANGE events_id evenements_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA363C02CD4 FOREIGN KEY (evenements_id) REFERENCES evenement (id)');
        $this->addSql('CREATE INDEX IDX_97A0ADA363C02CD4 ON ticket (evenements_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA363C02CD4');
        $this->addSql('CREATE TABLE assistances (id INT AUTO_INCREMENT NOT NULL, question LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, reponse LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, dateassistance DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE events (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, addresse LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, photo LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nbrplaces INT NOT NULL, objet LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, dateevent DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('ALTER TABLE reclamation ADD assistances_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404F7DB512D FOREIGN KEY (assistances_id) REFERENCES assistances (id)');
        $this->addSql('CREATE INDEX IDX_CE606404F7DB512D ON reclamation (assistances_id)');
        $this->addSql('DROP INDEX IDX_97A0ADA363C02CD4 ON ticket');
        $this->addSql('ALTER TABLE ticket CHANGE evenements_id events_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA39D6A1065 FOREIGN KEY (events_id) REFERENCES events (id)');
        $this->addSql('CREATE INDEX IDX_97A0ADA39D6A1065 ON ticket (events_id)');
    }
}
