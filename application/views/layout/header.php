<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2C615C7H9E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-2C615C7H9E');
    </script>

    <title><?= $website->metaTitle; ?></title>
    <meta name="keywords" content="<?= $website->metaKeywords; ?>">
    <meta name="description" content="<?= $website->metaDescription; ?>">

    <meta name="format-detection" content="telephone=no">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $website->metaTitle; ?>" />
    <meta property="og:description" content="<?= $website->metaDescription; ?>" />
    <meta property="og:url" content="https://amc-menteng.com/" />
    <meta property="og:image" content="<?= base_url(); ?>assets/img/og-image.png" />

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(); ?>assets/img/icon_url.png" sizes="32x32">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Abhaya Libre' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/swiper.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/whatsapp_chat.css" rel="stylesheet">
</head>

<body class="bg-white" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Navbar & Hero Start -->
    <header class="container-fluid position-relative p-0" id="home">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-1">
            <div class="container">
                <a href="<?= base_url() ?>" class="navbar-brand">
                    <!-- <h1 class="m-0">FitApp</h1> -->
                    <img class="img-fluid" src="https://admin103.amc-menteng.com/upload/<?= $website->logo; ?>" alt="Logo" title="<?= $website->name; ?>">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto  py-0">
                        <?php if ($this->uri->segment(1) != 'detailproduk') { ?>
                            <a href="#home" class="nav-item nav-link click-scroll">HOME</a>
                            <a href="#about" class="nav-item nav-link click-scroll">About Us</a>
                            <a href="#why-us" class="nav-item nav-link click-scroll">Why Choose Me</a>
                            <a href="#produk" class="nav-item nav-link click-scroll">Products</a>
                            <a href="#lokasi" class="nav-item nav-link click-scroll">Our Location</a>
                        <?php } else { ?>
                            <a href="<?= base_url() ?>" class="nav-item nav-link click-scroll">HOME</a>
                            <a href="<?= base_url() ?>" class="nav-item nav-link click-scroll">About Us</a>
                            <a href="<?= base_url() ?>-us" class="nav-item nav-link click-scroll">Why Choose Me</a>
                            <a href="<?= base_url() ?>" class="nav-item nav-link click-scroll">Products</a>
                            <a href="<?= base_url() ?>" class="nav-item nav-link click-scroll">Our Location</a>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </nav>

    </header>
    <!-- Navbar & Hero End -->