<?php
namespace App\Repository;
use App\RepositoryInterface\DonationRequestInterface;
use App\Models\Donor;

use App\Models\Donation_Request;
use GuzzleHttp\Psr7\Request;

 class DBRequest implements DonationRequestInterface
{
    public function all()
    {
        return $record=Donation_Request::paginate(pagination_count);  
    }

    public function create( $data)
    {
        return Donation_Request::create($data);
    }

    public function edit($id)
    {
        return Donation_Request::findOrFail($id);
    }

    public function store($request)
    {

        return Donation_Request::create($request);
    }


    public function update($id,  $request)
    {
        $record = Donation_Request::findOrFail($id);
        $record->update($request->all());
        return $record;
    }

    public function destroy($id)
    {
        $record = Donation_Request::findOrFail($id);
        $record->delete();
    }
}