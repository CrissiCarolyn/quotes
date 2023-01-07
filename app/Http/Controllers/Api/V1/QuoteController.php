<?php

namespace App\Http\Controllers\Api\V1;
use App\Models\Quote;
use App\Models\Author;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Filters\V1\QuotesFilter;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\QuoteResource;
use App\Http\Resources\V1\AuthorResource;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Resources\V1\QuoteCollection;
use App\Http\Requests\V1\StoreQuoteRequest;
use App\Http\Resources\V1\AuthorCollection;
use App\Http\Requests\V1\UpdateQuoteRequest;
use App\Http\Requests\V1\BulkStoreQuoteRequest;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new QuotesFilter();
        $filterItems = $filter->transform($request); //[['column', 'operator', 'value']]

        //$quotes = Quote::all();
        $quotes = Quote::where($filterItems);
 
        $byCatEdu = $request->query('byCatEdu');

        if ($byCatEdu) {
            $quotes = Quote::whereHas('categories', function (Builder $query) {
                $query->where('category_name', '=', 'Education');
            }); 
        }
        
       return new QuoteCollection($quotes->paginate()->appends($request->query()));
    

    }
 

    public function getByCatEdu() 
    {

        $quotes = Quote::whereHas('categories')
        ->join('category_quote', 'quotes.id', '=', 'category_quote.quote_id')
        ->where('category_id', '=', '208')
        ->inRandomOrder()
        ->limit(1)
        ->get();
        return new QuoteCollection($quotes);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuoteRequest $request)
    {
        $quote = new QuoteResource(Quote::create($request->all()));
        $quote->authorId = $request->author_id;
        $quote->quote = $request->quote;
        $quote->save();  
        $quote->categories()->attach($request->category_id); 
    }
 

    public function bulkStore(BulkStoreQuoteRequest $request) {

        $bulk = collect($request->all())->map(function($arr, $key) {
            return Arr::except($arr, ['authorId', 'categoryId']);


        });
  
        Quote::insert($bulk->toArray());
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        return new QuoteResource($quote);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuoteRequest  $request
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuoteRequest $request, Quote $quote)
    {
        $quote->update($request->all());
        $quote->categories()->attach($request->category_id); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        //
    }
}
