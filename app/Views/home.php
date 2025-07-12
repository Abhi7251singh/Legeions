<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Welcome to Legion</title>
  <style>
    * { box-sizing: border-box; }
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      background: #fff;
      color: #000;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    img.logo {
      width: 160px;
      height: auto;
      margin-bottom: 20px;
    }
    h1 {
      font-size: 3rem;
    }
    h1 span {
      color: #0070f3;
    }
    p {
      font-size: 1.2rem;
      color: #666;
    }
    .grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(200px, 1fr));
      gap: 1rem;
      margin-top: 40px;
      max-width: 800px;
    }
    .card {
      padding: 20px;
      border: 1px solid #eee;
      border-radius: 10px;
      text-align: left;
      transition: box-shadow 0.2s;
    }
    .card:hover {
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .card h3 {
      margin: 0 0 10px;
      font-size: 1.2rem;
    }
    .footer {
      position: absolute;
      bottom: 10px;
      font-size: 0.9rem;
      color: #999;
    }
  </style>
</head>
<body>
  <img src="/legion_home_logo.png" class="logo" alt="Legion Logo" />
  <h1>Welcome to <span>Legion</span>!</h1>
  <p>Get started by editing <code>app/Controllers/HomeController.php</code></p>

  <div class="grid">
    <div class="card">
      <h3>Documentation →</h3>
      <p>Find setup, CLI, and AI docs inside the Legion guide.</p>
    </div>
    <div class="card">
      <h3>Learn →</h3>
      <p>Explore how Legion combines PHP, React, and Python AI.</p>
    </div>
    <div class="card">
      <h3>Examples →</h3>
      <p>View common boilerplates and use cases from the community.</p>
    </div>
    <div class="card">
      <h3>Deploy →</h3>
      <p>Deploy Legion via Docker or export API-ready modules.</p>
    </div>
  </div>

  <div class="footer">Powered by Legion Framework</div>
</body>
</html>
