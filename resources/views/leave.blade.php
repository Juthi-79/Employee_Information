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
    <title>Leave Category</title>
</head>
<body>
    <div class="container p-3">
       
        <form action="" method="">
            <div class="container col-lg-6 p-3">
                <h3 class="text-center">Leave Category</h3>

                <hr/>
                {{-- Leave Catogory input --}}
                <div class="mb-3 row">
                    <label for="leave" class="col-sm-3 col-form-label ">Leave Category: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="leave" id="leave" placeholder="Enter Leave Category">
                     </div>
                </div>

                 {{-- Remarks input --}}
                <div class="mb-3 row">
                    <label for="remark" class="col-sm-3 col-form-label ">Remarks: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="remark" id="remark" placeholder="Remarks">
                     </div>
                </div>

            </div>
        </form>
        <table id="example" class="container table table-bordered p-3" style="width:100px">
            <thead class="bg-dark text-light">
                <tr>
                    <th style="width:10px; text-align:left">Leave Name</th>
                    <th style="width:10px; text-align:center">Leave Days</th>
                    <th style="width:20px; text-align:center">Remarks</th>
                </tr>
            </thead>
            <tbody>
                <form>
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="number"></td>
                        <td ><input type="text"></td>
                        
                    </tr>
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="number"></td>
                        <td><input type="text"></td>
                        
                    </tr>
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="number"></td>
                        <td><input type="text"></td>
                        
                    </tr>
                    
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="number"></td>
                        <td><input type="text"></td>
                        
                    </tr>
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="number"></td>
                        <td><input type="text"></td>
                        
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