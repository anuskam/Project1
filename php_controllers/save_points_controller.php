<?php 
    require_once '../php_libraries/bd.php';
    session_start();

    $user_game = selectUserGameInfo($_SESSION['user']['userid'], $_POST['gameId']);
    print_r($user_game);
    if ($user_game['pointSave'] == 0){
        modifyPointSave($_SESSION['user']['userid'], $_POST['gameId']);
        modifyUser($_SESSION['user']['userid'], $_SESSION['user']['username'], $_SESSION['user']['password'], $_SESSION['user']['points'] + $_POST['finalPoints'],$_SESSION['user']['isAdmin'],$_SESSION['user']['email']);    
        echo "Points saved<br>";
    }
   
    $id = $_SESSION['user']['userid']; 
    $_SESSION['user'] = selectUserById($id);
    echo $_SESSION['user']['points']."<br>";
    echo $user_game['pointSave'];
?>