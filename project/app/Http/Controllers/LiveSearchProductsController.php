<?php
 
namespace App\Http\Controllers;
 use App\Models\Task;
use Illuminate\Http\Request;
use DB;
 
class LiveSearchProductsController extends Controller
{
    function index()
    {
        

        return view('search');
    }
 
    function action3(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '') {
                $data = DB::table('tasks')
                    ->where('description', 'like', '%'.$query.'%')
                    ->orderBy('id', 'asc')
                    ->get();
                    
            } else {
                $data = DB::table('tasks')
                    ->orderBy('id', 'asc')
                    ->get();
            }
             
            $total_row = $data->count();
            if($total_row > 0){
                foreach($data as $row)
                {
                    $output .= '
                    <tr>
                    <td>'.$row->id.'</td>
                    <td>'.$row->description.'</td>
                    </tr>
                    ';
                }
            } else {
                $output = '
                <tr>
                    <td align="center" colspan="5">No Data Found</td>
                </tr>
                ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );
            echo json_encode($data);
        }
    }
}