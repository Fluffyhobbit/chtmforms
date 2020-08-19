<?php

namespace App\Http\Controllers;

use Request;

class CurfewController extends Controller
{
    //
    public function UploadCurfew()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('DocumentsCurfew', $file->getClientOriginalName());
    

        }

        echo 'Uploaded<br />';
        return redirect('/AttachDocumentCurfew');

    }
}
