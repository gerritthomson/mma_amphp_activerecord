<?php
namespace models;

//use ActiveRecord;
use ActiveRecord\Model;

class Submission extends Model
{
    static $has_many = array(
        array('options',
            'through' => 'Submission_Option')
    );
}