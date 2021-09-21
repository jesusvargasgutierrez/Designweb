<?php
    use Illuminate\Database\Eloquent\Model;

class TracerMembers extends Model{
    protected $table = "op_tracers_member";
    protected $primaryKey = 'id_tracer';
    protected $guarded = [];
}