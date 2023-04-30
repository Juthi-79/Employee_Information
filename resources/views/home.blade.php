<!doctype html>
<html lang="en">
  <head>
    <title>Employee Information</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"> --}}

    <style>
       .text-style:hover{
        text-decoration: underline;
       }
    </style> 
</head>
  <body>
      
     <header style="background-color:rgb(94, 21, 94)">
       
        <nav class="navbar navbar-expand-sm position-fix top-0 start-0">
            <div class="col-lg-5 mr-auto ml-2">
                <h1 class="text-white">RMG ERP Solution</h1>
            </div>
    
                <ul class="navbar-nav ml-auto p-3">
                    <li class="nav-item active"><a href="#" class="nav-link text-white text-style">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white text-style">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white text-style">Contact us</a></li>
                </ul>
              </div>
                
            </nav>
        </div>
     </header>

     <main>
        <nav>
            <div class="nav nav-tabs position-fix top-0 start-0" id="nav-tab" role="tablist" style="background-color: rgb(163, 34, 163)">
              
              <button class="nav-link active link-light" id="per-tab" data-bs-toggle="pill" data-bs-target="#per" type="button" role="tab" aria-controls="per" aria-selected="true">Personal Info</button>
              <button class="nav-link link-light" id="off-tab" data-bs-toggle="pill" data-bs-target="#off" type="button" role="tab" aria-controls="off" aria-selected="false">Official Info</button>              
              <button class="nav-link link-light" id="add-tab" data-bs-toggle="pill" data-bs-target="#add" type="button" role="tab" aria-controls="add" aria-selected="false">Location</button>
              <button class="nav-link link-light" id="academi-tab" data-bs-toggle="pill" data-bs-target="#academi" type="button" role="tab" aria-controls="academi" aria-selected="false">Education</button>

              <button class="nav-link link-light" id="course-tab" data-bs-toggle="pill" data-bs-target="#course" type="button" role="tab" aria-controls="course" aria-selected="false">Short Course</button>
              <button class="nav-link link-light" id="train-tab" data-bs-toggle="pill" data-bs-target="#train" type="button" role="tab" aria-controls="train" aria-selected="false">Training</button>
              <button class="nav-link link-light" id="exp-tab" data-bs-toggle="pill" data-bs-target="#exp" type="button" role="tab" aria-controls="exp" aria-selected="false">Experience</button>
              <button class="nav-link link-light" id="nomi-tab" data-bs-toggle="pill" data-bs-target="#nomi" type="button" role="tab" aria-controls="nomi" aria-selected="false">Nominee</button>
              
              <button class="nav-link link-light" id="leave-tab" data-bs-toggle="pill" data-bs-target="#leave" type="button" role="tab" aria-controls="leave" aria-selected="false">Earn Leave</button>                   
              <button class="nav-link link-light" id="job-tab" data-bs-toggle="pill" data-bs-target="#job" type="button" role="tab" aria-controls="job" aria-selected="false">JOB HISTORY</button> 
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent" style="background-color:rgb(255, 224, 255)">

            {{-- official info section starts --}}
            <div class="tab-pane fade show" id="off" role="tabpanel" aria-labelledby="off-tab" tabindex="0">
              <form action="" method="">
                  <div class="container col-lg-6 p-3">
                      <h3 class="text-center"  style="color:rgb(163, 34, 163)">Official Information</h3>
                      
      
                      {{-- Employee Id input --}}
                      <div class="mb-3 row">
                          <label for="emp_id" class="col-sm-3 col-form-label">Employee Id :</label>
                          <div class="col-sm-8">
                              <input type="text" class="form-control" name="emp_id" id="emp_id" placeholder="Enter Employee Id"/>
                           </div>
                      </div>
      
      
                      {{-- User name input --}}
                      <div class="row">
                          <h4 class="text-center">Base Information</h4>
                          <hr/>
                          {{-- company name input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="com" class="col-sm-4 col-form-label">Company :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
      
                          {{-- Department name input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="dept" class="col-sm-4 col-form-label">Department :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>                          
                          </div>
                      </div>
                      
                      <div class="row">
                          {{-- Section input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="sec" class="col-sm-4 col-form-label">Section :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
      
                          {{-- Floor no input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="floor" class="col-sm-4 col-form-label">Floor No :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>                          
                          </div>
                      </div>
      
                      <div class="row">
                          {{-- Line no input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="line" class="col-sm-4 col-form-label">Line No :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
      
                          {{-- Designation input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="desi" class="col-sm-4 col-form-label">Designation :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>                          
                          </div>
                      </div>
      
                      <div class="row">
                          {{-- Employee type input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="emp_type" class="col-sm-4 col-form-label">Emp Type :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
      
                          {{--Grade input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="grade" class="col-sm-4 col-form-label">Grade :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>                          
                          </div>
                      </div>
      
                      <div class="row">
                          {{-- Shift input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="shift" class="col-sm-4 col-form-label">Shift :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
      
                          {{--Cal Code input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="cal_code" class="col-sm-4 col-form-label">Cal Code :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>                          
                          </div>
                      </div>
      
                      <div class="row">
                          {{-- Weekly Off input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="week_off" class="col-sm-4 col-form-label">Weekly Off :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
      
                          {{--Operation input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="oper" class="col-sm-4 col-form-label">Operation :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>                          
                          </div>
                      </div>
      
                      <hr/>
      
                      <div class="row p-2">
                          <h4 class="text-center">Joining Information</h4>
                          <hr/>
                          {{-- Joining Date input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="join_date" class="col-sm-4 col-form-label">Joining Date :</label>
                                  <div class="col-sm-7">
                                      <input type="date" class="form-control" name="join_date" id="join_date"  placeholder="Joining Date">
                                  </div>
                              </div>
                          </div>
      
                          {{-- Join As input --}}
                          
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="join_as" class="col-sm-4 col-form-label">Join As :</label>
                                  <div class="col-sm-7">
                                      <input type="text" class="form-control" name="join_as" id="join_as"  placeholder="Join As">
                                  </div>
                              </div>                          
                          </div>
                      </div>
                      
                      <div class="row">
                          {{-- Confirmation Date input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="conf_dt" class="col-sm-4 col-form-label">Confirmation Date :</label>
                                  <div class="col-sm-7">
                                      <input type="date" class="form-control" name="conf_dt" id="conf_dt"  placeholder="">
                                  </div>
                              </div>
                          </div>
      
                          {{-- Increment Date input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="inc_dt" class="col-sm-4 col-form-label">Increment Date :</label>
                                  <div class="col-sm-7">
                                      <input type="date" class="form-control" name="inc_dt" id="inc_dt"  placeholder="">
                                  </div>
                              </div>                          
                          </div>
                      </div>
      
                      <div class="row">
                          {{-- Provision Period input --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="pro_period" class="col-sm-4 col-form-label">Provision Period :</label>
                                  <div class="col-sm-7">
                                      <input type="number" class="form-control" name="pro_period" id="pro_period"  placeholder="">
                                  </div>
                              </div>
                          </div>
                          {{--  --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="month" class="col-sm-4 col-form-label ">Month</label>
                              </div>                          
                          </div>
                      </div>
      
                      <hr/>
      
                      <div class="row p-2">
                          <h4 class="text-center">Group Assign</h4>
                          <hr/>
                          {{-- Leave Cat selection --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="leave_cat" class="col-sm-4 col-form-label">Leave Cat :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
      
                          {{-- Allowance --}}
                          
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="allow" class="col-sm-4 col-form-label">Allowance :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                              </div>                          
                          </div>
                      </div>
                  </div>
                      
                      <div class="row">
                          {{-- Shift Gropu selection --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="shift_grp" class="col-sm-4 col-form-label">Shift Group :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
      
                          {{-- Appraisal cal selection --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="inc_dt" class="col-sm-4 col-form-label">Appraisal Cal :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>                          
                          </div>
                      </div>
      
                      <hr/>
      
                      <div class="row p-2">
                          <h4 class="text-center">Entitlement</h4>
                          <hr/>
                          {{-- Work Entitle selection --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="entitle" class="col-sm-4 col-form-label">Work Entitle :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
      
                          {{-- Overtime --}}
                          
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="overtime" class="col-sm-4 col-form-label">Overtime :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                              </div>                          
                          </div>
                      </div>
                  </div>
                      
                      <div class="row">
                          {{-- Residence selection --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="resi" class="col-sm-4 col-form-label">Residence :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
      
                          {{-- Transport selection --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="inc_dt" class="col-sm-4 col-form-label">Transport :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>                          
                          </div>
                      </div>
      
                      <div class="row">
                          {{-- PF Facility --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="facility" class="col-sm-4 col-form-label">PF Facility :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
      
                          {{-- Tax selection --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="tax" class="col-sm-4 col-form-label">Tax :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>                          
                          </div>
                      </div>
      
                      <hr/>
      
                      
                      <div class="row p-2">
                          <h4 class="text-center">Balance</h4>
                          <hr/>
                          {{-- Provident Fund selection --}}
                          <div class="col-md-12">
                              <div class="row p-1">
                                  <label for="fund" class="col-sm-4 col-form-label">Provident Fund :</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" name="fund" id="fund"  placeholder="Provident Fund">
                                  </div>
                              </div>
                          </div>
                      </div>
      
                          {{-- Increment Date --}}
                      <div class="row p-2">  
                          <div class="col-md-12">
                              <div class="row p-1">
                                  <label for="inc_dt" class="col-sm-4 col-form-label">Increment Date :</label>
                                  <div class="col-sm-8">
                                      <input type="date" class="form-control" name="inc_dt" id="inc_dt"  placeholder="">
                                  </div>                          
                              </div>
                          </div>
                      </div>
      
                      <hr/>
      
                      <div class="row p-2">
                          <h4 class="text-center">Salary</h4>
                          <hr/>
                          {{-- Gross Input --}}
                          <div class="col-md-12">
                              <div class="row p-1">
                                  <label for="gross" class="col-sm-4 col-form-label">Gross :</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" name="gross" id="gross"  placeholder="Gross">
                                  </div>
                              </div>
                          </div>
                      </div>
      
                          {{-- Other allowance input --}}
                      <div class="row p-2">    
                          <div class="col-md-12">
                              <div class="row p-1">
                                  <label for="other_allow" class="col-sm-4 col-form-label">Other Allowance :</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" name="other_allow" id="other_allow"  placeholder="Other Allowance">
                                  </div>                          
                              </div>
                          </div>
                      </div>
                      
                      <hr/>
      
                      <div class="row p-2">
                          <h4 class="text-center">Bank & Others</h4>
                          <hr/>
                          {{-- Bank selection --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="bank" class="col-sm-4 col-form-label">Bank :</label>
                                  <div class="col-sm-7">
                                      <select class="form-select" aria-label="Default select example">
                                          <option selected placeholder="Select one">Select One</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
      
                          {{-- Account No --}}
                          
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="acc_no" class="col-sm-4 col-form-label">Account No :</label>
                                  <div class="col-sm-7">
                                      <input type="text" class="form-control" name="acc_no" id="acc_no"  placeholder="Account No">
                                  </div>                          
                              </div>
                          </div>
                      </div>
                      
                      <div class="row">
                          {{-- TIN No input--}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="tin_no" class="col-sm-4 col-form-label">Tin No :</label>
                                  <div class="col-sm-7">
                                      <input type="number" class="form-control" name="tin_no" id="tin_no"  placeholder="Account No">
                                  </div>
                              </div>
                          </div>
      
                          {{--Tax Deduction --}}
                          <div class="col-md-6">
                              <div class="row p-1">
                                  <label for="tax" class="col-sm-4 col-form-label">TAX Deduction :</label>
                                  <div class="col-sm-7">
                                      <input type="number" class="form-control" name="tax" id="tax"  placeholder="Amount">
                                  </div>
                              </div>                          
                          </div>
                      </div>
      
                      <hr/>
      
                      <div class="row p-2">
                          <h4 class="text-center">Release Information</h4>
                          <hr/>
                          {{-- Dismisal date input --}}
                          <div class="col-md-12">
                              <div class="row p-1">
                                  <label for="dis_date" class="col-sm-4 col-form-label">Dismisal Date :</label>
                                  <div class="col-sm-8">
                                      <input type="date" class="form-control" name="dis_date" id="dis_date"  placeholder="">
                                  </div>
                              </div>
                          </div>
                      </div>
                          {{-- Resigned Date --}}
                      <div class="row p-2">    
                          <div class="col-md-12">
                              <div class="row p-1">
                                  <label for="res_date" class="col-sm-4 col-form-label">Resigned Date :</label>
                                  <div class="col-sm-8">
                                      <input type="date" class="form-control" name="res_date" id="res_date"  placeholder="">
                                  </div>                          
                              </div>
                          </div>
                      </div>
                      
                      <div class="row p-2">
                          {{-- Reason input--}}
                          <div class="col-md-12">
                              <div class="row p-1">
                                  <label for="reason" class="col-sm-4 col-form-label">Reason :</label>
                                  <div class="col-sm-8">
                                      <textarea class="form-control" name="reason" id="reason"  placeholder="Reason in details..."></textarea>
                                  </div>
                              </div>
                          </div>
                      </div>
      
                      <hr/>
      
                      <div class="row p-2">
                      
                          {{-- Service Book No --}}
                          <div class="col-md-12">
                              <div class="row p-1">
                                  <label for="book" class="col-sm-4 col-form-label">Service Book No:</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" name="book" id="book"  placeholder="Service Book No">
                                  </div>
                              </div>
                          </div>
      
                      </div>
                      <div class="row p-2">
                      
                          {{-- A/C input --}}
                          <div class="col-md-12">
                              <div class="row p-1">
                                  <label for="ac" class="col-sm-4 col-form-label">A/C:</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" name="ac" id="ac"  placeholder="A/C">
                                  </div>
                              </div>
                          </div>
      
                      </div>
      
                      <hr/>
                      {{-- action buttons --}}
                      <div class="row-md-6 m-3 text-center p-3">
                          <button class="btn btn-success" type="submit">Save</button>
                          <button class="btn btn-warning" type="button">Edit</button>
                          <button class="btn btn-primary" type="button">Clear</button>
                      </div>
      
                  </div>
              </form>
          </div>
            {{-- official info section ends --}}

            {{-- personal info section starts --}}
            <div class="tab-pane fade show active" id="per" role="tabpanel" aria-labelledby="per-tab" tabindex="1">
                <form action="" method="">
                    <div class="container col-lg-6 p-3">
                        <h3 class="text-center">Personal Information</h3>
                       
                        {{-- Father name input --}}
                        <div class="mb-3 row">                         
                           <label for="fname" class="col-sm-3 col-form-label">Father Name :</label>
                           <div class="col-sm-8">
                              <input type="text" class="form-control" name="fname" id="fname" placeholder="Father Name" tabindex="1">
                           </div> 
                        </div>

                        {{-- Mother name input --}}
                        <div class="mb-3 row">
                           <label for="mname" class="col-sm-3 col-form-label">Mother Name :</label>
                           <div class="col-sm-8">
                                <input type="text" class="form-control" name="mname" id="mname" placeholder="Mother Name"/>
                           </div>
                        </div>

                        {{-- Height input --}}
                        <div class="mb-3 row">
                           <label for="height" class="col-sm-3 col-form-label">Height :</label>
                           <div class="col-sm-8">
                                <input type="text" class="form-control" name="height" id="height"  placeholder="Height"/>
                           </div>
                        </div>

                        {{-- Contact no input --}}
                        <div class="mb-3 row">
                            <label for="contact" class="col-sm-3 col-form-label">Contact No :</label>
                            <div class="col-sm-8">
                                <input type="tel" class="form-control" name="contact" id="contact"  placeholder="Contact No"/>
                            </div>
                        </div>

                        {{-- Personal Email input --}}
                         <div class="mb-3 row">
                           <label for="validationDefaultUsername" class="col-sm-3 col-form-label">Personal Email : </label>
                           <div class="col-sm-8">
                           <input type="email" class="form-control" name="validationDefaultUsername" id="validationDefaultUsername" aria-describedby="emailHelpId" placeholder="Email" required/>
                           </div>
                         </div>

                         {{-- Date of Birth --}}
                        <div class="mb-3 row">
                            <label for="dob" class="col-sm-3 col-form-label">Date of Birth :</label>
                            <div class="col-sm-8">
                            <input type="date" class="form-control" name="dob" id="dob"  placeholder="Date of Birth"/>
                            </div>
                        </div>

                        {{-- Gender selection --}}
                        <div class="mb-3 row">
                            <label for="gender" class="col-sm-3 col-form-label">Gender :</label>
                            <div class="col-sm-8">
                              <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="radio1" name="gender" value="option1">
                                <label class="form-check-label" for="radio1">Male</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="radio2" name="gender" value="option2">
                                <label class="form-check-label" for="radio2">Female</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input type="radio" class="form-check-input" id="radio3" name="gender" value="option2">
                                 <label class="form-check-label" for="radio2">Others</label>
                              </div>
                            </div>
                        </div>

                        {{-- Religion selection --}}
                        <div class="mb-3 row">
                            <label for="religion" class="col-sm-3 col-form-label">Religion : </label>
                            <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected placeholder="Select Religion">Select Religion</option>
                                <option value="1">Islam</option>
                                <option value="2">Hindu</option>
                                <option value="3">Christian</option>
                                <option value="4">Buddhist</option>
                              </select>
                            </div>
                        </div>

                        {{-- Nationality input --}}
                        <div class="mb-3 row">
                            <label for="national" class="col-sm-3 col-form-label">Nationality :</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="national" id="national"  placeholder="Nationality"/>
                            </div>
                        </div>

                        {{-- National Id input --}}
                        <div class="mb-3 row">
                            <label for="national_id" class="col-sm-3 col-form-label">National Id:</label>
                             <div class="col-sm-8">
                            <input type="text" class="form-control" name="national_id" id="national_id"  placeholder="National Id"/>
                             </div>
                        </div>

                        {{-- Birth Certificate --}}
                        <div class="mb-3 row">
                            <label for="b_cirtificate" class="col-sm-3 col-form-label">Birth Certificate:</label>
                             <div class="col-sm-8">
                            <input type="text" class="form-control" name="b_cirtificate" id="b_cirtificate"  placeholder="Birth Certificate"/>
                             </div>
                        </div>

                        {{-- TIN input --}}
                        <div class="mb-3 row">
                            <label for="tin" class="col-sm-3 col-form-label">TIN:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tin" id="tin"  placeholder="TIN"/>
                            </div>
                        </div>

                        {{-- Blood group --}}
                        <div class="mb-3 row">
                           <label for="b_grp" class="col-sm-3 col-form-label" >Blood Group: </label>
                            <div class="col-sm-8">
                             <select class="form-select" aria-label="Default select example" >
                               <option selected placeholder="Select Blood Group">Select Blood Group</option>
                               <option value="1">A+</option>
                               <option value="2">A-</option>
                               <option value="3">B+</option>
                               <option value="4">B-</option>
                               <option value="5">B-</option>
                               <option value="6">O+</option>
                               <option value="7">O-</option>
                               <option value="8">AB+</option>
                               <option value="9">AB-</option>
                             </select>
                            </div>
                        </div>

                        {{-- Marital Status --}}
                         <div class="mb-3 row">
                            <label for="marital" class="col-sm-3 col-form-label">Marital Status: </label>
                             <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" filter="true">
                                <option selected placeholder="Select Marital Status">Select Marital Status</option>
                                <option value="1">Married</option>
                                <option value="2">Unmarried</option>   
                              </select>
                            </div>
                          </div>

                          {{-- Emergency contact name input --}}
                          <div class="mb-3 row">
                            <label for="ec_name" class="col-sm-3 col-form-label">Emergency Contact Name:</label>
                             <div class="col-sm-8">
                            <input type="text" class="form-control" name="ec_name" id="ec_name"  placeholder="Emergency Contact Name"/>
                             </div>
                          </div>

                          {{-- Emergency contact address input --}}
                          <div class="mb-3 row">
                            <label for="ec_addr" class="col-sm-3 col-form-label">Emergency Contact Address:</label>
                             <div class="col-sm-8">
                            <textarea class="form-control" name="ec_addr" id="ec_addr"  placeholder="Emergency Contact Address"></textarea>
                             </div>
                          </div>

                          {{-- Emergency contact number input --}}
                          <div class="mb-3 row">
                            <label for="ec_no" class="col-sm-3 col-form-label">Emergency Contact No:</label>
                            <div class="col-sm-8">
                                <input type="tel" class="form-control" name="ec_no" id="ec_no"  placeholder="Emergency Contact No"/>
                            </div>
                          </div>

                          {{-- Emergency contact person relation input --}}
                          <div class="mb-3 row">
                            <label for="ec_name" class="col-sm-3 col-form-label">Emergency Contact Person Relation : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="ec_rel" id="ec_rel"  placeholder="Emergency Contact Relation"/>
                            </div>
                          </div>

                          {{-- Action buttons --}}
                         <div class="row-md-6 m-3 text-center p-3">
                           <button class="btn btn-success" type="submit">Save</button>
                           <button class="btn btn-warning" type="button">Edit</button>
                           <button class="btn btn-primary" type="button">Clear</button>
                         </div>
                    </div>
                </form>
            </div>
            {{-- personal info section ends --}}

            {{-- address section starts --}}
            <div class="tab-pane fade" id="add" role="tabpanel" aria-labelledby="add-tab" tabindex="2">
                <form action="" method="">
                    <div class="container col-lg-6 p-3">
                        <h3 class="text-center">Address</h3>
                     
                        {{-- Type of Address --}}
                        <div class="mb-3 row">
                            <label for="type" class="col-sm-3 col-form-label">Type : </label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected placeholder="Selct type">Present</option>
                                    <option value="1">Permanent</option>
                          
                                </select>
                            </div>
                        </div>
                      
                        {{-- Division selection --}}
                        <div class="mb-3 row">
                          <label for="division" class="col-sm-3 col-form-label">Division : </label>
                          <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example">
                              <option selected placeholder="Selct division">Select One</option>
                              
                            </select>
                          </div>
                        </div>

                        {{-- District selection --}}
                        <div class="mb-3 row">
                          <label for="district" class="col-sm-3 col-form-label">District : </label>
                          <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example">
                              <option selected placeholder="Select district">Select District</option>
                              
                            </select>
                          </div>
                        </div>

                        {{-- Thana selection --}}
                        <div class="mb-3 row">
                         <label for="thana" class="col-sm-3 col-form-label" >Thana : </label>
                          <div class="col-sm-8">
                         <select class="form-select" aria-label="Default select example" >
                             <option selected placeholder="Select thana">Select Thana</option>
                             
                           </select>
                          </div>
                       </div>

                       {{-- Post code --}}
                       <div class="mb-3 row">
                          <label for="p_code" class="col-sm-3 col-form-label">Post Code : </label>
                           <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example" filter="true">
                              <option selected placeholder="Select post code">Select Post Code</option>
                                 
                            </select>
                          </div>
                        </div>
                       
                        {{-- Area input --}}
                        <div class="mb-3 row">
                          <label for="area" class="col-sm-3 col-form-label">Area :</label>
                          <div class="col-sm-8">
                          <textarea class="form-control" name="area" id="area"  placeholder="Write address here"/></textarea>
                          </div>
                        </div>

                        {{-- Status check --}}
                        <div class="mb-3 row">
                          <label for="status" class="col-sm-3 col-form-label">Status :</label>
                          <div class="col-sm-8 pt-2">
                            <div class="form-check form-check-inline">
                              <input type="radio" class="form-check-input" id="radio1" name="status" value="option1" checked>
                              <label class="form-check-label" for="radio1">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input type="radio" class="form-check-input" id="radio2" name="status" value="option2">
                              <label class="form-check-label" for="radio2">Inactive</label>
                            </div>
                          </div>
                        </div>

                       {{-- Action buttons --}}
                       <div class="row-md-6 m-3 text-center p-3">
                         <button class="btn btn-success" type="submit">Save</button>
                         <button class="btn btn-warning" type="button">Edit</button>
                         <button class="btn btn-danger" type="button">Clear</button>
                         <button class="btn btn-primary" type="button">Clear</button>
                       </div>
                    </div>
                </form>

            </div>
            {{-- address section ends --}}

            {{-- Nominee section starts --}}
            <div class="tab-pane fade" id="nomi" role="tabpanel" aria-labelledby="nomi-tab" tabindex="3">
                <form action="" method="">
                    <div class="container col-lg-6 p-3">
                       <h3 class="text-center p-2">Nominee Information</h3>

                       {{-- Employee ID input --}}
                       <div class="mb-3 row">
                        <label for="emp_id" class="col-sm-3 col-form-label">Employee Id :</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" name="emp_id" id="emp_id" placeholder="Employee Id">
                        </div>
                     </div>
                       
                       {{-- Name input --}}
                        <div class="mb-3 row">
                           <label for="name" class="col-sm-3 col-form-label">Name of Nominee :</label>
                           <div class="col-sm-4">
                              <input type="text" class="form-control" name="name_eng" id="name_eng" placeholder="Name in English"/>
                           </div>
                           <div class="col-sm-4">
                                <input type="text" class="form-control" name="name_bang" id="name_bang" placeholder="Name in Bangla"/>
                            </div>
                        </div>

                         {{-- Relation with nominee --}}
                         <div class="mb-3 row">
                           <label for="relation" class="col-sm-3 col-form-label">Relationship :</label>
                           <div class="col-sm-4">
                              <input type="text" class="form-control" name="rel_eng" id="rel_eng"  placeholder="In English"/>
                           </div>
                           <div class="col-sm-4">
                                <input type="text" class="form-control" name="rel_ban" id="rel_ban"  placeholder="In Bangla"/>
                            </div>
                         </div>

                         {{-- Address of nominee --}}
                         <div class="mb-3 row">
                          <label for="add" class="col-sm-3 col-form-label">Address :</label>
                          <div class="col-sm-4">
                             <textarea class="form-control" name="rel_eng" id="rel_eng"  placeholder="In English"></textarea>
                          </div>
                          <div class="col-sm-4">
                               <textarea class="form-control" name="rel_ban" id="rel_ban"  placeholder="In Bangla"></textarea>
                           </div>
                        </div>

                         {{-- Age input --}}
                        <div class="mb-3 row">
                            <label for="age" class="col-sm-3 col-form-label">Age :</label>
                            <div class="col-sm-8">
                            <input type="number" class="form-control" name="age" id="age"  placeholder="Age"/>
                            </div>
                        </div>
                        
                        {{-- Gender selection --}}
                        <div class="mb-3 row">
                            <label for="gender" class="col-sm-3 col-form-label">Gender :</label>
                            <div class="col-sm-8">
                              <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="radio1" name="gender" value="option1">
                                <label class="form-check-label" for="radio1">Male</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="radio2" name="gender" value="option2">
                                <label class="form-check-label" for="radio2">Female</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input type="radio" class="form-check-input" id="radio3" name="gender" value="option2">
                                 <label class="form-check-label" for="radio2">Others</label>
                              </div>
                            </div>
                        </div>

                        {{-- Photo --}}
                        <div class="mb-3 row">
                          <label for="photo" class="form-label col-sm-3">Photo :</label>
                          <div class="col-sm-8">
                            <input class="form-control" type="file" id="photo">
                          </div>                      
                        </div>
    
                        {{-- Signature --}}
                        <div class="mb-3 row">
                          <label for="sign" class="form-label col-sm-3">Signature :</label>
                          <div class="col-sm-8">
                            <input class="form-control" type="file" id="sign">
                          </div>                      
                        </div>

                        {{-- Percentage input --}}
                        <div class="mb-3 row">
                          <label for="percent" class="col-sm-3 col-form-label">Percentage :</label>
                          <div class="col-sm-8">
                            <input type="number" class="form-control" name="percent" id="percent"  placeholder="Percentage">
                          </div>
                        </div>
    
                        {{-- Action Buttons --}}
                         <div class="row-md-6 m-3 text-center p-3">
                           <button class="btn btn-white border-black" type="submit">Add</button>
                           <button class="btn btn-danger" type="button">Delete</button>
                         </div>
                    </div>
                    
                   </form>
            </div>
            {{-- Nominee section ends --}}

            {{-- academic info section starts --}}
            <div class="tab-pane fade" id="academi" role="tabpanel" aria-labelledby="academi-tab" tabindex="4">
                <form action="" method="">
                    <div class="container col-lg-6 p-3">
                       <h3 class="text-center">Educational Information</h3>

                       {{-- Employee ID input --}}
                       <div class="mb-3 row">
                        <label for="emp_id" class="col-sm-3 col-form-label">Employee Id :</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" name="emp_id" id="emp_id" placeholder="Employee Id">
                        </div>
                     </div>
      
                        {{-- Institution name  --}}
                         <div class="mb-3 row">
                           <label for="institute" class="col-sm-3 col-form-label">Name Of Institute :</label>
                           <div class="col-sm-8">
                                <input type="text" class="form-control" name="institute" id="institute" placeholder="Name of Institute"/>
                           </div>
                         </div>

                         {{-- Passed Examination --}}
                        <div class="mb-3 row">
                          <label for="pass_xm" class="col-sm-3 col-form-label">Passed Examination : </label>
                          <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example">
                              <option selected placeholder="Select pass_xm">Select One</option>
                            </select>
                          </div>
                      </div>

                      {{-- Division input --}}
                      <div class="mb-3 row">
                        <label for="div" class="col-sm-3 col-form-label">Division :</label>
                         <div class="col-sm-8">
                            <input type="text" class="form-control" name="div" id="div"  placeholder="Enter Division">
                         </div>
                    </div>

                         {{-- Passing Year --}}
                        <div class="mb-3 row">
                          <label for="pass_yr" class="col-sm-3 col-form-label">Year : </label>
                          <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example">
                              <option selected placeholder="Select pass_yr">Select Passing Year</option>
                            </select>
                          </div>
                      </div>

                      {{-- Marks input --}}
                      <div class="mb-3 row">
                        <label for="marks" class="col-sm-3 col-form-label">Marks :</label>
                        <div class="col-sm-8">
                             <input type="number" class="form-control" name="marks" id="marks"  placeholder="Obtained Marks"/>
                        </div>
                      </div>

                         {{-- Board/University input --}}
                         <div class="mb-3 row">
                           <label for="brd_uni" class="col-sm-3 col-form-label">Board/University :</label>
                           <div class="col-sm-8">
                                <input type="text" class="form-control" name="brd_uni" id="brd_uni"  placeholder="Board or University"/>
                           </div>
                         </div>
                        
      
                        {{-- Subject / group --}}
                        <div class="mb-3 row">
                            <label for="sub_grp" class="col-sm-3 col-form-label">Subject/Group :</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="sub_grp" id="sub_grp"  placeholder="Subject or Group"/>
                            </div>
                        </div>
      
                        
      
                        {{-- Action buttons --}}
                        <div class="row-md-6 m-3 text-center p-3">
                           <button class="btn btn-white border-black" type="submit">Add</button>
                           <button class="btn btn-danger" type="button">Delete</button>
                        </div>

                    </div>
                   </form>
            </div>
            {{-- academic info section ends --}}

            {{-- Short course info section starts --}}
            <div class="tab-pane fade" id="course" role="tabpanel" aria-labelledby="course-tab" tabindex="5">
                <form action="" method="">
                    <div class="container col-lg-6 p-3">
                       <h3 class="text-center p-2">Short Course Information</h3>

                       {{-- Employee ID input --}}
                       <div class="mb-3 row">
                        <label for="emp_id" class="col-sm-3 col-form-label">Employee Id :</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" name="emp_id" id="emp_id" placeholder="Employee Id">
                        </div>
                     </div>
                       
                        {{-- Title input --}}
                        <div class="mb-3 row">
                           <label for="title" class="col-sm-3 col-form-label">Course Name :</label>
                           <div class="col-sm-8">
                              <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                           </div>
                        </div>
        
                        {{-- Organization info --}}
                         <div class="mb-3 row">
                           <label for="conduct" class="col-sm-3 col-form-label">Conducted By :</label>
                           <div class="col-sm-8">
                           <textarea class="form-control" name="conduct" id="conduct" placeholder="Conducted By"></textarea>
                           </div>
                         </div>
                         
                         {{-- Start date --}}
                        <div class="mb-3 row">
                            <label for="date_from" class="col-sm-3 col-form-label">From:</label>
                             <div class="col-sm-8">
                                <input type="date" class="form-control" name="date_from" id="date_from"  placeholder="Start Date"/>
                             </div>
                        </div>
                         
                        {{-- End date --}}
                        <div class="mb-3 row">
                            <label for="date_to" class="col-sm-3 col-form-label">To :</label>
                             <div class="col-sm-8">
                                <input type="date" class="form-control" name="date_to" id="date_to"  placeholder="End Date"/>
                             </div>
                        </div>
        
                        {{-- Total Days input --}}
                        <div class="mb-3 row">
                            <label for="total_days" class="col-sm-3 col-form-label">Total Days :</label>
                             <div class="col-sm-8">
                                <input type="number" class="form-control" name="total_days" id="total_days"  placeholder="Total Days">
                             </div>
                        </div>

                        {{-- certificate input --}}
                        <div class="mb-3 row">
                            <label for="certificate" class="col-sm-3 col-form-label">Certificate :</label>
                            <div class="col-sm-8">
                            <textarea class="form-control" name="certificate" id="certificate" placeholder="Certificate"></textarea>
                            </div>
                          </div>
        
                        {{-- Action buttons --}}
                         <div class="row-md-6 m-3 text-center p-3">
                           <button class="btn btn-white border-black" type="submit">Add</button>
                           <button class="btn btn-danger" type="button">Delete</button>
                         </div>
                    </div>
                    
                   </form>
            </div>
            {{-- Short course info section starts --}}

            {{-- experience info section starts --}}
            <div class="tab-pane fade" id="exp" role="tabpanel" aria-labelledby="exp-tab" tabindex="6">
                <form action="" method="">
                    <div class="container col-lg-6 p-3">
                       <h3 class="text-center p-2">Experience Information</h3>

                    {{-- Employee ID input --}}
                    <div class="mb-3 row">
                        <label for="emp_id" class="col-sm-3 col-form-label">Employee Id :</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" name="emp_id" id="emp_id" placeholder="Employee Id">
                        </div>
                     </div>

                     {{-- previous Employee ID input --}}
                    <div class="mb-3 row">
                        <label for="pre_emp_id" class="col-sm-3 col-form-label"> Previous Employee Id :</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" name="pre_emp_id" id="pre_emp_id" placeholder="Previous Employee Id">
                        </div>
                     </div>

                     {{-- Organization  name info --}}
                     <div class="mb-3 row">
                        <label for="org_name" class="col-sm-3 col-form-label">Organization :</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="org_name" id="org_name" placeholder="Organization Name">
                        </div>
                      </div>

                      {{-- Organization address info --}}
                     <div class="mb-3 row">
                        <label for="org_add" class="col-sm-3 col-form-label">Address :</label>
                        <div class="col-sm-8">
                        <textarea class="form-control" name="org_add" id="org_add" placeholder="Organization Address"/></textarea>
                        </div>
                      </div>

                      {{-- Telephone no --}}
                      <div class="mb-3 row">
                        <label for="tel_no" class="col-sm-3 col-form-label">Tel No :</label>
                        <div class="col-sm-8">
                           <input type="tel" class="form-control" name="tel_no" id="tel_no" placeholder="Telephone No"/>
                        </div>
                     </div>
                   
                        {{-- Designation --}}
                        <div class="mb-3 row">
                           <label for="designation" class="col-sm-3 col-form-label">Designation :</label>
                           <div class="col-sm-8">
                              <input type="text" class="form-control" name="designation" id="designation" placeholder="Designation"/>
                           </div>
                        </div>
        
                        
                         
                         {{-- Department input --}}
                          {{-- <div class="mb-3 row">
                            <label for="dept" class="col-sm-3 col-form-label">Department :</label>
                             <div class="col-sm-8">
                            <input type="text" class="form-control" name="dept" id="dept"  placeholder="Department"/>
                             </div>
                          </div> --}}
        
                          {{-- Date from --}}
                          <div class="mb-3 row">
                            <label for="date_from" class="col-sm-3 col-form-label">From :</label>
                             <div class="col-sm-8">
                            <input type="date" class="form-control" name="date_from" id="date_from"  placeholder="Date From"/>
                             </div>
                          </div>
                         
                          {{-- Date To --}}
                          <div class="mb-3 row">
                            <label for="date_to" class="col-sm-3 col-form-label">To :</label>
                             <div class="col-sm-8">
                            <input type="date" class="form-control" name="date_to" id="date_to"  placeholder="Date To"/>
                             </div>
                          </div>

                          {{-- Total Years input --}}
                        <div class="mb-3 row">
                            <label for="total_years" class="col-sm-3 col-form-label">Total Years :</label>
                             <div class="col-sm-8">
                                <input type="number" class="form-control" name="total_years" id="total_years"  placeholder="Total Years">
                             </div>
                        </div>
        
                          {{-- Leave Reason input --}}
                          <div class="mb-3 row">
                            <label for="reason" class="col-sm-3 col-form-label">Leave Reason:</label>
                             <div class="col-sm-8">
                            <textarea class="form-control" name="reason" id="reason"  placeholder="Leave Reason"></textarea>
                             </div>
                          </div>

                          {{--Last salary input --}}
                        <div class="mb-3 row">
                            <label for="last_sal" class="col-sm-3 col-form-label">Last Salary :</label>
                             <div class="col-sm-8">
                                <input type="number" class="form-control" name="last_sal" id="last_sal"  placeholder="Amount">
                             </div>
                        </div>
        
                        {{-- Action Buttons --}}
                         <div class="row-md-6 m-3 text-center">
                           <button class="btn btn-white border-black" type="submit">Add</button>
                           <button class="btn btn-danger" type="button">Delete</button> 
                         </div>

                    </div>
                   </form>
            </div>
            {{-- experience info section ends --}}

            {{-- professional training section starts --}}
            <div class="tab-pane fade" id="train" role="tabpanel" aria-labelledby="train-tab" tabindex="7">
                <form action="" method="">
                    <div class="container col-lg-6 p-3">
                       <h3 class="text-center p-2">Training Information</h3>

                       {{-- Employee ID input --}}
                       <div class="mb-3 row">
                        <label for="emp_id" class="col-sm-3 col-form-label">Employee Id :</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" name="emp_id" id="emp_id" placeholder="Employee Id">
                        </div>
                     </div>
                       
                        {{-- Title input --}}
                        <div class="mb-3 row">
                           <label for="title" class="col-sm-3 col-form-label">Title :</label>
                           <div class="col-sm-8">
                              <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                           </div>
                        </div>
        
                        {{-- Organization info --}}
                         <div class="mb-3 row">
                           <label for="conduct" class="col-sm-3 col-form-label">Conducted By :</label>
                           <div class="col-sm-8">
                           <textarea class="form-control" name="conduct" id="conduct" placeholder="Conducted By"></textarea>
                           </div>
                         </div>
                         
                         {{-- Start date --}}
                        <div class="mb-3 row">
                            <label for="date_from" class="col-sm-3 col-form-label">From:</label>
                             <div class="col-sm-8">
                                <input type="date" class="form-control" name="date_from" id="date_from"  placeholder="Start Date"/>
                             </div>
                        </div>
                         
                        {{-- End date --}}
                        <div class="mb-3 row">
                            <label for="date_to" class="col-sm-3 col-form-label">To :</label>
                             <div class="col-sm-8">
                                <input type="date" class="form-control" name="date_to" id="date_to"  placeholder="End Date"/>
                             </div>
                        </div>
        
                        {{-- Total Days input --}}
                        <div class="mb-3 row">
                            <label for="total_days" class="col-sm-3 col-form-label">Total Days :</label>
                             <div class="col-sm-8">
                                <input type="number" class="form-control" name="total_days" id="total_days"  placeholder="Total Days">
                             </div>
                        </div>

                        {{-- certificate input --}}
                        <div class="mb-3 row">
                            <label for="certificate" class="col-sm-3 col-form-label">Certificate :</label>
                            <div class="col-sm-8">
                            <textarea class="form-control" name="certificate" id="certificate" placeholder="Certificate"></textarea>
                            </div>
                        </div>

                        {{-- skill type input --}}
                        <div class="mb-3 row">
                            <label for="skill" class="col-sm-3 col-form-label">Skill Type :</label>
                            <div class="col-sm-8">
                            <textarea class="form-control" name="skill" id="skill" placeholder="Skill Type"></textarea>
                            </div>
                        </div>
                        
        
                        {{-- Action buttons --}}
                         <div class="row-md-6 m-3 text-center p-3">
                           <button class="btn btn-white border-black" type="submit">Add</button>
                           <button class="btn btn-danger" type="button">Delete</button>
                         </div>
                    </div>
                    
                   </form>
            </div>
            {{-- professional training section ends --}}

            {{-- Earn Leave section starts --}}
            <div class="tab-pane fade" id="leave" role="tabpanel" aria-labelledby="leave-tab" tabindex="8">
                <form action="" method="">
                    <div class="container col-lg-6 p-3">
                       <h3 class="text-center">Earn Leave</h3>

                       {{-- Employee ID input --}}
                      <div class="mb-3 row">
                          <label for="emp_id" class="col-sm-3 col-form-label">Employee Id :</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="emp_id" id="emp_id" placeholder="Employee Id">
                          </div>
                      </div>

                       {{-- Earn Leave balance input --}}
                        <div class="mb-3 row">
                           <label for="balance" class="col-sm-3 col-form-label">Earn Leave Balance :</label>
                           <div class="col-sm-8">
                             <input type="number" class="form-control" name="balance" id="balance" placeholder="Earn Leave Balance"/>
                           </div>
                        </div>

                        {{-- Earn Leave Previous balance input --}}
                        <div class="mb-3 row">
                          <label for="pre_bal" class="col-sm-3 col-form-label">Earn Leave Previous Balance :</label>
                          <div class="col-sm-8">
                            <input type="number" class="form-control" name="pre_bal" id="pre_bal" placeholder="Earn Leave Previous Balance"/>
                          </div>
                       </div>

                        {{-- Earn Leave balance date input --}}
                         <div class="mb-3 row">
                           <label for="bal_dt" class="col-sm-3 col-form-label">Earn Leave Balance Date : </label>
                           <div class="col-sm-8">
                           <input type="date" class="form-control" name="bal_dt" id="bal_dt" placeholder="">
                          </div>
                         </div>

                         {{-- Expire date input --}}
                         <div class="mb-3 row">
                           <label for="nxt_dt" class="col-sm-3 col-form-label">Earn Leave Next Schedule : </label>
                           <div class="col-sm-8">
                           <input type="date" class="form-control" name="nxt_dt" id="nxt_dt"  placeholder=""/>
                          </div>
                         </div>

                         
                        {{-- Action Buttons --}}
                         <div class="row-md-6 m-3 text-center p-3">
                           <button class="btn btn-success" type="submit">Save</button>
                           <button class="btn btn-warning" type="button">Edit</button>
                           <button class="btn btn-primary" type="button">Clear</button>
                         </div>

                    </div>
                   </form>
            </div>
            {{-- Earn Leave section ends --}}

            {{-- Job History section starts --}}
            <div class="tab-pane fade" id="job" role="tabpanel" aria-labelledby="job-tab" tabindex="8">
                <form action="" method="">
                  <div class="container col-lg-6 p-3">
                    <h3 class="text-center">Employee Job History</h3>

                    {{-- Employee ID input --}}
                   <div class="mb-3 row">
                       <label for="emp_id" class="col-sm-3 col-form-label">Employee Id :</label>
                       <div class="col-sm-8">
                         <input type="text" class="form-control" name="emp_id" id="emp_id" placeholder="Employee Id">
                       </div>
                   </div>

                    {{-- Join As input --}}
                     <div class="mb-3 row">
                        <label for="join_as" class="col-sm-3 col-form-label">Join As :</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="join_as" id="join_as" placeholder="Join As">
                        </div>
                     </div>

                     {{-- Designation input --}}
                     <div class="mb-3 row">
                       <label for="desi" class="col-sm-3 col-form-label">Designation :</label>
                       <div class="col-sm-8">
                         <input type="text" class="form-control" name="desi" id="desi" placeholder="Designation">
                       </div>
                    </div>

                     {{-- Joining date input --}}
                      <div class="mb-3 row">
                        <label for="join_dt" class="col-sm-3 col-form-label">Joining Date : </label>
                        <div class="col-sm-8">
                        <input type="date" class="form-control" name="join_dt" id="join_dt" placeholder="">
                       </div>
                      </div>

                      {{-- Job Location input --}}
                      <div class="mb-3 row">
                        <label for="job_loc" class="col-sm-3 col-form-label">Job Location : </label>
                        <div class="col-sm-8">
                        <textarea class="form-control" name="job_loc" id="job_loc"  placeholder="Job Location"></textarea>
                       </div>
                      </div>

                      
                     {{-- Action Buttons --}}
                      <div class="row-md-6 m-3 text-center p-3">
                        <button class="btn btn-success" type="submit">Save</button>
                        <button class="btn btn-warning" type="button">Edit</button>
                        <button class="btn btn-primary" type="button">Clear</button>
                      </div>

                 </div>
              </form>
            </div>
            {{-- Job History section ends --}}
        
        </div>
        

     </main>

     <footer>
        
          
     </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
     {{-- <script>
        $(document).ready(function () {
        $('#example').DataTable();
     });
     </script> --}}
</body>
</html>