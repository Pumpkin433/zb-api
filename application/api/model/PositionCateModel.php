<?php

namespace app\api\model;

use think\Model;

class PositionCateModel extends Model
{
    protected $name = 'position_cate';
    protected $pk = 'id';
    protected $resultSetType = 'collection';

    public function getTopCate($pageIndex, $pageSize)
    {
        $config = [
            'list_rows' => $pageSize,
            'page' => $pageIndex
        ];
        return $this->where('isDelete', '=', 0)->where('pid', '=', 0)->paginate(null, false, $config);
    }

    public function getCateListGroupById(){
        $sql = "select p.positionCateId,count(*) as c,pc.name,pc.pid  from zb_position_management p 
                left join zb_position_cate as pc on p.positionCateId=pc.id
                where p.isDelete = 0
                group by p.positionCateId order by c desc;";
        return $this->query($sql);
    }

    public function getCateDataGroupById(){
        $sql = "select p.positionCateId as id,count(*) as c,pc.name,pc.pid  from zb_position_management p 
                left join zb_position_cate as pc on p.positionCateId=pc.id
                where p.isDelete = 0
                group by p.positionCateId order by c desc;";
        return $this->query($sql);
    }

    public function getTopCateWithoutPage()
    {
        return $this->where('isDelete', '=', 0)->where('pid', '=', 0)
            ->select();
    }

    public function getNextCate($categoryId, $pageIndex, $pageSize)
    {
        $config = [
            'list_rows' => $pageSize,
            'page' => $pageIndex
        ];

        return $this->where('pid', '=', $categoryId)->where('isDelete', '=', 0)
            ->paginate(null, false, $config);
    }

    public function getNextCateWithoutPage($categoryId)
    {
        return $this->where('pid', '=', $categoryId)->where('isDelete', '=', 0)
            ->select();
    }

    public function del($ids)
    {
        return $this->whereIn('id', $ids)->update(['isDelete' => 1]);
    }

    public function checkName($name)
    {
        $count = $this->where('name', '=', $name)->where('isDelete', '=', 0)
            ->limit(0, 1)
            ->count();
        if ($count > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getDetail($categoryId)
    {
        return $this->where('id', 'eq', $categoryId)->where('isDelete', 'eq', 0)->find();
    }

    public function getAll()
    {
        return $this->where('isDelete', '=', 0)->order('id', 'asc')->select();
    }
}