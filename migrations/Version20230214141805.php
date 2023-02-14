<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230214141805 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation ADD utilisateur_id INT DEFAULT NULL, ADD assistance_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064047096529A FOREIGN KEY (assistance_id) REFERENCES assistance (id)');
        $this->addSql('CREATE INDEX IDX_CE606404FB88E14F ON reclamation (utilisateur_id)');
        $this->addSql('CREATE INDEX IDX_CE6064047096529A ON reclamation (assistance_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404FB88E14F');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064047096529A');
        $this->addSql('DROP INDEX IDX_CE606404FB88E14F ON reclamation');
        $this->addSql('DROP INDEX IDX_CE6064047096529A ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP utilisateur_id, DROP assistance_id');
    }
}
