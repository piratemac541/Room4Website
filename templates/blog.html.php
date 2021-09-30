<?php
$title = 'Room4 Studios Hire';
$keywords = 'external hire, rehearsal studio, recording, mixing, EP, album, dry-hire, editing, mixing, Pro Tools, Logic, drum recording, guitar recording';
$description = 'We have a brilliant recording studio that has been acoustically designed and equipped to provide great value for money. 3 live rooms and loads of great gear.';
$heading = 'Room4 Blog';
$subHeading = '';
?>

<div class="m-3">
  <p><?=$totalBlogs?> posts have been made on the Room4 Blog</p>  
  <?php foreach($blogs as $blog): ?>
  <blockquote>
    <h5>
    <?=htmlspecialchars($blog['blogheading'], ENT_QUOTES, 'UTF-8') ?>
    </h5>
    <p>
    <?=htmlspecialchars($blog['blogtext'], ENT_QUOTES, 'UTF-8') ?>

    (by <a href="mailto:<?php
    echo htmlspecialchars($blog['email'], ENT_QUOTES, 'UTF-8'); ?>"><?php
    echo htmlspecialchars($blog['name'], ENT_QUOTES, 'UTF-8'); ?></a>) 
    on <?php
                $date = new DateTime($blog['blogdate']);

                echo $date->format('jS F Y');
?>)


<!--
<div class="d-flex justify-content-center">
  <a class="btn btn-warning" href="/blog/edit?id=<?=$blog['id']?>" role="button">Edit</a>
  </div>
  -->
<form action="/blog/edit" method="post">
    <input type="hidden" name="id" value="/blog/edit?id=<?=$blog['id']?>">
    <input type="submit" value="Edit">
  </form>

    <form action="/blog/delete" method="post">
    <input type="hidden" name="id" value="<?=$blog['id']?>">
    <input type="submit" value="Delete">
  </form>
    </p>
  </blockquote>
  <?php endforeach; ?>
<div class="d-flex justify-content-center">
  <a class="btn btn-warning" href="/blog/edit" role="button">Make a Post</a>
  </div>

</div>