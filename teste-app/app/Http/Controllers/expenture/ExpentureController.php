<?php

namespace App\Http\Controllers\expenture;

use App\Http\Controllers\Controller;
use App\Models\expenture\Expenture;
use Illuminate\Http\Request;
use DB;
use Log;

class ExpentureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        
        $this->expentureByTypeChart();
        
        $this->expentureByMonthChart();
        
        
        
        return view('expentures.index');
        
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\expenture\Expenture  $expenture
     * @return \Illuminate\Http\Response
     */
    public function show(Expenture $expenture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\expenture\Expenture  $expenture
     * @return \Illuminate\Http\Response
     */
    public function edit(Expenture $expenture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\expenture\Expenture  $expenture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expenture $expenture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\expenture\Expenture  $expenture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expenture $expenture)
    {
        //
    }
    
    /**
     * 
     * 
     */
    private function expentureByTypeChart(){
        
        $expentureData = Expenture::select(DB::raw('expenture_type_id, SUM(value) AS Total'))
        ->groupby(DB::raw('expenture_type_id'))
        ->get();
        
        $finances = \Lava::DataTable();
        
        $finances
        ->addStringColumn('Month')
        ->addNumberColumn('Expenture');
        
        foreach($expentureData as $expenture){
            $finances
            ->addRow([$expenture->expenture_type_description, $expenture->Total]);
        }
        
        \Lava::ColumnChart('Finances', $finances, [
            'title' => 'Expentures by Type',
            'width' => '100%',
            'height' => '450',
            'titleTextStyle' => [
                'color'    => '#eb6b2c',
                'fontSize' => 14
            ],
            'legend' => [
                'position' => 'bottom',
                'maxLines' => 3
            ],
            'colors' => [
                'green', 'blue'
            ],
            'vAxis' => [
                'title' => 'US$',
            ],
            'hAxis' => [
                'title' => 'Type of Expenture',
            ],
        ]);
    }
    
    /**
     * 
     * 
     */
    private function expentureByMonthChart(){
        
        $min = strtotime("2021-01-01");
        $max = strtotime("2021-12-31");
        
        Log::debug(" min:  ".$min." max: ".$max);
        
        $expentureData = Expenture::select(DB::raw('month(date) AS Month, SUM(value) AS Total'))
        ->groupby(DB::raw('month(date)'))
        ->get();
        
        $finances2 = \Lava::DataTable();
        
        $finances2
        ->addStringColumn('Month')
        ->addNumberColumn('Expenture');
        
        foreach($expentureData as $expenture){
            $finances2
            ->addRow([$expenture->Month, $expenture->Total]);
        }
        
        \Lava::ColumnChart('Finances2', $finances2, [
            'title' => 'Expentures by Month',
            'width' => '100%',
            'height' => '450',
            'titleTextStyle' => [
                'color'    => '#eb6b2c',
                'fontSize' => 14
            ],
            'legend' => [
                'position' => 'bottom',
                'maxLines' => 3
            ],
            'colors' => [
                'green', 'blue'
            ],
            'vAxis' => [
                'title' => 'US$',
            ],
            'hAxis' => [
                'title' => 'Month',
            ],
        ]);
    }
    
}
