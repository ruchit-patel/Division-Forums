<?php
    require 'update.php';
?>
<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-block">
                <?php
                    if($_SERVER['REQUEST_METHOD']=='GET'){
                        $tbl=$_GET['table'];
                        if($tbl=='Weapons'){
                            require 'FinalScripts/dispAll.php';
                        }
                        else if($tbl=='Talents'){
                            require 'FinalScripts/dispTals.php';
                        }
                        else if($tbl=='Perks'){

                        }
                        else if($tbl=='Skills'){

                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>