<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230214142256 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rendez_vous_utilisateur (rendez_vous_id INT NOT NULL, utilisateur_id INT NOT NULL, INDEX IDX_8885528E91EF7EAA (rendez_vous_id), INDEX IDX_8885528EFB88E14F (utilisateur_id), PRIMARY KEY(rendez_vous_id, utilisateur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rendez_vous_utilisateur ADD CONSTRAINT FK_8885528E91EF7EAA FOREIGN KEY (rendez_vous_id) REFERENCES rendez_vous (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rendez_vous_utilisateur ADD CONSTRAINT FK_8885528EFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rendez_vous_utilisateur DROP FOREIGN KEY FK_8885528E91EF7EAA');
        $this->addSql('ALTER TABLE rendez_vous_utilisateur DROP FOREIGN KEY FK_8885528EFB88E14F');
        $this->addSql('DROP TABLE rendez_vous_utilisateur');
    }
}
