<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Helpers\XmlImporter;

class ImportXmlCommand extends Command
{
    protected $signature = 'xml:import {fileName}';

    protected $description = 'import all xml files from storage/public to db tables';

    public function handle()
    {
        $xmlImporter = new XmlImporter($this->argument('fileName'));

        $tableName = $xmlImporter->getTableName();

        $xmlImporter->import();

        $this->info("Successfully import into $tableName table");
    }
}
