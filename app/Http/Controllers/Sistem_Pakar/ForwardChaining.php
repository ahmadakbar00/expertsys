<?php

namespace App\Http\Controllers\Sistem_Pakar;
use App\Models\DataObject;
use App\Models\Group;
use App\Models\Rules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class ForwardChaining extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View::make('sistem_pakar/forward_chaining/forward_chaining', ['name' => 'James']);
    }

    public function data_object()
    {
        $all_obj = DataObject::all();
        // dd($all_obj);
        return View::make('sistem_pakar/forward_chaining/data_object', ['all_obj' => $all_obj]);
    }

    public function data_rule()
    {
        $all_rule = Rules::all();
        // dd($all_obj);
        return View::make('sistem_pakar/forward_chaining/data_rule', ['all_rule' => $all_rule]);
    }

    public function add_data_object(Request $request)
    {
        $str = $request->rules;
        $rules = explode(",",$str);
        // dd(Rules::find(1));
        $arr = [];

        // cari data berdasarkan id rules yang dipilih
        for ($i=0; $i < count($rules) ; $i++) { 
            $rule_match = Rules::find($rules[$i]);
            array_push($arr, $rule_match );

        }

        // Mencari kuantitas dari masing-masing kriteria
        $arr_result = [];

        for ($i=0; $i < count($arr); $i++) { 
            array_push($arr_result,$arr[$i]->id_group );
        }

        // Mencari nilai/bobot terbanyak dari kriteria
        $data_res = array_count_values($arr_result);
        $data_conc = max($data_res);

        // cari data key terbanyak, sebagai paramter groupnya
        for ($i=1; $i <= count($data_res); $i++) { 
            if($data_res[$i] == $data_conc ){
                $grand_result = $i;
            }
        }

        // Search group
        $group = Group::find($grand_result);
        // dd($group->group_name); 

        $data_obj = New DataObject();
        $data_obj->object_name = $request->name;
        $data_obj->object_result = $group->group_name;

        $get_key = array_keys($data_res);
        $get_key_arr = implode("-",$get_key);
        $get_value = implode(":",$data_res);

        $total_value = array_sum($data_res);
        $arr_presentase = [];

        for ($i=1; $i <= count($data_res) ; $i++) { 
            $presentase = (round($data_res[$i] / $total_value ,1) * 100) . '%';
            array_push($arr_presentase, $presentase);
        }

        $get_presentase = implode(":",$arr_presentase);

        $value = $get_key_arr . '|' . $get_value . '|' . $get_presentase;
        $data_obj->object_rules = $value;

        $data_obj->save();

        return redirect()->back()->with('group_name', $group->group_name);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
