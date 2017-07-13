<?php
namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class QueryFilters {

	protected $request;
	protected $builder;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	public function apply(Builder $builder) {
		$this->builder = $builder;
		$aFilters = $this->request->all();
		foreach ($aFilters as $method => $value) {
			if (!method_exists($this, $method)) {
				continue;
			}

			if (!empty($value)) {
				$this->$method($value);
			}
		}
		return $this->builder;
	}
}