<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150727235200 extends AbstractMigration {

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema) {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on \"mysql\".");

        $this->addSql("UPDATE `posts` SET `show`='1' WHERE (`post_id`='10');");
        $this->addSql("UPDATE `posts` SET `show`='1' WHERE (`post_id`='10');");
        $this->addSql("UPDATE `post_contents` SET `content`='<p>\r\n    <span style=\"font-size: 60px\">A</span>l <span style=\"font-weight:bold\">final de cada Sprint</span> tiene lugar la reunión de <span style=\"font-weight:bold\">Revisión de Sprint</span>.\r\n</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">\r\n        La reunión de revisión de Sprint es un evento <span style=\"font-weight:bold\">time-boxed</span> de un máximo de cuatro horas de duración para Sprints de un mes y proporcionalmente menor en Sprints más cortos.\r\n    </div>\r\n</div>\r\n<p>\r\n    Durante esta reunión <span style=\"font-weight:bold\">se inspeccionan los elementos del Product Backlog</span> incluídos en el Sprint para valorar si <span style=\"font-weight:bold\">cumplen su definición de completado</span>. El <span style=\"font-weight:bold\">Product Owner es el encargado de decidir</span> si un ítem cumple o no con la definición de completado y puede requerir la ayuda del equipo de desarrollo para valorar cuestiones técnicas como, por ejemplo, el nivel de cobertura de tests unitarios del proyecto.\r\n</p>\r\n<p>\r\n    Los <span style=\"font-weight:bold\">elementos del Product Backlog pueden estar completos o no</span>, pero en ningún caso podrán estar parcialmente completos. Aquellos elementos que no hayan sido completamente terminados, o que presenten deficiencias, <span style=\"font-weight:bold\">volverán al Product Backlog para ser estimados y priorizados de nuevo</span>. En la práctica suele ocurrir que la mayoría de elementos no completados en el Sprint que termina sean puestos en la cima de la pila del Sprint que empieza, pues suelen ser tareas bien definidas y a las que en muchas ocasiones sólo les restan unas pocas horas de dedicación, no obstante, esto no se cumple siempre o no nos interesa siempre, es por ello que es conveniente que vuelvan al Backlog y sean replanteadas.\r\n</p>\r\n<p>\r\n    Por ejemplo, volvamos al caso de una historia de usuario que requiere que una aplicación Web sea encapsulada en forma de aplicación híbrida para IOs. Si es la primera vez que el equipo genera una aplicación híbrida la historia contará con un alto grado de complejidad e incertidumbre para el equipo de desarrollo. Las <span style=\"font-weight:bold\">tareas con gran incertidumbre deben ser abordadas las primeras</span> dentro del proyecto, pues descubrir que una tarea no es viable en un punto avanzado del mismo puede llegar a suponer el fracaso de todo él.<br>\r\n    Si en la revisión de Sprint se concluye que la tarea no está terminada porque se requiere adaptar los estilos de maquetación para que se visualice correctamente en mobile, lo cual no supone un gran esfuerzo, el Product Owner podría decidir no incluir la tarea en el siguiente Sprint sino re-estimar el trabajo restante y re-priorizarla de forma que se concluya en una etapa más tardía del proyecto en la que el aspecto de la aplicación se encuentre cerrado pues, en otro caso, se correría el riesgo de repetir maquetación cuando la incertidumbre sobre la viabilidad de la tarea, es decir, si la aplicación se podría encapsular como híbrida para IOs ya está resuelta.\r\n</p>\r\n<p>\r\n    Ademas de evaluar las tareas llevadas a cabo en el Sprint que termina el <span style=\"font-weight:bold\">Equipo Scrum y los Stakeholders</span> (cliente y demás implicados) colaboran para <span style=\"font-weight:bold\">decidir que elementos del Product Backlog deben ser incluídos en el siguiente Sprint</span> de forma que se maximice su valor.\r\n</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">\r\n        El <span style=\"font-weight:bold\">resultado de la reunión es un Product Backlog revisado y re-priorizado</span> que será utilizado como elemento de entrada para la reunión de planificación del siguiente Sprint.\r\n    </div>\r\n</div>\r\n<p>\r\n    Por otro lado el <span style=\"font-weight:bold\">equipo de desarrollo</span> comparte los <span style=\"font-weight:bold\">problemas y dificultades</span> que se haya podido encontrar durante el desarrollo de las tareas y explica <span style=\"font-weight:bold\">cómo los ha resuelto</span>.\r\n</p>\r\n<div class=\"key_points_text_box\">\r\n    <div class=\"title_box\">\r\n        <div class=\"generic_icon_container\"></div>\r\n        <div class=\"generic_title_container\">Key Points</div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Tiene lugar <span style=\"font-weight:bold\">al final de cada Sprint</span>.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Es una reunión <span style=\"font-weight:bold\">time-boxed</span> de un máximo de cuatro horas.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Se analiza cada elemento del Backlog incluído en el Sprint y el <span style=\"font-weight:bold\">Product Owner decide si cumple la definición de completado</span>.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Un elemento del Backlog <span style=\"font-weight:bold\">nunca puede estar parcialmente completado</span>.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Los elementos que no cumplen la definición de completado vuelven al Backlog para ser re-estimados y re-priorizados.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                El equipo y los stakeholders <span style=\"font-weight:bold\">deciden qué elementos del Backlog</span> son priorizados para que puedan ser <span style=\"font-weight:bold\">incluídos en el siguiente Sprint</span>.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Al terminar se cuenta con un <span style=\"font-weight:bold\">Product Backlog revisado</span> y re-priorizado.\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"links-container\">\r\n    <div class=\"left-side-link-container\">\r\n        <a href=\"[[ROUTE:scrum-framework-five-]]\" class=\"post-content-link\">< Eventos de Scrum. Scrum diario o Stand Up Meeting</a>\r\n    </div\r\n    ><div class=\"right-side-link-container\">\r\n        <a href=\"[[ROUTE:scrum-framework-seven-]]\" class=\"post-content-link\">Eventos de Scrum. Retrospectiva de Sprint ></a>\r\n    </div>\r\n</div>\r\n<br>', `image`='uploads/posts/150727_sprint_review/sprint_review.jpg', `image_alt`='Eventos de Scrum. Revisión de Sprint', `image_origin`='http://es.dreamstime.com/fotos-de-archivo-libres-de-regal%C3%ADas-hombre-con-la-lupa-y-la-peque%C3%B1a-mujer-image39989388' WHERE (`post_content_id`='10');");
        $this->addSql("UPDATE `post_contents` SET `content`='<p>\r\n    <span style=\"font-size: 60px\">A</span>l <span style=\"font-weight:bold\">final de cada Sprint</span> tiene lugar la reunión de <span style=\"font-weight:bold\">Revisión de Sprint</span>.\r\n</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">\r\n        La reunión de revisión de Sprint es un evento <span style=\"font-weight:bold\">time-boxed</span> de un máximo de cuatro horas de duración para Sprints de un mes y proporcionalmente menor en Sprints más cortos.\r\n    </div>\r\n</div>\r\n<p>\r\n    Durante esta reunión <span style=\"font-weight:bold\">se inspeccionan los elementos del Product Backlog</span> incluídos en el Sprint para valorar si <span style=\"font-weight:bold\">cumplen su definición de completado</span>. El <span style=\"font-weight:bold\">Product Owner es el encargado de decidir</span> si un ítem cumple o no con la definición de completado y puede requerir la ayuda del equipo de desarrollo para valorar cuestiones técnicas como, por ejemplo, el nivel de cobertura de tests unitarios del proyecto.\r\n</p>\r\n<p>\r\n    Los <span style=\"font-weight:bold\">elementos del Product Backlog pueden estar completos o no</span>, pero en ningún caso podrán estar parcialmente completos. Aquellos elementos que no hayan sido completamente terminados, o que presenten deficiencias, <span style=\"font-weight:bold\">volverán al Product Backlog para ser estimados y priorizados de nuevo</span>. En la práctica suele ocurrir que la mayoría de elementos no completados en el Sprint que termina sean puestos en la cima de la pila del Sprint que empieza, pues suelen ser tareas bien definidas y a las que en muchas ocasiones sólo les restan unas pocas horas de dedicación, no obstante, esto no se cumple siempre o no nos interesa siempre, es por ello que es conveniente que vuelvan al Backlog y sean replanteadas.\r\n</p>\r\n<p>\r\n    Por ejemplo, volvamos al caso de una historia de usuario que requiere que una aplicación Web sea encapsulada en forma de aplicación híbrida para IOs. Si es la primera vez que el equipo genera una aplicación híbrida la historia contará con un alto grado de complejidad e incertidumbre para el equipo de desarrollo. Las <span style=\"font-weight:bold\">tareas con gran incertidumbre deben ser abordadas las primeras</span> dentro del proyecto, pues descubrir que una tarea no es viable en un punto avanzado del mismo puede llegar a suponer el fracaso de todo él.<br>\r\n    Si en la revisión de Sprint se concluye que la tarea no está terminada porque se requiere adaptar los estilos de maquetación para que se visualice correctamente en mobile, lo cual no supone un gran esfuerzo, el Product Owner podría decidir no incluir la tarea en el siguiente Sprint sino re-estimar el trabajo restante y re-priorizarla de forma que se concluya en una etapa más tardía del proyecto en la que el aspecto de la aplicación se encuentre cerrado pues, en otro caso, se correría el riesgo de repetir maquetación cuando la incertidumbre sobre la viabilidad de la tarea, es decir, si la aplicación se podría encapsular como híbrida para IOs ya está resuelta.\r\n</p>\r\n<p>\r\n    Ademas de evaluar las tareas llevadas a cabo en el Sprint que termina el <span style=\"font-weight:bold\">Equipo Scrum y los Stakeholders</span> (cliente y demás implicados) colaboran para <span style=\"font-weight:bold\">decidir que elementos del Product Backlog deben ser incluídos en el siguiente Sprint</span> de forma que se maximice su valor.\r\n</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">\r\n        El <span style=\"font-weight:bold\">resultado de la reunión es un Product Backlog revisado y re-priorizado</span> que será utilizado como elemento de entrada para la reunión de planificación del siguiente Sprint.\r\n    </div>\r\n</div>\r\n<p>\r\n    Por otro lado el <span style=\"font-weight:bold\">equipo de desarrollo</span> comparte los <span style=\"font-weight:bold\">problemas y dificultades</span> que se haya podido encontrar durante el desarrollo de las tareas y explica <span style=\"font-weight:bold\">cómo los ha resuelto</span>.\r\n</p>\r\n<div class=\"key_points_text_box\">\r\n    <div class=\"title_box\">\r\n        <div class=\"generic_icon_container\"></div>\r\n        <div class=\"generic_title_container\">Key Points</div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Tiene lugar <span style=\"font-weight:bold\">al final de cada Sprint</span>.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Es una reunión <span style=\"font-weight:bold\">time-boxed</span> de un máximo de cuatro horas.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Se analiza cada elemento del Backlog incluído en el Sprint y el <span style=\"font-weight:bold\">Product Owner decide si cumple la definición de completado</span>.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Un elemento del Backlog <span style=\"font-weight:bold\">nunca puede estar parcialmente completado</span>.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Los elementos que no cumplen la definición de completado vuelven al Backlog para ser re-estimados y re-priorizados.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                El equipo y los stakeholders <span style=\"font-weight:bold\">deciden qué elementos del Backlog</span> son priorizados para que puedan ser <span style=\"font-weight:bold\">incluídos en el siguiente Sprint</span>.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Al terminar se cuenta con un <span style=\"font-weight:bold\">Product Backlog revisado</span> y re-priorizado.\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"links-container\">\r\n    <div class=\"left-side-link-container\">\r\n        <a href=\"[[ROUTE:scrum-framework-five-]]\" class=\"post-content-link\">< Eventos de Scrum. Scrum diario o Stand Up Meeting</a>\r\n    </div\r\n    ><div class=\"right-side-link-container\">\r\n        <a href=\"[[ROUTE:scrum-framework-seven-]]\" class=\"post-content-link\">Eventos de Scrum. Retrospectiva de Sprint ></a>\r\n    </div>\r\n</div>\r\n<br>', `image`='uploads/posts/150727_sprint_review/sprint_review.jpg', `image_alt`='Eventos de Scrum. Revisión de Sprint', `image_origin`='http://es.dreamstime.com/fotos-de-archivo-libres-de-regal%C3%ADas-hombre-con-la-lupa-y-la-peque%C3%B1a-mujer-image39989388' WHERE (`post_content_id`='10');");
        $this->addSql("UPDATE `post_contents` SET `meta_title`='Becoming An Agile Architect - Eventos de Scrum. Scrum diario o Stand Up Meeting' WHERE (`post_content_id`='10');");
        $this->addSql("UPDATE `post_contents` SET `meta_description`='Tercer post sobre los eventos de Scrum en el que se explica el funcionamiento de la reunión de Daily Scrum' WHERE (`post_content_id`='10');");
        $this->addSql("UPDATE `post_contents` SET `description`='<p>\r\n    Al <span style=\"font-weight:bold\">final de cada Sprint</span> tiene lugar la reunión de <span style=\"font-weight:bold\">Revisión de Sprint</span>.\r\n</p>\r\n<p>\r\n		La reunión de revisión de Sprint es un evento <span style=\"font-weight:bold\">time-boxed</span> de un máximo de cuatro horas de duración para Sprints de un mes y proporcionalmente menor en Sprints más cortos.\r\n</p>\r\n<p>\r\n    Durante esta reunión <span style=\"font-weight:bold\">se inspeccionan los elementos del Product Backlog</span> incluídos en el Sprint para valorar si <span style=\"font-weight:bold\">cumplen su definición de completado</span>. El <span style=\"font-weight:bold\">Product Owner es el encargado de decidir</span> si un ítem cumple o no con la definición de completado y puede requerir la ayuda del equipo de desarrollo para valorar cuestiones técnicas como, por ejemplo, el nivel de cobertura de tests unitarios del proyecto.\r\n</p>', `meta_title`='Becoming An Agile Architect - Eventos de Scrum. Revisión de Sprint', `meta_description`='Cuarto post sobre los eventos de Scrum en el que se explican las características de la reunión de Revisión de Sprint (Sprint Review)', `meta_keywords`='agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua alejandro barba scrum events sprint' WHERE (`post_content_id`='10');");
        $this->addSql("UPDATE `post_contents` SET `content`='<p>\r\n    <span style=\"font-size: 60px\">A</span>l <span style=\"font-weight:bold\">final de cada Sprint</span> tiene lugar la reunión de <span style=\"font-weight:bold\">Revisión de Sprint</span>.\r\n</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">\r\n        La reunión de revisión de Sprint es un evento <span style=\"font-weight:bold\">time-boxed</span> de un máximo de cuatro horas de duración para Sprints de un mes y proporcionalmente menor en Sprints más cortos.\r\n    </div>\r\n</div>\r\n<p>\r\n    Durante esta reunión <span style=\"font-weight:bold\">se inspeccionan los elementos del Product Backlog</span> incluídos en el Sprint para valorar si <span style=\"font-weight:bold\">cumplen su definición de completado</span>. El <span style=\"font-weight:bold\">Product Owner es el encargado de decidir</span> si un ítem cumple o no con la definición de completado y puede requerir la ayuda del equipo de desarrollo para valorar cuestiones técnicas como, por ejemplo, el nivel de cobertura de tests unitarios del proyecto.\r\n</p>\r\n<p>\r\n    Los <span style=\"font-weight:bold\">elementos del Product Backlog pueden estar completos o no</span>, pero en ningún caso podrán estar parcialmente completos. Aquellos elementos que no hayan sido completamente terminados, o que presenten deficiencias, <span style=\"font-weight:bold\">volverán al Product Backlog para ser estimados y priorizados de nuevo</span>. En la práctica suele ocurrir que la mayoría de elementos no completados en el Sprint que termina sean puestos en la cima de la pila del Sprint que empieza, pues suelen ser tareas bien definidas y a las que en muchas ocasiones sólo les restan unas pocas horas de dedicación, no obstante, esto no se cumple siempre o no nos interesa siempre, es por ello que es conveniente que vuelvan al Backlog y sean replanteadas.\r\n</p>\r\n<p>\r\n    Por ejemplo, volvamos al caso de una historia de usuario que requiere que una aplicación Web sea encapsulada en forma de aplicación híbrida para IOs. Si es la primera vez que el equipo genera una aplicación híbrida la historia contará con un alto grado de complejidad e incertidumbre para el equipo de desarrollo. Las <span style=\"font-weight:bold\">tareas con gran incertidumbre deben ser abordadas las primeras</span> dentro del proyecto, pues descubrir que una tarea no es viable en un punto avanzado del mismo puede llegar a suponer el fracaso de todo él.<br>\r\n    Si en la revisión de Sprint se concluye que la tarea no está terminada porque se requiere adaptar los estilos de maquetación para que se visualice correctamente en mobile, lo cual no supone un gran esfuerzo, el Product Owner podría decidir no incluir la tarea en el siguiente Sprint sino re-estimar el trabajo restante y re-priorizarla de forma que se concluya en una etapa más tardía del proyecto en la que el aspecto de la aplicación se encuentre cerrado pues, en otro caso, se correría el riesgo de repetir maquetación cuando la incertidumbre sobre la viabilidad de la tarea, es decir, si la aplicación se podría encapsular como híbrida para IOs ya está resuelta.\r\n</p>\r\n<p>\r\n    Ademas de evaluar las tareas llevadas a cabo en el Sprint que termina el <span style=\"font-weight:bold\">Equipo Scrum y los Stakeholders</span> (cliente y demás implicados) colaboran para <span style=\"font-weight:bold\">decidir que elementos del Product Backlog deben ser incluídos en el siguiente Sprint</span> de forma que se maximice su valor.\r\n</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">\r\n        El <span style=\"font-weight:bold\">resultado de la reunión es un Product Backlog revisado y re-priorizado</span> que será utilizado como elemento de entrada para la reunión de planificación del siguiente Sprint.\r\n    </div>\r\n</div>\r\n<p>\r\n    Por otro lado el <span style=\"font-weight:bold\">equipo de desarrollo</span> comparte los <span style=\"font-weight:bold\">problemas y dificultades</span> que se haya podido encontrar durante el desarrollo de las tareas y explica <span style=\"font-weight:bold\">cómo los ha resuelto</span>.\r\n</p>\r\n<div class=\"key_points_text_box\">\r\n    <div class=\"title_box\">\r\n        <div class=\"generic_icon_container\"></div>\r\n        <div class=\"generic_title_container\">Key Points</div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Tiene lugar <span style=\"font-weight:bold\">al final de cada Sprint</span>.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Es una reunión <span style=\"font-weight:bold\">time-boxed</span> de un máximo de cuatro horas.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Se analiza cada elemento del Backlog incluído en el Sprint y el <span style=\"font-weight:bold\">Product Owner decide si cumple la definición de completado</span>.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Un elemento del Backlog <span style=\"font-weight:bold\">nunca puede estar parcialmente completado</span>.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Los elementos que no cumplen la definición de completado vuelven al Backlog para ser re-estimados y re-priorizados.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                El equipo y los stakeholders <span style=\"font-weight:bold\">deciden qué elementos del Backlog</span> son priorizados para que puedan ser <span style=\"font-weight:bold\">incluídos en el siguiente Sprint</span>.\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">\r\n                Al terminar se cuenta con un <span style=\"font-weight:bold\">Product Backlog revisado</span> y re-priorizado.\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"links-container\">\r\n    <div class=\"left-side-link-container\">\r\n        <a href=\"[[ROUTE:scrum-framework-five-]]\" class=\"post-content-link\">< Eventos de Scrum. Scrum diario o Stand Up Meeting</a>\r\n    </div\r\n    ><!--<div class=\"right-side-link-container\">\r\n        <a href=\"[[RO__UTE:scrum-framework-seven-]]\" class=\"post-content-link\">Eventos de Scrum. Retrospectiva de Sprint ></a>\r\n    </div>-->\r\n</div>\r\n<br>' WHERE (`post_content_id`='10');");
        $this->addSql("UPDATE `post_contents` SET `description`='<p>\r\n    Al <span style=\"font-weight:bold\">final de cada Sprint</span> tiene lugar la reunión de <span style=\"font-weight:bold\">Revisión de Sprint</span>.\r\n</p>\r\n<p>\r\n		La reunión de revisión de Sprint es un evento <span style=\"font-weight:bold\">time-boxed</span> de un máximo de cuatro horas de duración para Sprints de un mes y proporcionalmente menor en Sprints más cortos.\r\n</p>\r\n<p>\r\n    Durante esta reunión <span style=\"font-weight:bold\">se inspeccionan los elementos del Product Backlog</span> incluídos en el Sprint para valorar si <span style=\"font-weight:bold\">cumplen su definición de completado...\r\n</p>' WHERE (`post_content_id`='10');");
        $this->addSql("UPDATE `posts` SET `created`='2015-07-27 23:46:08' WHERE (`post_id`='10');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('10', '1');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('10', '3');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('10', '4');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('10', '5');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('10', '6');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('10', '7');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('10', '8');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('10', '9');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('10', '10');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('10', '11');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('9', '12');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('8', '12');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('7', '12');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('6', '12');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('5', '12');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('4', '12');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('3', '12');");
        $this->addSql("INSERT INTO `posts_links` (`post_id`, `link_id`) VALUES ('1', '12');");
        $this->addSql("UPDATE `post_contents` SET `content`='<p>\r\n    <span style=\"font-size: 60px\">S</span>e trata de una reunión <span style=\"font-weight:bold\">time-boxed de 15 minutos</span> que es mantenida todos los días a la misma hora y en el mismo lugar para ayudar a generar regularidad y reducir la complejidad.\r\n</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">\r\n        Cada día el Equipo de Desarrollo se reúne para <span style=\"font-weight:bold\">sincronizar</span> sus tareas y <span style=\"font-weight:bold\">elaborar un plan</span> de trabajo para las próximas 24 horas.\r\n    </div>\r\n</div>\r\n<p>\r\n    Además de decidir qué tareas serán realizadas en las próximas 24 horas el Daily Scrum es uno de los momentos de <span style=\"font-weight:bold\">inspección y adaptación</span> de Scrum. Si alguno de los miembros del Equipo de Desarrollo detecta algún problema o considera que\r\n    algo no se está llevando a cabo de la manera correcta debe ponerlo de manifiesto en esta reunión ante lo cual el Scrum Master podrá plantear una de las siguientes opciones:\r\n</p>\r\n<ul>\r\n    <li>\r\n        <p>Si el problema no es grave y el Equipo puede alcanzar una <span style=\"font-weight:bold\">solución</span> sin hacer peligrar el <span style=\"font-weight:bold\">objetivo de los 15 minutos</span> el Scrum Master permite que se valore el problema en la reunión.</p>\r\n    </li>\r\n    <li>\r\n        <p>Si la <span style=\"font-weight:bold\">discusión</span> se empieza a prolongar y aparenta ir para más largo el Scrum Master debe <span style=\"font-weight:bold\">cortarla</span> y proponer al Equipo celebrar una <span style=\"font-weight:bold\">Reunión de Grooming</span>\r\n            con todas las personas implicadas tan pronto como acabe el Daily Scrum para no consumir tiempo innecesariamente del resto de miembros del Equipo.\r\n        </p>\r\n    </li>\r\n</ul>\r\n<p>El mismo caso es aplicable a las frecuentes discusiones técnicas sobre cómo llevar a cabo una tarea que pudieran aflorar durante la reunión.</p>\r\n<p>Uno de los <span style=\"font-weight:bold\">problemas recurrentes</span> y más frecuentes en Scrum es la <span style=\"font-weight:bold\">transgresión</span> de la <span style=\"font-weight:bold\">duración</span> de los Daily Scrum. Os puedo asegurar que oiremos o leeremos a multitud de\r\n    grandes gurús en Scrum repetirnos que si la duración de la reunión alcanza los 15 minutos se debe cortar pero, en el mundo real, no es tan fácil. Depende de la pericia y asertividad del Scrum Master ser capaz de <span style=\"font-weight: bold;\">detectar</span> y aislar a tiempo el\r\n    <span style=\"font-weight: bold;\">motivo de la discusión</span> o la causa que genera la prolongación inusual de la reunión y conseguir <span style=\"font-weight: bold;\">detenerla de forma cordial</span> para proponer la ya mencionada <span style=\"font-weight: bold;\">Reunión de Grooming</span>.\r\n    Hablaremos de estas reuniones más adelante.\r\n</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">\r\n        <ul>\r\n            <li>\r\n                <p>¿Qué hice <span style=\"font-weight: bold;\">ayer</span> para ayudar al Equipo a alcanzar la <span style=\"font-weight: bold;\">Meta de Sprint</span>?</p>\r\n            </li>\r\n            <li>\r\n                <p>¿Qué voy a hacer <span style=\"font-weight: bold;\">hoy</span> para ayudar al Equipo a alcanzar la <span style=\"font-weight: bold;\">Meta de Sprint</span>?</p>\r\n            </li>\r\n            <li>\r\n                <p>Me he topado con algún tipo de <span style=\"font-weight: bold;\">impedimento</span> que pueda hacer peligrar la consecución de la M<span style=\"font-weight: bold;\">eta de Sprint</span> por parte del Equipo?</p>\r\n            </li>\r\n        </ul>\r\n    </div>\r\n</div>\r\n<p>Además el Scrum Master puede ayudar al equipo a revisar el  <span style=\"font-weight: bold;\">progreso</span> del trabajo hacia la consecución del Sprint mediante herramientas como el gráfico  <span style=\"font-weight: bold;\">Sprint Burn Down</span>, herramientas de las que hablaremos en la\r\n    sección de artefactos.\r\n</p>\r\n<p>Por último, señalar que en esta reunión es imprescindible que todos los miembros del  <span style=\"font-weight: bold;\">Equipo de Desarrollo</span> estén  <span style=\"font-weight: bold;\">presentes</span>, el  <span style=\"font-weight: bold;\">Scrum Master puede</span> o no estarlo y el\r\n    <span style=\"font-weight: bold;\">Product Owner no debería</span> estar, salvo que sea expresamente invitado por el equipo de desarrollo para tratar algún tema concreto.\r\n</p>\r\n\r\n<div class=\"key_points_text_box\">\r\n    <div class=\"title_box\">\r\n        <div class=\"generic_icon_container\"></div>\r\n        <div class=\"generic_title_container\">Key Points</div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">El <span style=\"font-weight: bold;\">Equipo de Desarrollo</span> se reúne <span style=\"font-weight: bold;\">todos los días</span> para sincronizar sus tareas y elaborar un plan de trabajo.</div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Debe tener lugar siempre a la <span style=\"font-weight: bold;\">misma hora</span> y en el <span style=\"font-weight: bold;\">mismo lugar</span>.</div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Es un momento Scrum clave de <span style=\"font-weight: bold;\">inspección y adaptación</span>.</div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Es una reunión <span style=\"font-weight: bold;\">time-boxed</span> de 15 minutos.</div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Si peligra el objetivo de 15 minutos el Scrum Master puede proponer una <span style=\"font-weight: bold;\">Reunión de Grooming</span> al finalizar el Daily Meeting.</div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Cada miembro del equipo comenta que hizo <span style=\"font-weight: bold;\">ayer</span>, que prevé hacer <span style=\"font-weight: bold;\">hoy</span> y si se ha topado con algún <span style=\"font-weight: bold;\">impedimento</span>.</div>\r\n        </div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">A esta reunión <span style=\"font-weight: bold;\">deben asistir</span> todos los miembros del <span style=\"font-weight: bold;\">equipo de desarrollo</span>.</div>\r\n        </div>\r\n    </div>\r\n</div>\r\n\r\n<div class=\"links-container\">\r\n    <div class=\"left-side-link-container\">\r\n        <a href=\"[[ROUTE:scrum-framework-four-]]\" class=\"post-content-link\">< Eventos de Scrum. Reunión de planificación</a>\r\n    </div\r\n    ><div class=\"right-side-link-container\">\r\n        <a href=\"[[ROUTE:scrum-framework-six-]]\" class=\"post-content-link\">Eventos de Scrum. Revisión de Sprint ></a>\r\n    </div>\r\n</div>\r\n<br>' WHERE (`post_content_id`='9');");
        $this->addSql("UPDATE `links` SET `home`='1' WHERE (`link_id`='12');");
        $this->addSql("UPDATE `links` SET `home`='1' WHERE (`link_id`='12');");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema) {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on \"mysql\".");
    }

}
