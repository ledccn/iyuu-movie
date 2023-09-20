<?php

namespace Iyuu\Movie\Constants;

use InvalidArgumentException;

/**
 * 支持站点
 */
enum SiteEnum
{
    /**
     * 豆瓣
     */
    case douban;

    /**
     * IMDb
     */
    case imdb;
    /**
     * 常量
     */
    const ID_DOUBAN = 1;

    /**
     * 常量
     */
    const ID_IMDB = 2;

    /**
     * 获取站点
     * @param string $name
     * @return self
     */
    public static function create(string $name): self
    {
        return match (strtolower($name)) {
            'douban' => self::douban,
            'imdb' => self::imdb,
            default => throw new InvalidArgumentException('不支持的站点')
        };
    }

    /**
     * 获取站点
     * @param int $id
     * @return self
     */
    public static function createById(int $id): self
    {
        return match ($id) {
            self::ID_DOUBAN => self::douban,
            self::ID_IMDB => self::imdb,
            default => throw new InvalidArgumentException('不支持的站点')
        };
    }

    /**
     * 获取站点ID
     * @return int
     */
    public function getId(): int
    {
        return match ($this) {
            self::douban => self::ID_DOUBAN,
            self::imdb => self::ID_IMDB,
        };
    }
}
