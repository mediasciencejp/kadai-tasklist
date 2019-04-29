<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $statuses_list = ["wating" => "未着手", "working" => "着手", "completed" => "完了"]; 
}
