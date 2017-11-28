<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List extends Model
{
    public function getUserLists($id) {
	$lists = $table('lists')->where('owner_id', $id)->get();
	return $lists;
    };
}
