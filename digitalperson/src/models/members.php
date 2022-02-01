<?php
    use Illuminate\Database\Eloquent\Model;

class members extends Model{
    protected $table = "op_members";
    protected $primaryKey = 'id_member';
    protected $guarded = [];
}