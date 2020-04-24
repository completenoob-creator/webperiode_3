<?php
if (isset($_GET["content"])) {
  include("./pagina/" . $_GET["content"] . ".php");
} 
 else {
  include("./pagina/home.php");
}
?>