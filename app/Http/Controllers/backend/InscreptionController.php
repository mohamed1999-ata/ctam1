<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Formation ;
use App\Models\Inscreption ;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\mail\MyTestmail ;

class InscreptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscreption =  Inscreption::latest()->paginate(3);
       return View('admin.inscreption.index', compact('inscreption'));
    }



    public function rech(  Request $request)
    {
       if( isset($_GET['query'])){
          
           $search_text = $_GET['query'];
           $inscreptions = DB::table('inscreptions')->where('name','LIKE','%'.$search_text.'%')->paginate(2);
          $inscreptions->appends($request->all());
          return view('admin.inscreption.index',['inscreption'=>$inscreptions]);
       }
       else{

          return view('admin.inscreption.index');
       }
    }


    public function completedUpdate(Request $request)
    {
        $inscri = Inscreption::find($request->id);
        $inscri->status = !$inscri->status ;
       $inscri->save();
       $detail = [
        'title' => 'Mail from ctam tunis',
        'body' => 'your registration demande at'.$inscri->title_de_formation .'accepted for more information contact us '
    ];
   
    Mail::to($inscri->email)->send(new \App\Mail\MyTestMail($detail));
       return redirect()->back()->with('message', 'Status changed!');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $date = Carbon::now();      
        $iduser= Auth::user()->id;
        $inscri =  Inscreption::create([
        'users_id' => $iduser,
        'formation_id' => $request->formation_id,
        'name' => $request->name,
        'telephone' => $request->telephone,
        'email' => $request->email,
        'title_de_formation' => $request->title_de_formation,
        'date_inscreption' => $date ]);

        $inscri->save();
    

       /* return redirect()->route('admin.users.index')

                        ->with('success','User created successfully');*/
                        return back() ->with('success','The Registration  has been completed. successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $inscreption = Inscreption::find($id);
        //return view ('admin.inscreption.edit' , compact('inscreption'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inscreption = Inscreption::find($id);
        $inscreption->delete();

        return  back()->withSuccess('Success!' ) ; 
    }
}
