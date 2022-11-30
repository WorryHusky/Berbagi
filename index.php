<!DOCTYPE html>
<html lang="en">
<head>

    <title>Live Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>

<div class="container" style="max-width: 50%;">

<div class="text-center nt-5 mb-4">
<h2>PHP MYSQL Live Search</h2>
</div>

<input type="text" class="form-control" id="live_search" autocomplete="off"
placeholder="Search ...">

</div>

<div id="searchresult"></div>


    
<script type="text/javascript">
    $(document).ready(function(){

        $("#live_search").keyup(function(){

            var input = $(this).val();
            // alert(input);

            if(input != ""){
                $.ajax({
                    url:"livesearch.php",
                    method:"POST",
                    data:{input:input},

                    success:function(data){
                        $("#searchresult").html(data);
                    }
                });
            }else{

                $("searchresult").css("display", "none");

            }
        });
    });
</script>
</body>
</html>
