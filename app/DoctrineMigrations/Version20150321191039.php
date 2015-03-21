<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150321191039 extends AbstractMigration {

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema) {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE `category_contents` ADD COLUMN `route_id`  int(11) NOT NULL AFTER `locale_id`');
        $this->addSql('ALTER TABLE `category_contents` ADD INDEX `route_id` (`route_id`) USING BTREE');
        $this->addSql('ALTER TABLE `category_contents` ADD CONSTRAINT `route_id` FOREIGN KEY (`route_id`) REFERENCES `routes` (`route_id`) ON DELETE RESTRICT ON UPDATE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema) {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE `category_contents` DROP FOREIGN KEY `route_id`');
        $this->addSql('ALTER TABLE `category_contents` DROP INDEX `route_id`');
        $this->addSql('ALTER TABLE `category_contents` DROP COLUMN `route_id`');
    }

}
