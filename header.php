<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php the_title(); ?>
    </title>

    <!-- stylesheet  -->

    

    <!-- custom css file -->


    <?php wp_head(); ?>
</head>

<body>


    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-house-fill me-2"></i>
                        One-Stop Cleaning Service
                    </p>

                    <p class="d-flex d-lg-block d-md-block d-none me-4 mb-0">
                        <i class="bi-clock-fill me-2"></i>
                        <strong class="me-2">Mon - Fri</strong> 8:00 AM - 5:30 PM
                    </p>

                    <p class="site-header-icon-wrap text-white d-flex mb-0 ms-auto">
                        <i class="site-header-icon bi-whatsapp me-2"></i>

                        <a href="tel: 110-220-9800" class="text-white">
                            110 220 9800
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src=" <?php echo get_template_directory_uri(); ?>/images/bubbles.png" class="logo img-fluid"
                    alt="">

                <span class="ms-2">Clean Work</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item <?php if (is_home())
                        echo 'active'; ?>">
                        <a class="nav-link" href="<?php echo home_url(); ?>">Home</a>
                    </li>

                    <li class="nav-item <?php if (is_page('About Us'))
                        echo 'active'; ?>">
                        <a class="nav-link"
                            href="<?php echo esc_url(get_permalink(get_page_by_title('About Us'))); ?>">About
                            Us</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item <?php if (is_page('Our Services'))
                                echo 'active'; ?>"
                                    href="<?php echo esc_url(get_permalink(get_page_by_title('Services'))); ?>">Our
                                    Services</a></li>

                            <li><a class="dropdown-item <?php if (is_page('Coming Soon'))
                                echo 'active'; ?>"
                                    href="<?php echo esc_url(get_permalink(get_page_by_title('Coming Soon'))); ?>">Coming
                                    Soon</a></li>

                            <li><a class="dropdown-item <?php if (is_page('Page 404'))
                                echo 'active'; ?>"
                                    href="<?php echo esc_url(get_permalink(get_page_by_title('Page 404'))); ?>">Page
                                    404</a></li>
                        </ul>
                    </li>

                    <li class="nav-item <?php if (is_page('Contact Us'))
                        echo 'active'; ?>">
                        <a class="nav-link"
                            href="<?php echo esc_url(get_permalink(get_page_by_title('Contact Us'))); ?>">Contact</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn" href="<?php echo esc_url(get_permalink(get_page_by_title('Contact Us'))); ?>">Get
                            started</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>