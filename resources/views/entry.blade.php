<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Leave Entry</title>
</head>
<body>
    <div class=" p-3">
       
        <form action="" method="">
            <div class="container col-lg-6 p-3">
                <h3 class="text-center">Leave Entry</h3>


                {{-- Company Name input --}}
                <div class="row p-1">
                    
                    <hr/>
                    {{-- company name selection --}}
                    <div class="col-md-12">
                        <div class="row pb-2">
                            <label for="com_name" class="col-sm-4 col-form-label">Company Name :</label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected placeholder="Select one">Select One</option>
                                </select>
                            </div>
                        </div>
                </div>

                {{-- Employee Id input --}}
                <div class="row pb-1 pl-1">
                    <label for="name" class="col-sm-4 col-form-label">Employee Id :</label>
                    <div class="col-sm-4">
                       <input type="text" class="form-control" name="name_eng" id="name_eng" placeholder="">
                    </div>
                    <div class="col-sm-4">
                         <input type="text" class="form-control" name="name_bang" id="name_bang" placeholder="">
                     </div>
                 </div>

                 <div class="row">
                    {{-- Name input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="name" class="col-sm-5 col-form-label">Name :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                            </div>
                        </div>
                    </div>

                    {{-- Designation input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="desi" class="col-sm-5 col-form-label">Designation :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="desi" id="desi" placeholder="Designation">
                            </div>
                        </div>                          
                    </div>
                </div>

                <div class="row">
                    {{--Leave Category input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="category" class="col-sm-5 col-form-label">Leave Category :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="category" id="category" placeholder="Category">
                            </div>
                        </div>
                    </div>

                    {{-- Year input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="year" class="col-sm-5 col-form-label">Year :</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" name="year" id="year" placeholder="">
                            </div>
                        </div>                          
                    </div>
                </div>

            </div>
        </form>

        <hr/>
        <table id="example1" class="table table-bordered p-3" style="width:100%">
            <thead class="bg-dark text-light">
                <tr>
                    <th style="text-align:center">Leave Name</th>
                    <th style="text-align:center">Max</th>
                    <th style="text-align:center">Pre Bal</th>
                    <th style="text-align:center">Submitted</th>
                    <th style="text-align:center">Approved</th>
                    <th style="text-align:center">L. Froml</th>
                    <th style="text-align:center">L. To</th>
                    <th style="text-align:center">Days</th>
                    <th style="text-align:center">New Bal</th>
                    <th style="text-align:center">Approved By</th>
                    <th style="text-align:center">Information</th>
                    <th style="text-align:center">Remarks</th>
                </tr>
            </thead>
            <tbody>
                <form>
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="number"></td>
                        <td ><input type="number"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td ><input type="date"></td>
                        <td><input type="date"></td>
                        <td><input type="number"></td>
                        <td ><input type="number"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td ><input type="text"></td>
                    </tr>
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="number"></td>
                        <td ><input type="number"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td ><input type="date"></td>
                        <td><input type="date"></td>
                        <td><input type="number"></td>
                        <td ><input type="number"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td ><input type="text"></td>
                    </tr>
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="number"></td>
                        <td ><input type="number"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td ><input type="date"></td>
                        <td><input type="date"></td>
                        <td><input type="number"></td>
                        <td ><input type="number"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td ><input type="text"></td>
                    </tr>
                    
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="number"></td>
                        <td ><input type="number"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td ><input type="date"></td>
                        <td><input type="date"></td>
                        <td><input type="number"></td>
                        <td ><input type="number"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td ><input type="text"></td>
                    </tr>
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="number"></td>
                        <td ><input type="number"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td ><input type="date"></td>
                        <td><input type="date"></td>
                        <td><input type="number"></td>
                        <td ><input type="number"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td ><input type="text"></td>
                    </tr>
                </form>
        </table>

        
        <div class="container col-lg-6 p-3">
            <hr/>
            <div class="row-md-6 m-3 text-center">
                <button class="btn btn-success" type="submit">Save</button>
                <button class="btn btn-info" type="button">Add</button>
                <button class="btn btn-danger" type="button">Delete</button>
                <button class="btn btn-primary" type="button">Query</button>
                <button class="btn btn-warning" type="button">Exit</button>
            </div>
        </div>

        <hr/>

        <div>
                <table id="example2" class="table table-bordered p-3" style="width:100%">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th style="text-align:center">Leave Name</th>
                            <th style="text-align:center">Total Leave</th>
                            <th style="text-align:center">Avail Leave</th>
                            <th style="text-align:center">Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form>
                            <tr>
                                <th>Casual Leave</th>
                                <td><input type="number"></td>
                                <td ><input type="number"></td>
                                <td><input type="number"></td>
                            </tr>
                            <tr>
                                <th>Sick Leave</th>
                                <td><input type="number"></td>
                                <td ><input type="number" ></td>
                                <td><input type="number"></td>
                            </tr>
                            <tr>
                                <th>Earned Leave</th>
                                <td><input type="number"></td>
                                <td><input type="number" ></td>
                                <td><input type="number"></td>
                            </tr>
                            
                        </form>
                </table>
            </div>
    </div>
    
    <div>
        <table>
            <form>

            </form>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
</body>
</html>