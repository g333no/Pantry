<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251008183158 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE notification_settings (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE prodotto ADD notify_enabled TINYINT(1) DEFAULT 0 NOT NULL, ADD notify_email TINYINT(1) DEFAULT 0 NOT NULL, ADD notify_browser TINYINT(1) DEFAULT 0 NOT NULL, ADD is_open TINYINT(1) DEFAULT 0 NOT NULL, CHANGE scadenza scadenza DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE notification_settings');
        $this->addSql('ALTER TABLE prodotto DROP notify_enabled, DROP notify_email, DROP notify_browser, DROP is_open, CHANGE scadenza scadenza DATE DEFAULT NULL COMMENT \'(DC2Type:date_immutable)\'');
    }
}
