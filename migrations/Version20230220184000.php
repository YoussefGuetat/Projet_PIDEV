<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230220184000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE annonce (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, titre LONGTEXT NOT NULL, description LONGTEXT NOT NULL, domaine VARCHAR(100) NOT NULL, image LONGTEXT NOT NULL, date_crea DATE NOT NULL, statut VARCHAR(60) NOT NULL, INDEX IDX_F65593E5FB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE assist (id INT AUTO_INCREMENT NOT NULL, question LONGTEXT NOT NULL, reponse LONGTEXT NOT NULL, date_assist DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bmc (id INT AUTO_INCREMENT NOT NULL, annonce_id INT DEFAULT NULL, partenaires_cles LONGTEXT NOT NULL, activites_cles LONGTEXT NOT NULL, ressources_cles LONGTEXT NOT NULL, proposition_valeur LONGTEXT NOT NULL, relations_client LONGTEXT NOT NULL, canaux LONGTEXT NOT NULL, segments_marche LONGTEXT NOT NULL, couts DOUBLE PRECISION NOT NULL, revenus DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_B0FAE3548805AB2F (annonce_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrat (id INT AUTO_INCREMENT NOT NULL, rendez_vous_id INT DEFAULT NULL, date_contart DATE NOT NULL, duree_contart DOUBLE PRECISION NOT NULL, image LONGTEXT NOT NULL, taux_profit DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_6034999391EF7EAA (rendez_vous_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(60) NOT NULL, adresse LONGTEXT NOT NULL, photo LONGTEXT NOT NULL, nbrplaces INT NOT NULL, objet LONGTEXT NOT NULL, description LONGTEXT NOT NULL, dateevent DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, assist_id INT DEFAULT NULL, date_rec DATE NOT NULL, sujet LONGTEXT NOT NULL, contenu LONGTEXT NOT NULL, etat VARCHAR(50) NOT NULL, INDEX IDX_CE606404FB88E14F (utilisateur_id), INDEX IDX_CE606404BE9A32E8 (assist_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendez_vous (id INT AUTO_INCREMENT NOT NULL, annonce_id INT DEFAULT NULL, date_rdv DATE NOT NULL, etat VARCHAR(50) NOT NULL, message LONGTEXT NOT NULL, type_lieu VARCHAR(60) NOT NULL, INDEX IDX_65E8AA0A8805AB2F (annonce_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendez_vous_utilisateur (rendez_vous_id INT NOT NULL, utilisateur_id INT NOT NULL, INDEX IDX_8885528E91EF7EAA (rendez_vous_id), INDEX IDX_8885528EFB88E14F (utilisateur_id), PRIMARY KEY(rendez_vous_id, utilisateur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, evenements_id INT DEFAULT NULL, reference VARCHAR(100) NOT NULL, date_reservation DATE NOT NULL, nbr_prs INT NOT NULL, INDEX IDX_97A0ADA3FB88E14F (utilisateur_id), INDEX IDX_97A0ADA363C02CD4 (evenements_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, tel INT DEFAULT NULL, adresse LONGTEXT DEFAULT NULL, date_naiss DATE DEFAULT NULL, date_compte DATE NOT NULL, token LONGTEXT DEFAULT NULL, photo LONGTEXT DEFAULT NULL, description LONGTEXT DEFAULT NULL, is_actif TINYINT(1) NOT NULL, role VARCHAR(60) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E5FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE bmc ADD CONSTRAINT FK_B0FAE3548805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_6034999391EF7EAA FOREIGN KEY (rendez_vous_id) REFERENCES rendez_vous (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404BE9A32E8 FOREIGN KEY (assist_id) REFERENCES assist (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A8805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('ALTER TABLE rendez_vous_utilisateur ADD CONSTRAINT FK_8885528E91EF7EAA FOREIGN KEY (rendez_vous_id) REFERENCES rendez_vous (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rendez_vous_utilisateur ADD CONSTRAINT FK_8885528EFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA363C02CD4 FOREIGN KEY (evenements_id) REFERENCES evenement (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E5FB88E14F');
        $this->addSql('ALTER TABLE bmc DROP FOREIGN KEY FK_B0FAE3548805AB2F');
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_6034999391EF7EAA');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404FB88E14F');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404BE9A32E8');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A8805AB2F');
        $this->addSql('ALTER TABLE rendez_vous_utilisateur DROP FOREIGN KEY FK_8885528E91EF7EAA');
        $this->addSql('ALTER TABLE rendez_vous_utilisateur DROP FOREIGN KEY FK_8885528EFB88E14F');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA3FB88E14F');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA363C02CD4');
        $this->addSql('DROP TABLE annonce');
        $this->addSql('DROP TABLE assist');
        $this->addSql('DROP TABLE bmc');
        $this->addSql('DROP TABLE contrat');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE rendez_vous');
        $this->addSql('DROP TABLE rendez_vous_utilisateur');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
