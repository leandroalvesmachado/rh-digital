<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Perfil;

use OwenIt\Auditing\Contracts\Auditable;

class Usuario extends Authenticatable implements Auditable
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'usuarios';

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
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function __construct($attributes = [])
    {
        parent::__construct($attributes);
        $this->id = Str::orderedUuid();
    }

    public function isAdmin()
    {
        return $this->perfis->contains('codigo', Perfil::ADMIN);
    }

    public function isRh()
    {
        return $this->perfis->contains('codigo', Perfil::RH);
    }

    public function isFuncionario()
    {
        return $this->perfis->contains('codigo', Perfil::FUNCIONARIO);
    }

    public function perfis()
    {
        return $this->belongsToMany(Perfil::class, 'usuario_perfis');
    }

    public function usuarioPerfis()
    {
        return $this->hasMany(UsuarioPerfil::class);
    }
}
