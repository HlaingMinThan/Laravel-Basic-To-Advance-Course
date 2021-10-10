<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Blog
{
    public $title;
    public $slug;
    public $intro;
    public $body;
    public function __construct($title, $slug, $intro, $body)
    {
        $this->title=$title;
        $this->slug=$slug;
        $this->intro=$intro;
        $this->body=$body;
    }

    public static function all()
    {
        $files=File::files(resource_path("blogs"));
        $blogs=[];
        foreach ($files as $file) {
            $obj=YamlFrontMatter::parseFile($file);
            $blog=new Blog($obj->title, $obj->slug, $obj->intro, $obj->body());
            $blogs[]=$blog;
        }
        return $blogs;
    }
    public static function find($slug)
    {
        $path=resource_path("blogs/$slug.html");
        if (!file_exists($path)) {
            return redirect('/');
        }
        return cache()->remember("posts.$slug", 120, function () use ($path) {
            return file_get_contents($path);
        });
    }
}
