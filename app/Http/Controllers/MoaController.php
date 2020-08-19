<?php

namespace App\Http\Controllers;

use Request;

class MoaController extends Controller
{
    //
    public function uploadMoa()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('DocumentsMoa', $file->getClientOriginalName());
    

        }

        echo 'Uploaded<br />';
        return redirect('AttachDocumentsMoa');

    }
}
