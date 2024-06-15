<!DOCTYPE html>
<html>
<html lang="en">
<head></head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="icon" type="image/x-icon" href="/images/favicon.ico">-->
    <title>Distributor Application Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            /*.container {*/
            /*    width: 100%;*/
            /*}*/

            .form-group {
                width: 100%;
            }

            .button-container {
                flex-direction: column;
            }

            #backBtn, #submitBtn {
                margin-bottom: 15px;
            }

            .state-city,
            .dob-doa,
            .names-desigs,
            .namess-num,
            .namesss-numb-addr {
                flex-direction: column;
            }

            .state,
            .city,
            .dob,
            .doa,
            .names,
            .desigs,
            .namess,
            .num,
            .namesss,
            .numb,
            .addr {
                width: 100%;
            }
            
            .radio-buttons {
                display : -webkit-box;
            }
            
            .checkbox-container {
                display : -webkit-box;
            }
            
            /*.names-desigs {*/
            /*    display : -webkit-box;*/
            /*}*/
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        h3 {
            margin-bottom: 15px;
            color: #333;
        }

        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .button-container button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button-container button:hover {
            background-color: #0056b3;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .form-group label {
            margin-bottom: 5px;
        }

        .form-group input, .form-group select {
            padding: 5px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <center><img src="pdf/New_Mobilla_logo.png" width="50%"></center>
        <hr>
    <h2>Distributor Application Form</h2>
    <hr>
    <form action="pdf.php" method="post" onsubmit="return validateForm()">
        <div class="step active" id="step1">
            <h3>1. Company/Firm Details</h3>
            <label for="company_name">Name of the Company/Firm:</label>
            <input type="text" name="company_name" value="Mobilla Industries LLP" required><br>
            <label for="company_address">Address of your Company/Firm/Proprietor:</label>
            <input type="text" name="company_address" value="8, Ratan Bldg, 4th Floor, Swami Vivekananda Rd, near Gokul Shopping Centre, Borivali West" required><br>
            <div class="state-city">
                <div class="city">
                    <label for="city">City:</label>
                    <input type="text" name="city" value="Mumbai" required>
                </div>
                <div class="state">
                    <label for="state">State:</label>
                    <input type="text" name="state" value="Maharashtra" required>
                </div>
            </div>
            <label for="telephone">Pincode:</label>
            <input type="text" name="pincode" value="400092" required><br>
            <div class="state-city">
                <div class="state">
                    <label for="telephone">Landline No.:</label>
                    <input type="text" name="telephone" value="20224526" required>
                </div>
                <div class="city">
                    <label for="mobile">WhatsApp / Mobile No.:</label>
                    <input type="text" name="mobile" value="9152101610" required>
                </div>
            </div>
            <label for="email">Email Address:</label>
            <input type="email" name="email" value="it@mobilla.com" required><br>
            <label for="gst">GST No.:</label>
            <input type="text" name="gst" value="7410258963012" required><br>
                <div class="dob-doa">
                    <div class="dob">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" name="dob"><br><br>
                    </div>
                    <div class="doa">
                        <label for="doa">Date of Anniversary:</label>
                        <input type="date" name="doa"><br>
                    </div>
                </div>
            </div>
            
            <div class="step" id="step2">
                <!-- Add other fields for step 1 here -->
                <h3>2. Names of Proprietor/Partners/Directors</h3>
                    <div class="names-desigs">
                        <label for="names">Owner 1:</label>
                        <div class="names">
                            <input type="text" name="names" placeholder="Name 1" value="Name 1" required><br>
                        </div>
                        <div class="desigs">
                            <input type="text" name="desigs" placeholder="Designation 1" value="Designation 1" required><br>
                        </div>
                    </div>
                    <div class="names-desigs">
                        <label for="names">Owner 2:</label>
                        <div class="names">
                            <input type="text" name="names1" placeholder="Name 2" value="Name 2" required><br>
                        </div>
                        <div class="desigs">
                            <input type="text" name="desigs1" placeholder="Designation 2" value="Designation 2" required><br>
                        </div>
                    </div>
                <h3>3. Contact Details & Residence</h3>
                <label for="contact_person">Phone number of person in charge:</label>
                <div class="namess-num">
                    <div class="namess">
                        <input type="text" name="namess" placeholder="Contact Name" value="Name" required><br>
                    </div>
                    <div class="num">
                        <input type="text" name="num" placeholder="Contact Mobile Number" value="Mobile Number" required><br>
                    </div>
                </div>
                <!-- Add other fields for step 3 here -->
                <h3>4. Existing Business Details</h3>
                    <label for="business_type">Type of Business:</label>
                    <div class="radio-buttons">
                        <input type="radio" id="pvt" name="business_type" value="Private Limited" checked>
                        <label for="pvt">Private Limited</label>
                        <input type="radio" id="proprietary" name="business_type" value="Proprietary">
                        <label for="proprietary">Proprietary</label>
                        <input type="radio" id="llp" name="business_type" value="Limited Liability Partnership">
                        <label for="llp">LLP</label>
                        <input type="radio" id="others" name="business_type" value="Others">
                        <label for="others">Others</label>
                        
                    </div><br>
                <input type="text" name="comp_name" placeholder="Name of Your Company" value="Name of Your Company" required><br>
                
                <label for="annual_turnover">Annual Turnover:</label>
                <input type="text" name="annual_turnover" value="74158460" required><br>
                
                <label for="agencies_held">If Agencies held, then name of the Companies/Brands:</label>
                <input type="text" name="agencies_held" value="mobilla" required><br>
                <!-- Add other fields for step 4 here -->
            </div>
            
            <div class="step" id="step3">
                <h3>5. Area for Which Distributorship is Required</h3>
                <label for="distributorship_area">Area:</label>
                <input type="text" name="distributorship_area" value="Jogeshwari" required><br>
                
                <h3>6. References</h3>
                <label for="reference1">Reference 1 (Name & Address):</label>
                <div class="namesss-numb-addr">
                    <div class="namesss">
                        <input type="text" name="namer1" placeholder="Name" value="Name" required><br>
                    </div>
                    <div class="numb">
                        <input type="text" name="numbr1" placeholder="Mobile Number" value="Mobile" required><br>
                    </div>
                    <div class="addr">
                        <input type="text" name="addrr1" placeholder="Address" value="Address" required><br>
                    </div>
                </div>
                <label for="reference2">Reference 2 (Name & Address):</label>
                <div class="namesss-numb-addr">
                    <div class="namesss">
                        <input type="text" name="namer2" placeholder="Name" value="Name" required><br>
                    </div>
                    <div class="numb">
                        <input type="text" name="numbr2" placeholder="Mobile Number" value="Mobile" required><br>
                    </div>
                    <div class="addr">
                        <input type="text" name="addrr2" placeholder="Address" value="Address" required><br>
                    </div>
                </div>
                <div class="button-container">
                <a href="pdf/T&C.pdf" target="_blank" style="text-decoration:none;padding: 10px 20px;background-color: #007bff;color: #fff;border: none;border-radius: 4px;cursor: pointer">Please Click here to Read Terms & Conditions And Points discussed</a>
            </div><br>
                <div class="checkbox-container">
                    <input type="checkbox" id="iaccept" name="iaccept" value="I agree" required>
                    <label for="iaccept">I agree to the Terms & Conditions</a> AND on the Points Discussed</label>
                </div>
                
            </div>

            <div class="button-container">
                <button type="button" onclick="prevStep()" id="backBtn" style="display: none;">Back</button>
                <button type="button" onclick="nextStep()" id="nextBtn">Next</button>
                <button type="submit" id="submitBtn" style="display: none;">Submit</button>
            </div>
        </form>
    </div>
    <script>
        var currentStep = 1;
        var totalSteps = 3;
    
        function nextStep() {
            var isValid = validateCurrentStep();
            if (!isValid) {
                return;
            }
    
            if (currentStep < totalSteps) {
                document.getElementById('step' + currentStep).classList.remove('active');
                currentStep++;
                document.getElementById('step' + currentStep).classList.add('active');
                document.getElementById('backBtn').style.display = 'inline-block';
            }
    
            if (currentStep === totalSteps) {
                document.getElementById('nextBtn').style.display = 'none';
                document.getElementById('submitBtn').style.display = 'inline-block';
            }
        }
    
        function prevStep() {
            if (currentStep > 1) {
                document.getElementById('step' + currentStep).classList.remove('active');
                currentStep--;
                document.getElementById('step' + currentStep).classList.add('active');
                document.getElementById('submitBtn').style.display = 'none';
            }
    
            if (currentStep < totalSteps) {
                document.getElementById('nextBtn').style.display = 'inline-block';
            }
    
            if (currentStep === 1) {
                document.getElementById('backBtn').style.display = 'none';
            }
        }
    
        function validateCurrentStep() {
            var stepValidations = {
                1: validateStep1,
                2: validateStep2,
                3: validateStep3
            };
    
            var validateFunction = stepValidations[currentStep];
            if (validateFunction) {
                return validateFunction();
            }
            return true;
        }
    
        function validateStep1() {
            var companyName = document.getElementsByName('company_name')[0].value;
            var companyAddress = document.getElementsByName('company_address')[0].value;
            var telephone = document.getElementsByName('telephone')[0].value;
            var mobile = document.getElementsByName('mobile')[0].value;
            var email = document.getElementsByName('email')[0].value;
            var gst = document.getElementsByName('gst')[0].value;
            // var dob = document.getElementsByName('dob')[0].value;
            // var doa = document.getElementsByName('doa')[0].value;
    
            if (companyName === '' || companyAddress === '' || telephone === '' || mobile === '' || email === '' || gst === '') {
                alert('Please fill in all required fields.');
                return false;
            }
    
            return true;
        }
    
        function validateStep2() {
            var names = document.getElementsByName('names')[0].value;
            
            if (names === '') {
                alert('Please enter names and designations.');
                return false;
            }
    
            return true;
        }
    
        function validateStep3() {
            var contactPerson = document.getElementsByName('contact_person')[0].value;
            
            if (contactPerson === '') {
                alert('Please enter the phone number of the person in charge.');
                return false;
            }
    
            return true;
        }
    </script>

    </body>
</html>