<?php 

require 'vendor/autoload.php';
require 'config.php';

session_start();

$isPageExist = empty($_GET['page']) ? 'home' : $_GET['page'];

if(isset($_SESSION['info_user'])) {
    $userSession = $_SESSION['info_user'];  
}

if(file_exists(CONTROLLER . $isPageExist.'.php')) {
    include_once CONTROLLER . $isPageExist.'.php';
    include_once VIEW . 'common/footer.html';
}else {

}

?>