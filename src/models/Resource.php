<?php

namespace Project;

use Illuminate\Database\Eloquent\SoftDeletes;
use Logic\ResourceLogic;

class Resource extends ResourceLogic
{

    protected $table = 'resources';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'email', 'team_id','user_id');
    protected $rules = [
        'name'=>'required',
        'email'=>'required|email'
    ];

    public function workItems()
    {
        return $this->hasMany('WorkItem');
    }

    public function projects()
    {
        return $this->belongsToMany('Project\Project')->using('Project\ProjectResource');
    }

    public function teamMember()
    {
        return $this->hasOne('TeamMember');
    }
    public function toArray(){
        return [
            'id'=>$this->id,
            'name'=> $this->name,
            'email' => $this->email
        ];
    }

    public function team()
    {
        return $this->belongsTo('App\Team');
    }
    public function user(){

    }

}