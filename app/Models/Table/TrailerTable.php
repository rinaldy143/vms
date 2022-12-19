<?php

namespace App\Models\Table;

use App\Models\Entity\Trailer;

class TrailerTable extends Trailer
{
    public function ModelTrailer()
    {
        return $this->belongsTo(ModelTrailer::class, 'model_trailer_id');
    }
    public function TypeTrailer()
    {
        return $this->belongsTo(TypeTrailer::class, 'type_trailer_id');
    }
}
