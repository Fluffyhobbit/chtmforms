<?php

namespace App\Http\Controllers;

use Request;

class USCController extends Controller
{
    //
    public function uploadUSC()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('DocumentsUSC', $file->getClientOriginalName());
    

        }

        echo 'Uploaded<br />';
        return redirect('AttachDocumentUSC');

    }
}
