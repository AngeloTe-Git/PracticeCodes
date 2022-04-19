<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">
    <link href="carousel.css" rel="stylesheet">
    <link href="https://www.malot.fr/bootstrap-datetimepicker/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <title><?php echo $title ?></title>
    
  </head>
    <body>

    
    <div class="container">
        <div class="jumbotron jumbotron-fluid py-2 mt-3" style="height:700px">
            <div class="form-container">
                <form action="mongopayments.php" method="post" onsubmit="return confirm('Confirm Payment?')">
                    <h1 class="col-md-12">Annual Payment of 100,000 Php</h1>
                    <hr>
                    <div class="form-group">
                        Card no:<input type="text" name="card" class="form-control" maxlength="16">
                    </div>

                    <div class="form-group">
                        Month:<select name="month" class="form-control">
                            <option value="">Choose a month</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>

                    <div class="form-group">
                        Year:<input type="number" name="year" class="form-control" min="1900" max="2099" value="2021">
                    </div>

                    <div class="form-group">
                        CVC/CVV:<input type="text" name="number" pattern="[0-9]+" onKeyPress="if(this.value.length==3) return false;">
                    </div>
                    <h5 class="text-danger text-center"><?=$log_err;?></h5>
                    <button type="submit" class="btn btn-primary">Pay Now</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
    <script src="https://www.malot.fr/bootstrap-datetimepicker/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

    <script>
      $(document).ready(function(){

        $('#stat').bootstrapToggle({
          on: 'active',
          off: 'inactive'
        })
      });

      $('#stat').change(function(){
        if($(this).prop('checked')){
          $('#hidden-status').val('active');
        }
        else{
          $('#hidden-status').val('inactive');
        }
      });

      $(document).ready(function(){
        $('.updbtn').on('click', function(){
          $('#updModal').modal('show');

            $tr = $(this).closest('tr');

            var data= $tr.children("td").map(function(){
              return $(this).text();
            }).get();

            console.log(data);

            $('#sid').val(data[0]);
            $('#suname').val(data[1]);
            $('#spword').val(data[2]);
            $('#sfname').val(data[3]);
            $('#slname').val(data[4]);
            $('#scnum').val(data[5]);
        })
      })

      $(document).ready(function(){
        $('.delbtn').on('click', function(){
          $('#delModal').modal('show');

            $tr = $(this).closest('tr');

            var data= $tr.children("td").map(function(){
              return $(this).text();
            }).get();

            console.log(data);

            $('#did').val(data[0]);
            $('#duname').val(data[1]);
            $('#dpword').val(data[2]);
            $('#dfname').val(data[3]);
            $('#dlname').val(data[4]);
            $('#dcnum').val(data[5]);
        })
      })

      $(document).ready(function(){
        $('.canbtn').on('click',function(){
          $('#canModal').modal('show');

          $tr = $(this).closest('tr');

            var data= $tr.children("td").map(function(){
              return $(this).text();
            }).get();

            console.log(data);

            $('#rcid').val(data[0]);
        })
      })

      $(document).ready(function(){
        $('.accbtn').on('click',function(){
          $('#accModal').modal('show');

          $tr = $(this).closest('tr');

            var data= $tr.children("td").map(function(){
              return $(this).text();
            }).get();

            console.log(data);

            $('#idR').val(data[0]);
            $('#idCus').val(data[1]);
        })
      })

      $(document).ready(function(){
        $('.rejbtn').on('click',function(){
          $('#rejModal').modal('show');

          $tr = $(this).closest('tr');

            var data= $tr.children("td").map(function(){
              return $(this).text();
            }).get();

            console.log(data);

            $('#idRr').val(data[0]);
        })
      })
$(document).ready(function(){
    $('input.timepicker').timepicker({});
});

$('.timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    minTime: '1',
    maxTime: '11:00pm',
    defaultTime: '8',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});

function selection(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
    </script>
    </body>
</html>