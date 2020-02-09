<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactAttemptNote extends Model
{
    //
    public function contactRequestReport(){
        return $this->belongsTo(ContactRequestReport::class);
    }
}
