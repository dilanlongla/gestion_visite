<?php

namespace GestionVisites\Utilities;

class IncludeWithData
{

    public static function includeWithData($file_path, $data = array(), $print = true)
    {
        $output = null;
        if (file_exists($file_path)) {
            extract($data);

            ob_start();

            include $file_path;

            $output = ob_get_clean();
        }
        if ($print) {
            print $output;
        }
        return $output;
    }
}
