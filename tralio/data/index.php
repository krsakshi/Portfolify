<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tralio - Portfolio Generator</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>Create Your Portfolio with Tralio</h1>
    </header>

    <main>
        <form action="generate.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio" required></textarea>

            <label for="skills">Skills:</label>
            <textarea id="skills" name="skills" required></textarea>

            <label for="projects">Projects:</label>
            <textarea id="projects" name="projects" required></textarea>

            <label for="theme">Choose Theme:</label>
            <select name="theme" id="theme">
                <option value="light">Light</option>
                <option value="dark">Dark</option>
            </select>

            <button type="submit" id="generate">Generate Portfolio</button>
        </form>
    </main>
    <section>
    <button id="downloadPortfolioBtn" onclick="downloadPortfolio()">Download Portfolio</button>
    </section>


    <footer>
        <p>Powered by Tralio</p>
    </footer>
    <script src="assets/script.js"></script>
</body>
</html>
