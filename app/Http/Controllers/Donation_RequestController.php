<?php 

namespace App\Http\Controllers;

use App\Http\Requests\DonationRequest;
use App\Models\Clients;
use App\Models\Donation_Request;
use Illuminate\Http\Request;
use App\Http\Controllers\flash;
class Donation_RequestController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $record=Donation_Request::paginate(20);  
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
  public function store(DonationRequest $request)
  {
    flash()->success("suuccessful Requested Donation ...");   
    $record=Donation_Request::create($request->all());
     return redirect('Donation');    
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