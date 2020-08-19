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

        .form-control-plaintext{
            width:450px;
        }

        .form-control-plaintext{
            color:lightslategrey;
        }

        
    </style>
    
    <!--<h1>CTHM ON-CAMPUS REQUEST FORM </h1>

    <table>
        <tr>Name of Organization</tr>
        <tr>Title of Activity/Program</tr>
        <tr>Name of Activity</tr>
        <tr>Nature of Activity</tr>
        <tr>Activity Date/Time</tr>
        <tr>Venue/Location</tr>
        <tr>Participants(members)</tr>
        <tr>Source of Budget</tr>
        <tr>In-Charge of Activity</tr>
        <tr>Nature of Activity(Name,Designation,Contact,Email)</tr>
        <tr>Type of Activity(Academic,Non-Academic,College)</tr>
        <tr>SARF/Control No.</tr>
        <tr>Nature of Activity</tr>
        <tr>Remarks/Conditions</tr>
        <tr>Checklist:</tr>
        <tr>Submitted by:</tr>
        <tr>Noted by:</tr>
        <tr>Recommending approval:</tr>
        <tr>Approved by:</tr>
        <tr>Venue Reserved:</tr>
        <tr>For BMO Support:</tr>
        <tr>For ITSS Support:</tr>
        <tr>For FMO Use:</tr>
        <tr>Approved and Reserved</tr>
        <tr>For LMO Support:</tr>
        <tr>For Administrative Support:</tr>
        <tr>Service Agreement</tr>
        
    </table>-->

   <div class="container">
        <div class="card border-info mb-3 ">
        
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                <a class="nav-link active" href="/">ON-CAMPUS REQUEST</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="/OffCampus">OFF-CAMPUS REQUEST</a>
                </li>
               </ul>
            </div>
  
        <div class="card-body text-info">
        
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
                   <a href="#" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    Organizing Committee
                    </label>

                </div>
                   </div>
                   <div class="col-sm-3">
                   <a href="#" class="btn btn-primary stretched-link">Attach Documents</a>
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
                   <a href="#" class="btn btn-primary stretched-link">Attach Documents</a>
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
                   <a href="#" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    Copy of Program/Schedule of Activities
                 </label>
                    </div>
                   </div>
                   <div class="col-sm-3">
                   <a href="#" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    Mode of Transportation signed by Office Head/Dean
                 </label>
                    </div>
                   </div>
                   <div class="col-sm-3">
                   <a href="#" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    Checklist for Field Trips
                 </label>
                    </div>
                   </div>
                   <div class="col-sm-3">
                   <a href="#" class="btn btn-primary stretched-link">Attach Documents</a>
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
                   <a href="#" class="btn btn-primary stretched-link">Attach Documents</a>
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
                   <a href="#" class="btn btn-primary stretched-link">Attach Documents</a>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    Waivers for Participants
                    <div class="col-sm 3">
                    <br>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Signature on Guardian's/Parent's ID should be identical with">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="signature on the waiver (Outside Baguio City)">
                    </div>
                    </label>
                    </div>
                   </div>
                   <div class="col-sm-3">
                   <a href="#" class="btn btn-primary stretched-link">Attach Documents</a>
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
            </div>
            <br>
            <div class="form-row">
                <div class="col-sm-2">
                
                    <label for="">In-Charge of Activity</label>
                    
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Name:">
                </div>
                
                <div class="col-sm-3">
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


        
            </div>
        </div>            
   </div>
    
</body>
</html>
