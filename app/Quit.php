<?php

namespace App;

use App\Traits\Orderable;

use Illuminate\Database\Eloquent\Model;

class Quit extends Model
{
    use Orderable;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
