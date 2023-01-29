<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phish Map</title>
  <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>

<body>
  <header>
    <h1>Phish Map</h1>
  </header>
  <main>
    <form id="show-form">
      <label for="show-input">Enter Show Info:</label>
      <input type="text" id="show-input">
      <button type="submit">Submit</button>
      <button type="reset">Reset</button>
    </form>
    <section id="show-list">
      <h2>Validated Shows:</h2>
      <ul>
        <!-- Show entries will be added here -->
      </ul>
    </section>
    <button id="map-shows">Map Your Shows</button>
  </main>
  <footer>
    <p>
      Contact: <a href="mailto:info@phishmap.com">info@phishmap.com</a><br>
      Copyright &copy; 2023 Phish Map<br>
      <a href="https://phish.net">Phish.net</a>
    </p>
  </footer>
</body>

</html>