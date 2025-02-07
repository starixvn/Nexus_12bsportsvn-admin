<?php
// Set content type to plain text
header("Content-Type: text/plain");

// Check WordPress core details
echo "WordPress Health Check\n";
echo "----------------------\n";
echo "Status: OK\n";
echo "PHP Version: " . phpversion() . "\n";

// End of health check
exit;
?>