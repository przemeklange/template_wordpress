<?php
/*
Template Name: Kontakt
*/
?>
<?php get_header() ?>

<div class="bginner">

</div>




<div class="container align-middle">
  <div class="col-lg-7 pt-5">
    <h2><?php the_field('header_in_slider') ?></h2>
    <p><?php the_field('paragrapgh_in_slider') ?></p>
  </div>
</div>



<p><?php the_field('text_con'); ?></p>
<div class="container">
  <div class="row">
    <div class="col-lg-6 red">
     <p><?php the_field('blisko_form')?></p>
    </div>
    <div class="col-lg-6">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>



<?php get_footer() ?>