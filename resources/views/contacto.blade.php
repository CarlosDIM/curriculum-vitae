
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6210.158299060103!2d-77.03498025554467!3d38.89930530232174!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1416992552858" frameborder="0" style="border:0">

        </iframe>
    </div>
    <div class="wrap">
        <div class="contact-info">
            <div class="contact-info-left">
                <h3>Feel free to contact me. Just fill the below form.</h3>
                {!! Form::open(['route'=>'mail.store','method'=>'POST']) !!}


                        <div class="name-textbox">
                            {!! Form::text('name',null,['class'=>'name-textbox','placeholder'=>'name']) !!}
                        </div>

                        <div class="name-textbox">
                            {!! Form::text('email',null,['class'=>'name-textbox','placeholder'=>'email']) !!}
                        </div>
                        <div>
                            {!! Form::textarea('mensaje',null,['class'=>'message-textbox','placeholder'=>'mensaje']) !!}
                        </div>

                        <div>
                            {!! Form::submit('send',['class'=>'contact-btn']) !!}
                        </div>


                {!! Form::close() !!}
            </div>
            <div class="contact-info-right">
                <h3></h3>
                <div class="comapny-address">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <ul>
                        <li><a href="mailto:carlosjimenezb1986@gmail.com">carlosjimenezb1986@gmail.com</a></li>

                        <li></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="social-media">
                    <h3>Get In Touch</h3>
                    <ul>
                       <!-- <li class="facebook"><a href="#"> </a></li>-->
                       <!-- <li class="twitter"><a href="#"> </a></li>-->
                        <li class="google-pluse"><a href=""> </a></li>
                       <!-- <li class="pinterest"><a href="#"> </a></li>-->
                      <!--  <li class="dribble"><a href="#"> </a></li>-->
                       <!-- <li class="linked-in"><a href="#"> </a></li>-->
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="copy copy-left">
                <p>© Copyright 2014 ufolio. All rights reserved.</p>
            </div>
            <div class="copy copy-right">
                <p>Template by  <a href="http://w3layouts.com" target="_blank">w3layouts</a> </p>
            </div>
            <div class="clear"></div>
            <div class="scroll-top">
                <a href="#header-top" class="scroll"> </a>
            </div>
        </div>
    </div>