<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chtmformsController extends Controller
{
    //
    public function index1(){

        return view('forms.OnCampus');
    }

    public function index2(){

        return view('forms.OffCampus');
    }

    public function AttachDocumentsMoa(){
        
        return view('forms.DocumentMoa');
    }

    public function AttachDocumentsSpeaker(){

        return view('forms.DocumentsSpeaker');
    }

    public function AttachDocumentsCommittee(){

        return view('forms.DocumentsCommittee');
    }

    public function AttachDocumentsBudget(){

        return view('forms.DocumentsBudget');
    }

    public function AttachDocumentsUSC(){

        return view('forms.DocumentsUSC');
    }

    public function AttachDocumentsProgram(){

        return view('forms.DocumentsProgram');
    }

    public function AttachDocumentsPromotoionalMaterials(){

        return view('forms.DocumentsPromotionalMat');
    }

    public function AttachDocumentsParticipants(){

        return view('forms.DocumentsParticipants');
    }

    public function AttachDocumentsExcuseLet(){

        return view('forms.DocumentsExcuseLet');
    }

    public function AttachDocumentsVenue(){

        return view('forms.DocumentsVenue');
        
    }

    public function AttachDocumentsCurfew(){

        return view('forms.DocumentsCurfew');
    }
}
