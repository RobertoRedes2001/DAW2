<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240115173926 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cliente (cliente_cod INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(45) NOT NULL, direc VARCHAR(40) NOT NULL, ciudad VARCHAR(30) NOT NULL, estado VARCHAR(2) DEFAULT NULL, cod_postal VARCHAR(9) NOT NULL, area SMALLINT DEFAULT NULL, telefono VARCHAR(9) DEFAULT NULL, repr_cod SMALLINT DEFAULT NULL, limite_credito NUMERIC(9, 2) DEFAULT NULL, observaciones LONGTEXT NOT NULL, PRIMARY KEY(cliente_cod)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE emp CHANGE jefe jefe SMALLINT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cliente');
        $this->addSql('ALTER TABLE emp CHANGE jefe jefe INT DEFAULT NULL');
    }
}
