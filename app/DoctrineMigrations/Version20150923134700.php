<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150923134700 extends AbstractMigration {

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema) {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on \"mysql\".");
        $this->addSql("SET @postId := '16';");
        $this->addSql("SET @previousPostId := '15';");
        $this->addSql("SET @thisPostLinkId := '18';");
        $this->addSql("SET @postDate := '2015-09-23 23:15:00';");

        $this->addSql("UPDATE `posts` SET `show`='1', `created`=@postDate WHERE (`post_id`=@postId);");
        $this->addSql("UPDATE `post_contents` SET
                `description`='<p>\r\n    Al principio de cada Sprint, durante el evento de planificación o Sprint Planning, el Equipo Scrum al completo se reúne para generar el Sprint Backlog.\r\n</p>\r\n<p>\r\n		El Sprint Backlog está constituído por los elementos del Product Backlog seleccionados para realizar durante el Sprint, un plan para desarrollarlos y un objetivo de Sprint.\r\n</p>',
                `content`='<p>\r\n    <span style=\"font-size: 60px\">A</span>l principio de cada Sprint, durante el <a href=\"[[ROUTE:scrum-framework-four-]]\" class=\"post-content-link\">evento de planificación o Sprint Planning</a>, el <a href=\"[[ROUTE:scrum-framework-two-]]\" class=\"post-content-link\">Equipo Scrum</a> al completo se reúne para generar el Sprint Backlog.\r\n</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">\r\n        El Sprint Backlog está constituído por los elementos del Product Backlog seleccionados para realizar durante el Sprint, un plan para desarrollarlos y un objetivo de Sprint.\r\n    </div>\r\n</div>\r\n<p>\r\n    El Equipo selecciona ítems de entre aquellos de mayor prioridad del Backlog hasta alcanzar un compromiso sobre cuántos ítems podrán ser completados durante el Sprint. <span style=\"font-weight:bold\">El Equipo de Desarrollo acuerda con el Product Owner qué ítems se seleccionan</span>, pues éste querrá incluir cuántos más mejor pero el <span style=\"font-weight:bold\">Equipo de Desarrollo</span> deberá basarse en la <span style=\"font-weight:bold\">velocidad alcanzada durante los últimos Sprints para determinar cuántos ítems puede comprometerse</span> a completar.\r\n</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">\r\n        <span style=\"font-weight:bold\">La estimación de cuantos elementos</span> del Product Backlog pueden ser elegidos puede hacerse, una vez más, <span style=\"font-weight:bold\">en base a puntos de historia o a horas</span>.\r\n    </div>\r\n</div>\r\n<p>\r\n    Desde mi experiencia y perspectiva recomiendo <span style=\"font-weight:bold\">los puntos de historia pues miden complejidad, incertidumbre, esfuerzo y productividad</span>. Este tipo de medida tiene un cierto grado de anticipación de imprevistos (téngase en cuenta la incertidumbre) mientras que las estimaciones en horas se basan más en la idea de que todo salga como hemos pensado, incluso los imprevistos, para los cuales provisionamos una bolsa de horas concreta.\r\n</p>\r\n<p>\r\n    Si estimamos cuántos ítems seleccionar en puntos de historia podemos elegirlos del Product Backlog rápidamente y pasar de inmediato a generar el plan de trabajo, mientras que si nos basamos en horas debemos ir generando el plan a medida que estimamos cuántas horas dedicaremos a cada tarea, por lo que no sabremos cuántas historias de usuario podemos elegir hasta haber terminado toda la planificación.\r\n</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">\r\n        En el apartado de Sprint Planning comentamos cómo <span style=\"font-weight:bold\">cada Sprint debe contar con un objetivo que dé coherencia al trabajo realizado durante el mismo</span>. Dicho objetivo servirá como referencia a la hora de seleccionar elementos del Product Backlog para generar el Sprint Backlog.\r\n    </div>\r\n</div>\r\n<p>\r\n    Además de seleccionar los elementos del Product Backlog el <span style=\"font-weight:bold\">Equipo de Desarrollo elabora un plan</span> para llevarlos a cabo. Dicho plan consiste en analizar uno a uno cada elemento seleccionado y dividirlo en tareas técnicas de forma que cada componente necesario para completar una historia de usuario pueda ser llevado a cabo por un desarrollador, favoreciendo así el trabajo en paralelo y la generación de subtareas más fácilmente abordables y de incertidumbre acotada.\r\n</p>\r\n<p>\r\n    Las <span style=\"font-weight:bold\">historias de usuario</span> se refieren al Equipo Scrum al completo y al cliente, es decir, <span style=\"font-weight:bold\">deben ser concebidas para facilitar la comprensión y la comunicación entre perfiles heterogéneos</span>. Por otro lado las tareas técnicas, o simplemente tareas, son cosa del Equipo de Desarrollo. Ellos suelen referirse siempre a ellas hasta el punto de asimilar las unas con las otras.\r\n</p>\r\n<p>\r\n    Una vez finalizado el análisis y la generación de tareas técnicas el equipo puede reordenarlas ignorando la prioridad dada a las historias de usuario, localizando dependencias entre tareas y colocando éstas asegurándose que las tareas dependientes se abordan siempre después de las que generan la dependencia. <span style=\"font-weight:bold\">El Equipo también puede asignar tareas a miembros concretos del Equipo de Desarrollo para optimizar el proceso</span>, aunque se <span style=\"font-weight:bold\">debe ser cuidadoso y evitar la generación de islas de conocimiento</span> asignando siempre a la misma persona todas las tareas similares.\r\n</p>\r\n<p>\r\n    Una vez empezado el Sprint, y a medida que el Equipo aprende más sobre el trabajo necesario para desarrollar las tareas, puede decidir añadir tareas técnicas al Sprint Backlog o refinar las existentes si lo considera necesario así como replantear su orden.\r\n</p>\r\n<div class=\"key_points_text_box\">\r\n    <div class=\"title_box\">\r\n        <div class=\"generic_icon_container\"></div>\r\n        <div class=\"generic_title_container\">Key Points</div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                El Equipo Scrum al completo se encarga de generar el Sprint Backlog durante la reunión Sprint Planning.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Lo forman los elementos del Product Backlog seleccionados para realizar durante el Sprint, un plan para desarrollarlos y un objetivo de Sprint.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                El Equipo de Desarrollo acuerda con el Product Owner qué ítems se seleccionan pero es el Equipo de Desarrollo quien determina cuántos ítems puede comprometerse a completar.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                La estimación de cuantos elementos pueden ser elegidos puede hacerse en base a puntos de historia o a horas aunque se recomienda utilizar los puntos de historia.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Los puntos de historia miden complejidad, incertidumbre, esfuerzo y productividad por lo que aportan un cierto grado de anticipación de imprevistos.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Cada Sprint debe contar con un objetivo que dé coherencia al trabajo realizado durante el mismo.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                El Equipo de Desarrollo elabora un plan el Sprint que consiste en dividir cada elemento en tareas técnicas de forma que se favorezca el trabajo en paralelo.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Las historias de usuario se refieren al Equipo Scrum y al cliente, las tareas técnicas son cosa del Equipo de Desarrollo.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                El equipo puede reordenar las tareas localizando dependencias y puede asignar tareas a miembros concretos del Equipo de Desarrollo para optimizar el proceso. Se debe ser cuidadoso para evitar la generación de islas de conocimiento.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Durante el Sprint el Equipo puede decidir añadir tareas al Sprint Backlog, refinar las existentes o replantear su orden.\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"links-container\">\r\n    <div class=\"left-side-link-container\">\r\n        <a href=\"[[ROUTE:scrum-framework-eleven-]]\" class=\"post-content-link\">< Artefactos de Scrum. Gráfico Release Burndown</a>\r\n    </div\r\n    ><!--<div class=\"right-side-link-container\">\r\n        <a href=\"[[ROU__TE:scrum-framework-thirteen-]]\" class=\"post-content-link\">Artefactos de Scrum. Gráfico Sprint Burndown ></a>\r\n    </div>-->\r\n</div>\r\n<br>',
                `image`='uploads/posts/150923_sprint_backlog/sprint_backlog.jpg',
                `image_alt`='Artefactos de Scrum. Gráfico Release Burndown',
                `meta_title`='Becoming An Agile Architect - Artefactos de Scrum. Sprint Backlog',
                `meta_description`='Cuarto post sobre los artefactos de Scrum en el que se explica el objetivo del Sprint Backlog',
                `meta_keywords`='agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua alejandro barba scrum artifacts product backlog',
                `created`=@postDate,
                `modified`=@postDate
                WHERE (`post_content_id`=@postId);");
        $this->addSql("UPDATE `post_contents` SET
                `content`='<p>\r\n    <span style=\"font-size: 60px\">C</span>omo hemos mencionado, un <span style=\"font-weight:bold\">Product Backlog cuyos ítems se encuentren estimados</span> y cuyas estimaciones se actualicen regularmente unido a un <span style=\"font-weight:bold\">Equipo con una velocidad de desarrollo cuantificable</span> dan como resultado un <span style=\"font-weight:bold\">pronóstico de entrega del proyecto</span>. El total de las estimaciones y su evolución a lo largo de los Sprints pueden ser <span style=\"font-weight:bold\">fácilmente representables mediante una gráfica</span>, dicha gráfica recibe el nombre de <span style=\"font-weight:bold\">Release Burndown Chart o Sprints Burndown Chart</span>.\r\n</p>\r\n<p>\r\n    Pese a <span style=\"font-weight:bold\">no ser un artefacto oficial de Scrum, se reconoce su utilidad y se recomienda su uso</span>. Tanto el Release Burndown como el Sprints Burndown ayudan a visualizar la evolución del proyecto y a detectar sus desviaciones con lo que constituyen potentes herramientas a la hora de <span style=\"font-weight:bold\">controlar el riesgo</span>.\r\n</p>\r\n<p>\r\n    El eje de ordenadas, o <span style=\"font-weight:bold\">eje vertical, representa el esfuerzo</span> restante para completar el proyecto por lo que puede indicar tanto el número de historias de usuario como el número de puntos de historia total que hace falta completar para finalizar el proyecto. Si se usan los puntos de historia se consiguen valores más homogéneos con lo que se refleja de forma más precisa la evolución de la productividad del Equipo de Desarrollo.\r\n</p>\r\n<p>\r\n    El eje de abscisas, o <span style=\"font-weight:bold\">eje horizontal, representa el tiempo</span> transcurrido el cual se suele agrupar, ya sea por Sprints o por Releases.\r\n</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">\r\n        Una <span style=\"font-weight:bold\">Release es una versión de producto que normalmente llega a ser desplegada en producción</span>, es decir, una versión que llega al usuario final.\r\n    </div>\r\n</div>\r\n<p>\r\n    En función de las características del proyecto se podría liberar una release cada Sprint, cada varios Sprints o como una combinación de ambos.\r\n</p>\r\n<p>\r\n    En la imagen superior se muestra una agrupación mixta por Sprints y Releases.\r\n</p>\r\n<div class=\"key_points_text_box\">\r\n    <div class=\"title_box\">\r\n        <div class=\"generic_icon_container\"></div>\r\n        <div class=\"generic_title_container\">Key Points</div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Un Product Backlog debidamente estimado junto con un Equipo de desarrollo con velocidad medible dan lugar a un preciso pronóstico para el proyecto.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                La evolución de las estimaciones y el trabajo restante se pueden representar mediante las gráficas Release Burndown Chart o Sprints Burndown Chart.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Dichas gráficas no constituyen artefactos oficiales de Scrum pero se reconoce su utilidad y se recomienda su uso a la hora de controlar el riesgo del proyecto.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                El eje vertical representa el esfuerzo restante como historias de usuario o puntos de historia y el eje horizontal el tiempo transcurrido como Sprints o Releases.\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"links-container\">\r\n    <div class=\"left-side-link-container\">\r\n        <a href=\"[[ROUTE:scrum-framework-ten-]]\" class=\"post-content-link\">< Artefactos de Scrum. Historias de Usuario en el Product Backlog</a>\r\n    </div\r\n    ><div class=\"right-side-link-container\">\r\n        <a href=\"[[ROUTE:scrum-framework-twelve-]]\" class=\"post-content-link\">Artefactos de Scrum. Sprint Backlog ></a>\r\n    </div>\r\n</div>\r\n<br>'
                WHERE (`post_content_id`=@previousPostId);");

        $this->addSql("UPDATE `links` SET `home`='1' WHERE (`link_id`=@thisPostLinkId);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '1', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '3', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '4', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '5', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '6', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '7', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '8', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '9', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '10', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '11', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '12', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '13', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '14', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '15', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '16', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES (@postId, '17', @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES ('1', @thisPostLinkId, @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES ('3', @thisPostLinkId, @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES ('4', @thisPostLinkId, @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES ('5', @thisPostLinkId, @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES ('6', @thisPostLinkId, @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES ('7', @thisPostLinkId, @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES ('8', @thisPostLinkId, @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES ('9', @thisPostLinkId, @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES ('10', @thisPostLinkId, @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES ('11', @thisPostLinkId, @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES ('12', @thisPostLinkId, @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES ('13', @thisPostLinkId, @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES ('14', @thisPostLinkId, @postDate);");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`, `created`) VALUES ('15', @thisPostLinkId, @postDate);");

        $this->addSql("UPDATE `post_contents` SET `meta_title`='Becoming An Agile Architect - Artefactos de Scrum. Historias de Usuario en el Product Backlog' WHERE (`post_content_id`='14');");
        $this->addSql("UPDATE `post_contents` SET `description`='<p>El hilo conductor del blog estará formado por varios proyectos, en principio tengo dos en la cabeza, con los que pretendo plantear diversos problemas o necesidades, analizar las posibles soluciones e ir llevando a cabo, a lo largo de una serie de posts, el desarrollo de cada uno mediante la implementación de tecnologías que den solución a dichos problemas, tratando siempre de buscar algún tipo de valor añadido.<br>\r\nEl primero de los proyectos sería el propio blog, el segundo, una herramienta Agile de gestión de equipos de desarrollo mediante Scrum...</p>' WHERE (`post_content_id`='3');");
        $this->addSql("UPDATE `post_contents` SET `description`='<p>Los términos Agile, Scrum, Kanban, etc. están de moda, es un hecho, pero si empezamos a investigar en qué consiste cada uno enseguida nos encontramos con otros términos con los que se entrecruzan e, inmediatamente, nos damos cuenta de que no somos capaces de distinguir dónde termina cada uno y empieza el siguiente.</p>\r\n<p>Por un lado, unos parecen ser filosofías y otros metodologías. Unos parecen más amplios y da la impresión de que engloban a otros pero... ¿quién es quién?...</p>' WHERE (`post_content_id`='4');");
        $this->addSql("UPDATE `post_contents` SET `description`='<p>Los equipos en Scrum son:</p>\r\n<p><span style=\"font-weight:bold\">Auto-organizados.</span> El equipo, en su totalidad, es el único responsable de decidir cómo hacer su trabajo sin que nadie ajeno al mismo pueda imponer condiciones y;</p>\r\n<p><span style=\"font-weight:bold\">Multi-disciplinares.</span> Dentro del equipo hay profesionales con experiencia suficiente en cada uno de los campos necesarios (programación, diseño, marketing, etc) para completar una versión 100% funcional y potencialmente entregable de las funcionalidades comprometidas para el Sprint...</p>' WHERE (`post_content_id`='6');");
        $this->addSql("UPDATE `post_contents` SET `description`='<p>\r\n    Es <span style=\"font-weight:bold\">el momento clave para inspeccionar y adaptar</span> en Scrum.\r\n</p>\r\n<p>\r\n        En esta reunión, cuya duración máxima <span style=\"font-weight:bold\">time-boxed</span> es de tres horas para Sprints de un mes de duración, el <span style=\"font-weight:bold\">Equipo de Scrum al completo se inspecciona a sí mismo</span>.\r\n</p>\r\n<p>\r\n    Es la <span style=\"font-weight:bold\">última reunión de cada Sprint</span> e inmediatamente después da comienzo el siguiente Sprint. En ella el Scrum Master participa como un igual pues uno de los aspectos que se valoran es el propio proceso de Scrum...\r\n</p>' WHERE (`post_content_id`='11');");
        $this->addSql("UPDATE `post_contents` SET `description`='<p>\r\n    Pese a no ser un evento oficialmente reconocido por Scrum.org el propio Ken Schwaber, uno de los creadores del framework, reconoce la importancia de las reuniones de grooming, también conocidas como <span style=\"font-weight:bold\">reuniones de refinamiento del Backlog</span>.\r\n</p>\r\n<p>\r\n    Este tipo de reuniones pueden ser llevadas a cabo <span style=\"font-weight:bold\">en cualquier momento del Sprint</span> y no existe un número predeterminado de sesiones, no obstante se aconseja que su <span style=\"font-weight:bold\">duración total no supere el 10% de la duración del Sprint</span>...\r\n</p>' WHERE (`post_content_id`='12');");
        $this->addSql("UPDATE `post_contents` SET `description`='<p>\r\n    Al principio de cada Sprint, durante el evento de planificación o Sprint Planning, el Equipo Scrum al completo se reúne para generar el Sprint Backlog.\r\n</p>\r\n<p>\r\n		El Sprint Backlog está constituído por los elementos del Product Backlog seleccionados para realizar durante el Sprint, un plan para desarrollarlos y un objetivo de Sprint...\r\n</p>' WHERE (`post_content_id`='16');");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema) {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on \"mysql\".");
    }

}