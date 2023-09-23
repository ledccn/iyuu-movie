<?php
declare (strict_types=1);

namespace Iyuu\Movie\Dispatch;

use InvalidArgumentException;

/**
 * 枚举：任务主类型
 */
enum TypeEnum: int
{
    /**
     * 豆瓣
     */
    case douban = 1;

    /**
     * IMDb
     */
    case imdb = 2;

    /**
     * 获取枚举
     * @param string $name
     * @return self
     */
    public static function create(string $name): self
    {
        return self::from(self::getValue($name));
    }

    /**
     * 检查name
     * @param string $name
     * @return int
     */
    public static function getValue(string $name): int
    {
        $list = self::toArray();
        if (!array_key_exists($name, $list)) {
            throw new InvalidArgumentException('主类型不存在');
        }

        return $list[$name];
    }

    /**
     * 枚举条目转为数组
     * - 名 => 值
     * @return array
     */
    public static function toArray(): array
    {
        return array_column(self::cases(), 'value', 'name');
    }

    /**
     * 枚举条目转为数组
     * - 值 => 名
     * @return array
     */
    public static function forSelect(): array
    {
        return array_combine(
            array_column(self::cases(), 'value'),
            array_column(self::cases(), 'name')
        );
    }
}
