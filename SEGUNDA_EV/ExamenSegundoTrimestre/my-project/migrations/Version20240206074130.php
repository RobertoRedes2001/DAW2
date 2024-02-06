<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240206074130 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pagosroberto (empleado INT NOT NULL, robertoPK INT AUTO_INCREMENT NOT NULL, pago NUMERIC(10, 2) NOT NULL, INDEX IDX_F08FEAF8D9D9BF52 (empleado), PRIMARY KEY(robertoPK)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pagosroberto ADD CONSTRAINT FK_F08FEAF8D9D9BF52 FOREIGN KEY (empleado) REFERENCES emp (emp_no)');
        $this->addSql('ALTER TABLE cliente RENAME INDEX idx_f41c9b25890ab892 TO IDX_F41C9B25ABAC2C0C');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pagosroberto DROP FOREIGN KEY FK_F08FEAF8D9D9BF52');
        $this->addSql('DROP TABLE pagosroberto');
        $this->addSql('ALTER TABLE cliente RENAME INDEX idx_f41c9b25abac2c0c TO IDX_F41C9B25890AB892');
    }
}
