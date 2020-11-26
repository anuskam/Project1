<?php
    require_once '../php_libraries/bd.php';
    session_start();
    $all_users = selectAllFromTable('user');
    $all_promos = selectAllFromTable('promotion');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/all.min.css">
    <title>Restore</title>
</head>
<body>
    <div class="container">
        <div class="card mt-2">
            <div class="card-header">
                <h1>Administration</h1>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <li><a href="#adminssection">Manage admins</a></li>
                    <li><a href="#userssection">Manage users</a></li>
                    <li><a href="#promossection">Manage promos</a></li>
                    <li><a href="#pointssection">Manage points</a></li>
                </ul>


                <ul class="list-group">
                    <li class="list-group-item">
                        <h2 id="adminssection">Manage admins</h2>
                        <div class="card-deck">
                        <?php 

                        $admins = [];
                        foreach($all_users as $user) {
                            
                            if ($user['isAdmin'] == 1){   
                                array_push ($admins, $user);
                            }
                        }

                        if (empty($admins)){
                            echo "
                            
                            <p class='m-5'>There are no admins.</p>
                            
                            ";
                        }

                            foreach ($admins as $admin){
                        ?>
                            <div class="card col-2">
                                <div class="card-body p-2">
                                    <p><?= "User ID-".$admin['userid'].": ".$admin['username']?></p>
                                   <form action="../php_controllers/restore_controller.php" method="post">
                                        <button class="btn m-1">Remove admin</button>
                                   </form>
                                </div>
                                
                            </div>

                    <?php }?>
                       
                        </div>
                        <button class="btn m-2">Add admin</button>

                    </li>

                    <li class="list-group-item">
                        <h2 id="userssection">Manage users</h2>
                        
                        <?php 

                            if (empty($all_users)){
                                echo "
                                
                                <p class='m-5'>There are no users.</p>
                                
                                ";

                            }
                        
                        
                        foreach($all_users as $user) {?>
                            <div class="card">
                                <div class="card-body">
                                    <form enctype="multipart/form-data" action="../php_controllers/restore_controller.php" method="post">
                                        <p><?= "User ID-".$user['userid']?></p>
                                        
                                         <!-- User -->
                                        <div class="form-group row">
                                            <label class="col-2" for="username">Username</label>
                                            <input class="col-10 form-control" type="text" id="username" name="username" value="<?=$user['username']?>" autofocus>
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group row">
                                            <label class="col-2" for="password">Password</label>
                                            <input class="col-10 form-control" type="password" id="paswword" name="password" minlength="8" value="<?=$user['password']?>" autofocus required>
                                        </div>
                                        <!-- Points -->
                                        <div class="form-group row">
                                            <label for="points" class="col-2">Points</label>
                                            <input type="number" class="col-10 form-control" id="points" name="points" value="<?= $user['points']?>">

                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="email" class="col-2">Email</label>
                                            <input type="text" class="col-10 form-control" id="email" name="email" value="<?= $user['email']?>">
                                        </div>
                                        <button type="submit" class="btn m-2" id="modify">Save</button>
                                    </form>
                                    
                                </div>
                            </div>
                            

                        <?php }?>
                        <button class="btn m-2">Add user</button>
                        
                    </li>

                    <li class="list-group-item">
                        <h2 id="promossection">Manage promos</h2>
                        <div class="card-deck">
                        
                        <?php 
                        if (empty($all_promos)){
                            echo "
                            
                            <p class='m-5'>There are no promotions.</p>
                            
                            ";

                        }
                        
                        foreach($all_promos as $promo){?>

                            <div class="card col-3">

                            <div class="card-body">
                            <p><?= $promo['name']?></p>
                            </div>
                            
                            </div>
                            
                        <?php }?>
                        </div>
                        <button class="btn m-2">Add promo</button>
                    </li>

                    <li class="list-group-item">
                        <h2 id="pointssection">Manage points</h2>
                        <?php
                        if (empty($all_users)){
                                echo "<p class='m-5'>There are no users with points to manage.</p>";
                            }
                        
                        
                        foreach($all_users as $user) {?>
                            <div class="card">
                                <div class="card-body">
                                    <form enctype="multipart/form-data" action="../php_controllers/restore_controller.php" method="post">
                                        <p><?= "User ID-".$user['userid'].": ".$user['username']?></p>
                                        
                                         <!-- User -->
                                        <div class="form-group row">
                                            <label class="col-2" for="points">Points</label>
                                            <input class="col-10 form-control" type="number" id="points" name="points" value="<?=$user['points']?>" >
                                        </div>
                                        
                                        <button type="submit" class="btn m-2" id="modify">Save</button>
                                    </form>
                                    
                                </div>
                            </div>
                            

                        <?php }?>
                       
                    </li>
                </ul>
                
                

                

                

                
                
            </div>
        </div>

    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>