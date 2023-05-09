<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\DonationRequest;
use App\Models\Clients;
use App\Models\User;
use App\Models\Donation_Request;
use Illuminate\Http\Request;
use App\Http\Controllers\flash;
use App\RepositoryInterface\DonationRequestInterface;
use Illuminate\Auth\Events\Validated;

class Donation_RequestController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */

 private $RequestRepository ;
   
public function __construct(DonationRequestInterface $RequestRepository)
{
  //create object 
  $this->RequestRepository=$RequestRepository;
  
}
   
  public function index()
  {

      $record=$this->RequestRepository->all();
     return view('Donation_Request.index',compact('record'));  
    
    }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    flash()->success('Your status updated to a Donation Request for user'); 
    return view('Donation_Request/create');
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
    


// store request

      flash()->success("Successful donation request.");  
    
      $this->RequestRepository->store($request->all());
      
      return redirect()->back();

    }
//end store  

      public function getRules()
      {
        return $rules=[
      'patient_name' => 'required|string|max:50',
      'email' => 'required|email|max:255',
      'bages_num' => 'required|numeric',
      'patients_phone' => 'required|numeric|unique:donation_request,patients_phone', 
      'bloode_type' => 'required',
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
  
    $record=$this->RequestRepository->edit($id);
    return view('Donation_Request.Edit',compact('record'));

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  
  
   public function update( $id,Request $request)
  {
    
    flash()->success('Your order information has been updated successfully, thank you');
    $this->RequestRepository->update($id, $request);
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

    flash()->warning('The students have been successfully deleted');
    $record=$this->RequestRepository->destroy($id);

    return redirect('Donation');

  
    
  }  



// public function getRules()
//       {
//         return $rules=[
//       'patient_name' => 'required|string|max:50',
//       'email' => 'required|email|max:255',
//       'bages_num' => 'required|numeric',
//       'patients_phone' => 'required|numeric|unique:donation_request,patients_phone', 
//       'bloode_type' => 'required',
//       'hospital_name' => 'required|string',
//       'patient_age' => 'required|numeric',
//       'address' => 'required|string|max:255',
//           ];
//       }


//       public function getMessageError()
//       {
//         return $Messages=[
//           'patient_name.required' => 'Please enter your name.',
//           'bages_num.required' => 'Please enter your blood type.',
//           'address.required' => 'Please enter your address.',
//           'patients_phone.required' => 'Please enter your phone number.',
//           'email.required' => 'Please enter your email address.',
//           'bloode_type' => 'Please select a valid blood type.', 
//           'hospital_name.required' => 'Please enter the hospital name.',
//           'patient_age.required' => 'Please enter your age.',
//           'email.required' => 'Please enter your email address.',
      
//         ];
//       }
}
?>