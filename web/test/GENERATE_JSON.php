<?php

//$data = array("F"=>0,"P"=>0,"@"=>1);
$data = array(
array("activitydata_id"=>1,"type"=>"FRIEND","member_id"=>2,"timestamp"=>"2011-12-05 11:51","notify"=>"1","message" => "フレンドリクエストが、、、、、？"),
array("activitydata_id"=>2,"type"=>"FRIEND","member_id"=>2,"timestamp"=>"2011-12-05 11:51","notify"=>"1","message" => "フレンドリクエストが、、、、、？"),
array("activitydata_id"=>3,"type"=>"FRIEND","member_id"=>2,"timestamp"=>"2011-12-05 11:51","notify"=>"1","message" => "フレンドリクエストが、、、、、？"),
array("activitydata_id"=>4,"type"=>"FRIEND","member_id"=>2,"timestamp"=>"2011-12-05 11:51","notify"=>"1","message" => "フレンドリクエストが、、、、、？"),
);
echo json_encode($data);
echo "\n";


