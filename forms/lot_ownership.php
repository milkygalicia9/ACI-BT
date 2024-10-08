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

    <ul style="list-style: none;">
        <li>
            <input type="checkbox">
            <label for="">Claimant</label>
        </li>
        <li>
            <input type="checkbox">
            <label for="">Beneficiary</label>
        </li>
        <li>
            <input type="checkbox">
            <label for="">Actual Occupant</label>
        </li>
    </ul>

    <label for="lotNumber">Lot Number:</label>
    <input type="number" class="form-control" name="lot_number" placeholder="Lot No. 123"><br>

    <label for="lotAreaNumerical">Area Measurement (Numerical Form):</label>
    <input type="number" class="form-control" name="lot_area_numerical"><br>

    <!-- <label for="lotAreaWord">Area Measurement (Word Form):</label>
                  <input type="text" class="form-control"  disabled><br>
               -->
    <label for="lotLocationAddress">Location Address:</label>
    <input type="text" class="form-control" name="lot_location_address"><br>
    <button name="lot_ownership" onclick="printIframe()" type="submit">Print</button>

</form>