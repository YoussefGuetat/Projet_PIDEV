<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230214011047 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE annonce (id INT AUTO_INCREMENT NOT NULL, titre LONGTEXT NOT NULL, domaine VARCHAR(100) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(200) NOT NULL, date_crea DATE NOT NULL, statut VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE assistance (id INT AUTO_INCREMENT NOT NULL, question LONGTEXT NOT NULL, reponse LONGTEXT NOT NULL, date_assistance DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bmc (id INT AUTO_INCREMENT NOT NULL, partenaires_cles LONGTEXT NOT NULL, activites_cles LONGTEXT NOT NULL, ressources_cles LONGTEXT NOT NULL, proposition_valeur LONGTEXT NOT NULL, relations_client LONGTEXT NOT NULL, canaux LONGTEXT NOT NULL, segments_marche LONGTEXT NOT NULL, couts DOUBLE PRECISION NOT NULL, revenus DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrat (id INT AUTO_INCREMENT NOT NULL, date_contrat DATE NOT NULL, duree_contrat DOUBLE PRECISION NOT NULL, image_contrat VARCHAR(100) NOT NULL, taux_profit DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, addresse VARCHAR(100) NOT NULL, photo VARCHAR(100) NOT NULL, nbr_places INT NOT NULL, objet VARCHAR(200) NOT NULL, description LONGTEXT NOT NULL, date_event DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, date_rec DATE NOT NULL, sujet VARCHAR(100) NOT NULL, contenu LONGTEXT NOT NULL, etat VARCHAR(40) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendez_vous (id INT AUTO_INCREMENT NOT NULL, date_rdv DATE NOT NULL, etat VARCHAR(50) NOT NULL, message LONGTEXT NOT NULL, type_lieu VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket (id INT AUTO_INCREMENT NOT NULL, reference VARCHAR(100) NOT NULL, date_reservation DATE NOT NULL, nbr_pers INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(40) NOT NULL, prenom VARCHAR(40) NOT NULL, email VARCHAR(150) NOT NULL, username VARCHAR(100) NOT NULL, mdp VARCHAR(200) NOT NULL, addresse VARCHAR(100) DEFAULT NULL, date_naiss DATE DEFAULT NULL, date_compte DATE NOT NULL, role VARCHAR(50) NOT NULL, token VARCHAR(400) DEFAULT NULL, photo VARCHAR(200) DEFAULT NULL, description LONGTEXT DEFAULT NULL, tel INT DEFAULT NULL, is_actif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE annonce');
        $this->addSql('DROP TABLE assistance');
        $this->addSql('DROP TABLE bmc');
        $this->addSql('DROP TABLE contrat');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE rendez_vous');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
