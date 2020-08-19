<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <style>
        html,body{
            width:100%;
            height:100vh;
        }

        .container{
           display:flex;
           align-content:center;
     
        }

        .card{
            width: 100rem;
            margin:30px 30px;
            height:100%;

        }

        .form{
            height:100%;
            width:100;
        }

        .form-check {
            position: relative;
            display: block;
            padding-left: 2.25rem;
            padding-top: 1rem;
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            margin: 10px;
        }
    
        label {
            display: inline-block;
            margin-bottom: .9rem;
        }

        .container-2{
           display:flex;
           align-content:center;
     
        }

        .card-bmo{
            width:50%;
            background-color:white;
            margin:10px 10px;
            
        }

        .card-lmo{
            width:50%;
            background-color:white;
            margin:10px 10px;
        }

        .form-control-WL{
    width: 100%;
    height: calc(22.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
  
    </style>
    
   <div class="container">
        <div class="card border-success mb-3">
        
            <div class="card-header bg-transparent border-success">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                <a class="nav-link active" href="/">ON-CAMPUS REQUEST</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="/OffCampus">OFF-CAMPUS REQUEST</a>
                </li>
               </ul>
            </div>
  
        <div class="card-body text-success">
        
        <form>
            <div class="form-row">
                <div class="col-sm-6">
                <label for="">Name of Organization</label>
                <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-sm-3">
                <label for="">Nature of Activity</label>
                <input type="text" class="form-control" placeholder="">
                <br>
                <label for="">Academic</label>
                <input type="checkbox" aria-label="Checkbox for following text input">
                <br>
                <label for="">Non-Academic</label>
                <input type="checkbox" aria-label="Checkbox for following text input">
                <br>
                <label for="">Academic</label>
                <input type="checkbox" aria-label="Checkbox for following text input">
                </div>
                <div class="col-sm-3">
                <label for="">SARF/Control No.</label>
                <input type="text" class="form-control" placeholder="">
                <label for="">Recieved By:</label>
                <input type="text" class="form-control" placeholder="">
            </div>                
            </div>
            <br>
            <div class="form-row">
                <div class="col-sm-6">
                <label for="">Title of Activity/Program</label>
                <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-sm-6">
                <label for="">Remarks/Conditions</label>
                <input type="text" class="form-control" placeholder="">
                </div>
                              
            </div>
            <br>
            <div class="form-row">
                <div class="col-sm-4">
                <label for="">Nature of Activity</label>
                <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-sm-8">
                <div class="card" style="width: 40rem;">
                <div class="card-header"> Checklist:</div>
                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                        Copy of Letter of Invitation/MOA(if with outside partner)
                        </label>     
                        </div>
                    </div>
                    <div>
                   </div>
                   <div class="col-sm-3">
                   <a href="AttachDocumentsMoa" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    Speaker/Facilitator Resume
                    </label>

                </div>
                   </div>
                   <div class="col-sm-3">
                   <a href="/AttachDocumentsSpeaker" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    Organiziting Committee
                    </label>
                </div>
                   </div>
                   <div class="col-sm-3">
                   <a href="AtachDocumentsCommittee" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    Budget Request Form
                 </label>
                    </div>
                   </div>
                   <div class="col-sm-3">
                   <a href="AttachDocumentsBugdet" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    Copy of USC/CSC/Alternative Resolution
                 </label>
                    </div>
                   </div>
                   <div class="col-sm-3">
                   <a href="AttachDocumentUSC" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    Copy of Program/Schedule/ of Activities
                 </label>
                    </div>
                   </div>
                   <div class="col-sm-3">
                   <a href="AttachDocumentsProgram" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    Copy of Promotional Materials/Papers
                 </label>
                    </div>
                   </div>
                   <div class="col-sm-3">
                   <a href="AttachDocumentPromotionalMaterials" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    Excuse Letter for Students
                 </label>
                    </div>
                   </div>
                   <div class="col-sm-3">
                   <a href="AttachDocumenExcuseLet" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    List of Participants
                 </label>
                    </div>
                   </div>
                   <div class="col-sm-3">
                   <a href="AttachDocumentParticipants" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    Venue Floor/Physical Set-up
                 </label>
                    </div>
                   </div>
                   <div class="col-sm-3">
                   <a href="AttachDocumentVenue" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    Curfew Form(if Applicable)
                 </label>
                    </div>
                   </div>
                   <div class="col-sm-3">
                   <a href="AttachDocumentCurfew" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>
                               
                    </div>                   
                </div>                     
            </div>
            <br>
            <br>
            <div class="form-row">
                <div class="col-sm-6">
                <label for="">Venue/Location</label>
                <input type="text" class="form-control" placeholder="">
                </div>  
                <div class="col-sm-3"> 
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Submitted by:">
                <input type="text" class="form-control" placeholder="President/Organizer">
                </div> 
                <div class="col-sm-3"> 
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="">
                <input type="text" class="form-control" placeholder="Date">
                </div>
                 <div class="col-sm-3"> 
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="">
                <input type="text" class="form-control" placeholder="Date">
                </div>
                                      
            </div>
            <br>
            <div class="form-row">
                <div class="col-md-4 mb-4">
                    <label for="">Partcipants</label>
                    <select class="custom-select" id="validationCustom04" required>
                        <option>members/office staff only</option>
                        <option>with other UC students/employees</option>
                        <option>Open to Public/Outsiders</option>
                        <option>members/office staff only</option>
                    </select>
                </div>
                <div class="col-md-2 mb-2">
                    <label for="">Partcipants</label>
                    <input type="text" class="form-control" placeholder="">   
                </div>   
                <div class="col-sm-3"> 
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Noted by:">
                <input type="text" class="form-control" placeholder="Adviser/Coordinator">
                </div>
                <div class="col-sm-3"> 
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="">
                <input type="text" class="form-control" placeholder="Date">
                </div> 
                                        
            </div>
            </form>
            <br>
            <div class="form-row">
                <div class="col-sm-3">
                    <label for="">Source of Budget</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-sm-3">
                    <label for="">Estimated Budget</label>
                    <input type="text" class="form-control" placeholder="">
                </div>  
                <div class="col-sm-3"> 
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Recommeding Approval:">
                <input type="text" class="form-control" placeholder="College/Dept Head">
                </div> 
                <div class="col-sm-3"> 
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="">
                <input type="text" class="form-control" placeholder="Date">
                </div>          
            </div>
            <div class="form-row">
            <div class="col-sm-3"> 
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="">
                </div>  
                <div class="col-sm-3"> 
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="">     
                </div>  
                <div class="col-sm-3">      
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Approved by:">
                <input type="text" class="form-control" placeholder="College/Dean">
                </div>     
                <div class="col-sm-3"> 
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="">
                <input type="text" class="form-control" placeholder="Date">
                </div>  
            </div>
            <div class="form-row">
            <div class="col-sm-3"> 
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="">
                </div>  
                <div class="col-sm-3"> 
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="">     
                </div>  
                <div class="col-sm-3"> 
                
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Venues Reserved:">
                <input type="text" class="form-control" placeholder="Head/FMO">
                
                </div>     
                <div class="col-sm-3"> 
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="">
                <input type="text" class="form-control" placeholder="Date">
                </div>  
            </div>
            <br>
          
            <table class="table table-bordered">
            <thead>
                <tr>
                <td colspan="2">Description of Persons to be covered</td>
                <td colspan="6">Amount of Insurance per Insured Individual(PhP)</td>
                <tr>
                <td></td>
                <td>Basic Life</td>
                <td>Accidental Death & Dismemberment or Disablement</td>
                <td>Double Indemmity for Public Conveyance</td>
                <td>Accident Medical Expenses</td>
                <td>Daily Accident Hospital Benefit</td>
                <td>Unprovoked Murder and Assault</td>
                </tr>                
            </thead>
            <tbody>           
                <tr>
                <th scope="row">All Eligable Students</th>
                <td>15,000</td>
                <td>150,000</td>
                <td>300,000</td>
                <td>50,000</td>
                <td>500</td>
                <td>150,000</td>
                </tr>            
            </tbody>
            </table>

            <br>

            <div class="form-row">
                <div class="col-sm-2">
                    <label for="">In-Charge of Activity</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Name:">
                </div>
                <div class="col-sm-3">
                    <br>
                    <br>
                    <input type="text" class="form-control" placeholder="">
                </div>                        
            </div>
        
            <div class="form-row">
                <div class="col-sm-2">
                    <br>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Designation:">
                </div>
                <div class="col-sm-3">
                    <br>
                    <input type="text" class="form-control" placeholder="">
                </div>                     
            </div>
            <div class="form-row">
                <div class="col-sm-2">
                    <br>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Contact:">
                </div>
                <div class="col-sm-3">
                    <br>
                    <input type="text" class="form-control" placeholder="">
                </div>                     
            </div>
            <div class="form-row">
                <div class="col-sm-2">
                    <br>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Email:">
                </div>
                <div class="col-sm-3">
                    <br>
                    <input type="text" class="form-control" placeholder="">
                </div>                     
            </div>

            <br>
            <div class="form-row">
                <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="For BMO Support:(if applicable)">
                </div>   
                <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="For LMO Support:(if applicable)">
                </div>      
            </div>

           <div class="container-2">
                <div class="card-bmo">
                <div class="form">
                    <div class="form-row">
                        <div class="col-sm-12">
                        <label for="">Venue</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                   
                    <div class="form-row">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Technical Requirements"> 
                    </div> 

                    <div class="form-row">
                        <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-5"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Pieces of WL microphones:">
                        </div>
                        <div class="col-sm-5">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Other requirements"> 
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height:350px"></textarea>
                        </div> 
                    </div>
                    
                    <br>

                    <div class="form-row">
                        <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-5"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Pieces of wired microphones:">
                        </div>
                        <div class="col-sm-5">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Other requirements"> 
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height:350px"></textarea>
                        </div>  
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Pieces of microphone stands">
                        </div> 
                    </div>

                    <div class="form-row">
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Laptop">
                        </div> 
                    </div>

                    

                    <div class="form-row">
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Projector">
                        </div> 
                    </div>

                    <div class="form-row">
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="PA system">
                        </div> 
                    </div>

                    <div class="form-row">
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="AV Mixer">
                        </div> 
                    </div>

                    <div class="form-row">
                        <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="par lights">
                        </div> 
                    </div>

                    <div class="form-row">
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="moving intelligent lights">
                        </div> 
                    </div>

                    <div class="form-row">
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="follow spot">
                        </div> 
                    </div>

                    <div class="form-row">
                        <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Others">
                        </div> 
                    </div>

                    </div>      
                </div>

                <div class="card-lmo">
                <div class="form">
                   
                   
                    <div class="form-row">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Property Requirements"> 
                    </div> 

                    <div class="form-row">
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Podium">
                        </div> 
                    </div>
                    
                    <br>

                    <div class="form-row">
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Philippine flag">
                        </div> 
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="UC flag">
                        </div> 
                    </div>

                    <div class="form-row">
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="flagpoles">
                        </div> 
                    </div>

                    <div class="form-row">
                        <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Pieces of longtables">
                        </div> 
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Pieces of teachertables">
                        </div> 
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Pieces of platforms">
                        </div> 
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Pieces of chairs">
                        </div> 
                    </div>

                    <br>

                     <div class="form-row">
                        <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Pieces of trashbins">
                        </div> 
                    </div>

                    <br>
                    
                    <div class="form-row">
                        <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-6"> 
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Others">
                        </div> 
                    </div>
                </div>
           </div>
   
        </div>            
   </div>
    
</body>
</html>
