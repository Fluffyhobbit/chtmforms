<?php

namespace App\Http\Controllers;

use Request;

class SpeakerController extends Controller
{
    //
    public function uploadSpeaker()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('DocumentsSpeaker', $file->getClientOriginalName());
    

        }

        echo 'Uploaded<br />';
        return redirect('AttachDocumentsSpeaker');

    }
}
