public function index(Request $request)
{
    $keyword = $request->input('keyword');

    $query = Recipes::query();

    if ($keyword) {
        $query->where(function($q) use ($keyword) {
            $q->where('title', 'like', "%{$keyword}%")
              ->orWhereHas('usings.ingredient', function($q2) use ($keyword) {
                  $q2->where('name', 'like', "%{$keyword}%");
              });
        });
    }

    $recipes = $query->with('usings.ingredient')->latest()->get();

    return view('recipes.index', compact('recipes'));
}