<form action="#" method="post" id="form">
    <label for="">First Name:</label>
    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

    <label for="">Middle Initial:</label>
    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

    <label for="">Last Name:</label>
    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>

    <label for="">Suffix:</label>
    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
    <select class="form-control text-left" name="suffix" id="suffixs">
        <option value="">N/A</option>
        <option value="Jr">Jr</option>
        <option value="Sr">Sr</option>
        <option value="I">I</option>
        <option value="II">II</option>
        <option value="III">III</option>
    </select><br>

    <label for="">Purok:</label>
    <select name="purok" class="form-control" id="puroks" onchange="update()">
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

    <div class="form-check">
        <input class="form-check-input" name="claimant" type="checkbox" value="/" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Claimant
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" name="beneficiary" type="checkbox" value="/" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckDefault">
            Beneficiary
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" name="actual_occupant" type="checkbox" value="/" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
            Actual Occupant
        </label>
    </div><br>

    <label for="lotNumber">Lot Number:</label>
    <input type="number" class="form-control" name="lot_number" placeholder="Lot No. 123"><br>

    <label for="lotAreaNumerical">Area Measurement (Numerical Form):</label>
    <input type="number" class="form-control" name="lot_area_numerical"><br>

    <label for="lotLocationAddress">Location Address:</label>
    <input type="text" class="form-control" name="lot_location_address">

    <hr>
    <button name="lot_ownership" onclick="printIframe()" type="submit">Print</button>

</form>