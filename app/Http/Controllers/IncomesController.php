 <?php

   namespace App\Http\Controllers;

   use Illuminate\Http\Request;
   use App\Models\Income;

   class IncomesController extends Controller
   {
       public function index(Request $request)
       {
           $dateFrom = $request->input('dateFrom');
           $dateTo = $request->input('dateTo');
           $page = $request->input('page', 1);
           $limit = $request->input('limit', 500);

           if ($request->input('key') !== 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie') {
               return response()->json(['error' => 'Unauthorized'], 401);
           }

           $query = Income::whereBetween('created_at', [$dateFrom, $dateTo]);

           $incomes = $query->paginate($limit, ['*'], 'page', $page);

           return response()->json($incomes);
       }
   }
