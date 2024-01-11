<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240111134409 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE association ADD nom_association VARCHAR(255) NOT NULL, ADD code_postal VARCHAR(255) NOT NULL, DROP nomAssociation, DROP codePostal, CHANGE rue rue VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX idbateau ON bac');
        $this->addSql('DROP INDEX idTypeBac ON bac');
        $this->addSql('DROP INDEX idbateau_2 ON bac');
        $this->addSql('ALTER TABLE bac ADD date_peche DATE NOT NULL, ADD id_lot INT NOT NULL, ADD id_bac INT NOT NULL, ADD id_type_bac INT NOT NULL, DROP datePeche, DROP idLot, DROP idBac, DROP idTypeBac');
        $this->addSql('ALTER TABLE bateau CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE immatriculation immatriculation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE lots ADD id_association INT DEFAULT NULL');
        $this->addSql('ALTER TABLE peche ADD id INT AUTO_INCREMENT NOT NULL, CHANGE datePeche date_peche DATE NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE presentation CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE libelle libelle VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE qualite CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE libelle libelle VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE taille CHANGE specification specification VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE typebac CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE tare tare DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE presentation CHANGE id id CHAR(3) NOT NULL, CHANGE libelle libelle VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE typebac CHANGE id id CHAR(1) NOT NULL, CHANGE tare tare DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE taille CHANGE specification specification VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE bateau CHANGE nom nom VARCHAR(50) DEFAULT NULL, CHANGE immatriculation immatriculation VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE qualite CHANGE id id CHAR(1) NOT NULL, CHANGE libelle libelle VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE association ADD nomAssociation VARCHAR(50) DEFAULT NULL, ADD codePostal VARCHAR(50) DEFAULT NULL, DROP nom_association, DROP code_postal, CHANGE rue rue VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE peche MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON peche');
        $this->addSql('ALTER TABLE peche DROP id, CHANGE date_peche datePeche DATE NOT NULL');
        $this->addSql('ALTER TABLE peche ADD PRIMARY KEY (idbateau, datePeche)');
        $this->addSql('ALTER TABLE bac ADD datePeche DATE DEFAULT NULL, ADD idLot INT DEFAULT NULL, ADD idBac INT DEFAULT NULL, ADD idTypeBac CHAR(1) NOT NULL, DROP date_peche, DROP id_lot, DROP id_bac, DROP id_type_bac');
        $this->addSql('CREATE INDEX idbateau ON bac (idbateau, datePeche, idBac)');
        $this->addSql('CREATE INDEX idTypeBac ON bac (idTypeBac)');
        $this->addSql('CREATE INDEX idbateau_2 ON bac (idbateau, datePeche, idLot)');
        $this->addSql('ALTER TABLE lots DROP id_association');
    }
}
