<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResourse;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index()
    {
//         $services = DB::table('services')->get();
//         return $services;
        return Service::all();
    }

    public function show($id)
    {

        return Category::with('service.children')->find($id);
//        $services = DB::table('services')->where('category_id', '=', $id)->get();
//
//        foreach ($services as $service) {
//            $sub_services = DB::table('services')->where('parent_id', '=', $service->id)->get();
//            if ($sub_services->count() == 0) {
//                continue;
//            } else {
//                $service->sub_services = $sub_services;
//            }
//        }

////        return ServiceResourse::collection($services);
//        return $services;
    }
}
