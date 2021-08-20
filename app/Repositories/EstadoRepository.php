<?php

namespace App\Repositories;

use Exception;
use DB;

use App\Models\Estado;

class EstadoRepository extends BaseRepository
{
    protected $model = Estado::class;
}
