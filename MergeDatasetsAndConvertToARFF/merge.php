<?php

 $data1 = fopen("datanospeccar.csv", "r");
 $data2 = fopen("labels.csv", "r+");
  
  $data1Output = fopen("data1Updated.csv", "w");
  $data2Output = fopen("data2Updated.csv", "w");

  $data1Columns = fgetcsv($data1,  FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  $data2Columns = fgetcsv($data2, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

  if (!$data1) {

      die("$data1 BROKE");

  } else {

      while (!feof($data1)) {

          $currentData1 = fgetcsv($data1, 1000000);

          if ($currentData1 != false) {

               $currentData2 = fgetcsv($data2, 1000000);

              $data1Id = $currentData1[0];

              $newData1Row = array_merge($currentData1, $currentData2);
              array_push($newData1Row);

              fputcsv($data1Output, $newData1Row);
      }

  }
}

?>