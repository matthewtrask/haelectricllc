<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 2/7/15
 * Time: 4:49 PM
 */
$pageTitle = "Testimonials";
include('includes/head.php');
include('includes/nav.php');
include('includes/comments.php');

?>


<main id="main">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2>Just a few testimonials from past clients</h2><hr />
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php
                        foreach($comments as $comment){
                            echo $comment . "<br /><br /><hr />";
                        }
                    ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <img src="img/pool.jpg" alt="" class="img-responive center-block"  height="130%" width="110%">
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h4>Please feel free to <a href="mailto:adarezek@haelectricllc.com?subject=Testimonial">email</a> your comments to us!</h4>

            </div>
        </div>
    </div>
</main>












<?php
include('includes/footer.php');
?>