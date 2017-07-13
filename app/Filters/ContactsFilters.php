<?php
namespace App\Filters;

class ContactsFilters extends QueryFilters
{
	public function name($sName) {
    	return $this->builder->where('name', 'like', "%{$sName}%");
    }

    public function email($sEmail) {
    	return $this->builder->where('email', 'like', "%{$sEmail}%");
    }
}