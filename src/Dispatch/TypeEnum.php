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
    case douban = -1;

    /**
     * IMDb
     */
    case imdb = -2;
    //////////////////////////////////////////////

    case keepfrds = 1;
    case pthome = 2;
    case mteam = 3;
    case hdsky = 4;
    case tjupt = 5;
    case pter = 6;
    case hdhome = 7;
    case btschool = 8;
    case ourbits = 9;
    case hddolby = 10;
    case torrentccf = 11;
    case ttg = 14;
    case nanyangpt = 15;
    case hdcity = 17;
    case nicept = 18;
    case site52pt = 19;
    case beitai = 21;
    case eastgame = 22;
    case ssd = 23;
    case soulvoice = 24;
    case chdbits = 25;
    case ptsbao = 27;
    case hdchina = 28;
    case hdarea = 29;
    case hdtime = 30;
    case site1ptba = 31;
    case hd4fans = 32;
    case opencd = 33;
    case joyhd = 36;
    case dmhy = 37;
    case upxin = 38;
    case oshen = 39;
    case discfan = 40;
    case hdzone = 41;
    case hdbd = 44;
    case byr = 45;
    case dicmusic = 51;
    /**
     * 观众
     */
    case audiences = 68;

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
