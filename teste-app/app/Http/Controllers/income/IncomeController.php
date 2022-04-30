<?php

namespace App\Http\Controllers\income;

use App\Http\Controllers\Controller;
use App\Models\income\Income;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Object_;
use Khill\Lavacharts\Lavacharts;
use DB;
use Log;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $incomeData = Income::select(DB::raw('income_type_id, SUM(value) AS Total'))
        ->groupby(DB::raw('income_type_id'))
        ->get();
        
        $finances = \Lava::DataTable();
        
        $finances
        ->addStringColumn('Income Type')
        ->addNumberColumn('Income');
        
        foreach($incomeData as $income){
            $finances
            ->addRow([$income->income_type_description, $income->Total]);
        }        
        
        \Lava::ColumnChart('Finances', $finances, [
            'title' => 'Income by Source',
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
                'title' => 'Type of Income',
            ],
        ]);               
        
        return view('income.index');
    }
    
    public function testChart(){                               
        
        $population = \Lava::DataTable();
        
        $population->addDateColumn('Year')
        ->addNumberColumn('Number of People')
        ->addRow(['2006', 623452])
        ->addRow(['2007', 685034])
        ->addRow(['2008', 716845])
        ->addRow(['2009', 757254])
        ->addRow(['2010', 778034])
        ->addRow(['2011', 792353])
        ->addRow(['2012', 839657])
        ->addRow(['2013', 842367])
        ->addRow(['2014', 873490]);
        
        \Lava::AreaChart('Population', $population, [
            'title' => 'Population Growth',
            'legend' => [
                'position' => 'in'
            ]
        ]);
        
        return view('income.chart');
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
     * @param  \App\Models\income\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\income\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit(Income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\income\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Income $income)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\income\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(Income $income)
    {
        //
    }
}
