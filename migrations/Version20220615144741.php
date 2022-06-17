<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220615144741 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE notification_employe (notification_id INT NOT NULL, employe_id INT NOT NULL, INDEX IDX_ED1A590EEF1A9D84 (notification_id), INDEX IDX_ED1A590E1B65292 (employe_id), PRIMARY KEY(notification_id, employe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE notification_employe ADD CONSTRAINT FK_ED1A590EEF1A9D84 FOREIGN KEY (notification_id) REFERENCES notification (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notification_employe ADD CONSTRAINT FK_ED1A590E1B65292 FOREIGN KEY (employe_id) REFERENCES employe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notification ADD sender_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CA6061F7CF FOREIGN KEY (sender_id_id) REFERENCES employe (id)');
        $this->addSql('CREATE INDEX IDX_BF5476CA6061F7CF ON notification (sender_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE notification_employe');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CA6061F7CF');
        $this->addSql('DROP INDEX IDX_BF5476CA6061F7CF ON notification');
        $this->addSql('ALTER TABLE notification DROP sender_id_id');
    }
}
