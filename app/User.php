<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hub_name','application_registered','project_lead_name','project_lead_phone_number',
        'project_lead_email','logo','training_room','laptops','committed','incubation','internship_provision','internship_places','provide_trainers','reports','business_lead'
    ];
    // public function setSexAttribute($value)
    // {
    //     $this->attributes['sex'] = ($value) ? 'male': 'female';
    // }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}