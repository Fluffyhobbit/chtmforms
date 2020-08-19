<?php

namespace App\Http\Controllers;

use Request;

class VenueController extends Controller
{
    //
    public function uploadVenue()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('DocumentsVenue', $file->getClientOriginalName());
    

        }

        echo 'Uploaded<br />';
        return redirect('AttachDocumentVenue');

    }
}
