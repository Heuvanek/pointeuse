<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200325215114 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455A76ED395');
        $this->addSql('DROP INDEX IDX_C7440455A76ED395 ON client');
        $this->addSql('ALTER TABLE client CHANGE user_id user_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C74404559D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_C74404559D86650F ON client (user_id_id)');
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23C19EB6921');
        $this->addSql('DROP INDEX IDX_9067F23C19EB6921 ON mission');
        $this->addSql('ALTER TABLE mission CHANGE client_id client_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23CDC2902E0 FOREIGN KEY (client_id_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_9067F23CDC2902E0 ON mission (client_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C74404559D86650F');
        $this->addSql('DROP INDEX IDX_C74404559D86650F ON client');
        $this->addSql('ALTER TABLE client CHANGE user_id_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_C7440455A76ED395 ON client (user_id)');
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23CDC2902E0');
        $this->addSql('DROP INDEX IDX_9067F23CDC2902E0 ON mission');
        $this->addSql('ALTER TABLE mission CHANGE client_id_id client_id INT NOT NULL');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23C19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_9067F23C19EB6921 ON mission (client_id)');
    }
}
