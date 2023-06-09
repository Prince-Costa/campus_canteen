<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');

$navJson = file_get_contents($dataResources . "nav.json");

$navs = json_decode($navJson);
?>


<nav class="navbar navbar-expand-lg navber-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><span class="text-danger">Cumpus</span>Canteen</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php
        foreach ($navs as $key => $nav):
          ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $nav->url ?>"><?php echo $nav->title ?></a>
          </li>
          <?php
        endforeach
        ?>

        <li class="nav-item">
          <form action="">
            <div class="search-container">
              <input type="text" placeholder="Search here.." class="search-input ">
              <i class="fa-sharp fa-solid fa-magnifying-glass search-icon"></i>
            </div>
          </form>
        </li>

      </ul>

    </div>
  </div>
</nav>