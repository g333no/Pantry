<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250913145920 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE stock_entry DROP FOREIGN KEY FK_B7318181AB38982D');
        $this->addSql('ALTER TABLE stock_entry ADD CONSTRAINT FK_B7318181AB38982D FOREIGN KEY (prodotto_id) REFERENCES prodotto (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE stock_entry DROP FOREIGN KEY FK_B7318181AB38982D');
        $this->addSql('ALTER TABLE stock_entry ADD CONSTRAINT FK_B7318181AB38982D FOREIGN KEY (prodotto_id) REFERENCES prodotto (id)');
    }
}
