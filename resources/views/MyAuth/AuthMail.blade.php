<p>
Hello {{Session('name')}},
</p>
                                                                  <!--  Define your link here  -->
<h4>To create an account in our system click here <a href="{{(url'/Verify')}}/{{Session('name')}}/{{Session('token')}}">{{(url'/Verify')}}/{{Session('name')}}/{{Session('token')}}</a></h4>
<p>Please Ignore this If you don't request for Create Account </p>
<p>Sent By <a href="https://github.com/NahianAhmed/aauth">AAuth</a> </p>
