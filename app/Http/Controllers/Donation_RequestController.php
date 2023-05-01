<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\DonationRequest;
use App\Models\Clients;
use App\Models\Donation_Request;
use Illuminate\Http\Request;
use App\Http\Controllers\flash;
use Illuminate\Auth\Events\Validated;

class Donation_RequestController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */


   

   

  public function index()
  {

    $record = Donation_Request::query();

    // Add search filter if search query is present
    // if ($request->has('search')) {
    //     $searchTerm = $request->input('search');
    //     $record->where(function ($query) use ($searchTerm) {
    //         $query->where('patient_name', 'like', '%'.$searchTerm.'%')
    //               ->orWhere('patients_phone', 'like', '%'.$searchTerm.'%')
    //               ->orWhere('hospital_name', 'like', '%'.$searchTerm.'%')
    //               ->orWhere('address', 'like', '%'.$searchTerm.'%');
    //     });
    // }
    $record=Donation_Request::paginate(pagination_count);  
    return view('Donation_Request.index',compact('record'));  
    }


    

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('Donation_Request.create');

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
    
    // $validator = Validator::make($request->all(), 
    //  [
    //   'patient_name' => 'required|string|max:100',
    //   'email' => 'required|email|max:255',
    //   'bages_num' => 'required|numeric',
    //   'patients_phone' => 'required|numeric|unique:donation_request,patients_phone|max:255',
    //   'bloode_type' => 'required|string|max:255',
    //   'hospital_name' => 'required|string|max:255',
    //   'patient_age' => 'required|numeric',
    //   'address' => 'required|string|max:255',
  //]
   
    if($validator->fails())
       {
        return redirect()->back()->withErrors($validator)->withInput($request->all());    
      }
    
      flash()->success("suuccessful Requested Donation ...");   
    
      $record=Donation_Request::create($request->all());
      return redirect()->back();

    }
  

      public function getRules()
      {
        return $rules=[
      'patient_name' => 'required|string|max:50',
      'email' => 'required|email|max:255',
      'bages_num' => 'required|numeric',
      'patients_phone' => 'required|numeric|unique:donation_request,patients_phone', 
      'bloode_type' => 'required|unique:donation_request,bloode_type',
      'hospital_name' => 'required|string',
      'patient_age' => 'required|numeric',
      'address' => 'required|string|max:255',
          ];
      }

      public function getMessageError()
      {
        return $Messages=[
          'patient_name.required' => 'Please enter your name.',
          'bages_num.required' => 'Please enter your blood type.',
          'address.required' => 'Please enter your address.',
          'patients_phone.required' => 'Please enter your phone number.',
          'email.required' => 'Please enter your email address.',
          'bloode_type' => 'Please select a valid blood type.', 
          'hospital_name.required' => 'Please enter the hospital name.',
          'patient_age.required' => 'Please enter your age.',
          'email.required' => 'Please enter your email address.',
      
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
    $record=Donation_Request::findOrFail($id);
    return view('Donation_Request.Edit',compact('record'));
    }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
    
    
    flash()->success('Your order information has been updated successfully, thank you');

   $record=Donation_Request::findOrFail($id);
   $record->Update($request->all());
   return redirect('Donation');
    
}

  

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $record=Donation_Request::findOrFail($id);
    $record->delete();
    flash()->warning('The students have been successfully deleted');
    
    return redirect('Donation');
  }


  
    
}

?>