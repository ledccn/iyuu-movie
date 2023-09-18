<?php

namespace Iyuu\Movie;

/**
 * 插件安装脚本
 */
class Install
{
    const WEBMAN_PLUGIN = true;

    /**
     * @var array
     */
    protected static array $pathRelation = array(
        'config/plugin/iyuu/movie' => 'config/plugin/iyuu/movie',
    );

    /**
     * Install
     * @return void
     */
    public static function install(): void
    {
        static::installByRelation();
    }

    /**
     * Uninstall
     * @return void
     */
    public static function uninstall(): void
    {
        self::uninstallByRelation();
    }

    /**
     * Copy dir
     * @param string $source
     * @param string $dest
     * @param bool $overwrite
     * @return void
     */
    protected static function copy_dir(string $source, string $dest, bool $overwrite = false): void
    {
        if (is_dir($source)) {
            if (!is_dir($dest)) {
                mkdir($dest);
            }
            $files = scandir($source);
            foreach ($files as $file) {
                if ($file !== "." && $file !== "..") {
                    self::copy_dir("$source/$file", "$dest/$file", $overwrite);
                }
            }
        } else if (file_exists($source) && ($overwrite || !file_exists($dest))) {
            copy($source, $dest);
        }
    }

    /**
     * installByRelation
     * @return void
     */
    public static function installByRelation(): void
    {
        foreach (static::$pathRelation as $source => $dest) {
            if ($pos = strrpos($dest, '/')) {
                $parent_dir = base_path() . '/' . substr($dest, 0, $pos);
                if (!is_dir($parent_dir)) {
                    mkdir($parent_dir, 0777, true);
                }
            }
            //symlink(__DIR__ . "/$source", base_path()."/$dest");
            self::copy_dir(__DIR__ . "/$source", base_path() . "/$dest", true);
            echo "Create {$dest}" . PHP_EOL;
        }
    }

    /**
     * uninstallByRelation
     * @return void
     */
    public static function uninstallByRelation(): void
    {
        foreach (static::$pathRelation as $source => $dest) {
            $path = base_path() . "/$dest";
            if (!is_dir($path) && !is_file($path)) {
                continue;
            }
            echo "Remove {$dest}" . PHP_EOL;
            if (is_file($path) || is_link($path)) {
                unlink($path);
                continue;
            }
            remove_dir($path);
        }
    }
}