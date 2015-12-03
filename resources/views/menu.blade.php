<script>
    function mostrarLogin(x)
    {
        if(x==1){
            activarLog();
        } else {
            DesactivarLog()
        }

        function activarLog()
        {
            document.getElementById('login').style.display='';
        }
        function DesactivarLog()
        {
            document.getElementById('login').style.display='none';
        }

    }
</script>
<div class="header-top">
    <!-- <div class="logo">
       <a href="index.html"><img src="images/logo.png" alt="" /></a>
    </div>-->
    <!---start-top-nav---->
    <div class="top-nav cssmenu">
        <nav class="nav clearfix">
            <a id="menu-toggle" class="anchor-link"><img src="images/nav-icon.png" alt="" /></a>
            <ul class="simple-toggle" id="nav">
                <li class="current"><a href="#section-1">Home</a></li>
                <li><a href="#section-2">About</a></li>
                <li><a href="#section-3">Experiences</a></li>
                <li><a href="#section-4">Works</a></li>
                <li><a href="#section-5">Contact</a></li>
                <li><a href="" onclick="mostrarLogin(1)">Login </a></li>
            </ul>
        </nav>



        <script type="text/javascript">
            $(document).ready(function() {

                $('#menu-toggle').click(function () {
                    $('#nav').toggleClass('open');
                    e.preventDefault();
                });

            });
        </script>
    </div>
    <!---End-top-nav---->
    <div class="clear"></div>
</div>


