<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['status', 'content', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public $statuses_list = ["wating" => "未着手", "working" => "着手", "completed" => "完了"]; 
}
