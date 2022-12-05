<?php
session_start();
include "../view/partials/constantes.php"
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>crud</title>
  <link rel="stylesheet" href="../../public/css/styles.css">
</head>

<body>
  <article class="card card--project">
    <div class="card__image-container">
      <img src="public/assets/images/project_portfolio.jpg" alt="Landing page" class="card__image" />
    </div>
    <div class="project">
      <h2 class="card__title" data-section="Project" data-value="first-project-title">
        TITULO
        <input type="text" name="Titulo" id="Titulo" placeholder="Introducir titulo en castellano">
      </h2>
      <h2 class="card__title" data-section="Project" data-value="first-project-title">
        TITLE
        <input type="text" name="Title" id="Title" placeholder="enter title in english ">
      </h2>
      <div class="project__tags">

        <?php 
            echo html_check ;
            echo css_check;
            echo sass_check;
            echo js_check;
            echo responsive_check;
            echo php_check;
            echo java_check;
            echo node_check;
            echo react_check;
            echo vba_check;
            echo mysql_check;             
         ?>
      </div>

      <p class="card__text" data-section="Project" data-value="first-paragraph-description-p1">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
        voluptate soluta, ea eius exercitationem reiciendis quis excepturi
        incidunt nostrum mollitia, aut facilis optio id. Maiores labore
        placeat optio reiciendis quos!
      </p>
      <p class="card__text" data-section="Project" data-value="second-paragraph-description-p1">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias,
        ut? Corporis, similique, voluptates nisi amet ducimus omnis natus
        cum dicta, optio accusantium est saepe quisquam illum aut fugit!
        Quibusdam, quasi.
      </p>
      <div class="buttons">
        <a href="#" class="button button--primary" target="_blank">Demo</a>
        <a href="#" class="button button--ghost" target="_blank">Code</a>
      </div>
    </div>
  </article>
</body>

</html>