<?php

namespace App\Http\Controllers;

use Request;

class ParticipantsMatController extends Controller
{
    //
    public function uploadParticipants()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('DocumentsParticipants', $file->getClientOriginalName());
    
        }

        echo 'Uploaded<br />';
        return redirect('AttachDocumentParticipants');

    }
}
