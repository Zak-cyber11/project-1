<?php

   namespace App\Http\Controllers;

   use Illuminate\Http\Request;
   use App\Models\Stock;

   class StocksController extends Controller
   {
       public function index(Request $request)
       {
           $dateFrom = $request->input('dateFrom');
           $page = $request->input('page', 1);
           $limit = $request->input('limit', 500);

           if ($request->input('key') !== 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie') {
               return response()->json(['error' => 'Unauthorized'], 401);
           }

           $query = Stock::whereDate('created_at', '>=', $dateFrom);

           $stocks = $query->paginate($limit, ['*'], 'page', $page);

           return response()->json($stocks);
       }
   }
