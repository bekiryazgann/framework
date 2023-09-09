<?php

namespace src\Database;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    public static string $cache_key;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        self::$cache_key = $this->getTable();
    }

    public static function all($columns = ['*']): mixed
    {
        $data = [];
        $cache = new Cache('all_' . self::$cache_key);
        if ($cache->get()) {
            return json_decode(json_encode($cache->get()));
        }
        if (!$cache->get()) {
            $data = parent::all($columns)->toArray();
            $cache->set($data);
        }
        return json_decode(json_encode($data));
    }
}
