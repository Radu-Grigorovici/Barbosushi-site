<?php
$suspect = false;
$pattern = '/Content-type:|Bcc:|Cc:/i';

function isSuspect($value, $pattern, &$suspect) {
  if (is_array($value)) {
    foreach ($value as $item) {
      isSuspect($item, $pattern, $suspect);
    }
  } else {
    if (preg_match($pattern, $value)) {
      $suspect = true;
    }
  }
}

//CHeck the $_POST array for suspect phrases
isSuspect($_POST, $pattern, $suspect);

//Process the form only if no suspect phrases are found
if (!$suspect) :
// Check that required fields have been filled in
// and reassign expected elements to simple variables

foreach ($_POST as $key => $value) {
  $value = is_array($value) ? $value : trim($value);
  if (empty($value) && in_array($key, $required)) {
    $missing[] = $key;
    $$key = '';
  } elseif (in_array($key, $expected)) {
    $$key = $value;
  }
}
// Validate user's email
if (!$missing || !empty($email)) {
  $validEmail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  if ($validEmail) {
    $headers[] = "Reply-to: $validEmail";
  } else {
    $errors['email'] = true;
  }

  // If no errors, create headers and message body
  if (!$errors && !$missing) {
    $headers = implode("\r\n", $headers);
  }
}

endif;
 ?>
