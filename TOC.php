<html>
    <head>
        <title>TOC</title>

        <link rel="stylesheet" type="text/css" href="TOC.css">
        <link rel="stylesheet" type="text/css" href="form.css">
        <link href="https://fonts.googleapis.com/css?family=Kulim+Park&display=swap" rel="stylesheet">


    </head>
    <body>
        <div id="navi">
            <nav>
                <img src="MC_Logo.png" width="120" height="100">    
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="About.html">About</a></li>
                    <li><a href="project.html">Project</a></li>
                    <li><a href="#services.html">Service</a></li>
                    <li><a href="careers.html">Careers</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>

            <section id="project1" style="width:100%">
                <div class="section-inner" style="width:350px; float: left;">
                    <h1>Technical Officers Civil</h1>
                    <h1>Job description</h1>
                    <p>Sites are around Colombo,Anuradhapura.

                        NDT, HNDE, NDES, BTEC or equivalent with at least 2years working experience in Construction. 

                        Must be able to handle Projects without any Supervision

                        Must be able to work on weekends and extended hours as required

                        Should have a excellent knowledge in finishing work trades such as plastering, painting, tiling etc

                        Should have valid riding licence

                        Walk In Interviews on week days from 9.00Am to 5.00Pm
                    </p>
                </div>
                <div>
                    <form enctype="multipart/form-data" action="form.php" method="POST">

                        <label class="label" >First name *:</label>
                        <div class="">
                            <input type="text"  name="fname" placeholder="" required="">
                        </div>
                        <br><br>

                        <label class="label" >Last name *:</label>
                        <div class="">
                            <input type="text" name="lname" placeholder="" required="">
                        </div>
                        <br><br>


                        <label class="label-simple">Email *:</label>
                        <div class="">
                            <input type="text" name="email" placeholder="" required="">
                        </div>
                        <br><br>



                        <label class="label-simple ">Phone Number:</label>
                        <div class="">
                            <input type="text" name="pnum" placeholder="" required=>
                        </div>
                        <br><br>


                        <label class="label-simple ">Education level:</label>
                        <div class="">
                            <select >
                                <option value="" name="Education" selected="selected">Please Select Education Level</option>
                                <option label="Secondary school (O Levels, GCSE)" value="object:13">Secondary school (O Levels, GCSE)</option>
                                <option label="Upper secondary school (A levels, Baccalaureate/ NVQ)" value="object:14">Upper secondary school (A levels, Baccalaureate/ NVQ)</option>
                                <option label="Diploma (HND, NDT, NTS)" value="object:15">Diploma (HND, NDT, NTS)</option>
                                <option label="Degree (BSc, MBBS, BA, LLB)" value="object:16">Degree (BSc, MBBS, BA, LLB)</option>
                                <option label="Post graduate (MA, MSc, LLM)" value="object:17">Post graduate (MA, MSc, LLM)</option>
                                <option label="Doctoral (PhD, D. Phil)" value="object:18">Doctoral (PhD, D. Phil)</option></select>
                        </div>
                        <br><br>

                        <label>Career level:</label>
                        <div class="">
                            <select>
                                <option value="" name="career" selected="selected">Please Select Career Level</option>
                                <option label="Entry Level" value="object:21">Entry Level</option>
                                <option label="Professional" value="object:22">Professional</option>
                                <option label="Manager" value="object:23">Manager</option>
                                <option label="Senior Manager" value="object:24">Senior Manager</option>
                                <option label="Director" value="object:25">Director</option>
                            </select>
                        </div>
                        <br><br>


                        <label class="label-simple ">Job title (desired or current/recent):</label>
                        <div class="">
                            <input type="text" name="job" placeholder="">
                        </div>
                        <br><br>

                        <label class="label-simple ">Salary (desired or current/recent) in Rs.:</label>
                        <div class="">
                            <input id="salary" name="salary" placeholder="">
                        </div>
                        <br><br>
                        <label class="label-simple ng-scope" for="" translate="">Years of relevant experience:</label>
                        <div class="">
                            <select>
                                <option value="" name="exp" selected="selected">- Please Choose -</option>
                                <option label="0-2 Years" value="object:73">0-2 Years</option>
                                <option label="3-5 Years" value="object:74">3-5 Years</option>
                                <option label="6-10 Years" value="object:75">6-10 Years</option>
                                <option label="More Than 10 Years" value="object:76">More Than 10 Years</option>
                            </select>
                        </div>
                        <br><br>

                        <label class="label-simple ">Availability / Notice period:</label>
                        <div class="">
                            <select>
                                <option value="" name="ava" selected="selected">- Please Choose -</option>
                                <option label="Immediately" value="object:85">Immediately</option>
                                <option label="1 Week or less" value="object:86">1 Week or less</option>
                                <option label="2 Weeks or less" value="object:87">2 Weeks or less</option>
                                <option label="1 Month" value="object:88">1 Month</option>
                                <option label="1 - 2 Months" value="object:89">1 - 2 Months</option>
                                <option label="More than 2 months" value="object:90">More than 2 months</option>
                            </select>
                        </div>
                        <br><br>


                        <label>Current CV:</label>
                        <div class="">
                            <input type="text" name="cv" id="cv">
                        </div>

                        <br><br>

                        <input type="file" name="file" id="file">
                        <div class="applyMessageStyle"></div>
                        <br><br>

                        <!-- <label>Explain briefly why you are a good candidate for this role:</label>
                        <div class="">
                            <textarea rows="10" cols="39"name="role"></textarea>
                        </div>

                        <br>

                        <div style="max-width: 1200px;margin: 0 auto;padding-bottom: 20px;"></div>
                        <p>
                            You should never provide bank or financial information, or make any form of payment, when applying for 
                            a job.
                        </p>
                        <p>Thanks</p!-->
                        <br>
                        <div class="sub">
                            <button type="submit">Submit your application</button>
                        </div>
                        <!-- <br><br>
                        <p>By submitting you agree to the terms &amp; conditions of</p>
                        <br><br> -->
                    </form>
                </div>
            </section>

            <section id="project2">
                <div class="section-inner">
                    <h2></h2><br>
                </div>
            </section>
            <footer>
                <br><br><br>

                <div class="media">
                    <ul>
                        <li><a href="https://www.facebook.com/RandelLanka/"target="_blank">
                                <img src="https://img.icons8.com/doodle/48/000000/facebook-new.png"></i></li></a>
                        <li><img src="https://img.icons8.com/color/48/000000/instagram-new.png"></i></li>
                        <li><img src="https://img.icons8.com/color/48/000000/twitter.png"></i></li>
                        <li><img src="https://img.icons8.com/color/48/000000/linkedin.png"></i></li>

                    </ul>

                </div>

                <br><br><br><br><br>


                <h5 style="text-align:center">©2020 Randel-Lanka-Constructions, Inc. All Rights Reserved</h5>
                <a href="https://icons8.com/icon/52492/user-location">User Location icon by Icons8</a>
            </footer>
    </body>
</html>
</body>
</html>
