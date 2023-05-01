<?php 

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $Donors=Donor::paginate(20);  
    return view('donor.index',compact('Donors'));  
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
   return view('donor.create'); 
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $Donors=Donor::create($request->all());
      return redirect()->back();

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
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id,$request)
  {
    flash()->success('Your order information has been updated successfully, thank you');

   $Donors=Donor::findOrFail($id);
   $Donors->Update($request->all());
   return redirect('donor');
    
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