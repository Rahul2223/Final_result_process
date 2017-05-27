@extends('layouts.adminLayout')



@section ('admin-content')

<br>
<div class="col-md-6">
                 <a class="btn btn-primary" href="{{('addStudent')}}" role="button" >Add Student</a>
          </div>


        <div class="col-md-3">

          <label>Previous year student Info</label>
        </div>
          <div class="col-md-3">
            <select class="form-control">
              <option>2010</option>
              <option>2011</option>
              <option>2012</option>
              <option>2013</option>
              <option>2014</option>
              <option>2015</option>


            </select>

         </div>

              <div class="style"></div>
              <br>
              <br>
           <table class="table table-bordered" >
           <div class="table-responsive">

            <div class="col-md-3">
                              
                     
             <thead>
               <tr>
                  <th>Id</th>
                  <th>Class</th>
                  <th>Roll</th>
                 <th>Full Name</th>


                 <th>Father's Name</th>
                 <th>Mother's Name</th>
                 <th>Date of Birth</th>
                 <th>gender</th>
                 <th>Address</th>
                 <th>Edit</th>
               </tr>
             </thead>
            
            
           
           <td><a class="btn btn-primary" href="{{('editStudent')}}" role="button"> Edit</a> </td>

         </tr>
      
             </tbody>
             
           </table>

@endsection