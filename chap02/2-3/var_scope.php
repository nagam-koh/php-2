<html>

<body>
  <h1>変数のスコープ</h1>

  <?php
  $a = 5;
  if ($a === 5) {
    $a = 10;
    echo $a, '<br>';
    $b = 3;
  }
  echo $a, '<br>';
  echo $b, '<br>';
  ?>


  <script>
    'use strict';
    let a = 5;
    if (a === 5) {
      let a = 10;
      console.log(a);
      let b = 3;
    }

    console.log(a);
    console.log(b);
  </Script>
</body>

</html>