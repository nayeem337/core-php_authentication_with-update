<?php
    include 'includes/header.php';
    if ( ! isset($_SESSION['user_id']))
    {
        header('Location: action.php?page=login');
    }
?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-capitalize">This is home page</h1>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>