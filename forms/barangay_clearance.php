<form action="#" method="post" id="form">
    <label for="">First Name:</label>
    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

    <label for="">Middle Initial:</label>
    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. M"><br>

    <label for="">Last Name:</label>
    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>

    <label for="">Suffix:</label>
    <select class="text-left form-control" name="suffix" id="suffixs">
        <option value="">N/A</option>
        <option value="Jr">Jr</option>
        <option value="Sr">Sr</option>
        <option value="I">I</option>
        <option value="II">II</option>
        <option value="III">III</option>
    </select><br>

    <label for="">Purok:</label>
    <select class="text-left form-control" name="puroks" id="puroks">
        <option value="Centro">Centro</option>
        <option value="Hurawan">Huwaran</option>
        <option value="Kaakbayan">Kaakbayan</option>
        <option value="New Princesa"> New Princesa</option>
        <option value="San Franciso I">San Franciso I</option>
        <option value="San Franciso II">San Franciso II</option>
        <option value="Sandiwa">Sandiwa</option>
        <option value="Trece">Trece</option>
        <option value="Uha">UHA</option>
    </select><br>

    <label for="">Birthplace:</label>
    <input type="text" class="form-control" name="birthplace" placeholder="Ex. Puerto Princesa City"><br>

    <label for="">Birthday:</label>
    <input type="date" class="form-control" id="birthdate" name="birthday">
    <br>

    <label for="">Civil Status:</label>
    <select class="form-control" onchange="update()" name="civil_status" id="stats">
        <option value="Married">Married</option>
        <option value="Widow">Widow</option>
        <option value="Single">Single</option>
    </select>
    <br>

    <label for="">Period of Residency:</label>
    <input type="number" class="form-control" name="residency_period" placeholder="Ex. 3 years"><br>

    <label for="">Purpose:</label>
    <input type="text" name="purpose" class="form-control" id="" cols="30" rows="10"
        placeholder="Ex. Undecided"></input>

    <input type="date" name="issueddate" style="display:none; position:absolute;">
    <hr>

    <button class="btn btn-primary w-25" name="barangay_clearance" id="coco" onclick="printIframe()"
        type="submit">Print</button>
</form>