<form action="#" method="post" id="form">
    <label for="">First Name:</label>
    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

    <label for="">Middle Initial:</label>
    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

    <label for="">Last Name:</label>
    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>



    <label for="">Suffix:</label>
    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
        <option value="">N/A</option>
        <option value="Jr">Jr</option>
        <option value="Sr">Sr</option>
        <option value="I">I</option>
        <option value="II">II</option>
        <option value="III">III</option>
    </select><br><br>

    <label for="applicantAge">Age:</label>
    <input type="number" class="form-control" name="age"><br>

    <label for="applicantResidencyPeriod">Period of Residency:</label>
    <input type="number" class="form-control" name="residency_period"><br>

    <label for="applicantSignedDate">Signed date:</label>
    <input type="date" class="form-control" name="signed_date"><br>

    <!--For Guardian-->
    <label for="">First Name:</label>
    <input type="text" class="form-control" name="guardian_first_name"><br>

    <label for="">Middle Name:</label>
    <input type="text" class="form-control" name="guardian_middle_name"><br>

    <label for="">Last Name:</label>
    <input type="text" class="form-control" name="guardian_last_name"><br>

    <label for="">Suffix:</label>
    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
        <option value="">N/A</option>
        <option value="Jr">Jr</option>
        <option value="Sr">Sr</option>
        <option value="I">I</option>
        <option value="II">II</option>
        <option value="III">III</option>
    </select><br><br>

    <label for="guardianAge">Guardian Age:</label>
    <input type="number" class="form-control" name="guardian_age"><br>

    <!-- <label for="guardianOption">Option (Parent/ Guardian):</label>
                  <input type="text" class="form-control" ><br> -->

    <!-- <label for="applicantName">Name of Applicant:</label>
                  <input type="text" class="form-control" ><br> -->

    <label for="">Purok:</label><br>
    <select name="puroks" id="puroks" onchange="update()">
        <option value="Centro">Centro</option>
        <option value="Hurawan">Huwaran</option>
        <option value="Kaakbayan">Kaakbayan</option>
        <option value="New Princesa"> New Princesa</option>
        <option value="San Franciso I">San Franciso I</option>
        <option value="San Franciso II">San Franciso II</option>
        <option value="Sandiwa">Sandiwa</option>
        <option value="Trece">Trece</option>
        <option value="Uha">UHA</option>
    </select>

    <label for="applicantResidencyPeriod2">Period of Residency:</label>
    <input type="number" class="form-control" name="residency_period"><br>

    <!-- <label for="guardianFullName2">Guardian Full Name:</label>
                  <input type="text" class="form-control" ><br> -->
    <button name="Oathtaking" onclick="printIframe()" type="submit">Print</button>

</form>