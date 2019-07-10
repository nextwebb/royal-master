
<?php  
 include("views/header.php");

 if (isset($_GET['page'])) {
 
    switch ($_GET['page']) {
    case "about":
        include_once("views/about.php");
        break;
    case "contact":
        include_once("views/contact.php");
        break;
    case "rooms":
        include_once("views/rooms.php");
        break;
    case "booknow":
        include_once("views/booknow.php");
        break;
    default:
        include_once("views/404.php");//prevent open direct
    }
} else {
    include_once("views/home.php");//if nothing is clicked atall show this
}
 include("views/footer.php");
 