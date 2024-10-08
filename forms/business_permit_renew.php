<form action="#" method="post" id="form">
    <label for="businessName">Business name/ Trade Activity:</label>
    <input type="text" class="form-control" name="business_name_renew"><br>

    <label for="">Purok:</label><br>
    <select name="" id="purok">
        <option value="Centro">Centro</option>
        <option value="Kaakbayan">Kaakbayan</option>
        <option value="New Princesa"> New Princesa</option>
        <option value="San Franciso I">San Franciso I</option>
        <option value="San Franciso II">San Franciso II</option>
        <option value="Sandiwa">Sandiwa</option>
        <option value="Trece">Trece</option>
        <option value="Uha">UHA</option>
    </select>

    <br>
    <br>

    <label for="">Manager / Operator</label>
    <input type="text" class="form-control" name="manager_operator_renew">

    <label for="">Address(Manager / Operator)</label>
    <input type="text" class="form-control" name="manager_operator_address_renew">

    <!-- <label for="businessIssuedDate">Issued Date:</label>
                  <input type="date" class="form-control" name="business_issued_date"><br> -->
    <button name="business_permit_renew" onclick="printIframe()" type="submit">Print</button>
</form>