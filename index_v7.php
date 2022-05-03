<?php
 /// Med site te voir https://twitteroauth.com/
require "autoload.php"; 

use Abraham\TwitterOAuth\TwitterOAuth;
 
 
 
$connection = new TwitterOAuth('FEwUsl8L79fecVklfKBPxcIg6',
 'fDDFRkwTqtC3VMLofyViquDqatHVGTcXsk7eTiGpL4xmwBQJc7', 
 '1518298804675616768-AqfqaJkzNNTH92QvWCvYnsYa4yFUSP',
 'pbVnm0XrpkaPchL0vlI9k1qLMyL3nlRkHSSPsgX9V6JGl');
  
 
 // Pour posteler 
 // $connection->post("statuses/update", ["status" => "hello world 2 "]);

 // Pour supprimer 
   // $connection->post("statuses/destroy", ["id" => "1519706107442339842"]); 
// id statu  1519685579067248641 

$media1 = $connection->upload('media/upload', ['media' => 'tst.jpg']);
$media2 = $connection->upload('media/upload', ['media' => 'tst.jpg']);
$parameters = [
    'status' => 'Test deux images ',
    'media_ids' => implode(',', [$media1->media_id_string, $media2->media_id_string])
];
$result = $connection->post('statuses/update', $parameters);
   