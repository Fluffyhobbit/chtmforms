<?php

namespace App\Http\Controllers;

use Request;

class ProgramsController extends Controller
{
    //
    public function uploadProgram()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('DocumentsProgram', $file->getClientOriginalName());
    
        }

        echo 'Uploaded<br />';
        return redirect('AttachDocumentsProgram');

    }
}
