

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

  <!-- coloured buttons -->
  <div class="d-flex justify-content-start">
  <a class="btn btn-warning" href="/blog/edit?id=<?=$blog['id']?>" role="button">Edit</a>
  <form action="" method="post">
  <button type="button" class="btn btn-danger" value="<?=$blog['id']?>">Delete</button>
</form>
</div>
    </p>
  </blockquote>
  <?php endforeach; ?>
<div class="d-flex justify-content-center">
  <a class="btn btn-warning" href="/blog/edit" role="button">Make a Post</a>
  </div>
  <ul><?php if ($loggedIn): ?>
                            <li ><a  href="/logout">Log out</a></li>
                            <?php else: ?>
                            <li ><a  href="/login">Log in</a></li>
                            <?php endif; ?>
                            </ul>


</div>