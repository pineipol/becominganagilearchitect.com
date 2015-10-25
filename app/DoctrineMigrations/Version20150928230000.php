<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150928230000 extends AbstractMigration {

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema) {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on \"mysql\".");

        $this->addSql("INSERT INTO `layouts` (`layout_id`, `name`, `title`, `description`, `file`, `created`, `modified`) VALUES ('3', 'post-layout', 'Post layout', 'Post layout', 'PineipolBaaBundle:Layout:post.html.twig', '2015-09-20 21:17:50', '2015-09-20 21:17:50');");

        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='6');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='7');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='8');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='9');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='12');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='13');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='14');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='15');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='16');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='17');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='18');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='19');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='20');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='21');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='22');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='23');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='24');");
        $this->addSql("UPDATE `routes` SET `layout_id`='3' WHERE (`route_id`='25');");

        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.form.name', 'Nombre', '2015-09-30 23:23:57');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.form.email', 'Email', '2015-09-30 23:23:57');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.form.message', 'Comentario', '2015-09-30 23:23:57');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.form.submit', 'Enviar', '2015-09-30 23:23:57');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.form.captcha', 'Eres un bot?', '2015-09-30 23:23:57');");

        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.form.name.validate_blank', 'El campo Nombre no puede estar en blanco', '2015-09-30 23:23:57');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.form.email.validate_blank', 'El campo Email no puede estar en blanco', '2015-09-30 23:23:57');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.form.email.validate_invalid_format', 'El Email no tiene un formato válido', '2015-09-30 23:23:57');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.form.message.validate_blank', 'El campo Mensaje no puede estar en blanco', '2015-09-30 23:23:57');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.form.captcha.validate_error', 'El valor introducido no es correcto', '2015-09-30 23:23:57');");

        $this->addSql("INSERT INTO `labels` (`locale_id`, `translation`, `label_key`, `created`) VALUES ('1', 'El campo Nombre no puede estar en blanco', 'pages.contact.form.name.validate_blank', '2015-10-11 13:22:08');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `translation`, `label_key`, `created`) VALUES ('1', 'El campo Email no puede estar en blanco', 'pages.contact.form.email.validate_blank', '2015-10-11 13:22:08');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `translation`, `label_key`, `created`) VALUES ('1', 'El Email no tiene un formato válido', 'pages.contact.form.email.validate_invalid_format', '2015-10-11 13:22:08');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `translation`, `label_key`, `created`) VALUES ('1', 'El campo Asunto no puede estar en blanco', 'pages.contact.form.subject.validate_blank', '2015-10-11 13:22:08');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `translation`, `label_key`, `created`) VALUES ('1', 'El campo Mensaje no puede estar en blanco', 'pages.contact.form.message.validate_blank', '2015-10-11 13:22:08');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `translation`, `label_key`, `created`) VALUES ('1', 'El valor introducido no es correcto', 'pages.contact.form.captcha.validate_error', '2015-10-11 13:22:08');");

        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.result.failure.subject', 'Se ha producido un error al enviar el comentario', '2015-10-12 21:09:54');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.result.failure.content', 'Algo extraño ha sucedido. Por favor, vuélvelo a intentar dentro de unos minutos.', '2015-10-12 21:09:54');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.result.success.subject', 'Comentario recibido correctamente', '2015-10-12 21:09:54');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.result.success.content', 'Tu comentario ha sido publicado. Pulsa el enlace para volver al post y ver tu comentario', '2015-10-12 21:09:54');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.result.success.link', 'Volver', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.list.title', 'Comentarios', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.comment.form.title', 'Escribe un comentario', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'email.templates.comment.form.notification.part1', 'Comentario recibido', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'email.templates.comment.form.notification.part2', 'Has recibido un comentario de', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'email.templates.signature', 'Alejandro Barba - Becoming An Agile Architect', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'email.templates.comment.form.user-response.part1', 'Comentario recibido', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'email.templates.comment.form.user-response.part2', 'Hola', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'email.templates.comment.form.user-response.part3', 'He recibido tu comentario', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'email.templates.comment.form.user-response.part4', 'Tu cometario ha sido publicado en el blog.', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'email.templates.comment.form.user-response.part5', 'Muchas gracias,', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.contact.result.success.subject', 'Formulario enviado correctamente', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.contact.result.success.content', 'Me pondré en contacto contigo en cuanto vea tu mensaje.', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.contact.result.failure.subject', 'Se ha producido un error al enviar el formulario', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.contact.result.failure.content', 'Algo extraño ha sucedido. Por favor, vuélvelo a intentar dentro de unos minutos.', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.right-column.title', 'Enlaces relevantes', '2015-10-18 20:00:00');");
        $this->addSql("INSERT INTO `labels` (`locale_id`, `label_key`, `translation`, `created`) VALUES ('1', 'pages.right-column.certifications.title', 'Certificaciones', '2015-10-18 20:00:00');");

        $this->addSql("INSERT INTO `user_status` (`user_status_id`, `name`, `title`, `description`, `created`) VALUES ('2', 'inactive', 'Inactive', 'Inactive', '2015-10-14 19:48:07');");
        $this->addSql("INSERT INTO `user_status` (`user_status_id`, `name`, `title`, `description`, `created`) VALUES ('3', 'comment-user', 'Commen User', 'Commen User', '2015-10-14 19:48:33');");
        $this->addSql("INSERT INTO `user_status` (`user_status_id`, `name`, `title`, `description`, `created`) VALUES ('4', 'invalidated', 'Invalidated', 'Invalidated', '2015-10-14 19:49:31');");

        $this->addSql("INSERT INTO `comment_status` (`comment_status_id`, `name`, `title`, `description`, `created`) VALUES ('1', 'new', 'New', 'New', '2015-10-14 19:49:51');");
        $this->addSql("INSERT INTO `comment_status` (`comment_status_id`, `name`, `title`, `description`, `created`) VALUES ('2', 'validated', 'Validated', 'Validated', '2015-10-14 19:50:15');");
        $this->addSql("INSERT INTO `comment_status` (`comment_status_id`, `name`, `title`, `description`, `created`) VALUES ('3', 'denegated', 'Denegated', 'Denegated', '2015-10-14 19:50:37');");
        $this->addSql("INSERT INTO `comment_status` (`comment_status_id`, `name`, `title`, `description`, `created`) VALUES ('4', 'retired', 'Retired', 'Retired', '2015-10-14 19:51:01');");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema) {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on \"mysql\".");
    }

}
