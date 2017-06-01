<?php
namespace App\Http\Repositories;
/**
 * Created by PhpStorm.
 * User: dengyuming
 * Date: 2017/6/1
 * Time: 11:43
 */

interface RepositoryInterface
{
    public function all($columns = array('*'));
    public function select($key,$value,$limit = 10,$key1 = 'publish_time',$value1 = 'desc',$columns = array('*'));
    public function paginate($perPage = 15, $columns = array('*'));
    public function create(array $data);
    public function update(array $data, $id);
    public function delete($id);
    public function find($id, $columns = array('*'));
    public function findBy($field, $value, $columns = array('*'));
}