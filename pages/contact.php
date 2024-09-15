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
                <div
                    <h1 class="text-center text-capitalize">This is contact page</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias corporis dolore eos error eum, facere ipsam magni minus necessitatibus neque nesciunt praesentium quidem quos reiciendis, rerum ullam voluptatem. Quasi, unde.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias corporis dolore eos error eum, facere ipsam magni minus necessitatibus neque nesciunt praesentium quidem quos reiciendis, rerum ullam voluptatem. Quasi, unde.</p>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php' ?>