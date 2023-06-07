<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Invoice 1</title>
    <link rel="stylesheet" href="style.css" media="all"/>
    <style>
        @import 'https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&display=swap';


        * {
            margin: 0;
            padding: 5px;
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #5D6975;
            text-decoration: underline;
        }

        body {

            color: #001028;
            background: #FFFFFF;
            font-family: 'Kanit', sans-serif;
            font-size: 12px;
        }

        header {
            padding: 10px 0;
            margin-bottom: 30px;
        }

        #logo {
            margin-bottom: 10px;
        }

        #logo img {
            width: 100px;
        }

        h1 {
            border-top: 1px solid #5D6975;
            border-bottom: 1px solid #5D6975;
            color: #5D6975;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
            background: url(dimension.png);
        }

        #project {
            float: left;
        }

        #project span {
            color: #5D6975;
            text-align: right;
            width: 52px;
            margin-right: 10px;
            display: inline-block;
            font-size: .9em;
        }

        #company {
            float: right;
            text-align: right;
        }

        #project div,
        #company div {
            white-space: nowrap;
            font-size: 14px;

        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table tr:nth-child(2n-1) td {
            background: #F5F5F5;
        }

        table th,
        table td {
            text-align: center;
        }

        table th {
            padding: 5px 20px;
            color: #5D6975;
            border-bottom: 2px solid #C1CED9;

        }

        table .service,
        table .desc {
            text-align: left;
        }

        table td {
            padding: 20px;
            text-align: right;
        }

        table td.service,
        table td.desc {
            vertical-align: top;
        }

        table td.unit,
        table td.total {
            font-size: 1.2em;
        }

        table td.grand {
            border-top: 1px solid #5D6975;;
        }

        #notices .notice {
            color: #5D6975;
            font-size: 1.2em;
        }

        footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #C1CED9;
            padding: 8px 0;
            text-align: center;
        }

        .h1 {
            color: white;
            background: #012169;
        }

        .h3 {
            color: #012169;
        }
    </style>
</head>
<body>
<header class="clearfix">
    <div id="logo">
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/avatar/logo.png'))) }}">
        <h1 class='h1'>Invoice Number : {{$invoices->invoice_num}}</h1>
    <div id="company" class="clearfix">
        <div id="logo">
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/avatar/logo2.png'))) }}">
            <h3 class='h3'>valU bilfold</h3>
        </div>
    </div>

    <div id="project">
        <div><span>CLIENT : </span> {{$user->name}}</div>
        </br>


{{--        <div><span>ADDRESS : </span> {{$user->address}}</div>--}}
{{--        </br>--}}


        <div><span>EMAIL : </span> <a href="{{$user->email}}">{{$user->email}}</a></div>
        </br>


    </div>
</header>
<main>
    <table>
        <thead>

        </thead>
        <tr>
            <th class="service">Invoice Number</th>
            <th class="desc">Bank Code</th>
            <th class="desc">Status</th>
            <th class="desc">Time</th>
        </tr>
        <tbody>
        <tr>
            <td class="service"> Number: {{$invoices->invoice_num}}</td>
            <td class="service"> Bank: {{$invoices->bank_code}}</td>
            <td class="service"> Status: {{$invoices->status}}</td>
            <td class="service"> Time: {{$invoices->due_date}}</td>

        </tr>
        </tbody>
        <div>
        </div>
    </table>
    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path($my))) }}" width="600px" height="200px">

</main>

<h3>
    <footer class='h1'>
        Dr.Code for Software and Electronic Systems <a href="https://doctor-code.net">Dr.Code</a>
    </footer>
</h3>

</body>
</html>
