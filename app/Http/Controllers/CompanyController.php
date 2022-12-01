<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::with(['users'])->get();


        echo '<table>';
        echo "<tr>
         <th>Company</th>
         <th>Users</th>
         </tr>";

        foreach ($companies as $company){
            echo '<tr>

          <td>' . $company->title. '</td>
          <td>';
            foreach ($company->users as $user){
                echo $user->name;
            }
            echo '</td> </tr>';
        }
        echo '</table>';
    }

    public function show(Request $request, $id)
    {
        $company = Company::where( 'id' , '=', $id)->with('users')->first();
        echo "Company--- "." ". $company['title']."<br>"."<br>";
       // dd($company->users);
foreach ($company->users as $user){
    echo $user->name.","."<br>";
}
    }
}
