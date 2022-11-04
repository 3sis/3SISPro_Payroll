<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    

// function categoryTree($parent_id = 0, $sub_mark = ''){
//     global $db;
//     $query = $db->query("SELECT * FROM categories WHERE parent_id = $parent_id ORDER BY name ASC");
   
//     if($query->num_rows > 0){
//         while($row = $query->fetch_assoc()){
//             echo '<option value="'.$row['id'].'">'.$sub_mark.$row['name'].'</option>';
//             categoryTree($row['id'], $sub_mark.'---');
//         }
//     }
// }



}
