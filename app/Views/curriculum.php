<?php
//echo '<pre>';var_dump($data);die('s');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="assets//img/favicon.png" type="image/x-icon">
  <title><?= $data['name_header'] ?></title>
  <!-- Styles local -->
  <link rel="stylesheet" href="assets/css/index.css">
  <!-- Styles local -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css">
  <!--  Styles Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- Icons Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<div class="screen">
  <div class="row-screen">
    <div class="icon-container">
      <div class="theme">
        <span class="sun"><i class="bi bi-brightness-low-fill"></i></span>
        <span class="moon hide"><i class="bi bi-moon-stars-fill"></i></span>
      </div>
      <div id="contact"><i class="bi bi-person-lines-fill"></i></div>
      <div id="up-arrow"><i class="bi bi-arrow-up-circle"></i></div>
    </div>
    <header class="left">
      <div class="index">
        <div class="name">
          <h1><a href="/"><?= $data['name_header'] ?></a></h1>
          <h4><?= $data['job_position'] ?></h4>
        </div>
        <div class="items-contact">
            <?php foreach ($data['contact_links'] as $key => $value) { ?>
                <a data-bs-toggle="tooltip" data-bs-title="<?= ucwords($key) ?>" href="<?= $value ?>" target="_blank"><i class="bi bi-<?= $key == 'email' ? 'envelope' : $key ?>"></i></a>      
            <?php } ?>
        </div>
      </div>
    </header>
    <main class="layout right">
      <!-- Contenido -->
      <?php
      $hora_actual = date("H");
      $mensaje = $hora_actual >= 5 && $hora_actual < 12 ? "Buen dia" : ($hora_actual >= 12 && $hora_actual < 19 ? "Buenas tardes" : "Buenas noches");
      ?>
  
      <!--  About me -->
      <section class="components-section" id="about">
        <h4><?= $mensaje ?></h4>
        <div class="section-body">
        <p><?= $data['message_short'] ?></p>
        </div>
        <a class="pr-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Mas <i class="bi bi-arrow-right"></i></a>
      </section>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Un poco mas sobre mi historia...</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
              </svg>
              </button>
            </div>
            <div class="modal-body">
              <section class="aboutme">
               <?php foreach ($data['message_long'] as $key => $value) { ?>
                <h4><?= $key ?></h4>
                <p><?= $value ?></p>
               <?php } ?>
              </section>
            </div>
          </div>
        </div>
      </div>
      <!-- Skills -->
      <section class="components-section" id="skills">
        <h4>Conocimientos</h4>
        <div class="section-body">
          <?php $currentAttribute = null;
          foreach($data['skills'] as $skill) { 
          if($skill->status === 'active'){
            if ($skill->attribute !== $currentAttribute && $skill->status === 'active') {
              if ($currentAttribute !== null && $skill->status === 'active') { ?>
                </div>
              <?php } ?>
              <h3><?= $skill->attribute ?> </h3>
              <div id="owl-carousel" class="owl-carousel owl-theme skills">
            <?php } ?>
            <div class="tool-card item">
              <div class="bg-card">
                <img class="img" src="assets/img/cards/<?= $skill->type ?>.png" alt="<?= $skill->type ?>">
              </div>
              <div class="detail">
                <div class="header-card">
                  <span class="attribute"><?= $skill->type ?></span>
                  <span class="skill"><?= $skill->skill ?></span>
                </div>
                <i class="bi bi-<?= str_replace('icon: ', '', $skill->description); ?> icon-card"></i>
              </div>
            </div>
          <?php $currentAttribute = $skill->attribute; } }?>
          </div>
        </div>
      </section>
      <!-- Habilities -->
      <section class="components-section" id="hability">
        <h4>Habilidades</h4>
        <div class="section-body">
          <div class="habilities">
            <?php $currentSkill = null; ?>
              <?php foreach($data['abilities'] as $ability){ 
                  if ($ability->id_skill !== $currentSkill && $ability->status === 'active') {
                    if ($currentSkill !== null) { ?>
                      </div></div> <!-- accordion-item-body --></div> <!-- accordion-item --></div> <!-- accordion-group --></div>
                    <?php } ?>
                  <div class="hability">
                    <div class="accordion accordion-group">
                      <div class="accordion-item">
                        <?php foreach ($data['skills'] as $skill) {
                          if($skill->id === $ability->id_skill){?>
                            <div class="accordion-item-header"><span><?= $skill->skill ?></span></div>
                          <?php } } ?>
                            <div class="accordion-item-body">
                              <div class="accordion-item-body-content">
                    <?php } ?>
                              <?php $id_hab = $ability->id; $currentAbility = !empty($currentAbility) ? $currentAbility : null; ?>
                              <?php if($ability->ability !== $currentAbility){?>
                                <div class="accordion" id="accordionPanels<?= $id_hab ?>">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#task<?= $id_hab ?>" aria-expanded="true" aria-controls="task<?= $id_hab ?>">
                                        <i class="bi bi-code-slash"></i>  <?= $ability->ability ?>
                                      </button>
                                    </h2>
                                    <div id="task<?= $id_hab ?>" class="accordion-collapse collapse">
                                      <div class="accordion-body">
                                        <div class="items">
                                          <ul><?php foreach($data['abilities'] as $i) {
                                            if($i->ability === $ability->ability){?>
                                              <li><i class="bi bi-<?= $i->description ?> icon-card"></i><?= $i->description ?></li>
                                            <?php } }?>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <?php } ?>
              <?php $currentSkill = $ability->id_skill; $currentAbility = $ability->ability; } ?>
          </div>
        </div>
      </section>
      <!-- Studies -->
      <section class="components-section" id="studies">
        <h4>Estudios</h4>
        <div class="section-body">
          <div class="studies">
            <div class="cursos">
              <?php foreach($data['studies'] as $study){ ?>
              <div class="card">
                <div class="bg-card">
                  <img class="card-img" src="assets/img/cards/<?= $study->place ?>.png">
                </div>
                <div class="card-img-overlay">
                  <div class="card-body">
                    <small><?= $study->place ?></small>
                    <h4><?= $study->study ?></h4>
                    <div class="date"><?= $study->start_date ?></div>
                  </div>
                  <div class="card-footer"><div class="media"><div class="media-body">
                    <div class="tasks">
                      <div class="accordion accordion-group">
                        <div class="accordion-item custom">
                          <div class="accordion-item-header"><span>Detalles</span></div>
                          <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <div class="list"><span><?= $study->description ?></span></div>
                            </div> <!-- accordion-item-body-content -->
                          </div> <!-- accordion-item-body -->
                        </div> <!-- accordion-item -->
                      </div> <!-- accordion-group -->
                    </div>
                  </div></div></div> <!-- card-footer -->
                </div> <!-- card-img-overlay -->
              </div> <!-- card -->
              <?php } ?>
            </div>
          </div>
        </div>
      </section>
      <!-- Works -->
      <section class="components-section" id="works">
          <h4>Trabajos</h4>
          <div class="section-body">
              <div class="works">
                  <div class="work">
                    <?php foreach($data['works'] as $work){ ?>
                      <div class="card">
                          <div class="bg-card">
                              <img class="card-img" src="assets/img/cards/via.png">
                          </div>
                          <div class="card-img-overlay">
                              <div class="card-body">
                                  <small><?= $work->company ?></small>
                                  <h4> <?= $work->category ?></h4>
                                  <div class="date">
                                      <span><?= $work->start_date ?><span id="time"></span></span>
                                      <input type="hidden" id="fechaInicio" value="2022-08-01">
                                      <input type="hidden" id="fechaFin" value="Actualidad">
                                  </div>
                              </div>
                              <div class="card-footer"><div class="media"><div class="media-body">
                                  <div class="tasks">
                                      <div class="accordion accordion-group">
                                          <div class="accordion-item custom">
                                              <div class="accordion-item-header">Tareas</div>
                                                  <div class="accordion-item-body">
                                                      <div class="accordion-item-body-content">
                                                          <?php foreach($data['tasks'] as $task) { 
                                                            if ($task->id_job == $work->id && $task->status === 'active') { ?>
                                                            <?php $id_task = $task->id; ?>
                                                              <div class="accordion" id="accordionPanels<?= $id_task ?>">
                                                                  <div class="accordion-item">
                                                                      <h2 class="accordion-header">
                                                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#task<?= $id_task ?>" aria-expanded="true" aria-controls="task<?= $id_task ?>">
                                                                          <i class="bi bi-code-slash"></i>  <?= $task->task ?>
                                                                      </button>
                                                                      </h2>
                                                                      <div id="task<?= $id_task ?>" class="accordion-collapse collapse">
                                                                          <div class="accordion-body">
                                                                              <?= $task->description ?>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          <?php } } ?>
                                                      </div>
                                                  </div> <!-- accordion-item-body -->
                                          </div> <!-- accordion-item -->
                                      </div> <!-- accordion-group -->
                                  </div>
                              </div></div></div> <!-- card-footer -->
                          </div> <!-- card-img-overlay -->
                      </div> <!-- card -->
                    <?php } ?>
                  </div>
              </div>
          </div>
      </section>
    </main>
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="contact-content text-center">
                        <h1>Contacto</h1>
                        <p><?= $data['message_contact'] ?></p>
                        <div class="hr"></div>
                        <?php foreach ($data['contact_info'] as $key => $value) { ?>
                            <h6><i class="bi bi-<?= $key ?>"></i> <?= $value ?> </h6>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="contact-social">
            <ul>
                <?php foreach ($data['contact_links'] as $key => $value) { ?>
                    <li><a data-bs-toggle="tooltip" data-bs-title="<?= ucwords($key) ?>" class="hover-target" href="<?= $value ?>" target="_blank"><i class="bi bi-<?= $key == 'email' ? 'envelope' : $key ?>"></i></a></li>    
                <?php } ?>
            </ul>
        </div>
    </footer>
  </div> <!-- Fin div screen principal container -->
</div> <!-- Fin div row principal container -->
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Scripts local -->
  <script src="assets/js/index.js"></script>
  <!-- Scripts Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- Include JS plugin -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>
</body>
</html>
