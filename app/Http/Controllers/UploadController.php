<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function updateStore(Request $request)
{
    $wenjian= $request->file('file');
    

        //获取文件的扩展名
        $kuoname=$wenjian->getClientOriginalExtension();

        //获取文件的绝对路径，但是获取到的在本地不能打开
        $path=$wenjian->getRealPath();

        //要保存的文件名 时间+扩展名
        $filename=date('Y-m-d-H-i-s') . '_' . uniqid() .'.'.$kuoname;
        //保存文件          配置文件存放文件的名字  ，文件名，路径
        $bool= Storage::disk('upload')->put($filename,file_get_contents($path));
        $UIL = 'http://hello-app.test/storage/tou/' . $filename;
        return $UIL;
    
}
}
