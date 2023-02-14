<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230214232632 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064047096529A');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA371F7E88B');
        $this->addSql('CREATE TABLE assistances (id INT AUTO_INCREMENT NOT NULL, question LONGTEXT NOT NULL, reponse LONGTEXT NOT NULL, dateassistance DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE events (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, addresse LONGTEXT NOT NULL, photo LONGTEXT NOT NULL, nbrplaces INT NOT NULL, objet LONGTEXT NOT NULL, description LONGTEXT NOT NULL, dateevent DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE assistance');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP INDEX IDX_CE6064047096529A ON reclamation');
        $this->addSql('ALTER TABLE reclamation CHANGE assistance_id assistances_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404F7DB512D FOREIGN KEY (assistances_id) REFERENCES assistances (id)');
        $this->addSql('CREATE INDEX IDX_CE606404F7DB512D ON reclamation (assistances_id)');
        $this->addSql('DROP INDEX IDX_97A0ADA371F7E88B ON ticket');
        $this->addSql('ALTER TABLE ticket CHANGE event_id events_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA39D6A1065 FOREIGN KEY (events_id) REFERENCES events (id)');
        $this->addSql('CREATE INDEX IDX_97A0ADA39D6A1065 ON ticket (events_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404F7DB512D');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA39D6A1065');
        $this->addSql('CREATE TABLE assistance (id INT AUTO_INCREMENT NOT NULL, question LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, reponse LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_assistance DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, addresse VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, photo VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nbr_places INT NOT NULL, objet LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_event DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE assistances');
        $this->addSql('DROP TABLE events');
        $this->addSql('DROP INDEX IDX_CE606404F7DB512D ON reclamation');
        $this->addSql('ALTER TABLE reclamation CHANGE assistances_id assistance_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064047096529A FOREIGN KEY (assistance_id) REFERENCES assistance (id)');
        $this->addSql('CREATE INDEX IDX_CE6064047096529A ON reclamation (assistance_id)');
        $this->addSql('DROP INDEX IDX_97A0ADA39D6A1065 ON ticket');
        $this->addSql('ALTER TABLE ticket CHANGE events_id event_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA371F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('CREATE INDEX IDX_97A0ADA371F7E88B ON ticket (event_id)');
    }
}
