<?php

namespace Niyam\Bpms\Model;

use Illuminate\Database\Eloquent\Model;

class BpmsFetch extends Model
{
    protected $guarded = ['id'];
    //protected $table = 'bpms.bpms_fetches';


    public function variable()
    {
        return $this->hasOne(BpmsVariable::class, 'fetch_id');
    }
}
