<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Type,Practice,Tag, Application};

class PracticeController extends Controller
{
    // public function index(){

    // }

    public function practices(){
        $practices = Practice::all();
        $types = Type::all();

        return view('practices.practices_page',compact('practices','types'));
    }

    public function practices_by_type($type_id){
        $selected_type = Type::findOrFail($type_id);
        $types = Type::all();
        return view('practices.by_type',compact('selected_type','types'));
    }

    
    // public function create_application($practice_id, $type_id){
    //     $practice = Practice::findOrFail($practice_id);
    //     $type = Type::findOrFail($type_id);
    //     return view('practices.create_application',compact('practice,type'));
    // }

    public function create_application($practice_id, $type_id) {
        try {
            $practice = Practice::findOrFail($practice_id);
            $type = Type::findOrFail($type_id);
            return view('practices.create_application', compact('practice','type'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'Practice or Type not found.');
        }
    }

    public function store_application(Request $request){
        $validated = $request->validate([
            'practice_id' =>'required',
            'name' => 'required|min:4|max:255',
            'phone' => ['required', 'regex:/^\+[1-9]\d{1,14}$/']
        ]);
        $application = new Application();
        $application->practice_id = $validated['practice_id'];
        $application->name = $validated['name'];
        $application->phone = $validated['phone'];
        $application->save();

        return redirect()->route('practices')->with('success', 'Заявка успешно отправлена!');
    }
}
