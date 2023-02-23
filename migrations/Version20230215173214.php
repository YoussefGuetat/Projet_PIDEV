<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230215173214 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rendez_vous_utilisateur (rendez_vous_id INT NOT NULL, utilisateur_id INT NOT NULL, INDEX IDX_8885528E91EF7EAA (rendez_vous_id), INDEX IDX_8885528EFB88E14F (utilisateur_id), PRIMARY KEY(rendez_vous_id, utilisateur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, tel INT DEFAULT NULL, adresse LONGTEXT DEFAULT NULL, date_naiss DATE DEFAULT NULL, date_compte DATE NOT NULL, token LONGTEXT DEFAULT NULL, photo LONGTEXT DEFAULT NULL, description LONGTEXT DEFAULT NULL, is_actif TINYINT(1) NOT NULL, role VARCHAR(60) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rendez_vous_utilisateur ADD CONSTRAINT FK_8885528E91EF7EAA FOREIGN KEY (rendez_vous_id) REFERENCES rendez_vous (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rendez_vous_utilisateur ADD CONSTRAINT FK_8885528EFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annonce ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E5FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_F65593E5FB88E14F ON annonce (utilisateur_id)');
        $this->addSql('ALTER TABLE reclamation ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_CE606404FB88E14F ON reclamation (utilisateur_id)');
        $this->addSql('ALTER TABLE ticket ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_97A0ADA3FB88E14F ON ticket (utilisateur_id)');

        Schema::table('bmc', function (Blueprint $table) {
            $table->unsignedBigInteger('annonce_id')->nullable();
            $table->foreign('annonce_id')
                ->references('id')
                ->on('annonce')
                ->onDelete('set null'); // or onUpdate('set null')
        });
    }

  

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E5FB88E14F');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404FB88E14F');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA3FB88E14F');
        $this->addSql('ALTER TABLE rendez_vous_utilisateur DROP FOREIGN KEY FK_8885528E91EF7EAA');
        $this->addSql('ALTER TABLE rendez_vous_utilisateur DROP FOREIGN KEY FK_8885528EFB88E14F');
        $this->addSql('DROP TABLE rendez_vous_utilisateur');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP INDEX IDX_F65593E5FB88E14F ON annonce');
        $this->addSql('ALTER TABLE annonce DROP utilisateur_id');
        $this->addSql('DROP INDEX IDX_CE606404FB88E14F ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP utilisateur_id');
        $this->addSql('DROP INDEX IDX_97A0ADA3FB88E14F ON ticket');
        $this->addSql('ALTER TABLE ticket DROP utilisateur_id');
    }
}
