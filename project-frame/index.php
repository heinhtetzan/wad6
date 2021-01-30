

<?php

include "template/header.php";
?>

<section class="container">
    <div class="row">
        <div class="col-12 col-lg-3">
            <div class="card my-5">
                <div class="card-header">Register</div>
                <div class="card-body">

                    <?php



                    if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['password'])){

                        echo "Data Required, try again";

                    }else{
                        $name = str_replace(" ","_",$_POST['name']);
                        $dir = "hacked/";

                        $f = fopen($dir."$name.html","w");
                        fwrite($f,"<ul>");
                        foreach ($_POST as $k=>$v){
                            fwrite($f,"<li>$k - $v</li>");
                        }
                        fwrite($f,"</ul>");

                        fclose($f);

                        echo "thanks you";
                    }

                    ?>

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

<!--                        <div class="form-group">-->
<!--                            <label for="">Photo</label>-->
<!--                            <input type="file" name="photo" class="form-control p-1">-->
<!--                        </div>-->



                        <button class="btn btn-primary">Register</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card my-5">
                <div class="card-header">Hacked List</div>
                <div class="card-body">
                    <ol>
                        <?php

                        function toName($str){

//                            $dot = strpos($str,".");

                            $arr = explode(".",$str);
                            $nameWithUnderScore = $arr[0];
                            return str_replace("_"," ",$nameWithUnderScore);


                        }

                        $hacked = scandir("hacked");
                        foreach ($hacked as $h){
                            if($h == "." || $h== ".."){
                                continue;
                            }
                            $showName = toName($h);
                            echo "<li><a href='hacked/$h' target='_blank'>$showName</a></li>";
                        }

                        ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("template/footer.php"); ?>

