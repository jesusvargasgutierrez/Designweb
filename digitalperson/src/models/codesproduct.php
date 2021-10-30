<?php
    use Illuminate\Database\Eloquent\Model;

class codesproduct extends Model{
    protected $table = "op_product_codes";
    protected $primaryKey = 'id_product_code';
    protected $guarded = [];
}