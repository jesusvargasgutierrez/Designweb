<?php
    use Illuminate\Database\Eloquent\Model;

class categories extends Model{
    protected $table = "op_category";
    protected $primaryKey = 'id_category';
    protected $guarded = [];
}