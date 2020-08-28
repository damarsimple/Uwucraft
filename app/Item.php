<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Item extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class);
    }
    public function increaseView()
    {
        dispatch(new App\App\Jobs\IncreaseItemViewCount($this));
        return $this;
    }
}
