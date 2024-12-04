<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- for the AOS animation-->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <title>XH WebDesign</title>


  <?php wp_head(); ?>

</head>

<body>
  <header id="header">
    <div class="container">
      <div class="content">
        <div class="menu-flex">
          <div class="header-left">
            <div class="logo">
              <?php the_custom_logo(); ?>
            </div>
            <div class="menu-holder">
              <ul class="menu-list">
                <?php
                $args = array(
                  'theme_location' => 'headernav'
                );
                ?>
                <?php wp_nav_menu($args); ?>
              </ul>
            </div>
          </div>
          <div class="header-right">
            <div class="social-icons">
              <a href="https://www.instagram.com/yourusername" target="_blank" rel="noopener noreferrer">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/in/yourusername" target="_blank" rel="noopener noreferrer">
                <i class="fa-brands fa-linkedin"></i>
              </a>
              <a href="https://github.com/yourusername" target="_blank" rel="noopener noreferrer">
                <i class="fa-brands fa-github"></i>
              </a>
            </div>

            <a href="#contact" class="btn-outline">Contact</a>
          </div>

          <div id="burger"><i class="fa-solid fa-bars"></i></div>
        </div>
      </div>
    </div>
  </header>