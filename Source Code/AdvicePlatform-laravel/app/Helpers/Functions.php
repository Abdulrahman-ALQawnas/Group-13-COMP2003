<?php


namespace App\Helpers;


use Carbon\Carbon;
use DateTime;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class Functions
{
    use ResponseTrait;

    
    public static function StoreImageModel($file,$destination_path): ?string
    {
        $destination_path = "storage/".$destination_path.'/';
        if ($file->isValid()) {
            $file_name = md5($file->getClientOriginalName().time()).'.'.$file->getClientOriginalExtension();
            $file->move($destination_path, $file_name);
            $attribute_value =  $destination_path.$file_name;
        }
        return $attribute_value??null;
    }
    
}
