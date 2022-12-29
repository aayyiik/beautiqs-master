@extends('layouts.master') 

@section('content')
<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">DASHBOARD</h3>
                        <p class="panel-subtitle">BEAUTIQS SYSTEM</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                                    <p>
                                        <span class="number">{{ $barangs }}</span>
                                        <span class="title"><a href="/barang">Barang</a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-truck"></i></span>
                                    <p>
                                        <span class="number">{{ $supplier }}</span>
                                        <span class="title"><a href="/supplier">Supplier</a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-shopping-cart"></i></span>
                                    <p>
                                        <span class="number">{{ $pemesanan }}</span>
                                        <span class="title"><a href="/pemesanan" >Pemesanan</a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-bar-chart"></i></span>
                                    <p>
                                        <span class="number">{{ $histori }}</span>
                                        <span class="title"><a href="/history_stok">History Stok</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div id="headline-chart" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300" class="ct-chart-line" style="width: 100%; height: 300;"><g class="ct-grids"><line y1="265" y2="265" x1="50" x2="1141.5" class="ct-grid ct-vertical"></line><line y1="229.28571428571428" y2="229.28571428571428" x1="50" x2="1141.5" class="ct-grid ct-vertical"></line><line y1="193.57142857142856" y2="193.57142857142856" x1="50" x2="1141.5" class="ct-grid ct-vertical"></line><line y1="157.85714285714286" y2="157.85714285714286" x1="50" x2="1141.5" class="ct-grid ct-vertical"></line><line y1="122.14285714285714" y2="122.14285714285714" x1="50" x2="1141.5" class="ct-grid ct-vertical"></line><line y1="86.42857142857142" y2="86.42857142857142" x1="50" x2="1141.5" class="ct-grid ct-vertical"></line><line y1="50.71428571428572" y2="50.71428571428572" x1="50" x2="1141.5" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="1141.5" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M50,265L50,172.143L231.917,129.286L413.833,165L595.75,50.714L777.667,157.857L959.583,165L1141.5,86.429L1141.5,265Z" class="ct-area"></path></g><g class="ct-series ct-series-b"><path d="M50,265L50,236.429L231.917,157.857L413.833,207.857L595.75,93.571L777.667,129.286L959.583,65L1141.5,22.143L1141.5,265Z" class="ct-area"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="270" width="181.91666666666666" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 182px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Mon</span></foreignObject><foreignObject style="overflow: visible;" x="231.91666666666666" y="270" width="181.91666666666666" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 182px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Tue</span></foreignObject><foreignObject style="overflow: visible;" x="413.8333333333333" y="270" width="181.91666666666669" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 182px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Wed</span></foreignObject><foreignObject style="overflow: visible;" x="595.75" y="270" width="181.91666666666663" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 182px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Thu</span></foreignObject><foreignObject style="overflow: visible;" x="777.6666666666666" y="270" width="181.91666666666663" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 182px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Fri</span></foreignObject><foreignObject style="overflow: visible;" x="959.5833333333333" y="270" width="181.91666666666674" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 182px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sat</span></foreignObject><foreignObject style="overflow: visible;" x="1141.5" y="270" width="30" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sun</span></foreignObject><foreignObject style="overflow: visible;" y="229.28571428571428" x="10" height="35.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">10</span></foreignObject><foreignObject style="overflow: visible;" y="193.57142857142856" x="10" height="35.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">15</span></foreignObject><foreignObject style="overflow: visible;" y="157.85714285714283" x="10" height="35.71428571428571" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">20</span></foreignObject><foreignObject style="overflow: visible;" y="122.14285714285714" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">25</span></foreignObject><foreignObject style="overflow: visible;" y="86.42857142857142" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">30</span></foreignObject><foreignObject style="overflow: visible;" y="50.71428571428572" x="10" height="35.714285714285694" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">35</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">40</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">45</span></foreignObject></g></svg></div>
                            </div>
                            <div class="col-md-3">
                                <div class="weekly-summary text-right">
                                    <span class="number">2,315</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 12%</span>
                                    <span class="info-label">Total Sales</span>
                                </div>
                                <div class="weekly-summary text-right">
                                    <span class="number">$5,758</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 23%</span>
                                    <span class="info-label">Monthly Income</span>
                                </div>
                                <div class="weekly-summary text-right">
                                    <span class="number">$65,938</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> 8%</span>
                                    <span class="info-label">Total Income</span>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@stop