<?php
    use Illuminate\Database\Eloquent\Model;

class photosmember extends Model{
    protected $table = "me_member_photos";
    protected $primaryKey = 'id_photo';
    protected $guarded = [];
}