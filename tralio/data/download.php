<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $bio = htmlspecialchars($_POST['bio']);
    $skills = htmlspecialchars($_POST['skills']);
    $projects = htmlspecialchars($_POST['projects']);
    $theme = htmlspecialchars($_POST['theme']);
    
    // Load the portfolio template
    $portfolioTemplate = file_get_contents('data/portfolio_template.html');
    
    // Replace placeholders in the template with actual user data
    $portfolioTemplate = str_replace('{{name}}', $name, $portfolioTemplate);
    $portfolioTemplate = str_replace('{{bio}}', $bio, $portfolioTemplate);
    $portfolioTemplate = str_replace('{{skills}}', nl2br($skills), $portfolioTemplate);
    $portfolioTemplate = str_replace('{{projects}}', nl2br($projects), $portfolioTemplate);
    $portfolioTemplate = str_replace('{{theme}}', $theme, $portfolioTemplate);

    // Generate a unique filename for the portfolio
    $filename = strtolower(str_replace(' ', '_', $name)) . '_portfolio.html';

    // Set the appropriate headers for file download
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    // Output the generated HTML content for download
    echo $portfolioTemplate;
    exit;
}
?>
