<?php
if (isset($_GET["content"])){
    $active = $_GET["content"];
} else{
    $active = "";
}
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./index.php?content=home">zwemmen</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item <?php if ($active == "home") {echo "active";} ?>">
        <a class="nav-link" href="./index.php?content=home">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if ($active == "zwemmers") {echo "active";} ?>">
        <a class="nav-link" href="./index.php?content=zwemmers">zwemmers</a>
      </li>
      <li class="nav-item <?php if ($active == "zwembaden") {echo "active";} ?>">
        <a class="nav-link" href="./index.php?content=zwembaden">zwembaden</a>
      </li>
      <li class="nav-item <?php if ($active == "records") {echo "active";} ?>">
        <a class="nav-link" href="./index.php?content=records">records</a>
      </li>
      <li class="nav-item <?php if ($active == "login") {echo "active";} ?>">
        <a class="nav-link" href="./index.php?content=login">login</a>
      </li>
      <li class="nav-item <?php if ($active == "registratie") {echo "active";} ?>">
        <a class="nav-link" href="./index.php?content=registratie">registratie</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">vul je records in</a>
          <a class="dropdown-item" href="#">zie je records</a>
          <a class="dropdown-item" href="#">zie anderen records</a>
        </div>
      </li>
    </ul>
  </div>
</nav>