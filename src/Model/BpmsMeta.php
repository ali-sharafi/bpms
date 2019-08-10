<?php

namespace Niyam\Bpms\Model;

use Illuminate\Database\Eloquent\Model;

class BpmsMeta extends Model
{
    protected $guarded = ['id'];
    protected $table = 'bpms.bpms_metas';

    
    protected $casts = [
        'options' => 'array',
    ];

    public function case()
    {
        $this->belongsTo(BpmsCase::class, 'case_id');
    }

}
