<?php

namespace eHOSP\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class PublishBlogPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish posts that have not been published from views';

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
        $indexJsonFile = file_get_contents(resource_path('views/blog/index.json'));
        $indexDecode = json_decode($indexJsonFile, true);

        foreach ($indexDecode as $post) {
            // If post is already published, then skip it
            $postExists = DB::table('blog_posts')->where("viewname", $post["viewname"])->exists();
            if ($postExists) {
                continue;
            }

            $dbInsertArray = [
                "title" => $post["title"],
                "viewname" => $post["viewname"],
                "description" => $post["description"],
                "author" => $post["author"],
                "created_at" => $post["created_at"]["date"],
                "updated_at" => $post["updated_at"]["date"]
            ];

            // Check if optional image was set
            if (isset($post["img"]) && isset($post["img_alt"])) {
                $dbInsertImage = [
                    "img" => $post["img"] ,
                    "img_alt" => $post["img_alt"]
                ];
                array_push($dbInsertArray, $dbInsertImage);
            }

            // Insert post to database
            DB::table('blog_posts')->insert($dbInsertArray);
        }
    }
}
