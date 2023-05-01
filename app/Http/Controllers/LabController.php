<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use App\Models\Lab;
// use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Spatie\FlareClient\Enums\MessageLevels;

class LabController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $record=Lab::paginate(20);
    return view('labs.index',compact('record'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('labs.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $rules = $this ->getRules();
    $Messages=$this ->getMessage();

    $validator = Validator::make($request->all(),$rules,$Messages);

    
    if($validator->fails())
       {
        return redirect()->back()->withErrors($validator)->withInput($request->all());    
      }

    $Labs=Lab::create($request->all());
    return redirect()->back();  



  }
   public function getRules()
   {
    return $rules=[
      'Name'=>'required',
      'phone'=>'required|unique:Labs,phone',
      'address'=>'required'
    ];
   }

   public function getMessage()
   {
    return $Messages=[
      'Name.required'=>'Please enter your name Lab',
      'phone.required'=>'Please enter your phone as Lab',
      'phone.unique'=>'This number is aready exists',
      'address.required'=>'Please enter your adderss as lab'
    ];
   }






  


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $record=Lab::findOrFail($id);
    return view('Labs.Edit',compact('record'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {
    flash()->success('Your order information has been updated successfully, thank you');
    $record=Lab::findOrFail($id);
    $record->Update($request->all());
    return redirect('Labs'); 
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    flash()->warning('The students have been successfully deleted');

   $record=Lab::findOrFail($id);
   $record->delete();
   return redirect('Labs');
  }
  
}

?>