<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class MakeRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $repositoryContract = $this->repository($name, 'repository-contract');
        $repository = $this->repository($name, 'repository');

        $replace = '$this->app->bind("'.$repositoryContract.'", "'.$repository.'");'.PHP_EOL.'//NewBindRepository';
        $this->replaceInFile('//NewBindRepository',$replace, app_path("Providers/RepositoryServiceProvider.php")
        );
    }
    protected function repository($name, $type = 'repository')
    {
        $pluralName = ucfirst(Str::plural($name));

        $folder = app_path("/Repository/{$pluralName}");

        (new Filesystem)->ensureDirectoryExists($folder);

        switch ($type){
            case 'repository':
                $file ="{$name}Repository";
                break;
            case 'repository-contract':
                $file = "{$name}RepositoryContract";
                break;
        }

        $phpFile = $folder. "/{$file}.php";

        file_put_contents($phpFile, $this->replace($name, $type));

        $this->info("generate: ". $phpFile);

        return 'App\\Repository\\'.$pluralName.'\\'.$file;
    }

    protected function replaceInFile($search, $replace, $path)
    {
        $content = file_get_contents($path);
        if(!Str::contains($content, Str::replace(PHP_EOL.'//NewBindRepository','',$replace))){
            file_put_contents($path, str_replace($search, $replace, $content));
        }
    }

    protected function replace($name,$type){
        return str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}',
                '{{modelNamePluralUpperCase}}',
                '{{modelNameSingularUpperCase}}',
            ],
            [
                $name,
                strtolower(Str::plural($name)),
                strtolower($name),
                ucfirst(Str::plural($name)),
                ucfirst($name)
            ],
            $this->getStub($type)
        );
    }

    protected function getStub($type)
    {
        return file_get_contents(dirname(__DIR__). "/stub/$type.stub");
    }
}