<?php
function validate($data) {
  // Strip unnecessary characters for example extra space, tab, newline from the user input
  $data = trim($data);
  // Remove backslashes    
  $data = stripslashes($data);
  // Convert special characters to HTML entities, thus preventing attackers from exploiting the code
  $data = htmlspecialchars($data);
  // Return validated data
  return $data;
}
?>