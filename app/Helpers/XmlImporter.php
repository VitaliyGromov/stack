<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use SoapBox\Formatter\Formatter;
use Illuminate\Support\Str;

class XmlImporter
{
    private string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    private function getFileContent()
    {
        return Storage::disk('public')->get("xml/$this->fileName");
    }

    private function convertXmlToArray()
    {
        $file = $this->getFileContent();

        $formatter = Formatter::make($file, Formatter::XML);

        return $formatter->toArray();
    }

    public function getTableName()
    {
        return Str::beforeLast($this->fileName, '.xml');
    }

    private function getModelNameByFileName()
    {
        return ucfirst($this->getTableName());
    }

    private function makeModel()
    {
        $modelName = $this->getModelNameByFileName();

        return app("App\Models\\$modelName");
    }

    public function import()
    {
        $model = $this->makeModel();

        foreach($this->convertXmlToArray() as $modelItems)
        {
            for($i = 0; $i < count($modelItems); $i++){

                $model::create($modelItems[$i]);
            }
        }
    }
}

//TODO тут надо добавить try catch

?>