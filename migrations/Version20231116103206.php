<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231116103206 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product ADD id_artisan_id INT NOT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADFB594760 FOREIGN KEY (id_artisan_id) REFERENCES artisan (id)');
        $this->addSql('CREATE INDEX IDX_D34A04ADFB594760 ON product (id_artisan_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADFB594760');
        $this->addSql('DROP INDEX IDX_D34A04ADFB594760 ON product');
        $this->addSql('ALTER TABLE product DROP id_artisan_id');
    }
}
