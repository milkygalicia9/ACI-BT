<form action="#" method="post" id="form">
    <label for="">First Name:</label>
    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

    <label for="">Middle Initial:</label>
    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. M"><br>

    <label for="">Last Name:</label>
    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>

    <label for="">Suffix:</label>
    <select class="form-control text-left" name="suffix" id="suffixs">
        <option value="">N/A</option>
        <option value="Jr">Jr</option>
        <option value="Sr">Sr</option>
        <option value="I">I</option>
        <option value="II">II</option>
        <option value="III">III</option>
    </select><br>

    <label for="">Age</label>
    <input type="number" class="form-control" name="age" placeholder="Ex. 24"><br>

    <label for="">Civil Status</label>
    <select name="civil_status" id="civil" onchange="updateText()" class="form-control">
        <option value="">--Select Civil Status--</option>
        <option value="Married">Married</option>
        <option value="Single">Single</option>
        <option value="Widow">Widow</option>
    </select><br>

    <label for="">Purok:</label><br>
    <select name="puroks" class="form-control" id="puroks" onchange="update()">
        <option value="">--Select Purok--</option>
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

    <label for="">Purpose:</label>
    <input type="text" name="purpose" class="form-control" id="" cols="30" rows="10"
        placeholder="Ex. Medical Assistance"></input>
    <hr>

    <button name="indigency" onclick="printIframe()" type="submit">Print</button>

</form>