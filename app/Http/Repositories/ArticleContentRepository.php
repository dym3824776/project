<?php
namespace App\Http\Repositories;

/**
 * Created by PhpStorm.
 * User: dengyuming
 * Date: 2017/6/1
 * Time: 12:12
 */
use App\Model\ArticleContent;

class ArticleContentRepository extends  Repository
{

    public function model()
    {
        return ArticleContent::class;
    }

}