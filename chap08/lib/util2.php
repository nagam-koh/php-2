<?php
function h(string $data) {
  return htmlspecialchars($data, ENT_QUOTES, 'utf-8');
}


function checkEncord(array|string $data) {
  if (!mb_check_encoding($data, 'UTF-8')) {
    $err = "Encording Error!";
    exit($err);
  }
}

function moveTo(string $path, string $msg) {
?>
  <form action="<?php echo $path; ?>" method="POST">
    <input type="submit" value="<?php echo $msg; ?>">
  </form>
<?php
}

function printerror(array $errors) {
  echo '<ol class="error">';
  foreach ($errors as $value) {
    echo "<li>{$value}</li>";
    echo "</ol>";
  }
}
