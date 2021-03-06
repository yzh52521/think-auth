<?php

declare(strict_types=1);

namespace yzh52521\ThinkAuth\model;

use think\Model;

/**
 * 权限组与规则关系
 * Class RoleRule
 * @package think\auth\model
 */
class RoleRule extends Model
{
    /**
     * 表名
     * @var string
     */
    protected $name = "auth_role_rule";
    /**
     * 数据表主键 复合主键使用数组定义
     * @var string|array
     */
    protected $pk = 'role_id';
    /**
     * 追加一对一字段
     * @var array
     */
    protected $append = ['rules'];

    /**
     * 角色规则表列
     * @return \think\model\relation\HasOne
     */
    public function rules(): \think\model\relation\HasOne
    {
        return $this->hasOne(Rule::class, 'id', 'rule_id')->bind(Rule::getTableFields());
    }
}
