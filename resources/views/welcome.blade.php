<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Your Name | Portfolio</title>
    <link rel="stylesheet" href="{{ asset('assets/styles/styles.css') }}" />
</head>
<body>
  <header>
    <nav>
      <h1>YourName</h1>
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <h2>Hi, I'm <span class="highlight">Your Name</span></h2>
    <p>A passionate Developer | Designer | Problem Solver</p>
  </section>

  <section id="about" class="about">
    <h2>About Me</h2>
    <p>I am a Computer Science student who loves creating innovative digital experiences...</p>
  </section>

  <section id="skills" class="skills">
    <h2>Skills</h2>
    <ul>
      <li>HTML5</li>
      <li>CSS3</li>
      <li>JavaScript</li>
      <li>Python</li>
      <li>React</li>
    </ul>
  </section>

  <section id="projects" class="projects">
    <h2>Projects</h2>
    <div class="project-card">
      <h3>Todo List App</h3>
      <p>A full-featured Todo app with user login, notes, and reminders.</p>
      <a href="#">View Project</a>
    </div>
    <!-- Add more project cards -->
  </section>

  <section id="contact" class="contact">
    <h2>Contact</h2>
    <p>Email: your.email@example.com</p>
    <p>LinkedIn | GitHub | Twitter</p>
  </section>

  <footer>
    <p>© 2025 Your Name. All rights reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
