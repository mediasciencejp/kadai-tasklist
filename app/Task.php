<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $statuses_list = ["wating" => "未着手", "workng" => "着手", "completed" => "完了"]; 
}
