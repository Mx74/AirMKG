<?php 
// Begin PHP
$websitekey=basename(__DIR__);
if (! defined('USEDOLIBARRSERVER') && ! defined('USEDOLIBARREDITOR')) { require_once __DIR__.'/master.inc.php'; }
require_once DOL_DOCUMENT_ROOT.'/core/lib/website.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/website.inc.php';
ob_start();
header('Cache-Control: max-age=3600, public, must-revalidate');
header('Content-type: text/css');
// End PHP
?>

/* CSS content (all pages) */
body.bodywebsite { 
    margin: 0; 
    font-family: 'Open Sans', sans-serif;
}

.bodywebsite h1 { 
    margin-top: 0; 
    margin-bottom: 0; 
    padding: 10px;
}

/* Container */
.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

/* Header */
header {
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    position: relative;
    z-index: 1000;
}

/* Navigation */
nav {
    padding: 1rem 0;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
}

nav ul li {
    margin: 0 1rem;
}

nav ul li a {
    color: #333;
    text-decoration: none;
    font-weight: 500;
}

nav ul li a:hover {
    color: #007bff;
}

/* Main content */
main {
    padding: 2rem 0;
}

/* Footer */
footer {
    background-color: #333;
    color: #fff;
    padding: 2rem 0;
    margin-top: 2rem;
}

/* Utility classes */
.text-center {
    text-align: center;
}

.mb-4 {
    margin-bottom: 1.5rem;
}

.mt-4 {
    margin-top: 1.5rem;
}

/* Responsive */
@media (max-width: 768px) {
    nav ul {
        flex-direction: column;
        align-items: center;
    }
    
    nav ul li {
        margin: 0.5rem 0;
    }
}

/* Custom link color */
.bodywebsite a {
    color: #007bff;
}

.bodywebsite a:hover {
    color: #0056b3;
    text-decoration: none;
}

<?php
// Begin PHP
$tmp = ob_get_contents(); 
ob_end_clean(); 
dolWebsiteOutput($tmp, "css");
// End PHP
?>
