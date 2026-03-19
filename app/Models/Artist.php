<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    public function paintings()
    {
        return $this->hasMany(Painting::class);
    }

    // Get Artists age based off date of birth/death
    public function getAge() 
    {
        if (is_null($this->dod))
        {
            return date('Y') - $this->dob;
        }
        else
        {
            return $this->dod - $this->dob;
        }
    }
}