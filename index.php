<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>portfolio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

  <link rel="stylesheet" href="css/styles.css" />
  <link rel="shortcut icon" href="assets/icons/logo.ico" type="image/x-icon" />
</head>

<body class="dark">
  <header class="header">
    <div class="switches">
      <div id="toggle-theme" class="toggle-theme">
        <img id="toggle-icon" src="assets/icons/moon.svg" alt="icon theme" class="toggle-theme__icon" />
        <p id="toggle-text" class="toggle-theme__text">Dark mode</p>
      </div>
    </div>
    <!-- Selector multi-idiomas -->
    <div id="flags" class="flags">
      <div class="flags__item">
        <img src="assets/icons/es.svg" data-language="es" alt="" />
      </div>
      <div class="flags__item">
        <img src="assets/icons/gb.svg" data-language="en" alt="" />
      </div>
    </div>

    <!-- selector de color -->
    <div id="toggle-colors" class="colors">
      <div data-color="hsl(214, 84%, 56%)" class="colors__item colors__item--blue"></div>

      <div data-color="hsl(150, 84%, 56%)" class="colors__item colors__item--green"></div>

      <div data-color="hsl(276, 84%, 56%)" class="colors__item colors__item--purple"></div>

      <div data-color="hsl(46, 84%, 56%)" class="colors__item colors__item--orange"></div>
    </div>
  </header>
  <main class="main">
    <section class="column column--left">
      <!-- PROFILE CARD -->
      <article class="card card--profile">
        <!-- contenedor imagen -->
        <div class="card__image-container">
          <img src="assets/images/profile.jpg" alt="" />
        </div>
        <!-- cabecera de la targeta -->
        <div class="card__header">
          <h2 class="card__title">Manuel Jesús Donoso Pérez</h2>
          <p class="card__subtitle" data-section="profile" data-value="rol"="">
            developer
          </p>
        </div>
        <!-- cuerpo de la targeta -->
        <div class="card__body">
          <!-- enlance correo -->
          <div class="card__link">
            <!-- icono font awesome -->
            <i class="fas fa-envelope icon"></i>
            <a href="mailto:developer@manueldonoso.es">developer@manueldonoso.es</a>
          </div>
          <!-- enlance correo -->
          <div class="card__link">
            <!-- icono font awesome -->
            <i class="fas fa-envelope icon"></i>
            <a href="mailto:proyectos@manueldonoso.es">proyectos@manueldonoso.es</a>
          </div>
          <!-- enlance telefono -->
          <div class="card__link">
            <!-- icono font awesome -->
            <i class="fas fa-phone-alt icon"></i>
            <a href="tel:655354312">+34 655 35 43 12</a>
          </div>
          <!-- descripcion -->
          <p class="card__text" data-section="profile" data-value="description">
            Estudiante del IES ALBARREGAS, Apasionado de las nuevas
            tecnologías, y en especial por el desarrollo web.
          </p>
          <!-- fin cuerpo de targeta -->
        </div>
      </article>
    </section>

    <section class="column column--right">
      <article class="card">
        <h2 class="card__title">Front End</h2>
        <small>Años de experiecia</small>

        <div class="skills">
          <div class="skills_header">
            <span class="skills__start-level">0</span>
            <span class="skills__start-level">5</span>
          </div>

          <div class="skills__item">
            <p class="skill__tech">HTML</p>
            <div class="skills__bar skills__bar--40"></div>
          </div>

          <div class="skills__item">
            <p class="skill__tech">CSS</p>
            <div class="skills__bar skills__bar--30"></div>
          </div>

          <div class="skills__item">
            <p class="skill__tech">SASS</p>
            <div class="skills__bar skills__bar--30"></div>
          </div>
          <div class="skills__item">
            <p class="skill__tech">JavaScript</p>
            <div class="skills__bar skills__bar--30"></div>
          </div>
        </div>
      </article>

      <article class="card">
        <h2 class="card__title">Back End</h2>
        <small>Años de experiecia</small>

        <div class="skills">
          <div class="skills_header">
            <span class="skills__start-level">0</span>
            <span class="skills__start-level">5</span>
          </div>
          <div class="skills__item">
            <p class="skill__tech">PHP</p>
            <div class="skills__bar skills__bar--40"></div>
          </div>
          <div class="skills__item">
            <p class="skill__tech">Node.js</p>
            <div class="skills__bar skills__bar--40"></div>
          </div>
        </div>
      </article>

      <article class="card">
        <h2 class="card__title">Otras Tecnologias</h2>
        <small>Años de experiecia</small>

        <div class="skills">
          <div class="skills_header">
            <span class="skills__start-level">0</span>
            <span class="skills__start-level">5</span>
          </div>
          <div class="skills__item">
            <p class="skill__tech">JAVA</p>
            <div class="skills__bar skills__bar--40"></div>
          </div>
          <div class="skills__item">
            <p class="skill__tech">VBA</p>
            <div class="skills__bar skills__bar--40"></div>
          </div>
        </div>
      </article>

      <!-- proyectos -->
      <article class="card card--project">
        <div class="card__image-container">
          <img src="assets/images/project_portfolio.jpg" alt="Landing page" class="card__image" />
        </div>
        <div class="project">

          <!-- <div id="flags" class="flags">
            <div class="flags__item">
              <img src="assets/icons/es.svg" data-language="es" alt="" />
            </div>
            <div class="flags__item">
              <img src="assets/icons/gb.svg" data-language="en" alt="" />
            </div>
          </div> -->


          <div class="project__tags">









            <span class="project__tag">
              <div class="tag__item">
                <img src="assets/icons/html.svg" alt="" />
              </div>

            </span>
            <span class="project__tag">
              <div class="tag__item">
                <img src="assets/icons/css.svg" alt="" />
              </div>
            </span>
            <span class="project__tag">

              <div class="tag__item">
                <img src="assets/icons/js.svg" alt="" />
              </div>
            </span>
            <span class="project__tag">
              <div class="tag__item">
                <img src="assets/icons/responsive.svg" alt="" />
              </div>
            </span>
          </div>
          <h2 class="card__title" data-section="Project" data-value="first-project-title">
            Landing page
          </h2>
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

      <article class="card card--project">
        <div class="card__image-container">
          <img src="assets/images/project.jpg" alt="Landing page" class="card__image" />
        </div>
        <div class="project">
          <div class="project__tags">
            <span class="project__tag">html</span>
            <span class="project__tag">CSS</span>
            <span class="project__tag">JS</span>
            <span class="project__tag">Responsive</span>
          </div>
          <h2 class="card__title" data-section="Project" data-value="second-project-title">
            Landing page
          </h2>
          <p class="card__text" data-section="Project" data-value="first-paragraph-description-p2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
            voluptate soluta, ea eius exercitationem reiciendis quis excepturi
            incidunt nostrum mollitia, aut facilis optio id. Maiores labore
            placeat optio reiciendis quos!
          </p>
          <p class="card__text" data-section="Project" data-value="second-paragraph-description-p2">
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

      <article class="card card--project">
        <div class="card__image-container">
          <img src="assets/images/project.jpg" alt="Landing page" class="card__image" />
        </div>
        <div class="project">
          <div class="project__tags">
            <span class="project__tag">html</span>
            <span class="project__tag">CSS</span>
            <span class="project__tag">JS</span>
            <span class="project__tag">Responsive</span>
          </div>
          <h2 class="card__title" data-section="Project" data-value="third-project-title">
            Landing page
          </h2>
          <p class="card__text" data-section="Project" data-value="first-paragraph-description-p3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
            voluptate soluta, ea eius exercitationem reiciendis quis excepturi
            incidunt nostrum mollitia, aut facilis optio id. Maiores labore
            placeat optio reiciendis quos!
          </p>
          <p class="card__text" data-section="Project" data-value="second-paragraph-description-p3">
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
    </section>
  </main>

  <script src="js/scripts.js"></script>
</body>

</html>