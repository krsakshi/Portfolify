<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $bio = htmlspecialchars($_POST['bio']);
    $skills = htmlspecialchars($_POST['skills']);
    $projects = htmlspecialchars($_POST['projects']);
    $theme = htmlspecialchars($_POST['theme']);
    
    // Save data to a file or database (optional, if needed)
    // For now, we’ll generate a simple HTML page
    
    // Load the portfolio template
    $portfolioTemplate = file_get_contents('data/portfolio_template.html');
    
    // Replace placeholders in the template with actual user data
    $portfolioTemplate = str_replace('{{name}}', $name, $portfolioTemplate);
    $portfolioTemplate = str_replace('{{bio}}', $bio, $portfolioTemplate);
    $portfolioTemplate = str_replace('{{skills}}', nl2br($skills), $portfolioTemplate);
    $portfolioTemplate = str_replace('{{projects}}', nl2br($projects), $portfolioTemplate);
    $portfolioTemplate = str_replace('{{theme}}', $theme, $portfolioTemplate);

    // Output the generated portfolio (or save it to a file)
    echo $portfolioTemplate;
}
?>
