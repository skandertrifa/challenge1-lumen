<?php
namespace App\Http\Controllers;

use App\Models\Remuneration;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class RemunerationController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $sort = $request->query('sort');
        $salaire = $request->query('salaire');
        $first_name = $request->query('first_name');
        $last_name = $request->query('last_name');
        if ( $sort ){
            $remunerations = Remuneration::orderBy($sort);
        }
        else $remunerations = DB::table('Remunerations');

        if ( $salaire )
            $remunerations = $remunerations->where('salaire',$salaire);
        if ( $first_name ){
            $remunerations = $remunerations->where('first_name',$first_name);}
        if ( $last_name )
            $remunerations = $remunerations->where('last_name',$last_name);

        return response()->json($remunerations->get());
    }

    public function show($id): JsonResponse
    {
        return response()->json(Remuneration::find($id));
    }
}
