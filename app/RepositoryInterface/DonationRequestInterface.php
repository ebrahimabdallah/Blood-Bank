<?php

namespace App\RepositoryInterface;

use GuzzleHttp\Psr7\Request;

interface DonationRequestInterface
{
    public function all(); //index
    public function create( $data);
    public function update($id,$request);
    public function destroy($id);
    public function store($request);
    public function edit ($id);

}


?>
