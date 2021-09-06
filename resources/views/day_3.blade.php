<!doctype html>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--IE compatibility meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--first mobile meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>hyrimoz Launch event</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <link rel="stylesheet" href="{{asset('css/all.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link rel="icon" type="image/png" href="https://app.webinarjam.com/pagebuilder/assets/img/favicon/favicon-192.png" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>



<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 div-f">
                <img class="bann-small" src="{{asset('images/small_logo.png')}}">

                <h3>hyrimoz Launch event</h3>
                <img class="bann" src="{{asset('images/main_logo.png')}}">
            </div>
            <!--col-lg-12-->
            <div class="col-lg-6">
                <div class="text-s">
                    <h4>About The Webinar</h4>
                    <div class="paragraph">
                        <ul class="my-list-style">
                            <li class="mine mb-2 mt-4"><span>Discuss data on biosimilar concepts , manufacturing , and sandoz biosimilar
                    development programs.</span></li>
                            <li class="mine mb-2"><span>Understand the positioning of biosimilars in the treatment algorithm of CD & UC
                    Patients.</span></li>
                            <li class="mine mb-2"><span>Learn about the variable and factors that guide HCP in choosing a biologic
                    treatment.</span></li>
                            <li class="mine mb-2"><span>Discuss the totality of evidence concept</span></li>
                            <li class="mine mb-2"><span>Present Hyrimoz data & experience</span></li>
                            <li class="mine mb-2"><span>Present Hyrimoz clinical data <b>(ADMYRA , ADACCESS)</b></span></li>

                        </ul>
                    </div>

                </div>


                <!--text-s-->
            </div>
            <!--col-lg-6-->
            <div class="col-lg-6">
                <div class="line-div pt-3">
                    <div class="media ">

                        <img class="image-user" src="{{asset('day_3/images/1.png')}}">
                        <div class="media-body">
                            <h4 style="color: #F15831;">Prof. Mahmoud Hisham Mosli</h4>
                            <p style="color:#0A4C86;"> Consultant Gastroenterologist, <br>
                                Associate Professor at <br>
                                King Abdulaziz University
                                <br> <br> <br>
                            </p>


                        </div>
                    </div>

                    <div class="line-div">
                        <div class="media ">
                            <img class="image-user" src="{{asset('images/drSilvio.png')}}">
                            <div class="media-body">
                                <h4 style="color: #F15831;">Prof. Silvio Danese M.D. PH.D.</h4>
                                <p style="color:#0A4C86;"> Director , Immunocenter , (IBD, Rheumatology ,<br>
                                    Dermatology)<br>
                                    Istituto Clinico Humanitas , Rozzano , Milano
                                </p>


                            </div>
                        </div>
                    </div>

                    <!--line-div-->

                </div>
                <!--col-lg-6-->

                <!-- <div class="col-12">
        <p class="text">*I Agree to receive an Email & SMS from Ego pharmaceuticals to attend the webinar .</p>
      </div>
       -->
            </div>
            <!--row-->
        </div>
        <!--container-->
</section>
<!--content-->
<div class="clear"></div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="box-footer">
                    <ul>
                        <li> Friday, 10<sup>th</sup>of September, 2021, at 07:00 pm.</li>
                    </ul>
                </div>
                <!--box-footer-->
            </div>
            <!--col-lg-6-->
            <div class="col-lg-4 col-12 no-padding">
                <div class="box-footer">

                    <ul class="counter">
                        <li>
                            <div><span id="d"></span><span class="days">Days</span></div>
                        </li>
                        <li>
                            <div><span id="h"></span><span class="hours">Hours</span></div>
                        </li>
                        <li>
                            <div><span id="m"></span><span class="minutes">Minutes</span></div>
                        </li>
                        <li>
                            <div><span id="s"></span><span class="seconds">Seconds</span></div>
                        </li>
                    </ul>


                    <a data-toggle="modal" data-target="#register-modal" class="btn-register">register</a>
                    <!--                    <p class="text">*I agree to receive an Email & SMS from Ego pharmaceuticals<span>relative to this event</span> </p>
         -->
                </div>
                <!--box-footer-->
            </div>
            <!--col-lg-4-->
        </div>
        <!--row-->

    </div>

</footer>
<a href="#" class="scrollToTop"><i class="fas fa-angle-up"></i></a>


<!-- The Modal -->
<div class="modal fade first-modal-class" role="dialog" id="register-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" id="close-modal">&times;</button>
                <p>hyrimoz Launch event</p>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="form-id">
                    <div class="row">
                        <!-- <div class="col-lg-12">
                        <label class="label-tit">date</label>
                        <div class="input-group">
                          <input type="text" placeholder="Date" class="form-control">
                        </div>
                      </div> -->
                        <!--input-group-->
                        <!--col-lg-12-->
                        <!-- <div class="col-lg-12">
                      <label class="label-tit">timezone</label>
                      <div class="input-group">
                        <input type="text" placeholder="Timezone" class="form-control">
                        <a href="#" class="convert">convert to other timezone</a>
                      </div>
                    </div> -->
                        <!--input-group-->

                        <!--col-lg-12-->
                        <div class="col-lg-12">
                            <label class="label-tit">First name</label>
                            <div class="input-group">
                                <input type="text" id="firstName" placeholder="Enter first name" class="form-control" required>
                            </div>
                            <!--input-group-->
                            <p id="demo1" style="color: red;"></p>
                        </div>
                        <!--col-lg-12-->

                        <div class="col-lg-12">
                            <label class="label-tit">Last name</label>
                            <div class="input-group">
                                <input type="text" id="lastName" placeholder="Enter last name" class="form-control" required>
                            </div>
                            <!--input-group-->
                            <p id="demo2" style="color: red;"></p>
                        </div>
                        <!--col-lg-12-->
                        <div class="col-lg-12">
                            <label class="label-tit">Email</label>
                            <div class="input-group">
                                <input type="email" id="email" placeholder="Enter email address" class="form-control" required>
                            </div>
                            <!--input-group-->
                            <p id="demo3" style="color: red;"></p>
                        </div>
                        <!--col-lg-12-->

                        <!--col-lg-12-->
                        <div class="col-lg-12">
                            <label class="label-tit">mobile number</label>
                            <div class="input-group">
                                <input type="text" id="phone" placeholder="Enter mobile number (966*********)" class="form-control"
                                       required>
                            </div>
                            <p id="demo5" style="color: red;"></p>
                        </div>

                        <div class="col-lg-12">
                            <label class="label-tit">Saudi SCFHS Card</label>
                            <div class="input-group">
                                <input type="text" id="saudiCoun" maxlength="15" placeholder="Enter SCFHS Card" class="form-control"
                                       required>
                            </div>

                            <p id="demo4" style="color: red;"></p>
                        </div>

                        <!--col-lg-12-->

                        <!-- <div class="col-lg-12">
                    <label class="label-tit">Pharmacy Number</label>
                    <div class="input-group">
                      <input type="text" id="pharma" maxlength="15" placeholder="Enter pharmacy number " class="form-control" required>
                    </div>

                    <p id="demo6" style="color: red;"></p>
                  </div> -->
                        <!--col-lg-12-->
                        <div class="col-lg-12">
                            <label class="label-tit">Specialty</label>
                            <div class="input-group">
                                <!-- <input type="text" id="speciality" maxlength="15" placeholder="Enter Specialty " class="form-control" required> -->
                                <select id="speciality" placeholder="Enter Specialty " class="form-control" required>
                                    <option selected disabled value="undefined">Select Specialty</option>
                                    <option value="Dermatologist">Dermatologist</option>
                                    <option value="Pediatrician">Pediatrician</option>
                                    <option value="Rheumatology">Rheumatology</option>
                                    <option value="Gastroenterology">Gastroenterology</option>
                                    <option value="Clinical pharmacy">Clinical pharmacy</option>
                                    <option value="SANDOZ employee">SANDOZ employee</option>
                                </select>
                            </div>
                            <p id="demo7" style="color: red;"></p>
                        </div>
                        <!--col-lg-12-->
                        <div class="col-lg-12">
                            <label class="label-tit">Hospital name</label>
                            <div class="input-group">
                                <!-- <input type="text" id="city" placeholder="Enter city" maxlength="15" class="form-control" required> -->
                                <input type="text" id="hospitalName" placeholder="Enter Hospital name" class="form-control" required>
                            </div>

                            <p id="demo8" style="color: red;"></p>
                        </div>
                        <!--col-lg-12-->
                        <!--col-lg-12-->
                        <div class="col-lg-12">
                            <label class="label-tit ">Which channel do you prefer?</label>
                            <div class="input-group">
                                <!-- <input type="text" id="speciality" maxlength="15" placeholder="Enter Specialty " class="form-control" required> -->
                                <select id="channel"  class="form-control" required>
                                    <option selected disabled value="undefined">Select channel</option>
                                    <option value="Email">Email</option>
                                    <option value="Whatsapp">Whatsapp</option>
                                    <option value="Phone call">Phone call</option>
                                    <option value="F2F">F2F</option>
                                </select>
                            </div>
                            <p id="demo9" style="color: red;"></p>
                        </div>
                        <!--col-lg-12-->
                        <!--col-lg-12-->
                        <div class="col-lg-12">
                            <label class=""><b>Ask the speaker</b></label>
                            <div class="input-group">
                                <input type="text" id="speaker" placeholder="Enter your question" class="form-control">
                            </div>
                            <p id="demo12" style="color: red;"></p>
                        </div>
                        <!--col-lg-12-->
                        <!--col-lg-12-->
                        <div class="col-lg-12">
                            <label class="label-tit " style="padding-left: 20px;">
                                <input type="checkbox" name="confirm" id="confirm" style="margin-left: -20px;" class="" required>
                                I hereby confirm that the information provided herein is accurate, correct and complete.
                            </label>
                            <div class="input-group">

                            </div>
                            <p id="demo10" style="color: red;"></p>
                        </div>
                        <div class="col-lg-12">
                            <label class="label-tit "><input type="checkbox" name="terms" id="terms" class="" required> I accept your
                                <a href="{{asset('pdf/(10th of Sep)Webinar Novartis Privacy Policy April 2020.pdf')}}" download style="color:#0721ec;" >terms and conditions</a> </label>
                            <p id="demo11" style="color: red;"></p>
                        </div>

                        <div class="col-lg-12">
                            <button type="button" class="register" id="form_submit" [disabled]="!form-id.valid">register now
                                <span><i class="fas fa-chevron-right"></i></span></button>
                        </div>
                        <!--col-lg-12-->

                        <!--col-lg-12-->
                        <div class="col-lg-12">
                            <!--   <p class="text">Your details will be forward to the webinar organizer, who might communicate with you regarding this event or their services.</p> -->
                        </div>
                        <!--col-lg-12-->


                    </div>
                    <!--row-->
                </form>
            </div>
            <!--modal-body-->


        </div>
    </div>
</div>


<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/bootstrap.js')}}"></script>
<script src="{{asset('/js/all.js')}}"></script>
<script src="{{asset('day_3/js/script.js')}}"></script>

</body>

</html>
