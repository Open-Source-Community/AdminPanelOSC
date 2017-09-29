<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Form extends Eloquent
{
    protected $fillable=['
    first_name','last_name','email','contact_no','year','homepage_select_first','homepage_select_second','day','time','ip'
    ];
}
