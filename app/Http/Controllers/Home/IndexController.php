<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\CategoryRepository;
use App\Http\Repositories\ArticleRepository;
use App\Http\Repositories\ArticleContentRepository;

class IndexController extends Controller
{

    protected $categoryRepository;
    protected $articleRepository;
    protected $articleContentRepository;

    /**
     * CategoryController constructor.
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(ArticleRepository $articleRepository,
                                ArticleContentRepository $articleContentRepository,
                                CategoryRepository $categoryRepository)
    {

        $this->articleRepository = $articleRepository;
        $this->categoryRepository = $categoryRepository;
        $this->articleContentRepository = $articleContentRepository;

    }
    /**
     * 首页
     *
     * @return mixed
     */
    public function index()
    {

        $data['热门推荐'] = $this->articleRepository->select('status',1);
        $data['最新资讯'] = $this->articleRepository->select('status',1);
        foreach($data as $key => $value){
            foreach($value as $k => $v){
                $data[$key][$k]['content'] = $this->articleContentRepository->findBy('article_id',$v['id']);
            }
        }

        return view('home/index',compact('data'));
    }

    /**
     * 列表
     *
     * @param $cate
     * @return mixed
     */
    public function cate($cate)
    {
        echo $cate;
        return view('home/list');
    }


    public function detail($cate,$id)
    {
        echo $cate.$id;
        return view('home/detail');
    }
}

