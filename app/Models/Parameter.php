<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Parameter extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

	protected $primaryKey = 'key';
	public $incrementing = false;

	const INTEGER = 'INTEGER';
	const FLOAT = 'FLOAT';
	const STRING = 'STRING';
	const ARRAY = 'ARRAY';
	const BOOLEAN = 'BOOLEAN';

	const TYPES = [
		self::INTEGER,
		self::FLOAT,
		self::STRING,
		self::BOOLEAN,
		self::ARRAY
	];

	protected $fillable = [
		'key',
		'value',
		'type',
		'alias'
	];

	protected $auditInclude = [
		'key',
		'value',
		'type',
		'alias'
	];

	/**
	 * @var array $cache
	 */
	private static $cache;

	/**
	 * @var array $public
	 */
	private static $public;

	/**
	 * @param string $key
	 * @param mixed|null $default
	 * @return mixed|null
	 * @throws \Exception
	 */
	public static function get(string $key, $default = null)
	{
		if ( is_null(self::$cache) ) {
			self::cacheParameters();
		}

		if(isset(self::$cache[$key])){
			return self::$cache[$key];
		}

		if ( is_null($default) ) {
			throw new \Exception("Parameter {$key} not found");
		} else {
			return $default;
		}
	}

	/**
	 * @param Parameter $parameter
	 * @return array|float|int|mixed
	 */
	private static function getValue(Parameter $parameter)
	{
		switch ($parameter->type) {
			case self::INTEGER:
				return intval($parameter->value);
			case self::FLOAT:
				return floatval($parameter->value);
			case self::BOOLEAN:
				return boolval($parameter->value);
			case self::ARRAY:
				return explode(';', $parameter->value);
			default:
				return $parameter->value;
		}
	}

	private static function cacheParameters()
	{
		$parameters = Parameter::all();
		self::$cache = [];

		foreach ($parameters as $parameter) {
			$value = self::getValue($parameter);
			self::$cache[$parameter->key] = $value;

			if ( $parameter->public ) {
				self::$public[$parameter->key] = $value;
			}
		}
	}

	public static function getPublicList()
	{
		if ( is_null(self::$cache) ) {
			self::cacheParameters();
		}

		return self::$public;
	}
}
