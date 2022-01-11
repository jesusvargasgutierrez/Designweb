<?php
    use Illuminate\Database\Eloquent\Model;

class awsimages extends Model{
    protected $table = "img_aws_presimap";
    protected $primaryKey = 'id_img_aws';
    protected $guarded = [];
}