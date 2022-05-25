<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Pete Evans Web Consultancy</title>

      <?php wp_head(); ?> 

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/jumbotron/">

    

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

<script src="https://kit.fontawesome.com/1b529a9ec5.js" crossorigin="anonymous"></script>
<link href="<?php bloginfo('template_url'); ?>/css/styles.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-W8E58CTQBB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-W8E58CTQBB');
</script>
  </head>
  <body>
    
<main>
  <div class="container py-4">
    <!--
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">Jumbotron example</span>
      </a>
    </header>
  -->




    <div class="p-5 mb-4 bg-light rounded-3 dark-blue text-white intro_area">
      <div class="container-fluid py-5 homepage_intro">


<?php
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
  ?>
<img class="intro_me top_image" src="https://www.peteevans.co.uk/wp-content/uploads/2022/05/pete-evans8.png">
<h1 class="display-5 fw-bold"><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>
       <!-- <button class="btn btn-primary btn-lg" type="button">Example button</button>-->
       <div class="bottom-space"></div>
      </div>
      <div>
       <img class="intro_me bottom_image" src="https://www.peteevans.co.uk/wp-content/uploads/2022/05/pete-evans8.png">
       </div>
    </div>

<div class="row align-items-md-stretch">
    <?php if ( have_rows( 'sections' ) ) : ?>
  <?php while ( have_rows( 'sections' ) ) : the_row(); ?>
<div class="col-md-6">
        <div class="h-100 p-5 bg-dark rounded-3 light-blue">
          <?php the_sub_field( 'section_icon' ); ?>
          <h2><?php the_sub_field( 'section_title' ); ?></h2>
          <?php the_sub_field( 'section_content' ); ?>
</div>
</div>
  <?php endwhile; ?>
<?php else : ?>
  <?php // no rows found ?>
<?php endif; ?>

        <div class="col-md-6">
        <div class="h-100 p-5 bg-dark rounded-3 light-blue">
          <i class="fa-solid fa-address-card"></i>
          <h2>Contact</h2>
          <div class="row">
            <div class="col-md-6">
              <h3>Location</h3>
          <p>Winchester, Hampshire <br>SO21 3EB</p>
            </div>
            <div class="col-md-6">
              <h3>Email</h3>
<p><a href="mailto:pete@peteevans.co.uk">pete@peteevans.co.uk</a></p>
            </div>
            <div class="col-md-6">
              <h3>Phone</h3>
<p><a href="tel:07952 896640">07952 896640</a></p>
            </div>
            <div class="col-md-6">
              <h3>LinkedIn</h3>
<p><a href="https://www.linkedin.com/in/peteevanswebdesign/">www.linkedin.com<br/>/in/peteevanswebdesign</a></p>
            </div>
          </div>
      
        <!--  <button class="btn btn-outline-light" type="button">Example button</button>-->
        </div>
      </div>

      <div class="col-md-6 last-box" >
        <div class="h-100 p-5 bg-dark rounded-3 light-blue" style="background:url('https://www.peteevans.co.uk/wp-content/uploads/2022/05/winchester_watercolour.png') no-repeat center 200px">

          
      
        <!--  <button class="btn btn-outline-light" type="button">Example button</button>-->
        </div>
      </div>

<!--
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3" style="background-color:#fff !important; padding:0">
           <img src="img/business-logo.gif" style="width:100%">

        </div>
      </div>
    -->
    </div>

    <footer class="pt-3 mt-4 text-muted border-top">
      &copy; 2022 Pete Evans Web Consultancy
    </footer>
  </div>
</main>


    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
<?php wp_footer(); ?>