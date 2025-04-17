<?php
//define("RANK",["松","竹","梅"]);
const RANK =["松","竹","梅"];
print_r(RANK);
//RANK[1]="熊";  定数だから変更不可
echo RANK[1];
?>
<html>
  <body>
    <script>
      'use strict'
      const rank =["松","竹","梅"];
      rank[3] ="熊"
      console.log(rank);
      </script>
  </body>
</html>