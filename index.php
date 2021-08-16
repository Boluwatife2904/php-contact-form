<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
  <link rel="stylesheet" href="app.css">
</head>

<body>
  <!-- <img src="782cf238505d3d1de2e80eeac44092d7.webp" alt=""> -->
  <!-- CONTACT SECTION -->
  <section class="contact__section" id="contact">
    <div class="header">
      <h1>Contact Us</h1>
      <p>Any questions or remarks? Just write us a message.</p>
    </div>
    <div class="main-content">
      <div class="left-section">
        <div class="wrapper">
          <h1>Contact information</h1>
          <p>Fill up the form and our team will get back to you within 24 hours.</p>
          <div class="contact-info">
            <i class="fa fa-phone phone"></i>
            <span>+0123 4567 8910</span>
          </div>
          <div class="contact-info">
            <i class="fa fa-envelope"></i>
            <span>hello@hello.com</span>
          </div>
          <div class="contact-info">
            <i class="fa fa-map-marker-alt"></i>
            <span>102 Street 2714 Don</span>
          </div>
          <ul class="social-media">
            <li>
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="circle-one"></div>
        <div class="circle-two"></div>
      </div>
      <div class="right-section">
        <div class="wrapper">
          <form action="contact.php" method="post">
            <div class="form-wrapper">
              <div class="form-field">
                <input type="text" name="first_name" id="first_name" placeholder="John">
                <label for="first_name">First Name</label>
              </div>
              <div class="form-field">
                <input type="text" name="last_name" id="last_name" placeholder="Doe">
                <label for="last_name">Last Name</label>
              </div>
            </div>
            <div class="form-wrapper">
              <div class="form-field">
                <input type="text" name="email_address" id="email_address" placeholder="johndoe@gmail.com">
                <label for="email_address">Mail</label>
              </div>
              <div class="form-field">
                <input type="text" name="phone_number" id="phone_number" placeholder="+0123 4567 8910">
                <label for="phone_number">Phone</label>
              </div>
            </div>
            <div class="radio-buttons">
              <h4>What service do we need to provide for you?</h4>
              <div class="radios">
                <div class="single-radio">
                  <input type="radio" name="service" id="web_design" value="Web design">
                  <label for="web_design">Web design</label>
                </div>
                <div class="single-radio">
                  <input type="radio" name="service" id="web_development" value="Web development">
                  <label for="web_development">Web development</label>
                </div>
                <div class="single-radio">
                  <input type="radio" name="service" id="logo_design" value="Logo Design">
                  <label for="logo_design">Logo design</label>
                </div>
                <div class="single-radio">
                  <input type="radio" name="service" id="others" value="Others">
                  <label for="others">Others</label>
                </div>
              </div>

            </div>
            <div class="form-field">
              <textarea name="message" id="message" cols="30" rows="6" placeholder="Write your message.."></textarea>
              <label for="message">Message</label>
            </div>
            <button type="submit" class="submit-button">Send message</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>