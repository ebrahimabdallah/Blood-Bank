<?php 

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DonorController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $Donors=Donor::paginate(pagination_count);  
    return view('donor.index',compact('Donors'));  
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
   return view('donor/create'); 
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    $rules = $this ->getRules();
    $Messages=$this ->getMessageError();
    $validator = Validator::make($request->all(),$rules,$Messages);
  
      if($validator->fails())
         {
          return redirect()->back()->withErrors($validator)->withInput($request->all());    
        }
     
    
    $Donors=Donor::create($request->all());
    // return redirect('donor');
    return redirect()->back();

      }
      public function getRules()
      {
        return $rules=[
      'name' => 'required',
      'LastDontation' => 'required|before:today',
      'LastDontation' => 'required|before:today',
      'email' => 'required|email',
      'phone' => 'required|numeric',
      'age' => 'required',
      
          ];
      }


      public function getMessageError()
      {
        return $Messages=[

          'name.required' => 'Please write the patient"s name.',
          'LastDontation.before' => 'The last donation date must be in the present or in the past',
          'LastDontation.required' => 'The last donation date must be required',
          'email.required' => 'email must be required',
          'email.email' => 'email must be correct',
          'phone.required' => 'phone number must be required',
          'age.required' => 'The age must be required'
        
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
    $Donors=Donor::findOrFail($id);
    return view('donor.Edit',compact('Donors'));
    return view('donor.index');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id,Request $request)
  {
    flash()->success('Your order information has been updated successfully, thank you');

    $Donors = Donor::findOrFail($id);
    $Donors->update($request->all());
    return redirect()->back();  
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $Donors=Donor::findOrFail($id);
    $Donors->delete();
    flash()->warning('The students have been successfully deleted');
    
    return redirect('donor');
  }
  
}

?>