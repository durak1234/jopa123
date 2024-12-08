<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function renderCreatePage ()
    {
        $portfolios = Portfolio::all();

        return view('createPortfolio')->with('portfolios',$portfolios);
    }

    public function createPortfolio(Request $request)
    {
        $data = $request->all();
        
        $portfolio = Portfolio::create($data);

        return back();
    }

    public function portfolioDelete($id)
    {
        $portfolio = Portfolio::find($id);
        if($portfolio){
            $portfolio->delete($id);
        }
        return back();
    }
}
