<?php
require_once(ROOT . "Config/db.php");
require_once(ROOT . "Core/Model.php");
require_once(ROOT . "Core/Controller.php");
$files = glob( ROOT . "Exceptions/*.php");
foreach ($files as $file) {
    require($file);   
}
?>