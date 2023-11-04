<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300&display=swap');
</style>
<style>
    .roboto{
        font-family: 'Roboto', sans-serif;
    }
    .inter{
        font-family: 'Inter', sans-serif;
    }
    .montserrat{
        font-family: 'Montserrat', sans-serif;
    }
</style>
@vite([
    'resources/css/app.css',
     'resources/css/home.scss'
])
<link rel="stylesheet" href="{{ asset("assets/css/fontawesome/all.css") }}">
<style>
    #price-table .nav-tabs{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        border: none;
        margin-bottom: 15px;
    }
    #price-table .nav-tabs .nav-link{
        margin: 0 auto;
        text-transform: uppercase;
        display: block;
        width: 100%;
        border: none;
        border-radius: 0;
        border-bottom: 2px solid #eaeaea;
    }
    #price-table .nav-tabs .nav-link{
        color: #333;
        font-weight: 600;
        font-size: 16px;
    }
    #price-table .nav-tabs .nav-link.active{
        color: #038732;
        border-color: #038732;
    }
    #price-table .tab-content table{
        width: 100%;
        border-color: #eaeaea;
    }
    #price-table thead, tbody, tfoot, tr, td, th{
        border-width: 1px!important;
        padding: 10px;
        color: #616161;
    }
    #price-table th{
        color: #038732;
        text-align: center;
        width: 250px;
    }

    #price-table table td.link{
        background: #038732;
        color: #fff;
        text-align: center;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        padding: 0;
    }
    #price-table table td.link a{
        display: block;
        width: 100%;
        padding: 10px;
    }
    #price-table table tr:nth-child(even){
        background-color: #fbfbfb;
    }
    #price-table tr:not(:last-child) td, #price-table th{
        box-shadow: inset -15px 0px 8px -6px #cccccc40;
    }
    #price-table td:not(:first-child){
        text-align: center;
    }
</style>