<?php
namespace ModelsDB;
use Illuminate\Database\Eloquent\Model as Eloquent ;
class Users extends Eloquent
{
		protected $table = 'users';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'name', 'email', 'password','confirmed','active'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
