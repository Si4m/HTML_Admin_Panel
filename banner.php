<!-- header-->
<?php
include_once "function.php";
  headers();

  ?>
<!-- body-->
<div class="container-fluid">
  <div class="row">
    <?php sidebar(); ?>

    <!-- ======= Main Content Area ======= -->
    <div class="col-md-10 mt-4">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/light.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/avatar.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/avatar.png" alt="Third slide">
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>







<!-- footer-->
    <?php
     footer();
     ?>