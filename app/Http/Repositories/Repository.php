<?php
namespace App\Http\Repositories;

/**
 * Created by PhpStorm.
 * User: dengyuming
 * Date: 2017/6/1
 * Time: 11:55
 */
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;

abstract class Repository implements RepositoryInterface
{

    private $app;

    protected $model;

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * 制定模型类的名称
     * @return mixed
     */
    abstract function model();


    /**
     * 默认返回全部数据
     * @param array $columns
     */
    public function all($columns = array('*'))
    {
        return $this->model->get($columns);
    }

    /**
     * 条件查询
     * @return mixed
     */
    public function select($key,$value,$limit= 10,$key1 = 'publish_time',$value1 = 'desc',$columns = array('*'))
    {
        return $this->model->where($key,$value)->orderBy($key1,$value1)->limit($limit)->get($columns);
    }

    /**
     * 分页
     * @param int $perPage
     * @param array $columns
     */
    public function paginate($perPage = 15, $columns = array('*'))
    {
        // TODO: Implement paginate() method.
        return $this->model->paginate($perPage,$columns);

    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data) {
        return $this->model->create($data);
    }

    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute="id") {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id) {
        return $this->model->destroy($id);
    }

    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = array('*')) {
        return $this->model->find($id, $columns);
    }

    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }


    /**
     * 异常处理
     * @return Model
     */
    public function makeModel() {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model)
            abort("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");

        return $this->model = $model;
    }


}