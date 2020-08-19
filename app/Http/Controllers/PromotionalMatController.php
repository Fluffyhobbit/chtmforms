<?php

namespace App\Http\Controllers;

use Request;

class PromotionalMatController extends Controller
{
    //
    public function UploadPromotionalMat()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('DocumentsPromotionalMat', $file->getClientOriginalName());
    
        }

        echo 'Uploaded<br />';
        return redirect('AttachDocumentPromotionalMaterials');

    }
}
