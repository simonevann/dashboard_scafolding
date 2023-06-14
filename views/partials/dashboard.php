<?php
//include the controller
require_once('controllers/DashboardController.php');
//create an instance of the controller
$controller = new DashboardController();
require_once('views/template/aside.php');
?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<?php
require_once('views/template/menu.php');
?>
</main>