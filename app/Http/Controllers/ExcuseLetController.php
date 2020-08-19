<?php

namespace App\Http\Controllers;

use Request;

class ExcuseLetController extends Controller
{
    //
    public function UploadExcuseLet()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('DocumentsExcuseLet', $file->getClientOriginalName());
    

        }

        echo 'Uploaded<br />';
        return redirect('AttachDocumenExcuseLet');

    }
}
