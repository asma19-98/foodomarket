<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220617072014 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE notif (id INT AUTO_INCREMENT NOT NULL, sender_id_id INT DEFAULT NULL, reciver_id_id INT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, date DATE DEFAULT NULL, status TINYINT(1) NOT NULL, INDEX IDX_C0730D6B6061F7CF (sender_id_id), INDEX IDX_C0730D6BA5124D3C (reciver_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE notif ADD CONSTRAINT FK_C0730D6B6061F7CF FOREIGN KEY (sender_id_id) REFERENCES employe (id)');
        $this->addSql('ALTER TABLE notif ADD CONSTRAINT FK_C0730D6BA5124D3C FOREIGN KEY (reciver_id_id) REFERENCES employe (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE notif');
    }
}
