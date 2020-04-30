<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>CRM 后台管理</title>
    <!-- Bootstrap Styles-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{ asset('css/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ asset('css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="{{ asset('js/Lightweight-Chart/cssCharts.css') }}"> 
</head>

<body>
    <div id="wrapper">
        <x-admin.nav/>
        <x-admin.sidebar/>
        
        <div id="page-wrapper">
		    <div class="header"> 
                <!-- <h1 class="page-header">
                    Dashboard <small>Welcome John Doe</small>
                </h1> -->
                <ol class="breadcrumb mt-2 border">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Data</li>
                </ol> 				
		    </div>

            <div id="page-inner">
		        @yield('content')
    			<!-- <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p>
    			</footer> -->
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-1.10.2.js') }}"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
	 
    <!-- Metis Menu Js -->
    <script src="{{ asset('js/jquery.metisMenu.js') }}"></script>
    <!-- Morris Chart Js -->
    <script src="{{ asset('js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('js/morris/morris.js') }}"></script>
	
	
	<script src="{{ asset('js/easypiechart.js') }}"></script>
	<script src="{{ asset('js/easypiechart-data.js') }}"></script>
	
	 <script src="{{ asset('js/Lightweight-Chart/jquery.chart.js') }}"></script>
	
    <!-- Custom Js -->
    <script src="{{ asset('js/custom-scripts.js') }}"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="{{ asset('js/Chart.min.js') }}"></script>  
    <script type="text/javascript" src="{{ asset('js/chartjs.js') }}"></script> 
</body>
</html>    