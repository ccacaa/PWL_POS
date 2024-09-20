<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Monolog\Level;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    //js-4 prak 1 (1)
    protected $fillable = ['level_id', 'username', 'nama', 'password'];  //js-4 prak 2.4 (5)

    //js-4 prak 1 (4)
    // protected $fillable = ['level_id', 'username', 'nama'];

    //js-4 prak 2.7 (1)
    public function level(): BelongsTo
    {
    return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

}