<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Satisfaction Survey Form</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body>
    <div class="main-wrap">
        <form id="form" method="post" action="submit.php">

            <div class="form-wrap">
                <a href="https://portal.csdbatac.com"><img src="logo.png" alt="logo"></a>
                <div class="header">
                    <h2>Client Satisfaction Survey Form</h2>
                    <p>
                        Your experience matters to us!<br>
                        <i>Ang iyong karanasan ay mahalaga sa amin!</i>
                    </p>
                </div>

                <!--page1-->
                <div class="page1 active">
                    <div class="flex">
                        <div>
                            <label for="name" class="label">
                                Name (Optional)<br>
                                <i>Pangalan (Opsyonal)</i>
                            </label>
                            <input type="text" id="name" name="name" class="input">
                        </div>
                        <div>
                            <label for="date" class="label">
                                Date Visited<br>
                                <i>Petsa ng Pagbisita</i>
                            </label>
                            <input type="date" id="date" name="date" class="input" required>
                        </div>
                    </div>

                    <div class="flex">
                        <div>
                            <label for="office" class="label">
                                Office Visited<br>
                                <i>Opisinang Binisita</i>
                            </label>
                            <select id="office" name="office" class="input" required>
                                <option value="">Select an Office</option>
                                <option value="SGOD">SGOD</option>
                                <option value="CID">CID</option>
                            </select>
                        </div>
                        <div>
                            <label for="contact" class="label">
                                <br>Personnel Visited
                            </label>
                            <input type="text" id="tao" name="tao" class="input" required>
                        </div>
                    </div>

                    <div class="flex">
                        <div>
                            <label for="contact" class="label">
                                <br>Contact Details
                            </label>
                            <input type="number" id="number" name="number" class="input" required>
                        </div>
                        <div>
                            <label for="service" class="label">
                                Services Received<br>
                                <i>Serbisyong Natanggap</i>
                            </label>
                            <input type="text" id="service" name="service" class="input" required>
                        </div>
                    </div>
                </div>

                <!--page2-->
                <div class="page2">
                    <div class="input-radio-wrap">

                        <!--responsiveness-->
                        <label for="tugon" class="label">
                            <b>1. Responsiveness <i>(Pagtugon)</i></b><br>
                            <i>Willing to help, assist, and provide prompt service.</i>
                        </label>
                        <div class="radio-flex">
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="tugon" name="tugon" value="5" required>Very Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="tugon" name="tugon" value="4" required>Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="tugon" name="tugon" value="3" required>Neutral<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="tugon" name="tugon" value="2" required>Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="tugon" name="tugon" value="1" required>Very Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                        </div><br>

                        <!--reliability-->
                        <label for="asa" class="label">
                            <b>2. Reliability <i>(Maaasahan)</i></b><br>
                            <i>Provision of what was needed with zero to a minimal error rate.</i>
                        </label>
                        <div class="radio-flex">
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="asa" name="asa" value="5" required>Very Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="asa" name="asa" value="4" required>Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="asa" name="asa" value="3" required>Neutral<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="asa" name="asa" value="2" required>Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="asa" name="asa" value="1" required>Very Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                        </div><br>

                        <!--access-->
                        <label for="lok" class="label">
                            <b>3. Access and Facilities <i>(Lokasyon at Pasilidad)</i></b><br>
                            <i>Convenience of location for a comfortable transaction.</i>
                        </label>
                        <div class="radio-flex">
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="lok" name="lok" value="5" required>Very Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="lok" name="lok" value="4" required>Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="lok" name="lok" value="3" required>Neutral<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="lok" name="lok" value="2" required>Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="lok" name="lok" value="1" required>Very Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                        </div><br>

                        <!--usap-->
                        <label for="usap" class="label">
                            <b>4. Communication <i>(Pakikipag-usap)</i></b><br>
                            <i>Act of keeping citizens informed in an understandable language.</i>
                        </label>
                        <div class="radio-flex">
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="usap" name="usap" value="5" required>Very Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="usap" name="usap" value="4" required>Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="usap" name="usap" value="3" required>Neutral<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="usap" name="usap" value="2" required>Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="usap" name="usap" value="1" required>Very Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                        </div><br>

                        <!--gastos-->
                        <label for="gas" class="label">
                            <b>5. Costs <i>(Gastos)</i></b><br>
                            <i>Satisfaction with the timeliness of billing process/es.</i>
                        </label>
                        <div class="radio-flex">
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="gas" name="gas" value="5" required>Very Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="gas" name="gas" value="4" required>Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="gas" name="gas" value="3" required>Neutral<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="gas" name="gas" value="2" required>Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="gas" name="gas" value="1" required>Very Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                        </div><br>

                        <!--tapat-->
                        <label for="tap" class="label">
                            <b>6. Integrity <i>(Katapatan)</i></b><br>
                            <i>Capability of frontline staffs to perform their duties.</i>
                        </label>
                        <div class="radio-flex">
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="tap" name="tap" value="5" required>Very Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="tap" name="tap" value="4" required>Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="tap" name="tap" value="3" required>Neutral<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="tap" name="tap" value="2" required>Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="tap" name="tap" value="1" required>Very Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                        </div><br>

                        <!--tiwala-->
                        <label for="tiw" class="label">
                            <b>7. Assurance <i>(Pagtitiwala)</i></b><br>
                            <i>Assurance that there is honesty, justice, fairness, and trust in each service while dealing with the clients and businesses.</i>
                        </label>
                        <div class="radio-flex">
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="tiw" name="tiw" value="5" required>Very Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="tiw" name="tiw" value="4" required>Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="tiw" name="tiw" value="3" required>Neutral<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="tiw" name="tiw" value="2" required>Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="tiw" name="tiw" value="1" required>Very Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                        </div><br>

                        <!--outcome-->
                        <label for="out" class="label">
                            <b>8. Outcome</b><br>
                            <i>Rate in terms of achieving outcomes or realizing the intended benefits of the service.</i>
                        </label>
                        <div class="radio-flex">
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="out" name="out" value="5" required>Very Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="out" name="out" value="4" required>Satisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="out" name="out" value="3" required>Neutral<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="out" name="out" value="2" required>Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input class="input-radio" type="radio" id="out" name="out" value="1" required>Very Dissatisfied<span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!--page3-->
                <div class="page3">
                    <div>
                        <label for="comments" class="label">
                            <b>III. Suggestions/Complaints/Concerns (Optional)</b><br>
                            <i>Suhestiyon/Reklamo/Komento (Opsyonal)</i>
                        </label>
                        <div class="text">
                            <textarea rows="6" name="comments" id="comments" class="input"></textarea>
                        </div>
                    </div>
                </div>

                <!--buttons-->
                <div class="button-wrap">
                    <button class="back">BACK</button>
                    <button class="button">NEXT
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1675_1807)">
                                <path d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1675_1807">
                                    <rect width="16" height="16" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>

                <!--pop-ups-->
                <div class="popup">
                    <div class="popup-content">
                        <p class="popup-message"></p><br>
                        <div class="popup-wrap">
                            <button class="popup-close">CLOSE</button>
                        </div>
                    </div>
                </div>
                <div class="popup2">
                    <div class="popup-content2">
                        <span class="popup-message2"></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>