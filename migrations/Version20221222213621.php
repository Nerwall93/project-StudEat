<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221222213621 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation CHANGE status status TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE topdeal CHANGE status status TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE status_reservation status_reservation TINYINT(1) DEFAULT NULL, CHANGE idreservasion idreservasion TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation CHANGE status status TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE topdeal CHANGE status status TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE status_reservation status_reservation TINYINT(1) NOT NULL, CHANGE idreservasion idreservasion INT NOT NULL');
    }
}
