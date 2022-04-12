<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - Helping Against Insomnia, Snoring and Fibromyalgia.</title>

  

    <link rel="stylesheet" href="../_a_css/style.css" />
    <link rel="stylesheet" href="../_a_css/media-md.css" />
    <link rel="stylesheet" href="../_a_css/media-sm.css" />
    <link rel="stylesheet" href="../_a_css/media-xsm.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Square+Peg&display=swap" rel="stylesheet">

    <script src="../js/app.js" defer></script>
  </head>
  <body>
    <!-- header -->
    <?php include "../_inc_/header.php" ?>

    <!-- contact section -->

    <section class="contact">
      <div class="container contact-section">
        <div class="contact-info">
          <h2 class="contact-info-title">
          Ask Us Anything - Anytime.
          </h2>

          <p class="contact-info-desc">
            You can contact us via the form here or via the email or phone details below.  We’re here to help.
          </p>

          <p class="contact-info-link">
            <img src="../_a_img/email.webp" alt="">
            <a href="mailto:Enquiries@SleepBetterPillowMist.com" class="email-link">Enquiries@SleepBetterPillowMist.com</a>
          </p>

          <p class="contact-info-link">
            <img src="../_a_img/call.webp" alt="">
            <a href="tel:Enquiries@SleepBetterPillowMist.com" class="phone-link">01403 597 124</a>
          </p>
        </div>
        <form action="" class="contact-form">
          <p class="form-element">
            <input type="text" name="name" id="name" placeholder = "Name">
          </p>
          <p class="form-element">
            <input type="email" name="email" id="email" placeholder = "Email">
          </p>
          <p class="form-element">
            <input type="text" name="phone" id="phone" placeholder = "Number">
          </p>
          <p class="form-element">
            <input type="text" name="subject" id="subject" placeholder = "Subject">
          </p>

          <textarea name="message" id="message"  rows="8" placeholder = "Message"></textarea>

          <p class="form-element form-btn">
            <button class="send-btn">Send Message</button>
          </p>
        </form>

      </div>
    </section>


    <!-- showcase -->
    <?php include "../_inc_/showcase.php" ?>

    <!-- footer -->
    <?php include "../_inc_/footer.php" ?>


  </body>
</html>
