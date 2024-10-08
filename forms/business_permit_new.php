<form action="#" method="post" id="form">

    <label for="businessName">Business name/ Trade Activity:</label>
    <input type="text" name="businessName" class="form-control" name="business_name"><br>

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
    <br>
    <br>
    <label for="">Manager / Operator</label>
    <input type="text" class="form-control" name="manager_operator">

    <label for="">Address(Manager / Operator)</label>
    <input type="text" class="form-control" name="manager_operator_address">
    <button name="business_permit_new" onclick="printIframe()" type="submit">Print</button>
</form>