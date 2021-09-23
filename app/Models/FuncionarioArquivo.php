<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;

use OwenIt\Auditing\Contracts\Auditable;

class FuncionarioArquivo extends Model implements Auditable
{
    use HasFactory;
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'funcionario_arquivos';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'funcionario_id',
        'tipo_arquivo_id',
        'nome',
        'arquivo',
        'arquivo_caminho',
        'content_type',
        'metadata',
        'byte_size',
        'ativo',
        'observacao',
        'descricao'
    ];

    public function __construct($attributes = [])
    {
        parent::__construct($attributes);
        $this->id = Str::orderedUuid();
        $this->created_by = Auth::id();
        $this->updated_by = Auth::id();
    }

    public function delete()
    {
        $this->deleted_by = Auth::id();
        $this->save();

        parent::delete();
    }

    public function setNomeAttribute($value)
    {
        $this->attributes['nome'] = $value;
        $this->attributes['arquivo'] = Str::slug($value);
    }
}
