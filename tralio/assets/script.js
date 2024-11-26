// Theme switching functionality
document.addEventListener('DOMContentLoaded', () => {
    const themeSelect = document.getElementById('theme');
    const currentTheme = localStorage.getItem('theme');

    // Check if the user has previously selected a theme
    if (currentTheme) {
        document.body.classList.add(currentTheme);
        themeSelect.value = currentTheme;
    }

    // Change theme when the user selects a new one
    themeSelect.addEventListener('change', (e) => {
        const selectedTheme = e.target.value;
        document.body.classList.remove('light', 'dark'); // Remove existing themes
        document.body.classList.add(selectedTheme); // Add the new theme
        localStorage.setItem('theme', selectedTheme); // Save theme to localStorage
    });
});
// Function to handle the portfolio download
function downloadPortfolio() {
    const form = document.querySelector('form');
    const formData = new FormData(form);
    
    // Send the form data to download.php using a POST request
    fetch('download.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.blob())
    .then(blob => {
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = formData.get('name').toLowerCase().replace(/ /g, '_') + '_portfolio.html';
        link.click();
    })
    .catch(error => console.error('Error downloading portfolio:', error));
}
