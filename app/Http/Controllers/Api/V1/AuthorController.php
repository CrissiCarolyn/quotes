<?php

namespace App\Http\Controllers\Api\V1;
use App\Models\Quote;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Filters\V1\AuthorsFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreAuthorRequest;
use App\Http\Resources\V1\AuthorResource;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Requests\V1\UpdateAuthorRequest;
use App\Http\Resources\V1\AuthorCollection;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new AuthorsFilter();
        $queryItems = $filter->transform($request); //[['column', 'operator', 'value']]

        if (count($queryItems) == 0) {
            return new AuthorCollection(Author::paginate());

        } else {
            $categories = Author::where($queryItems)->paginate();
            return new AuthorCollection($categories->appends($request->query()));

        }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAuthorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuthorRequest $request)
    {
        return new AuthorResource(Author::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {

        $byCatEdu = request()->query('byCatEdu');

        if ($byCatEdu) {
            return new AuthorResource($author->loadMissing('quotes'));

        }

        return new AuthorResource($author);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuthorRequest  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
    }
}
