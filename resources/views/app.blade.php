<!DOCTYPE html>
<?php
  use Illuminate\Support\Facades\Http;
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $response = Http::get('https://gorest.co.in/public/v1/users', [
      'Accept' => 'application/json',
      'Content-Type' => 'application/json',
    ])->json();

    echo "<pre>";
    var_dump($response);
    echo "</pre>";
    ?>
  </body>
</html>
