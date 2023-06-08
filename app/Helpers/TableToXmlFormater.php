<?php
namespace App\Helpers;

use SoapBox\Formatter\Formatter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;

class TableToXmlFormater
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

    private function convertTableToArray(): array
    {
        return $this->collection->toArray();
    }

    public function save()
    {
        $table = $this->getTableName();

        $formatter = Formatter::make($this->convertTableToArray(), Formatter::ARR);

        $xmlFile = $formatter->toXml();

        Storage::disk('public')->put("$table-in-json.xml", $xmlFile);
    }
}

//TODO  в этих файлах надо переделать архитектуру
?>
