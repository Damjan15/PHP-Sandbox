<?php
// Add a query parameter to the URL in the browser's address bar:
// http://localhost:8000/?name=John

// Accessing Query String Parameters
var_dump($_GET);
echo $_GET['name'];

// Check if Parameter Exists
if (isset($_GET['name'])) {
    echo $_GET['name'];
}
