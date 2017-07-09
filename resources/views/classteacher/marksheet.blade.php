@extends('layouts.classteacherLayout')


@section ('classteacher-content')

     <br>
  <table class="table table-bordered" style="background: #fff;">
  <div class="table-responsive">
    <div col-md-3 >
    <thead>

      <tr>
      
        
         <th>Class roll</th>
        <th>Full Name</th>
        <th>Bangla</th>
        <th>English</th>
        <th>Math</th>
        <th>Science</th>
        <th>Sociolgy</th>
        <th>Biology</th>
        <th>Total Marks</th>
        <th>Position</th>
        
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
    <tr>
    
   
  <td>16</td>
  <td>Sumon paul</td>
  <td>67</td>
  <td>78</td>
  <td>85</td>
  <td>76</td>
  <td>64</td>
  <td>73</td>
  <td>443</td>
  <td>10</td>
    <td> <a class="btn btn-primary" href="" role="button" >Edit</a></td>


</tr>
    </tbody>
    </table>


@endsection