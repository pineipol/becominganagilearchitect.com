<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150705205500 extends AbstractMigration {

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema) {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on \"mysql\".");

        $this->addSql("UPDATE `routes` SET `name`='about-me-es', `path`='/acerca-de' WHERE (`route_id`='5');");
        $this->addSql("UPDATE `routes` SET `description`='Página con información sobre mí y sobre mi trayectoria' WHERE (`route_id`='5');");
        $this->addSql("UPDATE `routes` SET `description`='Página con información sobre mí y sobre mi carrera' WHERE (`route_id`='5');");
        $this->addSql("UPDATE `pages` SET `name`='about-me' WHERE (`page_id`='2');");
        $this->addSql("UPDATE `menus` SET `name`='about-me', `title`='Acerca de mí', `description`='Acerca de mí', `show`='1' WHERE (`menu_id`='5');");
        $this->addSql("UPDATE `page_contents` SET `content`='<div class=\"about-me-prefix\">\r\n    <div class=\"h-container\">\r\n        <h2>Acerca de mí</h2>\r\n        <div class=\"v-half-container\" style=\"width: 45%\">\r\n            <img class=\"about-image\" src=\"/uploads/posts/150315_blog-bootstrap/blog-bootstrap.jpg\">\r\n        </div\r\n        ><div class=\"v-half-container\" style=\"text-align: left\">\r\n            <br><br>\r\n            <ul>\r\n                <li>\r\n                    <p><span style=\"font-weight: bold\">Alejandro Barba Prieto</span></p>\r\n                </li>\r\n                <li>\r\n                    <p>Madrid (Spain)</p>\r\n                </li>\r\n                <li>\r\n                    <p>28/06/1982 Ponferrada (Spain)</p>\r\n                </li>\r\n                <li>\r\n                    <p>Actualmente CTO en <a target=\"_blank\" href=\"https://www.game-learn.com/\">Gamelearn</a></p>\r\n                </li>\r\n                <li>\r\n                    <p><a href=\"mailto:alejandro.barba@becominganagilearchitect.com\">alejandro.barba@becominganagilearchitect.com</a></p>\r\n                </li>\r\n            </ul>\r\n        </div>\r\n    </div>\r\n    <div class=\"h-container\">\r\n        <h2>Lo que sé hacer</h2>\r\n        <div class=\"v-third-container\">\r\n            <div class=\"third-title\">\r\n                Me siento experto\r\n            </div>\r\n            Scrum, Agile Coaching, Acceptance Test Driven Development, Continuous Integration, Object Oriented Programming, Amazon Web Services, HTML5 JavaScript, Ajax, Database Performance, Web Services, CSS3, Symfony 2, Doctrine 1 & 2, Zend Framework, PHP, Soft Skills, Serious Learning\r\n        </div\r\n        ><div class=\"v-third-container\">\r\n            <div class=\"third-title\">\r\n                Tengo experiencia profesional\r\n            </div>\r\n            High Availability & Scalability, System Architecture, Requirement Analysis, Java, Apache, MongoDB, Linux, NetBeans, Eclipse, jQuery, Performance and Functional Testing\r\n        </div\r\n        ><div class=\"v-third-container\">\r\n            <div class=\"third-title\">\r\n                Lo conozco bien\r\n            </div>\r\n            Extreme Programming, Mobile Advertising, Javascript Phaser, Grunt, Bower, Browserify, Underscore - Lodash, Jasmine, Mocha, jQuery Mobile, Yii Framework, CakePHP, Oracle\r\n        </div>\r\n    </div>\r\n    <div class=\"h-container\" style=\"text-align: left\">\r\n        <h2>Formación</h2>\r\n        <ul>\r\n            <li>\r\n                04/2015: Scrum.org <a target=\"_blank\" href=\"https://www.scrum.org/Assessments/Professional-Scrum-Master-Assessments/PSM-I-Assessment\">Certified Scrum Master</a>\r\n            </li>\r\n            <li>\r\n                04/2010: <span style=\"font-weight: bold\">Sun Certified Java Programmer</span> for the Java 6 Platform\r\n            </li>\r\n            <li>\r\n                10/2000 - 09/2005: Licenciado en <span style=\"font-weight: bold\">Ingeniería Informática</span> por la Universidad de León.\r\n            </li>\r\n        </ul>\r\n    </div>\r\n    <div class=\"h-container\">\r\n        <h2>Experiencia</h2>\r\n        <span style=\"font-weight: bold\"></span>\r\n        <ul>\r\n            <li>\r\n                <div class=\"experience-brand\">05/2013 - Actualmente: Gamelearn (Madrid)</div>\r\n                <div class=\"experience-title\">Scrum Master & Chief Technical Officer (CTO)</div>\r\n                <div class=\"experience-description\">Arquitectura y supervisión técnica del desarrollo de videojuegos Serious Games para el aprendizaje de Soft Skills mediante tecnología HTML5-Canvas y WebGL. Administrador de Clusters de alta disponibilidad Amazon Web Services EC2, RDS, EBS y Route 53. Desarrollo mediante motodología Scrum e implementación de productos aplicando Test Driven Development y Continuous Integration. Productos desarrollados con tecnologías Node.js, MongoBD, Phaser.js, Underscore, Lodash, Browserify, Mocha, Jasmine, etc.</div>\r\n            </li>\r\n            <li>\r\n                <div class=\"experience-brand\">10/2012 - 05/2013: BTOB Digital Marketing (Madrid)</div>\r\n                <div class=\"experience-title\">Project Manager & Back-End Analyst</div>\r\n                <div class=\"experience-description\">Gestión de proyectos (Acevas Netvas, Vodafone Music Shows, etc) y asesor tecnológico (elección de tecnologías y directrices de desarrollo). Desarrollo y mantenimiento de proyectos existentes y mantenimiento de servidores dedicados. LAMP / Ajax, jQuery, PHP 5.3, Zend Framework, CakePhp, MySQL y BI Pentaho. Administración de Cloud Servers Debian, Apache, Nginx, MySQL, PostgreSQL, etc.</div>\r\n            </li>\r\n            <li>\r\n                <div class=\"experience-brand\">01/2012 - 10/2012: TAPTAP Networks (Madrid)</div>\r\n                <div class=\"experience-title\">Lead Back-End Analyst.</div>\r\n                <div class=\"experience-description\">Diseño y arquitectura de herramientas Backend RIA. LAMP / Ajax, DHTMLX 3, PHP 5.3, Zend Framework, Doctrine 1.2 y MySQL. Apache y MySQL, Amazon Web Services, etc.</div>\r\n            </li>\r\n            <li>\r\n                <div class=\"experience-brand\">03/2011 - 12/2011: Secretel S.L. (León)</div>\r\n                <div class=\"experience-title\">Dirección de departamento de informática.</div>\r\n                <div class=\"experience-description\">Desarrollo de herramientas Web RIA. LAMP / Ajax, PHP 5.3, Zend Framework, MySQL, Doctrine 1.2, jQuery. Apache y MySQL.</div>\r\n            </li>\r\n            <li>\r\n                <div class=\"experience-brand\">06/2010 - 02/2011: Hewlett Packard (León)</div>\r\n                <div class=\"experience-title\">Coordinador desarrollos internos</div>\r\n                <div class=\"experience-description\">Desarrollo de un Sistema Intranet para gestión interna de procesos bajo tecnología LAMP / Ajax. Zend Framework, Doctrine 1.2, MySQL, jQuery y ExtJS 2. Apach, MySQLy Eclipse.</div>\r\n            </li>\r\n            <li>\r\n                <div class=\"experience-brand\">11/2009 - 05/2010: Hewlett Packard (León)</div>\r\n                <div class=\"experience-title\">Quality Assurance Manager</div>\r\n                <div class=\"experience-description\">Diseño de pruebas funcionales y de rendimiento mediante IBM Rational Functional Tester y Rational Performance Tester para plataforma de Administración Electrónica eTramite de La Xunta de Galicia. Programación y despliegue de procedimientos administrativos en la plataforma mediante tecnologías LAMP / Ajax (PHP, MySQL y Doctrine 1.2).</div>\r\n            </li>\r\n            <li>\r\n                <div class=\"experience-brand\">06/2009 - 10/2009: Hewlett Packard (León)</div>\r\n                <div class=\"experience-title\">Analista Programador</div>\r\n                <div class=\"experience-description\">Diseño y desarrollo de aplicaciones C# .Net. Diseño de un sistema para la migración de datos a la herramienta Hewlett Packard Quality Center, mediante el uso de su API de desarrollo con C# .Net (proyecto desarrollado para Caja Madrid). Creación de scripts en VBScript para QC.</div>\r\n            </li>\r\n            <li>\r\n                <div class=\"experience-brand\">03/2008 - 05/2009: Hewlett Packard (León)</div>\r\n                <div class=\"experience-title\">Programador</div>\r\n                <div class=\"experience-description\">Desarrollo JavaEE de sistemas de administración electrónica para la Generalitat de Cataluña. Frameworks Java Spring, Struts, Hibernate y Axis entre otros. Entorno Apache, BEA Weblogic, Eclipse, bases de datos Oracle, etc.</div>\r\n            </li>\r\n            <li>\r\n                <div class=\"experience-brand\">09/2007 - 01/2008: Autónomo (Ponferrada, León)</div>\r\n                <div class=\"experience-description\">Diseño y desarrollo de sitios Web 2.0 mediante tecnologías AJAX. Cada sitio implementa una copia del panel de control Web 2.0/AJAX de creación propia \'Eipol Web Builder Ajax Framework\' como CMS del sitio (Ejemplos: www.autobergidum.com, www.valledeancares.com, www.campingperedadeancares.com, etc).</div>\r\n            </li>\r\n            <li>\r\n                <div class=\"experience-brand\">01/2007 - 08/07: Riesco y Marcos S.L. (Bembibre, León)</div>\r\n                <div class=\"experience-description\">Diseño e implementación de Dasinfor, programa para la elaboración y procesado de ordenaciones de montes. Dasinfor incluye Dasinfor PC, desarrollado en Visual C# .Net y Dasinfor PDA, desarrollado para Windows Mobile 2005 en Visual C# .Net y que contempla el manejo de dispositivos GPS por parte de los módulos programados (se creó un programa navegador GPS propio para PDA además del manejo de puertos serie y DDBB).</div>\r\n            </li>\r\n            <li>\r\n                <div class=\"experience-brand\">10/2006 - 12/2006: Telefónica I+D (León - Madrid)</div>\r\n                <div class=\"experience-description\">Desarrollo de componentes Web 2.0 utilizando las tecnologías Google IG Personal Pages y Google Maps, contratado por la Universidad de León. Cargo: experto Ajax y Web 2.0.</div>\r\n            </li>\r\n            <li>\r\n                <div class=\"experience-brand\">11/2005 – 07/2006: MediaOnLine S.R.L. (Catania, Italia)</div>\r\n                <div class=\"experience-description\">Desarrollador Web en MediaOnLine S.R.L. (Catania – Italia) en la creación de sitios Web dinámicos mediante las tecnologías PHP and MySQL, JavaScript y CSS2. Como proyecto principal destacar el sitio www.tecnicadellascuola.it para el periódico de tirada nacional del mismo nombre.</div>\r\n            </li>\r\n        </ul>\r\n    </div>\r\n    <div class=\"h-container\" style=\"text-align: justify\">\r\n        <h2>Idiomas</h2>\r\n        <ul>\r\n            <li><span style=\"font-weight: bold\">Español</span>: nativo.</li>\r\n            <li><span style=\"font-weight: bold\">Inglés</span>: nivel alto hablado y escrito.</li>\r\n            <li><span style=\"font-weight: bold\">Italiano</span>: equivalente a nativo.</li>\r\n        </ul>\r\n    </div>\r\n    <div class=\"h-container\" style=\"text-align: justify\">\r\n        <h2>Aptitudes</h2>\r\n        <ul>\r\n            <li>Excelente capacidad para la dirección y planificación de proyectos de desarrollo informático.</li>\r\n            <li>Trabajo en equipos multi-disciplinares y auto-organizados y trabajo en ambientes multiculturales.</li>\r\n            <li>Facilidad con los idiomas.</li>\r\n            <li>Persona disciplinada y de gran responsabilidad.</li>\r\n            <li>Excelente expresión escrita y habilidad en el diseño gráfico por ordenador (buen conocimiento de programas de diseño como Photoshop, Fireworks o Flash).</li>\r\n        </ul>\r\n    </div>\r\n</div>\r\n<br>' WHERE (`page_content_id`='2');");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema) {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on \"mysql\".");
    }

}
