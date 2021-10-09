<?php
    use Illuminate\Database\Eloquent\Model;

class information extends Model{
    protected $table = "me_member_info";
    protected $primaryKey = 'id_member';
    protected $guarded = [];
}