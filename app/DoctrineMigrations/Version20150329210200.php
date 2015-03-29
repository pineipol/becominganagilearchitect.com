<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150329210200 extends AbstractMigration {

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema) {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE `posts_links` (`post_id`  int(11) NOT NULL ,`link_id`  int(11) NOT NULL ,`created`  datetime NOT NULL ,`modified`  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,PRIMARY KEY (`post_id`, `link_id`),CONSTRAINT `post_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE RESTRICT ON UPDATE CASCADE,CONSTRAINT `link_id` FOREIGN KEY (`link_id`) REFERENCES `links` (`link_id`) ON DELETE RESTRICT ON UPDATE CASCADE,UNIQUE INDEX `post_link` (`post_id`, `link_id`) USING BTREE ,INDEX `post_id` (`post_id`) USING BTREE ,INDEX `link_id` (`link_id`) USING BTREE );');
        $this->addSql('ALTER TABLE `links` DROP FOREIGN KEY `links_ibfk_1`;');
        $this->addSql('ALTER TABLE `links` DROP INDEX `post_id`;');
        $this->addSql('ALTER TABLE `links` DROP COLUMN `post_id`;');
        $this->addSql('DELETE FROM `links` WHERE (`link_id`=3);');
        $this->addSql('DELETE FROM `links` WHERE (`link_id`=4);');
        $this->addSql('DELETE FROM `links` WHERE (`link_id`=5);');
        $this->addSql('DELETE FROM `links` WHERE (`link_id`=6);');
        $this->addSql('DELETE FROM `links` WHERE (`link_id`=7);');
        $this->addSql('DELETE FROM `links` WHERE (`link_id`=8);');
        $this->addSql('UPDATE `links` SET `name`="scrum.org" WHERE (`link_id`=1);');
        $this->addSql('UPDATE `links` SET `name`="symfony.com" WHERE (`link_id`=2);');
        $this->addSql('INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES (1, 1);');
        $this->addSql('INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES (1, 2);');
        $this->addSql('INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES (2, 1);');
        $this->addSql('INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES (2, 2);');
        $this->addSql('INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES (3, 1);');
        $this->addSql('INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES (3, 2);');
        $this->addSql('UPDATE `posts_links` SET `created`="2015-03-29 21:42:57" WHERE (`post_id`="1") AND (`link_id`="1");');
        $this->addSql('UPDATE `posts_links` SET `created`="2015-03-29 21:43:00" WHERE (`post_id`="1") AND (`link_id`="2");');
        $this->addSql('UPDATE `posts_links` SET `created`="2015-03-29 21:43:02" WHERE (`post_id`="2") AND (`link_id`="1");');
        $this->addSql('UPDATE `posts_links` SET `created`="2015-03-29 21:43:07" WHERE (`post_id`="2") AND (`link_id`="2");');
        $this->addSql('UPDATE `posts_links` SET `created`="2015-03-29 21:43:09" WHERE (`post_id`="3") AND (`link_id`="1");');
        $this->addSql('UPDATE `posts_links` SET `created`="2015-03-29 21:43:12" WHERE (`post_id`="3") AND (`link_id`="2");');
        $this->addSql('ALTER TABLE `post_contents` ADD COLUMN `image_alt`  tinytext NULL AFTER `image`, ADD COLUMN `image_origin`  tinytext NULL AFTER `image_alt`;');
        $this->addSql("INSERT INTO `links` (`name`, `title`, `description`, `target_url`, `open_blank`) VALUES ('scrum.org-2', 'Scrum.org', 'Scrum.org', 'https://www.scrum.org/', '1');");
        $this->addSql("INSERT INTO `links` (`name`, `title`, `description`, `target_url`, `open_blank`) VALUES ('symfony.com-3', 'Symfony.com', 'Symfony.com', 'http://www.symfony.com/', '1');");
        $this->addSql("UPDATE `links` SET `created`='2015-03-30 00:05:18' WHERE (`link_id`='9');");
        $this->addSql("UPDATE `links` SET `created`='2015-03-30 00:05:18' WHERE (`link_id`='10');");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema) {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE `links` ADD COLUMN `post_id`  int(11) NULL AFTER `link_id`;');
        $this->addSql('ALTER TABLE `links` ADD INDEX `post_id` (`post_id`) USING BTREE;');
        $this->addSql('ALTER TABLE `links` ADD FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE RESTRICT ON UPDATE CASCADE;');
        $this->addSql('DROP TABLE `posts_links`;');
    }

}
