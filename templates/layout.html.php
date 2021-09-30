<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="southpaw-sites.co.uk">
    <meta name="keywords" content="<?=$keywords?>">
    <meta name="description" content="<?=$description?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/room4.css?id=1234">
    <title><?=$title?></title>
    
  </head>
  <body>

    <header>
    <div>

      <?php 

        $currentpage = $_SERVER['REQUEST_URI'];
            

      ?>
          
          <nav class="navbar navbar-expand-md navbar-dark rounded-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="/index.php"><img id="header_logo" src="/images/logo.png" width="120" height="120" alt="Room4 Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php if($currentpage=="/index.php") 
          
                      {echo '<li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/"><img class="nav_icon" src="/images/home_rollover.gif" width="40" alt="Home">Home</a></li>';
                      
                      } else {
          
                      echo '<li class="nav-item">
                      <a class="nav-link" href="/"><img class="nav_icon" src="/images/home.gif" width="40" alt="Home">Home</a></li>';
                      }
                      
                      if($currentpage=="/rehearsal.php") 

                      {echo '<li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/blog/rehearsal"><img class="nav_icon" src="/images/rehearsal_rollover.gif" width="40" alt="Home">Rehearsal</a></li>';
                      
                      } else {
                      
                      echo '<li class="nav-item">
                      <a class="nav-link" href="blog/rehearsal"><img class="nav_icon" src="/images/rehearsal.gif" width="40" alt="Rehearsal">Rehearsal</a></li>';
                      }
                      
                      if($currentpage=="/recording.php") 

                      {echo '<li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/blog/recording"><img class="nav_icon" src="/images/recording_rollover.gif" width="40" alt="Recording">Recording</a></li>';
                      
                      } else {
                      
                      echo '<li class="nav-item">
                      <a class="nav-link" href="/blog/recording"><img class="nav_icon" src="/images/recording.gif" width="40" alt="Recording">Recording</a></li>';
                      }

                      if($currentpage=="/video.php") 

                      {echo '<li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="blog/video"><img class="nav_icon" src="/images/video.gif" width="40" alt="Video">Video<span class="visually-hidden">(current)</span></a></li>';
                      
                      } else {
                      
                      echo '<li class="nav-item">
                      <a class="nav-link" href="/blog/video"><img class="nav_icon" src="/images/video.gif" width="40" alt="Video">Video</a></li>';
                      }
                      
                      if($currentpage=="/hire.php") 

                      {echo '<li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/blog/hire"><img class="nav_icon" src="/images/hire_rollover.gif" width="40" alt="Hire">Hire<span class="visually-hidden">(current)</span></a></li>';
                      
                      } else {
                      
                      echo '<li class="nav-item">
                      <a class="nav-link" href="/blog/hire"><img class="nav_icon" src="/images/hire.gif" width="40" alt="Hire">Hire</a></li>';
                      }
                      
                      
                      
                      if($currentpage=="vouchers.php") 

                      {echo '<li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/blog/vouchers"><img class="nav_icon" src="/images/gifts_rollover.gif" width="40" alt="Gifts">Vouchers<span class="visually-hidden">(current)</span></a></li>';
                      
                      } else {
                      
                      echo '<li class="nav-item">
                      <a class="nav-link" href="/blog/vouchers"><img class="nav_icon" src="/images/gifts.gif" width="40" alt="Gifts">Vouchers</a></li>';
                      }

                      

                      if($currentpage=="/blog.php") 

                      {echo '<li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/blog/list"><img class="nav_icon" src="/images/news_rollover.gif" width="40" alt="Blog">Blog<span class="visually-hidden">(current)</span></a></li>';
                      
                      } else {
                      
                      echo '<li class="nav-item">
                      <a class="nav-link" href="/blog/list"><img class="nav_icon" src="/images/news.gif" width="40" alt="Blog">Blog</a></li>';
                      }
                      ?>


                    
                    
                    

                  </ul>
              
                
              <a href="/booknow.php"><img id="book_now" src="images/book_now.gif" width="120" height="120" alt="Book Now"></a>
              
                </div>

            </div>
    
    </div>
    </header>

    <!-- jumbotron header -->
<div class="bg-light p-2 rounded-lg border m-3 text-center rounded-3">
  <h1 class="display-5"><?=$heading?></h1>
  <p class="lead text-muted"><?=$subHeading?></p>
  
</div>

<div class="m-3">

  <!--roughs-->
 

  <!-- end roughs -->

  <main>
    <?=$output?>
  </main>
  
  
  
  <footer class="footer">
  <div class="d-flex justify-content-around">
    <a href="/contact.php"><img id="contact_bottom" src="/images/contact.gif" width="120" height="120" alt="Contact Us"></a>
    <a href="/booknow.php"><img id="book_now" src="/images/book_now.gif" width="120" height="120" alt="Book Now"></a>
  </div>
  <br>
  <div class="d-flex justify-content-between">

  <small>&copy Room4 Studios <?php echo date('Y') ?></small>
  <a id="white" href="/terms.php"><small>Terms & Conditions</small></a>
  <a id="white" href="/privacy.php"><small>Privacy & Cookies</small></a>
  </div>

</footer>


 
    <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
      -->

      <script>
      var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})

    </script>
  </body>
</html>