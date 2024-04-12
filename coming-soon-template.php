<?php
/*
Template Name: Coming Soon
*/
?>

<?php get_header();?>



<main>

<section class="banner-section d-flex justify-content-center align-items-end">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-7 col-12">
                <h1 class="text-white mb-lg-0">Under Construction</h1>
            </div>

            <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Coming Soon</li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>

    <div class="backstretch banner">

            <img
                src="<?php echo get_template_directory_uri(); ?>/images/cleaning-concept-with-man-showing-business-card.jpg">

        </div>
</section>


<section class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 text-center mx-auto">
                <ul class="countdown d-flex flex-wrap justify-content-center align-items-center">
                   <li class="countdown-item d-flex flex-column justify-content-center align-items-center">
                        <h3 class="countdown-title days">14</h3>
                        <span class="countdown-text">Days</span>

                        <div class="countdown-item-overlay"></div>
                   </li>

                   <li class="countdown-item d-flex flex-column justify-content-center align-items-center">
                        <h3 class="countdown-title hours">10</h3>
                        <span class="countdown-text">hours</span>
                   </li>

                   <li class="countdown-item d-flex flex-column justify-content-center align-items-center">
                        <h3 class="countdown-title minutes">15</h3>
                        <span class="countdown-text">minutes</span>
                   </li>

                   <li class="countdown-item d-flex flex-column justify-content-center align-items-center">
                        <h3 class="countdown-title seconds">34</h3>
                        <span class="countdown-text">seconds</span>
                   </li>     
                </ul>

                <h2 class="">Our website is currently under construction</h2>
                <p>You can set the launch date time in init.js file.</p>
            </div>

        </div>
    </div>
</section>
</main>


<?php get_footer();?>
