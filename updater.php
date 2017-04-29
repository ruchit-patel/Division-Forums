<?php
    require 'update.php';
?>
<div class="row" style="margin-top:15px;">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-block">
                <?php
                    ini_set('display_errors',1);
                    if($_SERVER['REQUEST_METHOD']=='GET'){
                        $tbl=$_GET['table'];
                        if($tbl=='Weapons'){
                            require 'FinalScripts/dispAll.php';
                        }
                        else if($tbl=='Talents'){
                            require 'FinalScripts/dispTals.php';
                        }
                        else if($tbl=='Perks'){
                            require 'FinalScripts/dispPerks.php';   
                        }
                        else if($tbl=='Skills'){
                            require 'FinalScripts/dispSAll.php';  
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>