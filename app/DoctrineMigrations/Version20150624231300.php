<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150624231300 extends AbstractMigration {

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema) {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on \"mysql\".");

        $this->addSql('ALTER TABLE `links` ADD COLUMN `home`  int(1) NULL DEFAULT 0 AFTER `open_blank`;');
        $this->addSql('UPDATE `links` SET `home`="1" WHERE (`link_id`="1");');
        $this->addSql('UPDATE `links` SET `home`="1" WHERE (`link_id`="3");');
        $this->addSql('UPDATE `links` SET `home`="1" WHERE (`link_id`="2");');
        $this->addSql('UPDATE `links` SET `home`="1" WHERE (`link_id`="4");');
        $this->addSql('UPDATE `links` SET `home`="1" WHERE (`link_id`="5");');
        $this->addSql('UPDATE `links` SET `home`="1" WHERE (`link_id`="6");');
        $this->addSql('UPDATE `links` SET `home`="1" WHERE (`link_id`="7");');
        $this->addSql('UPDATE `links` SET `home`=NULL WHERE (`link_id`="3");');
        $this->addSql('UPDATE `links` SET `home`=NULL WHERE (`link_id`="4");');
        $this->addSql('UPDATE `links` SET `home`=NULL WHERE (`link_id`="5");');
        $this->addSql('INSERT INTO `baa`.`links` (`link_id`, `name`, `title`, `description`, `target_url`, `open_blank`, `created`, `modified`) VALUES ("8", "scrum-framework-two", "El Equipo Scrum. Scrum Master, Product Owner y Developer Team", "El Equipo Scrum. Scrum Master, Product Owner y Developer Team", "http://www.becominganagilearchitect.com/scrum-roles-scrum-master-product-owner-developers", "0", "2015-06-21 23:23:58", "2015-06-23 20:11:50");');
        $this->addSql('INSERT INTO `baa`.`links` (`link_id`, `name`, `title`, `description`, `target_url`, `open_blank`, `created`, `modified`) VALUES ("9", "scrum-framework-three", "Eventos de Scrum. Sprint", "Eventos de Scrum. Sprint", "http://www.becominganagilearchitect.com/scrum-eventos-el-sprint", "0", "2015-06-21 23:54:33", "2015-06-23 20:11:49");');
        $this->addSql('INSERT INTO `baa`.`links` (`link_id`, `name`, `title`, `description`, `target_url`, `open_blank`, `created`, `modified`) VALUES ("10", "scrum-framework-four", "Eventos de Scrum. Reunión de planificación", "Eventos de Scrum. Reunión de planificación", "http://www.becominganagilearchitect.com/scrum-eventos-planificacion", "0", "2015-06-21 23:54:35", "2015-06-23 20:11:48");');
        $this->addSql('INSERT INTO `baa`.`links` (`link_id`, `name`, `title`, `description`, `target_url`, `open_blank`, `created`, `modified`) VALUES ("11", "scrum-framework-five", "Eventos de Scrum. Scrum diario o Stand Up Meeting", "Eventos de Scrum. Scrum diario o Stand Up Meeting", "http://www.becominganagilearchitect.com/scrum-eventos-scrum-diario-stand-up-meeting", "0", "2015-06-21 23:54:37", "2015-06-23 20:11:47");');
        $this->addSql('INSERT INTO `baa`.`links` (`link_id`, `name`, `title`, `description`, `target_url`, `open_blank`, `created`, `modified`) VALUES ("12", "scrum-framework-six", "Eventos de Scrum. Revisión de Sprint", "Eventos de Scrum. Revisión de Sprint", "http://www.becominganagilearchitect.com/scrum-eventos-revision-de-sprint", "0", "2015-06-21 23:54:38", "2015-06-23 20:11:47");');
        $this->addSql('INSERT INTO `baa`.`links` (`link_id`, `name`, `title`, `description`, `target_url`, `open_blank`, `created`, `modified`) VALUES ("13", "scrum-framework-seven", "Eventos de Scrum. Retrospectiva de Sprint", "Eventos de Scrum. Retrospectiva de Sprint", "http://www.becominganagilearchitect.com/scrum-eventos-retrospectiva-de-sprint", "0", "2015-06-21 23:54:40", "2015-06-23 20:11:46");');
        $this->addSql('INSERT INTO `baa`.`links` (`link_id`, `name`, `title`, `description`, `target_url`, `open_blank`, `created`, `modified`) VALUES ("14", "scrum-framework-eight", "Eventos de Scrum. Reuniones de Grooming o refinamiento del Backlog", "Eventos de Scrum. Reuniones de Grooming o refinamiento del Backlog", "http://www.becominganagilearchitect.com/scrum-eventos-reunion-de-grooming", "0", "2015-06-21 23:54:42", "2015-06-23 20:11:45");');
        $this->addSql('INSERT INTO `baa`.`links` (`link_id`, `name`, `title`, `description`, `target_url`, `open_blank`, `created`, `modified`) VALUES ("15", "scrum-framework-nine", "Artefactos de Scrum. Product Backlog", "Artefactos de Scrum. Product Backlog", "http://www.becominganagilearchitect.com/scrum-product-backlog", "0", "2015-06-21 23:54:45", "2015-06-23 20:11:44");');
        $this->addSql('INSERT INTO `baa`.`links` (`link_id`, `name`, `title`, `description`, `target_url`, `open_blank`, `created`, `modified`) VALUES ("16", "scrum-framework-ten", "Artefactos de Scrum. Historias de Usuario en el Product Backlog", "Artefactos de Scrum. Historias de Usuario en el Product Backlog", "http://www.becominganagilearchitect.com/scrum-product-backlog-historias-de-usuario-empirismo", "0", "2015-06-21 23:54:46", "2015-06-23 20:11:43");');
        $this->addSql('INSERT INTO `baa`.`links` (`link_id`, `name`, `title`, `description`, `target_url`, `open_blank`, `created`, `modified`) VALUES ("17", "scrum-framework-eleven", "Artefactos de Scrum. Gráfico Release Burndown", "Artefactos de Scrum. Gráfico Release Burndown", "http://www.becominganagilearchitect.com/scrum-product-backlog-release-burndown-chart", "0", "2015-06-21 23:54:48", "2015-06-23 20:11:42");');
        $this->addSql('INSERT INTO `baa`.`links` (`link_id`, `name`, `title`, `description`, `target_url`, `open_blank`, `created`, `modified`) VALUES ("18", "scrum-framework-twelve", "Artefactos de Scrum. Sprint Backlog", "Artefactos de Scrum. Sprint Backlog", "http://www.becominganagilearchitect.com/scrum-sprint-backlog", "0", "2015-06-21 23:54:50", "2015-06-23 20:11:42");');
        $this->addSql('INSERT INTO `baa`.`links` (`link_id`, `name`, `title`, `description`, `target_url`, `open_blank`, `created`, `modified`) VALUES ("19", "scrum-framework-thirteen", "Artefactos de Scrum. Gráfico Sprint Burndown", "Artefactos de Scrum. Gráfico Sprint Burndown", "http://www.becominganagilearchitect.com/scrum-sprint-backlog-sprint-burndown-chart", "0", "2015-06-21 23:54:52", "2015-06-23 20:11:41");');
        $this->addSql('INSERT INTO `baa`.`links` (`link_id`, `name`, `title`, `description`, `target_url`, `open_blank`, `created`, `modified`) VALUES ("20", "scrum-framework-fouteen", "Artefactos de Scrum. Sprint Taskboard", "Artefactos de Scrum. Sprint Taskboard", "http://www.becominganagilearchitect.com/scrum-sprint-taskboard", "0", "2015-06-21 23:54:54", "2015-06-23 20:11:39");');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema) {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on \"mysql\".");

        $this->addSql('ALTER TABLE `links` DROP COLUMN `home`;');
    }

}
