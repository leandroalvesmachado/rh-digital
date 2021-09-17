<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;

use OwenIt\Auditing\Contracts\Auditable;

class Funcionario extends Model implements Auditable
{
    use HasFactory;
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'funcionarios';

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
        'usuario_id',
        'cpf',
        'data_nascimento',
        'pais_nascimento_id',
        'estado_nascimento_id',
        'naturalidade_id',
        'nacionalidade_id',
        'sexo_id',
        'estado_civil_id',
        'nome',
        'nome_mae',
        'nome_pai',
        'pcd',
        'pcd_observacao',
        'email_institucional',
        'email_particular',
        'telefone_residencial',
        'telefone_celular',
        'ativo'
    ];

    public function __construct($attributes = [])
    {
        parent::__construct($attributes);
        $this->id = Str::orderedUuid();
        $this->usuario_id = Auth::id();
        $this->created_by = Auth::id();
        $this->updated_by = Auth::id();
    }

    public function fill(array $attributes)
    {
        parent::fill($attributes);
        $this->updated_by = Auth::id();
    }

    public function delete()
    {
        $this->deleted_by = Auth::id();
        $this->save();

        parent::delete();
    }

    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = preg_replace('/[^0-9]/', '', $value);
    }

    public function getDataNascimentoAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function setDataNascimentoAttribute($value)
    {
        $dataNascimento = substr($value, 6, 4).'-'.substr($value, 3, 2).'-'.substr($value, 0, 2);
        $this->attributes['data_nascimento'] = $dataNascimento;
    }

    public function setTelefoneResidencialAttribute($value)
    {
        $this->attributes['telefone_residencial'] = preg_replace('/[^0-9]/', '', $value);
    }

    public function setTelefoneCelularAttribute($value)
    {
        $this->attributes['telefone_celular'] = preg_replace('/[^0-9]/', '', $value);
    }

}
