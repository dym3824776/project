<?php
namespace App\Http\Repositories;

/**
 * Created by PhpStorm.
 * User: dengyuming
 * Date: 2017/6/1
 * Time: 12:12
 */
use App\Model\Article;
class ArticleRepository extends  Repository
{

    protected $articleContentRepository;

    public function model()
    {
        return Article::class;
    }

}