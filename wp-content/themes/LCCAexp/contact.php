
<?php
/*
Template Name: Contact
*/


get_header(); ?>

<section class="row contact">
  <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
          <h1 class="section-name mobile-four"><?php the_title(); ?></h1> 
          <?php the_content(); ?>
      <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?> 
  <div class="six offset-by-three mobile-four">
    <form id="contact-form">
      <label for="name">Name
        <input type="text" placeholder="Tell us your name" name="name" class="required" id="name">
      </label>
      <label for="email">Email
        <input type="text" placeholder="Type your email address" name="email" id="email">
      </label>
      <label for="subject">Subject
        <input type="text" placeholder="What's your message about?" name="subject" id="subject">
      </label>
      <label for="message">Message
        <textarea rows="10" placeholder="Type your message" name="message" id="message"></textarea>
      </label>
      <button type="submit" class="button" id="send">Send</button>
    </form>
  </div>
 </section>
		