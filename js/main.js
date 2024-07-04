/**
 * js template
 *
 * @package Your_Theme
 * @link https://github.com/MahediZaber51/WordPress-Theme-Base-Template
 */

document.addEventListener('DOMContentLoaded', function() {
    // Example of basic event handling
    const header = document.querySelector('header');
    header.addEventListener('click', function() {
        alert('Header clicked!');
    });

    // Example of DOM manipulation
    const sidebar = document.querySelector('.sidebar');
    if (sidebar) {
        const sidebarTitle = document.createElement('h2');
        sidebarTitle.textContent = 'Sidebar Title';
        sidebar.prepend(sidebarTitle);
    }
});
