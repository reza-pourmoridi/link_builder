<?php

namespace App;

class Helpers {

    public static function helperfunction1(){
        return "helper function 1 response";
    }


    public static function change_site_types($model,$types)
    {
        $i = 0;
        foreach ($model as $work) {
            foreach ($types as $item) {
                if (strpos($work['kind'], $item['slug']) !== false) {
                    $model[$i]['kind_titles'] .= '   ' . $item['title'] . ' ';
                }
            }
            $i++;
        }
        return $model;
    }
}
