@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<div class="container">    
    <div class="row justify-content-center">
        <div class="col-md-12" >
            <div class="card" >
                <div class="card-header"><div class="row">
                    <div class="col-md-12" align="center">
                        <h5>details of the maintenance</h5>
                    </div></div>
                </div>
                <div class="card-body" >
                    <table id="tbl_maintenance" class="table table-dark table-hover" style="text-align: center; border-radius: 10px; opacity: 1;">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Techinican ID</th>
                                <th>Number of maintenance</th>
                            </tr>                            
                        </thead>      
                        <tbody id="tbl_body">
                            <tr>
                                <td>Date</td>
                                <td>Name</td>
                                <td>Techinican ID</td>
                                <td>Number of maintenance</td>
                            </tr>
                        </tbody>                  
                    </table> 

                    <form id="form" action="{{ route('details_data') }}" method="POST" >
                        <input type="hidden" value="{{ csrf_token() }}" name="_token"/>
                        <input type="hidden" id="date" name="date" value="" />                        
                        <input type="hidden" name="name" value="" />                        
                        <input type="hidden" name="techinId" value="" />                        
                        <input type="hidden" name="number" value="" />                        
                    </form>                
                </div>      <!---  card-body end  --->
            </div>  <!---  card end  --->
        </div>
    </div>
</div>
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script> -->
<script type="text/javascript">
    $(document).ready(function(){
        table_reload();
        $('#tbl_maintenance tbody').on('click', 'tr', function(event){            
            on_click_table(this);            
        });
    });     

    function on_click_table(element)
    {
        var temp = $(element).html();
        var temp = temp.split('<td>');
        var date = temp[1].replace('</td>', '');
        var name = temp[2].replace('</td>', '');
        var techinId = temp[3].replace('</td>', '');
        var number = temp[4].replace('</td>', '');

        $("input[name='date']").val(date);        
        $("input[name='name']").val(name);        
        $("input[name='techinId']").val(techinId);        
        $("input[name='number']").val(number);

        //console.log(element)

        $('#form').submit(); 
    }

    function table_reload()
    {
        var date = "2019-08-06";
        var name = "Jone";
        var techinId = "12";
        var number = "6";
        var table_body = "";
        
        for ( var i = 0; i < 5; i ++ ){
            var row = "<tr id='"+i+"'><td >"+date+"</td><td>"+name+"</td><td>"+techinId+"</td><td>"+number+"</td></tr>";
            table_body += row;
        }
        $('#tbl_body').empty();
        $('#tbl_body').append(table_body);
    }      

</script>
@endsection
