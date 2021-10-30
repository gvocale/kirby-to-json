<h1><?= $page->title() ?></h1>

<?php
ini_set('max_execution_time', 0); //300 seconds = 5 minutes
//OR
set_time_limit(0); //If set to zero, no time limit is imposed. 

foreach ($pages->children() as $page) {

  $json = [];

  foreach ($page->content()->fields() as $key => $value) {
    if ($key === 'text') {
      $json[$key] = $value->markdown()->value();
    } else {
      $json[$key] = $value->toString();
    }
  }

  $json_data = json_encode($json, JSON_PRETTY_PRINT);

  $filename = $page->root() . '/index.json';

  try {
    // Try to save the page onto the hard drive
    file_put_contents($filename, $json_data);
    echo "<span style='color: green'>" . $filename;
  } catch (Exception $e) {
    // Throws error messages if something is wrong
    echo "<span style='color: red'>" . $filename;
    echo $e->getMessage();
  };
  echo "<br>";
};

?>
