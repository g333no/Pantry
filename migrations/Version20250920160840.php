<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250920160840 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE prodotto_tag (prodotto_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_2D29BBFDAB38982D (prodotto_id), INDEX IDX_2D29BBFDBAD26311 (tag_id), PRIMARY KEY(prodotto_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(80) NOT NULL, UNIQUE INDEX UNIQ_389B7835E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE prodotto_tag ADD CONSTRAINT FK_2D29BBFDAB38982D FOREIGN KEY (prodotto_id) REFERENCES prodotto (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE prodotto_tag ADD CONSTRAINT FK_2D29BBFDBAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prodotto_tag DROP FOREIGN KEY FK_2D29BBFDAB38982D');
        $this->addSql('ALTER TABLE prodotto_tag DROP FOREIGN KEY FK_2D29BBFDBAD26311');
        $this->addSql('DROP TABLE prodotto_tag');
        $this->addSql('DROP TABLE tag');
    }
}
