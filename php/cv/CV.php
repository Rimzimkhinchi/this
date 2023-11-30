<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student CV</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  
  <style>
    body {
      font-family: 'Arial', sans-serif;
      overflow-x: hidden;
      background-color: #F0F0F0; 
      color: #333;
    }

    header {
      position: relative;
      height: 100vh;
      color: #fff;
    }

    #video-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.25); 
    }

    .content {
      position: relative;
      z-index: 1;
      padding: 40px; 
      text-align: center;
    }

    h1 {
      font-size: 3em;
      margin-bottom: 20px;
      color: white; 
    }

    .job-title {
      font-size: 1.8em; 
      margin-bottom: 30px; 
      color: white; 
    }

    .education,
    .skills {
      margin-bottom: 40px; 
    }

    .social-icons a {
      color: white; 
      margin: 0 15px; 
    }
  </style>
</head>
<body>

  <header>

    <video id="video-background" autoplay muted loop>
      <source src="test.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>

    
    <div class="overlay"></div>


    <div class="content">
      <h1>Rimzim Khinchi</h1>
      <p class="job-title">Computer Science Student</p>
      <p>Passionate about coding and exploring new technologies.</p>

      <div class="education">
        <h2>Education</h2>
        <p><strong>University Name</strong><br> B.Sc. in Computer Science<br> Graduation Year: 2025</p>
      </div>

  
      <div class="skills">
        <h2>Skills</h2>
        <p>Programming Languages: Java, Python<br>Web Development: HTML, CSS, JavaScript, Bootstrap</p>
      </div>

      
      
    </div>
  </header>

 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
