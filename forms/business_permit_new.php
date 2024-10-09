<form action="#" method="post" id="form">

    <label for="businessName">Business name/ Trade Activity:</label>
    <input type="text" name="businessName" class="form-control" name="business_name" placeholder="Ex: Star Oil"><br>

    <label for="">Purok:</label><br>
    <select name="purok" id="purok" onchange="update()" class="form-control">
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
    </select>
    <br>

    <label for="">Manager / Operator</label>
    <input type="text" class="form-control" name="manager_operator" placeholder="Ex. Juan Dela Cruz"><br>

    <label for="">Address(Manager / Operator)</label>
    <input type="text" class="form-control" name="manager_operator_address" placeholder="Ex. 144 PSU Rd">
    <hr>

    <div class="print" style="text-align: right;">
        <button type="button" class="btn btn-primary w-25" data-bs-toggle="modal"
            data-bs-target="#businessPermitNew">Print</button>
        <div class="modal fade" id="businessPermitNew" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-light">
                        <h2 style="font-weight: bold;">Confirm if all the data is correct?</h2>
                    </div>
                    <div class="modal-footer d-flex justify-content-around">
                        <button class="w-25 btn btn-primary" name="business_permit_new" onclick="printIframe()"
                            type="submit">Yes</button>
                        <button type="button" class="w-25 btn btn-danger" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>