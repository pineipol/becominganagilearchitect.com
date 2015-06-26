<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150626203700 extends AbstractMigration {

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema) {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on \"mysql\".");

        $this->addSql("UPDATE `page_contents` SET `meta_title`='Becoming An Agile Architect - El blog Agil sobre coaching, Scrum, TDD y Continuous integration', `meta_description`='Un blog práctico sobre Agile Coaching, Scrum, Test Driven Development y cómo llevarlos a cabo mediante explicaciones claras y ejemplos de cada paso', `meta_keywords`='agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua contacto contact' WHERE (`page_content_id`='1');");
        $this->addSql("UPDATE `page_contents` SET `meta_title`='Becoming An Agile Architect - El blog Agil sobre coaching, Scrum, TDD y Continuous integration', `meta_description`='Un blog práctico sobre Agile Coaching, Scrum, Test Driven Development y cómo llevarlos a cabo mediante explicaciones claras y ejemplos de cada paso', `meta_keywords`='agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua alejandro barba' WHERE (`page_content_id`='2');");
        $this->addSql("UPDATE `post_contents` SET `meta_title`='Becoming An Agile Architect - Presentación del Blog Ágil sobre coaching, Scrum, TDD y Continuous integration', `meta_description`='Primer post del Blog en el que se introduce al auto, la temática del blog y las motivaciones que llevaron a su desarrollo', `meta_keywords`='agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua alejandro barba' WHERE (`post_content_id`='1');");
        $this->addSql("UPDATE `post_contents` SET `meta_title`='Becoming An Agile Architect - Los proyectos del Blog Ágil sobre coaching, Scrum, TDD y Continuous integration', `meta_description`='Descripción de los dos proyectos que actuarán como hilo conductor de los posts de la primera etapa del Blog y que servirán como ejemplo para ilustrar las prácticas de Scrum, TDD y Continuous Integration que planteadas en el Blog', `meta_keywords`='agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua alejandro barba projects proyectos' WHERE (`post_content_id`='3');");
        $this->addSql("UPDATE `post_contents` SET `meta_title`='Becoming An Agile Architect - Objetivos y motivaciones del arquitecto Ágil en un entorno Scrum, TDD y Continuous integration', `meta_description`='En este post se habla de las prácticas y objetivos que un arquitecto Ágil debe seguir para llevar a cabo su trabajo de forma correcta y dentro de un contexto de agilismo', `meta_keywords`='agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua alejandro barba' WHERE (`post_content_id`='2');");
        $this->addSql("UPDATE `post_contents` SET `meta_title`='Becoming An Agile Architect - Agile, Lean, Scrum y Kanban. Similitudes y diferencias', `meta_description`='Análisis de las principales corrientes del Agilismo y sus metodologías orientadas al desarrollo de software. Parecidos y diferencias entre Agile, Lean, Scrum y Kanban', `meta_keywords`='agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua alejandro barba diferencias differences' WHERE (`post_content_id`='4');");
        $this->addSql("UPDATE `post_contents` SET `meta_title`='Becoming An Agile Architect - Scrum framework. Valores, roles, eventos y artefactos', `meta_description`='Primer post de la serie Scrum en el que se introduce el framework y se enumeran sus valores y principios así como sus roles, eventos, y artefactos', `meta_keywords`='agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua alejandro barba events roles values artifacts' WHERE (`post_content_id`='5');");

    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema) {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on \"mysql\".");
    }

}
