<?php

namespace App\Http\Controllers;

use Request;

class BudgetController extends Controller
{
    //
    public function uploadBudget()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('DocumentsBudget', $file->getClientOriginalName());
    

        }

        echo 'Uploaded<br />';
        return redirect('AttachDocumentsBugdet');

    }
}
