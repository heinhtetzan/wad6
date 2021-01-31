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

                    if(isset($_POST['register'])){
                        register();
                    }


                    ?>



                    <form action="" method="post" enctype="multipart/form-data">


                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="<?php old('name'); ?>" class="form-control">
                            <?php showError('name'); ?>
                        </div>


                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" value="<?php old('email'); ?>" class="form-control">
                            <?php showError('email'); ?>
                        </div>

                        <div class="form-group">

                            <label >Select Gender</label>

                            <?php foreach($gender as $g){ ?>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="<?php echo $g; ?>" name="gender" class="custom-control-input" value="<?php echo $g; ?>"
                                    <?php
                                       echo @$_POST['gender'] == $g ? 'checked' : '';
                                    ?>>
                                <label class="custom-control-label text-capitalize" for="<?php echo $g; ?>"><?php echo $g; ?></label>
                            </div>
                            <?php } ?>

                            <?php showError('gender'); ?>


                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control">
                        </div>



                        <button class="btn btn-primary" name="register">Register</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</section>

<?php include("template/footer.php"); ?>

