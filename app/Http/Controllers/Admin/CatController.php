<?php

namespace App\Http\Controllers\Admin;

use App\Events\CatAddedEvent;
use App\Http\Controllers\Controller;
use App\Models\Cat;
use Exception;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index(){

        $data['cats'] = Cat::orderBy('id' , 'desc')->paginate(10);

        return view('admin.cats.index')->with($data);
    }
    public function store(Request $request){

        $request->validate([
            'name_en' => 'required|string|max:50',
            'name_ar' => 'required|string|max:50',
        ]);

        Cat::create([
            'name' => json_encode([
                'en' => $request->name_en,
                'ar' => $request->name_ar,
            ]),
        ]);
        event(new CatAddedEvent);
        $request->session()->flash('msg' , 'Row added successfully');
        return back();
    }
    public function update(Request $request){

        $request->validate([
            'id' => 'required|exists:cats,id',
            'name_en' => 'required|string|max:50',
            'name_ar' => 'required|string|max:50',
        ]);

        Cat::findOrFail($request->id)->update([
            'name' => json_encode([
                'en' => $request->name_en,
                'ar' => $request->name_ar,
            ]),
        ]);

        $request->session()->flash('msg' , 'Row updated successfully');
        return back();
    }
    public function toggle(Cat $cat){

        $cat->update([
            'active' => ! $cat->active
        ]);
        
        return back();
    }
    public function delete(Cat $cat, Request $request){

        try {
            $cat->delete();
            $msg = 'row deleted successfully';
        } catch(Exception $e) {

            $msg = "can't delete this row Please delete skills and exams first";

        }

        $request->session()->flash('msg' , $msg);
        return back();
    }
}
