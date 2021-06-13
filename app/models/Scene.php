<?php
namespace models;

//use ActiveRecord;
use ActiveRecord\Model;

class Scene extends Model
{
    static $belongs_to = [['video'],['question']];
}