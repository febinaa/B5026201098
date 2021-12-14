<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     {{-- Bootstrap CSS Sidebar --}}
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS DateTime Picker -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
   <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

   {{-- Google Font --}}
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />

   <title>@yield('title')</title>
</head>
<body>


    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
        </button>
    </div>
          <div class="img bg-wrap text-center py-4" style="background-image: url('https://scontent.fsub8-1.fna.fbcdn.net/v/t39.30808-6/258855008_3034770416838278_4290346668479138856_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=n0PpjNjsmtsAX_kgpzo&_nc_ht=scontent.fsub8-1.fna&oh=00_AT-xtNB32bxZVsyDbjQIa1uWcr6UOoM0AYmzi0nwYvJg8w&oe=61BC9C27');">
              <div class="user-logo">
                  <div class="img" style="background-image: url('https://scontent.fjog3-1.fna.fbcdn.net/v/t39.30808-6/259259636_3034770450171608_100674922277793135_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=ASmelZCwsHcAX85u_Jj&tn=mdK9EVErPH-CEPTg&_nc_ht=scontent.fjog3-1.fna&oh=00_AT9vE__2eWhEAFy-DZAU9-h4lNDitMcdO7Td4WRMEy5VUQ&oe=61BD70D3');"></div>
                  <h3>Febina Mushen Anjelita</h3>
                  <h3>5026201098</h3>
              </div>
          </div>
    <ul class="list-unstyled components mb-5">
          <li>
            <a href="/pegawai"> Pegawai</a>
          </li>
          <li>
            <a href="/mutasi"> Mutasi</a>
          </li>
          <li>
            <a href="/absen"> Absen</a>
          </li>
          <li>
            <a href="/harddisk"> Harddisk</a>
          </li>
          {{-- <li>
            <a href="#"> Top Review</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li> --}}

    </ul>



    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <center><h3>@yield('judulhalaman')</h3></center>
        @section('isikonten')

        @show
        <footer id="footer" class="footer text-center fixed-bottom">
            <center> <div class="copyright">
              &copy; Copyright <strong><span>Febina Mushen Anjelita - 5026201098</span></strong>
            </div></center>

      </div>
		</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        $(function () {
            $.extend(true, $.fn.datetimepicker.defaults, {
                icons: {
                    time: 'far fa-clock',
                    date: 'far fa-calendar',
                    up: 'fas fa-arrow-up',
                    down: 'fas fa-arrow-down',
                    previous: 'fas fa-chevron-left',
                    next: 'fas fa-chevron-right',
                    today: 'far fa-calendar-check-o',
                    clear: 'far fa-trash',
                    close: 'far fa-times'
                }
            });
        });
        </script>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker').datetimepicker({
        format: "YYYY/MM/DD HH:mm",
      });
            });
        </script>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker').datetimepicker();
            });
        </script>



</body>
</html>
