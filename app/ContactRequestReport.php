<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactRequestReport extends Model
{
    //

    public function contactAttemptNotes(){
        return $this->hasMany(ContactAttemptNote::class);
    }
}
