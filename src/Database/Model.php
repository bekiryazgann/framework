<?php

namespace src\Database;

use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * @method static where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static whereKey($value)
 * @method static whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static find($id, $columns = ['*'])
 * @method static findOrFail($id, $columns = ['*'])
 * @method static create(array $attributes)
 * @method static updateOrCreate(array $attributes, array $values = [])
 * @method static firstOrCreate(array $attributes, array $values = [])
 * @method static firstOrNew(array $attributes, array $values = [])
 * @method static update(array $values)
 * @method static orderBy($column, $direction = 'asc')
 * @method static limit($value)
 * @method static select($columns = ['*'])
 * @method static distinct()
 * @method static whereNull($column)
 * @method static whereNotNull($column)
 * @method static whereDate($column, $operator, $value = null)
 * @method static whereMonth($column, $operator, $value = null)
 * @method static whereDay($column, $operator, $value = null)
 * @method static whereYear($column, $operator, $value = null)
 * @method static whereHas($relation, $operator = '>=', $count = 1, $boolean = 'and', \Closure $callback = null)
 * @method static with($relations)
 * @method static withCount($relations)
 * @method static whereHasMorph($relation, $types, $operator = '>=', $count = 1, $boolean = 'and', \Closure $callback = null)
 * @method static withTrashed()
 * @method static withoutTrashed()
 * @method static onlyTrashed()
 * @method static whereColumn($first, $operator = null, $second = null, $boolean = 'and')
 * @method static findMany($ids, $columns = ['*'])
 * @method static findOrNew($id, $columns = ['*'])
 * @method static all($columns = ['*'])
 * @method static chunk($count, callable $callback)
 * @method static tap(callable $callback)
 * @method static unless($value, callable $callback)
 * @method static when($value, callable $callback)
 * @method static orderByDesc($column)
 * @method static lock($value = true)
 * @method static sharedLock()
 * @method static withGlobalScope($identifier, $scope)
 * @method static withoutGlobalScope($scope)
 * @method static withCasts(array $casts)
 * @method static has($relation, $operator = '>=', $count = 1, $boolean = 'and', \Closure $callback = null)
 * @method static doesnthave($relation, $boolean = 'and', \Closure $callback = null)
 * @method static offset($value)
 * @method static skip($value)
 * @method static take($value)
 * @method static pluck($column)
 * @method static count($columns = '*')
 * @method static min($column)
 * @method static max($column)
 * @method static avg($column)
 * @method static sum($column)
 * @method static exists()
 * @method static doesntExist()
 * @method static paginate($perPage = null, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static cursor()
 * @method static first($columns = ['*'])
 * @method static firstOrFail($columns = ['*'])
 * @method static firstOr($columns = ['*'])
 * @method static forPage($page, $perPage = 15)
 * @method static fromQuery($query, $bindings = [])
 * @method static fromSub($query, $as)
 * @method static fromTable($table)
 * @method static get($columns = ['*'])
 * @method static findManyOrFail($ids, $columns = ['*'])
 * @method static findOr($id, $columns = ['*'], $failCallback = null)
 * @method static destroy($ids)
 * @method static forceDelete()
 * @method static restore()
 * @method static groupBy($columns)
 * @method static having($column, $operator = null, $value = null, $boolean = 'and')
 * @method static join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
 * @method static leftJoin($table, $first, $operator = null, $second = null)
 * @method static rightJoin($table, $first, $operator = null, $second = null)
 * @method static crossJoin($table, $first = null, $operator = null, $second = null)
 * @method static whereBetween($column, array $values, $boolean = 'and', $not = false)
 * @method static whereNotBetween($column, array $values, $boolean = 'and')
 * @method static whereNotIn($column, $values, $boolean = 'and')
 */
class Model extends EloquentModel
{
    /**
     * @var string
     */
    public static string $cache_key;

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        self::$cache_key = $this->getTable();
    }
}