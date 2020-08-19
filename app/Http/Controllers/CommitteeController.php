<?php

namespace App\Http\Controllers;

use Request;

class CommitteeController extends Controller
{
    //
    public function uploadCommittee()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('DocumentsCommittee', $file->getClientOriginalName());
    

        }

        echo 'Uploaded<br />';
        return redirect('/AtachDocumentsCommittee');

    }
}
