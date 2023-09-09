<?php

namespace src\Database;

class Cache
{
    /**
     * @var string
     */
    public string $fileName;

    public string $path;

    public string $ext;

    /**
     * @param string $key
     */
    public function __construct(public string $key){
        $this->path = PATH . '/storage/cache/database/';
        $this->ext = '.json';
        $this->fileName = $this->path . $this->key . $this->ext;
    }

    /**
     * @param $data
     * @param $key
     *
     * @return void
     */
    public function set($data): void
    {
        if (!file_exists($this->fileName)){
            touch($this->fileName);
        }
        $data = json_encode([
            'data' => crypto()->encrypt(is_array($data) ? json_encode($data) : $data),
            'array' => is_array($data) ? 'true' : 'false'
        ]);
        file_put_contents($this->fileName, $data);
    }

    /**
     * @param $key
     *
     * @return false|mixed|string
     */
    public function get(): mixed
    {
        if (file_exists($this->fileName)){
            $data = json_decode(file_get_contents($this->fileName));
            return ($data->array == 'true') ? json_decode(crypto()->decrypt($data->data)) : crypto()->decrypt($data->data);
        }
        return false;
    }

    public function flush(){
        $files = glob($this->path . '*' . $this->ext);
        foreach ($files as $file){
            unlink($file);
        }
    }
}
