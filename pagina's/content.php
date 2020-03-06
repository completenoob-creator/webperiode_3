<?php
if (isset($_GET["content"])) {
  include("./pagina's/" . $_GET["content"] . ".php");
} 
 else {
  include("./pagina's/home.php");
}
?>