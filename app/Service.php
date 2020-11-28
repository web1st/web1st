<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // Add Function
    public function type()
    {
        $this->type  = 'office';
        $this->save();
    }
}
