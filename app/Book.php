<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'book_details';

	/**
	 * The table key used by the model.
	 *
	 * @var string
	 */
    public $timestamps = true;

	//protected $primaryKey = 'faq_id';
    protected $fillable = ['name', 'created_at','updated_at','author_name','release_date']; 

	//protected $fillable = ['language_code','faq_type','applicable_country','question','answer','parent_id'];
}
