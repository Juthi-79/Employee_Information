<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- font awesome cdn --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
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
                                    <option selected placeholder="Selct one">Select One</option>
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
                                    <option selected placeholder="Selct one">Select One</option>
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
                                    <option selected placeholder="Selct one">Select One</option>
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
                                    <option selected placeholder="Selct one">Select One</option>
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
                                    <option selected placeholder="Selct one">Select One</option>
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
                                    <option selected placeholder="Selct one">Select One</option>
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
                                    <option selected placeholder="Selct one">Select One</option>
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
                                    <option selected placeholder="Selct one">Select One</option>
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
                                    <option selected placeholder="Selct one">Select One</option>
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
                                    <option selected placeholder="Selct one">Select One</option>
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
                                    <option selected placeholder="Selct one">Select One</option>
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
                                    <option selected placeholder="Selct one">Select One</option>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>