<?php
    use Illuminate\Database\Eloquent\Model;

class suppliers extends Model{
    protected $table = "op_suppliers";
    protected $primaryKey = 'id_supplier';
    protected $guarded = [];
}