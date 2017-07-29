<?php

namespace eHOSP\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class NewBlogPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:new';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new blog post';

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
     * @return mixed
     */
    public function handle()
    {
        $originalTile = $this->ask('Please give a title to the post:');
        $author = $this->ask('Please specify the author:');
        $image = $image_alt = "";
        if ($this->confirm('Do you want to add a picture?')) {
            $image = $this->ask('Please type a link to the picture');
            $image_alt = $this->ask('Please give an image image alternative:');
        }
        $description = $this->ask('Please give a short description:');

        $date = date("d-m-Y-his");
        $title = kebab_case(title_case($originalTile));
        $viewname = $date ."-". $title;
        $filename = $viewname . ".blade.php";
        $filePath = resource_path('views/blog/');
        $file = fopen($filePath.$filename, "w") or $this->error("Unable to open file!");


        $template = "@extends('layouts.app')

@section('content')
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
            <h1> %s </h1>
            
        </div>
    </div>
</div>
@endsection
        ";

        fprintf($file, $template, $originalTile);
        fclose($file);

        $dbInsertArray = [
            "title" => $originalTile,
            "viewname" => $viewname,
            "description" => $description,
            "author" => $author,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()
        ];
        // Add optional image
        if ($image && $image_alt) {
            $dbInsertImage = [
                "img" => $post["img"] ,
                "img_alt" => $post["img_alt"]
            ];
            array_push($dbInsertArray, $dbInsertImage);
        }

        // Insert to database
        DB::table('blog_posts')->insert($dbInsertArray);

        // Append to index.json file for future use
        $indexJsonFile = file_get_contents(resource_path('views/blog/index.json'));
        $indexDecode = json_decode($indexJsonFile, true);
        array_push($indexDecode, $dbInsertArray);
        $indexEncode = json_encode($indexDecode, JSON_PRETTY_PRINT);
        file_put_contents(resource_path('views/blog/index.json'), $indexEncode);

            
    }
}
