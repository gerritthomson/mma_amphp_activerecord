<?php
namespace models;

//use ActiveRecord;
use ActiveRecord\Model;

class Submission_Option extends Model
{
    static $belongs_to = array(
            array('submission'),
            array('option')
    );
}