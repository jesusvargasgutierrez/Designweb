<?php
    use Illuminate\Database\Eloquent\Model;

class products extends Model{
    protected $table = "op_products";
    protected $primaryKey = 'id_product';
    protected $guarded = [];
}