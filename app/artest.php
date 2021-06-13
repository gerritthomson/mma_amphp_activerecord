<?php
require_once '../vendor/autoload.php';
require_once '../vendor/zamzar/php_activerecord/ActiveRecord.php';
//use php_activerecord\ActiveRecord;
//use app\models\User;
require_once __DIR__.'/models/User.php';
require_once __DIR__.'/models/Submission.php';
require_once __DIR__.'/models/SubmissionOption.php';
require_once __DIR__.'/models/Answer.php';
require_once __DIR__.'/models/AnswerOption.php';
require_once __DIR__.'/models/Option.php';
require_once __DIR__.'/models/Select.php';
require_once __DIR__.'/models/Scene.php';
require_once __DIR__.'/models/Video.php';
require_once __DIR__.'/models/Question.php';


 ActiveRecord\Config::initialize(function($cfg)
 {
     //$cfg->set_model_directory('models');
     $cfg->set_connections(array(
        'development' => 'mysql://myuser:mypass@localhost/map1'));
 });
//
//$allUsers = models\User::all();
//print_r($allUsers);

//$allSubmission = models\Select::all();
//print_r($allSubmission);
//foreach($allSubmission as $sub){
//    $options = $sub->options;
//    print_r($options);
//}

$ascene = models\Scene::first();
$thevid = $ascene->video;
//var_export($thevid->to_json());
$theQuestion = $ascene->question;
//var_export($theQuestion->to_json());

$sub = models\Submission::first();
$options = $sub->options;
//array_map(function($item){
//    var_export($item->to_json());
//}, $options);

$sub = models\Answer::first();
$options = $sub->options;
//array_map(function($item){
//    var_export($item->to_json());
//}, $options);


//echo json_encode($options);

echo $sub->to_json(['include'=>['options']]);