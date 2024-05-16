<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResourse;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index()
    {
        // $services = DB::table('services')->get();
        // return $services;
        return Service::all();
    }

    public function show($id)
    {
        $services = DB::table('services')->where('category_id', '=', $id)->get();
        foreach ($services as $service) {
            $sub_service = DB::table('services')->where('parent_id', '=', $service->id)->get()->toArray();
            $service->sub_service = $sub_service;
        }
        return ServiceResourse::collection($services);
    }
}
