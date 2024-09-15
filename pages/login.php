<?php
    include 'includes/header.php';
    if (isset($_SESSION['user_id']))
    {
        header('Location: action.php?page=home');
    }
?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">Login Form</div>
                        <div class="card-body">

                            <?php if (isset($_SESSION['message'])) { ?>
                                <h4 class="text-danger text-center">
                                    <?php
                                        echo $_SESSION['message'];
                                        unset($_SESSION['message']);
                                    ?>
                                </h4>
                            <?php } ?>

                            <form action="action.php?page=new-login" method="POST">
                                <div class="row mb-3">
                                    <label class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Login"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php' ?>