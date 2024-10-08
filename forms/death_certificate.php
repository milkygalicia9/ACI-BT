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
    <label for="deathAge">Age:</label>
    <input type="number" class="form-control" name="dead_age"><br>

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

    <label for="dateOfDeath">Date of death:</label>
    <input type="date" class="form-control" name="date_of_death"><br>

    <label for="timeOfDeath">Time of death:</label>
    <input type="time" class="form-control" name="time_of_death"><br>

    <label for="causeOfDeath">Cause of death:</label>
    <input type="text" class="form-control" name="cause_of_death"><br>

    <label for="">First Name:</label>
    <input type="text" class="form-control" name="first_named" placeholder="Ex. Juan"><br>

    <label for="">Middle Initial:</label>
    <input type="text" class="form-control" name="middle_initiald" placeholder="Ex. J"><br>

    <label for="">Last Name:</label>
    <input type="text" class="form-control" name="last_named" placeholder="Ex. Dela Cruz"><br>

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

    <label for="relationshipToDeadPerson">Relationship to the dead person:</label>
    <input type="text" class="form-control" name="relationship_to_dead_person"><br>

    <label for="dateRequested">Date requested:</label>
    <input type="date" class="form-control" name="date_requested"><br>
    <button name="death_certificate" onclick="printIframe()" type="submit">Print</button>

</form>