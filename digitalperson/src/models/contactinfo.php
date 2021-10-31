<?php
    use Illuminate\Database\Eloquent\Model;

class contactinfo extends Model{
    protected $table = "op_contact_info";
    protected $primaryKey = 'id_contact';
    protected $guarded = [];
}