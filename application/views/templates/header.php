<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 
 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> BK Wallet</title>
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/style.css">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/image/logo.jpg">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/slick-1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/slick-1.8.1/slick/slick-theme.css"/>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="http://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>


    </head>

    <header>
        <nav id="navbarscroll" class="navbar fixed-top navbar-expand-md">
          <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url(); ?>assets/image/logo.jpg" width="50px" alt=""></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <ul class="navbar-nav ml-auto nav-pills">
              <li class="nav-item">
                  <a class="nav-link active scroll-link js-scrollTo" href="#about"><strong>About</strong> <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link scroll-link js-scrollTo" href="#work"><strong>How does it work ?</strong></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link scroll-link js-scrollTo" href="#features"><strong>Features</strong></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link scroll-link js-scrollTo" href="#roadmap"><strong>Roadmap</strong></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link scroll-link js-scrollTo" href="#ourteam"><strong>Our team</strong></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link scroll-link js-scrollTo" href="#ud"><strong>Updates</strong></a>
              </li>
              <?php if($this->session->userdata('user_id') == 1): ?>
              <li class="nav-item">
                  <?php echo form_open('/users/logout'); ?>
                  <input type="submit" value="Logout" class="btn btn-danger"> 

              </li>
              <?php endif; ?> 
            </ul>

          </div>
        </nav>



    </header>

    <br/>
    <br/>
    <br/>

    <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

    <body data-spy="scroll" data-target="#navbarscroll" data-offset="0">
