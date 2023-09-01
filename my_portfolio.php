<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>FAITH MUTHONI KIMANI - Portfolio</title>
  <style>
    /* Reset default margin and padding */
    body, h1, h2, h3, p {
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      color: #333;
    }

    /* Header styles */
    header {
      background-color: #333;
      color: white;
      padding: 20px 0;
      text-align: center;
    }

    header h1 {
      font-size: 28px;
    }

    /* Navigation styles */
    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 10px;
    }

    nav ul li {
      margin-right: 20px;
    }

    nav a {
      text-decoration: none;
      color: white;
      font-weight: bold;
      transition: color 0.3s ease-in-out;
    }

    nav a:hover {
      color: #ff6600;
    }

    /* Main container */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    /* Section styles */
    section {
      padding: 40px 0;
    }

    section h2 {
      font-size: 28px;
      margin-bottom: 20px;
      text-align: center;
    }

    /* Project styles */
    .project {
      margin-bottom: 40px;
      border: 1px solid #ddd;
      padding: 20px;
      background-color: white;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .project:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
    }

    .project img {
      max-width: 100%;
      border-radius: 8px;
    }

    .project h3 {
      margin-top: 10px;
      font-size: 20px;
    }

    .project p {
      color: #666;
    }

    /* Contact section styles */
    #contact p {
      text-align: center;
    }

    /* Styling for profile photo */
    .profile-photo {
      border-radius: 50%;
      width: 150px;
      height: 150px;
      object-fit: cover;
      margin: 0 auto;
      display: block;
      border: 4px solid #fff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    #services {
      background-color: #f9f9f9;
      padding: 40px 0;
    }

    .services-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .service {
      flex: 1;
      margin: 20px;
      padding: 20px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: transform 0.3s ease-in-out;
    }

    .service:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
    }

    .service h3 {
      margin-top: 10px;
      font-size: 20px;
    }

    .service p {
      color: #666;
    }

    .service-icon {
      font-size: 32px;
      margin-bottom: 10px;
      color: #ff6600;
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <div class="container">
        <img class="profile-photo" src="images/profile.jpg" alt="Profile Photo">
        <h1>FAITH MUTHONI KIMANI</h1>
        <ul>
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <section id="about">
    <div class="container">
      <h2>About Me</h2>
      <p>As an experienced ICT practitioner, I bring a dynamic blend of technical expertise and innovative problem-solving to the table. With a passion for staying at the forefront of technology trends, I thrive in creating efficient and effective solutions that drive business growth and enhance user experiences.</p>
    </div>
  </section>

  <section id="services">
    <div class="container">
      <h2>What I Do</h2>
      <div class="services-container">
        <div class="service">
          <div class="service-icon">&#128187;</div>
          <h3>Web Development</h3>
          <p>I create responsive and user-friendly websites using HTML, CSS, and JavaScript.</p>
        </div>
        <div class="service">
          <div class="service-icon">&#128187;</div>
          <h3>Data Analysis</h3>
          <p>I analyze and interpret data to provide valuable insights for informed decisions.</p>
        </div>
        <div class="service">
          <div class="service-icon">&#128187;</div>
          <h3>Cybersecurity</h3>
          <p>I implement security measures to protect digital assets and ensure data integrity.</p>
        </div>
        <div class="service">
          <div class="service-icon">&#128187;</div>
          <h3>IT Consulting</h3>
          <p>I offer expert advice and solutions for optimizing IT infrastructure.</p>
        </div>
        <!-- Add more services here -->
      </div>
    </div>
  </section>


  <section id="contact">
    <div class="container">
      <h2>Contact Me</h2>
      <p>Feel free to reach out to me at faithkimani415@gmail.com</p>
    </div>
  </section>

</body>
</html>
