<?php
    use Illuminate\Database\Eloquent\Model;

class warehouses extends Model{
    protected $table = "op_warehouse";
    protected $primaryKey = 'id_warehouse';
    protected $guarded = [];
}