<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ken Mutuku - Contact</title>
  <link rel="icon" href="Logo.png" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <header class="navbar">
    <div class="logo">
      <a href="index.html"><img src="Logo.png" alt="KMM"></a>
    </div>
    <nav>
      <a href="index.html">Home</a>
      <a href="experience.html">Experience</a>
      <a href="contact.php" class="active">Contact</a>
    </nav>
  </header>

  <section class="contact">
    <div class="container contact-container">
      <div class="contact-info">
        <h2>Contact</h2>
        <p>I'm always open to new opportunities, collaborations, or just a friendly chat. Feel free to reach out!</p>

        <div class="contact-methods">
          <div class="contact-item">
            <h3>Email</h3>
            <a href="mailto:patkenntuku@gmail.com">patkenntuku@gmail.com</a>
          </div>
          <div class="contact-item">
            <h3>LinkedIn</h3>
            <a href="https://www.linkedin.com/in/ken-muindi-70109730b" target="_blank">LinkedIn Profile</a>
          </div>
          <div class="contact-item">
            <h3>Phone</h3>
            <a href="tel:+254702683413">+254702683413</a>
          </div>
          <div class="contact-item">
            <h3>Github</h3>
            <a href="https://github.com/Ken-Mutuku">Github Profile</a>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <h3>Send Me a Message</h3>
        <form id="contact-form">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" />
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>
          <button type="submit" class="submit-btn">Send Message</button>
        </form>
      </div>
    </div>
  </section>

  <script src="script.js"></script>
</body>
</html>
