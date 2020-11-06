<?

namespace App;

use Illuminate\foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**The atributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * 
     * @var array
     */
    protected $hidden = [
        'pasword','remember_token'
    ];
}