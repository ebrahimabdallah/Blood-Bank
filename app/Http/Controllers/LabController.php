<?php 

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;

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
    $Labs=Lab::create($request->all());
        return redirect('Labs');  
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