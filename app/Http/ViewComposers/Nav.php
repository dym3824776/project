<?php
/**
 * Created by PhpStorm.
 * User: dengyuming
 * Date: 2017/5/31
 * Time: 16:22
 */
namespace App\Http\ViewComposers;


use Illuminate\Contracts\View\View;
use App\Model\Category;

class Nav
{

    private $nav;

    public function __construct()
    {
    }

    public function compose(View $view)
    {
        $nav = list_to_tree(Category::all()->toArray());
        $view->with(compact('nav'));
    }

}