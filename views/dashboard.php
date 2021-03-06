
<?php include(ROOT . '/views/navbar.php') ?>

<br>


<div class="container">
  <div class="row">

    <div class="col-md-12">
      <h1 style="text-align:center;">Menu principal</h1>

      <br>

      <div id="carouselZ" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselZ" data-slide-to="0" class="active"></li>
          <li data-target="#carouselZ" data-slide-to="1"></li>
          <li data-target="#carouselZ" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?= URL_IMG ?>lollapalooza.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h2>Lollapalooza</h2>
              <p>Evento unico en bs as</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= URL_IMG ?>evento3.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h2>Concierto</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= URL_IMG ?>evento4.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h2>Recital</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselZ" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselZ" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>

  </div>
</div> <!-- end container -->

<br><br>

<div class="container">
  <div class="row">
    <div class="col-4">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-artist" role="tab"
          aria-controls="home">Artistas</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-category"
          role="tab" aria-controls="profile">Categorias</a>
        <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-type-area"
         role="tab" aria-controls="home">Tipos de Asientos</a>
         <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-event" role="tab" aria-controls="messages">Eventos</a>
         <a class="list-group-item list-group-item-action" id="list-label-place-event" data-toggle="list" href="#list-place-event" role="tab" aria-controls="profile">Lugar de evento</a>
         <a class="list-group-item list-group-item-action" id="list-calendar-label" data-toggle="list" href="#list-calendar" role="tab" aria-controls="asd">Calendario</a>
      <!-- <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Compras</a>
      <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Tipo de area</a>

      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Asientos</a>

      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="asd">...</a> -->
      </div>
    </div>
    <div class="col-8">
      <div class="tab-content" id="nav-tabContent">

        <div class="tab-pane fade show active" id="list-artist" role="tabpanel" aria-labelledby="list-home-list">
          <h2><a href="<?= FRONT_VIEW ?>/artist/">Artistas</a></h2>
          <p>crud de artistas</p>
        </div>

        <div class="tab-pane fade" id="list-category" role="tabpanel" aria-labelledby="list-profile-list">
          <h2><a href="<?= FRONT_VIEW ?>/category/">Categorias</a></h2>
          <p>crud de categorias</p>
        </div>

        <div class="tab-pane fade" id="list-type-area" role="tabpanel" aria-labelledby="list-settings-list">
          <h2><a href="<?= FRONT_VIEW ?>/typeArea/">Tipo de area(tipo plaza)</a></h2>
          <p>palco,platea, popular, etc</p>
        </div>

         <div class="tab-pane fade" id="list-event" role="tabpanel" aria-labelledby="list-messages-list">
         <h2><a href="<?= FRONT_VIEW ?>/event/">Eventos</a></h2>
         <p>crud de eventos</p>
         </div>

         <div class="tab-pane fade" id="list-place-event" role="tabpanel" aria-labelledby="list-label-place-event">
         <h2><a href="<?= FRONT_VIEW ?>/placeEvent/">Tipo de place event(Lugar de evento)</a></h2>
         <p>Capacidad 95000 personas, Estadio libertadores de america por ejemplo</p>
         </div>

         <div class="tab-pane fade" id="list-calendar" role="tabpanel" aria-labelledby="list-calendar-label">
         <h2><a href="<?= FRONT_VIEW ?>/calendar/">Calendario</a></h2>
         <p>crud de calendario</p>
         </div>
      <!-- <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      <h2><a href="<?= FRONT_VIEW ?>/purchase/">Compras</a></h2>
      <p>crud de compras</p>
      </div>


      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      <h2><a href="<?= FRONT_VIEW ?>/eventArea/">Tipo de event area()</a></h2>
      <p>crud de type event area</p>
      </div>

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>-->

      </div>
    </div>
  </div>

</div> <!-- end container -->

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
