<?php
namespace App\Helpers;

use SoapBox\Formatter\Formatter;

class XmlToArrayConverter
{
    public static function convertXmlToArray($filePath)
    {
        $file = file_get_contents("/storage/app/public/users-in-json.xml");

        $formatter = Formatter::make($file, Formatter::XML);

        return $formatter->toArray();
    }
}
?>