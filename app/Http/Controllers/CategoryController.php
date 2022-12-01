<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
//     $categories =Category::with('products')->get();
//
//
//
//
//       echo '<table>';
//       echo '<tr>
//     <th>No</th>
//     <th>Category</th>
//     <th style="width:40%">Product</th>
//
//   </tr>';
//       $no = 1;
//       foreach($categories as $category){
//           echo '<tr>
//      <td>'.$no++.'</td>
//      <td>'.$category->title.'</td>
//      <td style="text-align:center">';
//           foreach($category->products as $product){
//               echo $product->title.'<br/>';
//           }
//           echo '</td>
//
//      </tr>';
//       }
//       echo '</table>';
//
//     }




       $categories = Category::with(['products'])->get();
       echo '<table>';
       echo '<tr>
        <th>No</th>
        <th>Category</th>
        <th>Product</th>

        </tr>';
       $no = 1;
       foreach($categories as $category){
           echo '<tr>
         <td>'.$no++.'</td>
         <td>'.$category->title.'</td>
         <td>';
           foreach($category->products as $product){
               echo $product->title.", ";
           }
           echo '</td>

      </tr>';
       }
       echo '</table>';
   }

}
