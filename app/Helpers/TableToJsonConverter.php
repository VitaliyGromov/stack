<?php
namespace App\Helpers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class TableToJsonConverter
{
    private Collection $collection;

    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
    }

    private function getTableName(): string
    {
        return $this->collection->first()->getTable();
    }

    public function convertTableToArray(): array
    {
        return $this->collection->toArray();
    }

    public function save()
    {
        $table = $this->getTableName();

        $json_data = json_encode($this->convertTableToArray(), JSON_UNESCAPED_UNICODE);

        Storage::disk('public')->put("$table-in-json.json", $json_data); //TODO сделать нормальное скачивание
    }
}
?>