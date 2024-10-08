<form action="#" method="post" id="form">
    <label for="">First Name:</label>
    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

    <label for="">Middle Initial:</label>
    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

    <label for="">Last Name:</label>
    <input type="text" class="form-control" name="last_name" placeholder="Ex. J"><br>


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

    <label for="cohabitant1Birthdate">Birthdate:</label>
    <input type="date" class="form-control" name="birth_date"><br>

    <label for="">First Name:</label>
    <input type="text" class="form-control" name="first_name1" placeholder="Ex. Barbie"><br>

    <label for="">Middle Initial:</label>
    <input type="text" class="form-control" name="middle_initial1" placeholder="Ex. J"><br>

    <label for="">Last Name:</label>
    <input type="text" class="form-control" name="last_name1" placeholder="Ex. J"><br>


    <label for="cohabitant1Birthdate">Birthdate:</label>
    <input type="date" class="form-control" name="cohabitant_birth_date"><br>

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
    <!--Month and Year daw-->
    <label for="dateOfMarriage">Period of marriage:</label>
    <input type="month" onchange="updateText()" id="month" class="form-control" name="date_of_marriage"><br>

    <label for="">Duty Officer Full Name</label>
    <input type="text" class="form-control" name="duty_officer_full_name">
</form>
<button name="cohabitation" onclick="printIframe()" type="submit">Print</button>