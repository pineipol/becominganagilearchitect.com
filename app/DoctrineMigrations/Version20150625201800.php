<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150625201800 extends AbstractMigration {

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema) {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on \"mysql\".");

        $this->addSql("UPDATE `post_contents` SET `content`='<p><span style=\"font-size: 60px\">S</span>oy Alejandro Barba, Ingeniero en Informática por la Universidad de León, y desde hace diez años ejerzo como programador, analista, consultor, arquitecto, gestor o lo que haga falta según las necesidades precisas del proyecto en cada fase de su ciclo de vida o de sus necesidades de negocio.</p>\r\n<p>Supongo que decidí lanzarme al estudio de una ingeniería debido a mi pasión por la informática y, por que no decirlo, porque se me daba bastante bien a nivel usuario. El mío fue un caso de vocación tardía, dado que fue la informática quien me encontró gracias a que, con quince años, mi hermano me regaló mi primer ordenador, un Pentium I MMX a 166Mhz, aunque por aquel entonces lo llamábamos simplemente Pentium.</p>\r\n<img align=\"left\" style=\"margin: 15px\" src=\"/uploads/posts/150315_blog-bootstrap/Pentium_MMX_Logo.jpg\">\r\n<p>Mis estudios como ingeniero me han servido para desechar una gran cantidad de ideas erróneas preconcebidas, aprender organización, a organizarme a mí mismo y, por qué no decirlo, a entender cada uno de los pasos y mecanismos que entran en juego desde que se pulsa una tecla en el teclado hasta que vemos escrita la letra en la pantalla, es decir, a deshechar la magia del proceso y quedarnos tan sólo la ciencia. Pero no es que dichos estudios me hayan servido, en el sentido estricto de la palabra, para aprender a programar, eso se aprende después. Lo que sí han conseguido ha sido ponerme en el camino de las preguntas correctas, a las que voy encontrando respuesta en los compañeros, la experiencia y, sobre todo, en una buena cantidad de libros.</p>\r\n<p>Hace ya bastantes meses se me ocurrió la idea de organizar y estructurar mis ideas y plasmar el resultado en un blog. El resultado debía ser un blog que fuera capaz de dar respuesta a las dudas más sencillas y arrojar cierta luz sobre las grandes preguntas, es decir, que contuviera tanto recetas DevOps para configurar paso a paso un sencillo servidor Web como ideas y buenas prácticas que pudieran ayudar a diseñar un proyecto complejo y escalable.</p>\r\n<img align=\"right\" style=\"margin: 15px\" src=\"/uploads/posts/150315_blog-bootstrap/agile.png\">\r\n<p>Además de contar con recetas para hacer tareas específicas a modo de tutorial, plantear problemas y ofrecer soluciones a grandes cuestiones de diseño y arquitectura para sistemas complejos, el blog debería hacer todo esto desde un punto de vista Agile, es decir, enseñarnos desde el minuto cero cómo ser ágiles y tener en cuenta cómo sacar el mayor provecho al agilismo. Aunque veremos las principales diferencias entre diversas metodologías ágiles nos centraremos en aquella que, por mi experiencia profesional y preparación, conozco en mayor grado, Scrum.</p>\r\n<p>El objetivo del blog no es proporcionar todas las respuestas sobre lo que debe ser, qué debe saber o cómo debe actuar un arquitecto Agile, sino sembrar una buena cantidad de preguntas y problemas y ofrecer posibles soluciones a los mismos. Será tarea vuestra aplicar o adaptar dichas soluciones a vuestros problemas o lógica de negocio y sus circunstancias concretas. También espero que sirva como aliciente o punto de partida para abrir nuevas vías de investigación y experimentación que den lugar a desconocidos y emocionantes niveles de excelencia, productividad y retorno de inversión.</p>\r\n<p>Os invito a acompañarme en esta aventura que, semana tras semana, podremos ir descubriendo y comprendiendo juntos.</p>\r\n<div class=\"links-container\">\r\n		<div class=\"right-side-link-container\">\r\n        <a href=\"[[ROUTE:loading-]]\" class=\"post-content-link\">Loading... ></a>\r\n    </div>\r\n</div>\r\n<br>\r\n' WHERE (`post_content_id`='1');");
        $this->addSql("UPDATE `post_contents` SET `content`='<p><span style=\"font-size: 60px\">E</span>l hilo conductor del blog estará formado por varios proyectos, en principio tengo dos en la cabeza, con los que pretendo plantear diversos problemas o necesidades, analizar las posibles soluciones e ir llevando a cabo, a lo largo de una serie de posts, el desarrollo de cada uno mediante la implementación de tecnologías que den solución a dichos problemas, tratando siempre de buscar algún tipo de valor añadido.<br>\r\nEl primero de los proyectos sería el propio blog, el segundo, una herramienta Agile de gestión de equipos de desarrollo mediante Scrum.</p>\r\n<p>Durante el desarrollo de los proyectos detallaré mi experiencia y punto de vista sobre cada una de las etapas del ciclo de vida de los mismos y explicaré cómo convertir esta frase tan de “desarrollo en cascada” en algo más Agile.</p>\r\n<ul>\r\n<li><p>Hablaremos de cómo formar un equipo, cómo elegir los roles necesarios dentro del mismo y cómo seleccionar al candidato más adecuado para cada uno de los puestos. Compartiré con vosotros mis preferencias sobre dónde buscar y cómo conseguir que, además de poder elegir a la persona que quieras, que dicha persona quiera también formar parte de nuestro proyecto.</p></li>\r\n<li><p>Compartiré con vosotros las mejores técnicas de desarrollo que he ido aprendiendo y madurando por mi cuenta a lo largo de mi trayectoria profesional o que me han resultado útiles en determinadas circunstancias. Explicaré mi visión sobre cómo organizar el código y escogeremos las herramientas más adecuadas para que nuestro equipo lleve a cabo su trabajo de forma óptima.</p></li>\r\n<li><p>Os hablaré de las principales técnicas de testing, desde simples pruebas ejecutadas por un operador al Diseño Orientado a Pruebas de Aceptación (Acceptance Test Driven Development) o al Diseño Orientado a Comportamiento (Behaviour Driven Development).</p></li>\r\n<li><p>Aprenderemos a configurar un servidor de Integración Continua (Continuous Integration) y cómo sacarle el mayor partido mediante el uso de los plugins adecuados y la instalación de un servidor de integración con el que beneficiarse de la Entrega Continua (Continuous Delivery). Además entenderemos la importancia clave que un departamento de control de calidad (Quality Assurance) puede jugar en nuestros proyectos.</p></li>\r\n<li><p>Llegado el momento de desplegar nuestro trabajo en producción aprenderemos a configurar los servidores, a elegir la cantidad y configuración de máquinas adecuadas, balancearlas, montar grupos de auto escalado, a automatizar los despliegues, etc. y todo ello sin descuidar la seguridad de nuestros sistemas y nuestros datos.</p></li>\r\n<li><p>Por último, aunque no necesariamente lo abordaremos en este orden, explicaré cómo convertirnos en Agile. Aprenderemos a enfocar, no sólo nuestro proyecto sino cada una de sus tareas, de forma ágil mediante el framework Scrum. Entenderemos los pormenores de dicho framework y analizaremos sus ventajas, tanto las evidentes como las no tan evidentes. Compararemos Scrum con otras metodologías ágiles y aprenderemos a gestionar nuestro equipo para convertirnos en respetados líderes en lugar de temidos jefes.</p></li>\r\n</ul>\r\n<div class=\"links-container\">\r\n    <div class=\"left-side-link-container\">\r\n        <a href=\"[[ROUTE:blog-bootstrap-]]\" class=\"post-content-link\">< Blog Bootstrap</a>\r\n    </div\r\n    ><div class=\"right-side-link-container\">\r\n        <a href=\"[[ROUTE:agile-architect-]]\" class=\"post-content-link\">Arquitecto Agile ></a>\r\n    </div>\r\n</div>\r\n<br>' WHERE (`post_content_id`='3');");
        $this->addSql("UPDATE `post_contents` SET `content`='<p><span style=\"font-size: 60px\">A</span> veces el camino desde la puerta de la universidad a un puesto de Arquitecto Agile puede ser una larga peregrinación, otras veces, simplemente, un paso demasiado corto. En general la segunda vía es más fácil pero no suele ser cierta.</p>\r\n<p>Arquitecto puede ser tanto aquel que, de facto, hace las labores del puesto, aquel al que le ha tocado o le ha sido impuesto o aquel que, con su experiencia, se ha ganado el respeto de sus compañeros y la admiración de sus superiores. Nosotros vamos a tratar de imitar al último tipo, no porque sea más digno o se lo merezca más, sino porque es aquel al que queremos parecernos y del que esperamos aprender cuanto podamos.</p>\r\n<p>Un Arquitecto Agile debe ser una persona capaz de, dadas unas especificaciones y un presupuesto, tener claro desde el primer instante qué es lo que hay que hacer y cómo llevarlo a cabo.<br>\r\nUn arquitecto no sabe lo que va a pasar en el futuro pero tiene los conocimientos, la experiencia y la audacia necesarias para anticiparse a lo que ha de suceder y lograr conducir el proyecto por un camino suficientemente equilibrado como para terminar en plazo y en precio.</p>\r\n<ul>\r\n<li><p>Lo primero que hará un arquitecto es, no sólo asegurarse de haber comprendido la funcionalidad y el alcance completo del proyecto, sino el objetivo final del mismo y las motivaciones que han llevado a desear su desarrollo.</p></li>\r\n<li><p>Acto seguido buscará y seleccionará al equipo necesario para llevarlo a cabo y se encargará de mantener a dicho equipo altamente motivado y organizado, contando con las herramientas adecuadas para maximizar su potencial y productividad a la vez que transmite al mismo los objetivos y motivaciones del proyecto como si fuera suyo.</p></li>\r\n<li><p>Planificará cada aspecto del proyecto buscando eliminar la mayor cantidad posible de incertidumbre en las etapas iniciales del mismo, es decir, tratará de probar o experimentar con las partes más complejas o delicadas del mismo cuanto antes para evitar sorpresas de última hora o replantearlas en caso de que su desarrollo fuera inviable dadas las circunstancias del proyecto.</p></li>\r\n<li><p>Desde el inicio del desarrollo garantizará la calidad de los productos llevados a cabo y se asegurará de que cuenten con un diseño que favorezca su escalabilidad y mantenibilidad. Además velará para que dichos productos se mantengan libres de errores.</p></li>\r\n<li><p>Por último, el factor diferencial que convertirá en Agile al arquitecto será la búsqueda del mayor índice posible de Retorno de Inversión tan pronto como sea posible o tenga sentido dentro del proyecto, generando entregables operativos de funcionalidad acotada a intervalos regulares de tiempo y analizando y reconduciendo el rumbo del proyecto para adaptarse a los cambios de definición y alcance que el cliente pueda necesitar, consiguiendo con ello minimizar el coste de los mismos.</p></li>\r\n</ul>\r\n<p>Llegar a convertirse en arquitecto no suele ser una tarea ni rápida ni sencilla. Para ello se necesitará una buena dosis de los siguientes ingredientes:</p>\r\n<ul>\r\n<li><p>Observación e imitación de todo aquel que pueda enseñarnos algo.</p></li>\r\n<li><p>Esfuerzo, perseverancia y responsabilidad para llevar siempre el compromiso entre productividad y eficiencia al nivel de máximo equilibrio.</p></li>\r\n<li><p>Estudio, pues un buen arquitecto es como un médico, debe ser capaz de reciclarse más rápido de lo que lo hace su propia ciencia, en este caso, la tecnología.</p></li>\r\n<li><p>Audacia y atrevimiento para innovar y experimentar, pues llevar las cosas a la práctica es la única manera real de afianzar los conocimientos adquiridos y deshechar aquellos que, por su eficacia o complejidad, no sean adecuados en términos prácticos.</p></li>\r\n</ul>\r\n<p>Una de las labores fundamentales del arquitecto, si además se diera el caso probable de que éste ejerza el rol de Scrum Master dentro del equipo, será la de eliminar cualquier tipo de impedimento o distracción que dificulte o impida el trabajo óptimo de cada uno de los miembros del mismo.</p>\r\n<div class=\"links-container\">\r\n    <div class=\"left-side-link-container\">\r\n        <a href=\"[[ROUTE:loading-]]\" class=\"post-content-link\">< Loading...</a>\r\n    </div\r\n    ><div class=\"right-side-link-container\">\r\n        <a href=\"[[ROUTE:lean-agile-scrum-]]\" class=\"post-content-link\">Agile, Lean, Scrum, Kanban… ¿cuál es la &nbsp;diferencia? ></a>\r\n    </div>\r\n</div>\r\n<br>' WHERE (`post_content_id`='2');");
        $this->addSql("UPDATE `post_contents` SET `content`='<p><span style=\"font-size: 60px\">L</span>os términos Agile, Scrum, Kanban, etc. están de moda, es un hecho, pero si  empezamos a investigar en qué consiste cada uno enseguida nos encontramos con otros términos con los que se entrecruzan e, inmediatamente, nos damos cuenta de que no somos capaces de distinguir dónde termina cada uno y empieza el siguiente.</p>\r\n<p>Por un lado, unos parecen ser filosofías y otros metodologías. Unos parecen más amplios y da la impresión de que engloban a otros pero, cuando parece que los conceptos empiezan a aclararse, se llega a la conclusión de que Scrum es una forma de Agile, Kanban viene de Lean pero también es Agile aunque Scrum es anterior a Agile… En medio de esta confusión… ¿quién es quién?</p>\r\n<p>En cierto modo todo este solapamiento no sólo es normal sino inevitable dado que todos son sistemas diseñados para incrementar la productividad por lo que es de esperar que distintas mentes brillantes en distintos momentos de la historia y, ante problemas de naturaleza similar, lleguen a las mismas o parecidas conclusiones. Cada uno de estos sistemas persigue los mismos objetivos, aumentar la productividad, mejorar la calidad y reducir el coste y el tiempo empleado en el desarrollo de sus productos.</p>\r\n<p>Si nos remontamos hacia atrás en el tiempo se podría decir que el germen común a todos ellos reside en Henry Ford y Frederick Taylor y sus avances en productividad durante la revolución industrial. Fueron estos avances los que inspiraron al japonés Taiichi Ohno, director y consultor de Toyota, para desarrollar el método Lean de producción industrial.</p>\r\n<ul>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Lean</span> significa magro, esbelto y la base de su filosofía consiste en eliminar los “desperdicios”, es decir, eliminar todo aquello que no aporte valor o, incluso, que no lo hará en el futuro. Uno de los ejemplos más sorprendentes pero simples de este principio consiste en la eliminación de las puertas en los armarios de muchas empresas japonesas, si no se esconde nada… ¿qué aporta la puerta?</p>\r\n        <p>El término fue llevado al campo del desarrollo de software por Mary y Tom Poppendieck en su libro Lean Software Development. En él realizan una adaptación de los principios industriales.</p>\r\n        <p>Los valores de Lean son:</p>\r\n        <p>\r\n            <ul>\r\n                <li><p>Eliminar los desperdicios (código innecesario, burocracia, comunicación lenta, reuniones innecesarias, etc.)</p></li>\r\n                <li><p>Ampliar el aprendizaje</p></li>\r\n                <li><p>Eliminar incertidumbre antes de tomar decisiones o decidir lo más tarde posible</p></li>\r\n                <li><p>Reaccionar lo antes posible ante el cambio</p></li>\r\n                <li><p>Potenciar el equipo</p></li>\r\n            </ul>\r\n        </p>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Agile</span> es un movimiento de reacción ante las estrictas reglas de las metodologías tradicionales de desarrollo de software. Se formaliza en Febrero de 2001, en el Snowbird Resort, Utah, donde 17 conocidos desarrolladores y defensores de metodologías que promovían técnicas ágiles firman el Agile Manifesto, un listado de principios que recoge la esencia filosófica del agilismo.</p>\r\n        <p>De todos los sistemas de los que estamos hablando se podría decir que Agile representa el más filosófico, pues no es una metodología ni un framework que diga cómo hacer las cosas, sino un conjunto de principios y valores a tener en cuenta para evitar los problemas de los sistemas tradicionales de desarrollo de software.</p>\r\n        <p>Pese a ser anteriores, tanto Lean cómo Scrum podrían ser considerados ágiles pues su forma de plantear el desarrollo y sus valores encajan dentro del Agile Manifesto y ambos ejercieron una gran influencia en la redacción del mismo.</p>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Scrum</span> es un framework. No es una filosofía ni una metodología de trabajo. Sus creadores lo definen como un framework dado que está formado por una serie de roles, eventos, artefactos y normas precisos cada uno de los cuales tiene un fin específico por lo que si no se hace uso de todos y cada uno de ellos, según sus creadores, se estará haciendo algo similar a Scrum, pero no Scrum.</p>\r\n        <p>Scrum proviene del trabajo de Ikujiro Nonaka e Hirotaka Takeuchi a principios de los 80 aunque su forma final se debe al trabajo “Scrum Development Process” que Ken Schwaber presentó en OOPSLA 95. Tanto Ken Schwaber como Jeff Sutherland son considerados sus creadores oficiales.</p>\r\n        <p>Los principios de Scrum encajan a la perfección dentro de la filosofía Agile y sus creadores forman parte de los firmantes del Agile Manifesto.</p>\r\n    </li>\r\n    <li>\r\n        <p>El método <span style=\"font-weight:bold\">Kanban</span> basa su funcionamiento en la entrega just-in-time (justo a tiempo), otro modelo de producción industrial proveniente de las factorías de Toyota. </p>\r\n        <p>Uno de los fuertes de Kanban es la gestión visual del proceso mediante tableros e indicadores (kanban, en japonés, significa tarjeta). Pese a lo que muchos puedan creer, los tableros de Scrum para el manejo de Sprints y Releases no son propios del framework sino importados de Kanban.</p>\r\n        <p>Las prácticas fundamentales del método Kanban son:</p>\r\n        <p>\r\n            <ul>\r\n                <li><p>Visualizar el flujo de trabajo y su avance</p></li>\r\n                <li><p>Limitar el trabajo en curso para evitar cuellos de botella</p></li>\r\n                <li><p>Dirigir y gestionar el flujo de trabajo</p></li>\r\n                <li><p>Indicar y comprender claramente las reglas del proceso</p></li>\r\n                <li><p>Reconocer y aprovechar las oportunidades de mejora</p></li>\r\n            </ul>\r\n        </p>\r\n    </li>\r\n</ul>\r\n<p>Se podría decir, por tanto, que cada uno de estos métodos, frameworks o filosofías comparten una serie de valores u objetivos comunes, los cuales son reconocidos y defendidos por el Agile Manifesto:</p>\r\n<ul>\r\n    <li><p>Entrega iterativa e incremental de producto terminado y usable</p></li>\r\n    <li><p>Reacción temprana al cambio</p></li>\r\n    <li><p>Inspección del trabajo completado y del proceso llevado a cabo</p></li>\r\n    <li><p>Adaptación del proceso para mejorarlo</p></li>\r\n    <li><p>Potenciación y motivación del equipo</p></li>\r\n    <li><p>Comunicación</p></li>\r\n    <li><p>Desarrollo sostenible en cada etapa del ciclo de vida del proyecto</p></li>\r\n    <li><p>Simplicidad y diseño emergente</p></li>\r\n</ul>\r\n<p>Hablaremos más de cada uno de ellos, pero sobre todo de Scrum, en posts posteriores.</p>\r\n<div class=\"links-container\">\r\n    <div class=\"left-side-link-container\">\r\n        <a href=\"[[ROUTE:agile-architect-]]\" class=\"post-content-link\">< Arquitecto Agile</a>\r\n    </div\r\n    ><div class=\"right-side-link-container\">\r\n        <a href=\"[[ROUTE:scrum-framework-one-]]\" class=\"post-content-link\">Scrum. El framework de los roles, eventos y artefactos ></a>\r\n    </div>\r\n</div>\r\n<br><br>' WHERE (`post_content_id`='4');");
        $this->addSql("UPDATE `post_contents` SET `content`='<p><span style=\"font-size: 60px\">A</span>ntes de empezar a pensar en el código del primer proyecto comentado en el post <a href=\"[[ROUTE:loading-]]\" class=\"post-content-link\">Loading...</a> resulta imprescindible una introducción a <a href=\"https://www.scrum.org/\" target=\"_blank\" class=\"post-content-link\">Scrum</a>, dado que basaremos nuestra forma de trabajo en dicha metodología Agile.</p>\r\n<p>Scrum es, sin duda, la más popular de entre las ramas del mundo Agile orientadas al desarrollo de software. El motivo es sencillo, Scrum es, como sus propios creadores apuntan, un framework, ni una filosofía, ni una disciplina, ni una metodología ni nada por el estilo, simplemente, un framework.</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">Scrum es un <span style=\"font-weight:bold\">framework</span> formado por un conjunto de <span style=\"font-weight:bold\">roles, eventos y artefactos</span> concebidos y diseñados para facilitar la implantación de los valores Agile en un entorno de trabajo o en el seno de una entera organización, es por eso que es también uno de los colores Agile más sencillo de implementar, pues sólo hay que seguir una serie de normas precisa y minuciosamente descritas.</div>\r\n</div>\r\n<p>Como ya señalado en el post <a href=\"[[ROUTE:lean-agile-scrum-]]\" class=\"post-content-link\">Agile, Lean, Scrum, Kanban… ¿cuál es la diferencia?</a> es fácil pensar que Scrum sea una especialización dentro del mundo Agile, pero no es así, pues Scrum es unos diez años anterior al <a href=\"http://www.agilemanifesto.org/\" target=\"_blank\" class=\"post-content-link\">Agile Manifesto</a>, aunque influyó en buena manera en la redacción de éste último, pues sus dos creadores formaban parte de los 17 firmantes.</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">Scrum es un framework pensado para gestionar de forma eficiente tanto el desarrollo como el mantenimiento de <span style=\"font-weight:bold\">productos complejos en entornos complejos</span>, y entre sus mayores virtudes se encuentran la <span style=\"font-weight:bold\">gestión del cambio</span> y el <span style=\"font-weight:bold\">control del riesgo</span>.</div>\r\n</div>\r\n<p>La gestión del cambio y el control del riesgo se consigue planificando el desarrollo de los proyectos en iteraciones de corta duración llamadas <span style=\"font-weight:bold\">Sprints</span>, tras cada una de las cuales se inspecciona el trabajo completado directamente con el cliente y se decide si dicho incremento avanza en la dirección correcta o no, pues como reza un antiguo proverbio chino, <span style=\"font-style:italic\">si continuas avanzando en la misma dirección llegarás exactamente al lugar al que te diriges</span>.</p>\r\n<br>\r\n<p><span style=\"font-weight:bold\">Principios de Scrum</span></p>\r\n<p>Scrum está basado en el <a href=\"https://es.wikipedia.org/wiki/Empirismo\" target=\"_blank\" class=\"post-content-link\">empirismo</a>, es decir, observación y medida de experiencias pasadas en vez de predicciones sin una base tangible. Esta condición hace que, <span style=\"font-weight:bold\">para que sea posible hacer Scrum, se requiere un tiempo haciendo Scrum</span>, es decir, se necesita un cierto rodaje para poder calcular la capacidad de producción, o velocidad de desarrollo en términos de Scrum, de los equipos de desarrollo implicados en base a resultados anteriores. Esto no significa que un equipo sin experiencia no pueda empezar a hacer Scrum, simplemente quiere decir que las predicciones que realicen para sus iteraciones o Sprints serán significativamente más acertadas a medida que los Sprints se vayan sucediendo y se vaya ganando experiencia.</p>\r\n<p>Los valores fundamentales de Scrum son:</p>\r\n<ul>\r\n    <li>\r\n        <p>\r\n            <span style=\"font-weight:bold\">Transparencia.</span> Todos los aspectos de un proceso deben ser transparentes a todos sus responsables, es decir, no podemos excluir a los desarrolladores de la parte de diseño ni al consultor de producto de los problemas del desarrollo.<br>\r\n            Los primeros pueden tener mucho que decir en cuanto a cómo un diseño demasiado complejo puede encarecer el proyecto, quizás a cambio de un retorno artístico ínfimo y el segundo podría tratar de proponer al cliente alternativas a una funcionalidad si ésta resultara tan costosa en tiempo y problemática respecto a su desarrollo que pudiera hacer peligrar la calidad del producto innecesariamente.\r\n        </p>\r\n        <div class=\"green_text_box\">\r\n            <div class=\"generic_icon\"></div\r\n            ><div class=\"generic_text_container\">Una de las consecuencias inmediatas de la transparencia consiste en el sentimiento de propiedad colectiva del proyecto y cooperación interdepartamental, queriendo decir esto que todos los implicados cooperan activamente pues el resultado afecta e interesa a todos por igual.</div>\r\n        </div>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Inspección.</span> En un proyecto Scrum la inspección debe ser una constante, es decir, se debe cuestionar cada paso una vez completado y en equipo y discutir y decidir si resulta efectivo o no. En Scrum cualquier momento es bueno para la inspección aunque cuenta con eventos específicos dedicados a tal fin.</p>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Adaptación.</span> Si tras la inspección se decide que alguno de los procedimientos o tareas que se ha llevado a cabo nos alejan de la consecución del objetivo del proyecto dicha práctica debe ser modificada o sustituida por otra cuyo efecto sea el deseado.<br>\r\n            En general, la adaptación se decide al final de cada Sprint aunque debe tener lugar lo antes posible una vez que el inconveniente o problema ha sido detectado es por ello que los Daily Scrum, reunión diaria de planificación e inspección en Scrum, son también momentos de inspección y adaptación.</p>\r\n    </li>\r\n</ul>\r\n<p>Aunque no sea oficial, me gustaría añadir otro elemento que, en mi opinión, resulta ser inherente a Scrum y fundamental para su buena marcha, el equipo. Scrum es cosa de equipos y la primera gran ventaja que Scrum nos aportará de forma sorprendente, y casi inmediata, es que Scrum genera equipo.</p>\r\n<p>Es difícil gestionar un proyecto Scrum con un equipo de una única persona. Para un freelance podría ser una gran ventaja, de cara al cliente, abordar el proyecto de forma iterativa pues se aumenta la frecuencia de feedback, se mantiene el riesgo bajo control volviendo a priorizar y planificar las tareas pero se pierde el elemento de control de los compañeros de equipo, es decir, si empezamos haciendo algo técnico de una determinada manera porque creemos que es lo correcto, difícilmente alguien nos hará ver si estamos equivocados o si existe otra forma mejor de hacerlo y, por tanto, carecen de sentido los eventos de inspección y adaptación que definiremos enseguida por lo cual, y por definición de sus creadores, si no usas todos los elementos de Scrum estarás haciendo algo parecido, pero no será Scrum. De hecho ellos recomiendan no configurar equipos de Scrum de menos de tres miembros dentro del Equipo de Desarrollo.</p>\r\n<br>\r\n<p><span style=\"font-weight:bold\">Componentes de Scrum</span></p>\r\n<p>Scrum está formado por tres tipos de elementos que analizaremos en detalle en las secciones siguientes, roles, eventos y artefactos. Además Scrum define una serie de normas que los coordinan entre sí.</p>\r\n<p>Como ya mencionado, según sus creadores, cada uno de estos elementos es parte fundamental del framework y si se decide prescindir de alguno de ellos no se estará realmente haciendo Scrum, algo parecido sí, pero no Scrum.</p>\r\n<p>Este tipo de situaciones se conoce como <a href=\"https://www.scrum.org/ScrumBut\" target=\"_blank\" class=\"post-content-link\">ScrumButs</a>, es decir, se modifican las reglas de Scrum para tratar de sortear un problema.</p>\r\n<p>Suelen responder a la sintaxis:</p>\r\n<p style=\"text-align:center\"><span style=\"font-weight:bold\">(ScrumBut)(Razón)(Solución adoptada)</span></p>\r\n<p>Por ejemplo, (Usamos Scrum, pero)(tener un Daily Scrum cada día supone mucha carga de horas)(por eso lo hacemos sólo una vez a la semana).</p>\r\n<p>En cualquier caso, lo que estemos haciendo no podrá ser llamado Scrum.</p>\r\n\r\n<div class=\"key_points_text_box\">\r\n    <div class=\"title_box\">\r\n        <div class=\"generic_icon_container\"></div>\r\n        <div class=\"generic_title_container\">Key Points</div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Scrum es un framework</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Scrum está compuesto por roles, eventos y artefactos</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Scrum sigue los valores y principios Agile</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Agile ayuda a gestionar el cambio y controlar el riesgo</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Scrum se basa en el empirismo</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Los principios de Scrum son transparencia, inspección y adaptación Los principios de Scrum son transparencia, inspección y adaptación</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Scrum genera equipo</div>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"links-container\">\r\n    <div class=\"left-side-link-container\">\r\n        <a href=\"[[ROUTE:lean-agile-scrum-]]\" class=\"post-content-link\">< Agile, Lean, Scrum, Kanban… ¿cuál es la diferencia?</a>\r\n    </div>        \r\n</div>\r\n<br>' WHERE (`post_content_id`='5');");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema) {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on \"mysql\".");
    }

}
