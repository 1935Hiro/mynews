<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = array('id');

<<<<<<< HEAD
    // 以下を追記
=======
>>>>>>> origin/master
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
<<<<<<< HEAD

    // 以下を追記
    // News Modelに関連付けを行う
    public function histories()
    {
        return $this->hasMany('App\History');

    }
}
=======
}
>>>>>>> origin/master
