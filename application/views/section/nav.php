 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a> -->
       <!-- <a class="navbar-brand" href="<?=base_url()?>">Start Bootstrap</a> cara biasa -->
       <a class="navbar-brand" href="{index}">Start Bootstrap</a> <!--cara parer yang site urlnya sudah ada di function-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
             <a class="nav-link" href="{halaman}Home">Home</a>

            </li>
            <li class="nav-item">
             <a class="nav-link" href="{halaman}Profil">Profil</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>