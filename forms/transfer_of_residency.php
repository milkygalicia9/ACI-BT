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
    <select name="puroks" class="form-control" id="puroks" onchange="update()">
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

    <label for="">Current Address:</label>
    <input type="text" class="form-control" name="current_address" placeholder="Ex. Previous Address"><br>

    <label for="">Previous Address:</label>
    <input type="text" class="form-control" name="previous_address" placeholder="Ex. Previous Address"><br>

    <label for="">Nationality</label>
    <input type="text" class="form-control" name="nationality" placeholder="Filipino"><br>

    <label for="">Civil Status:</label>
    <select class="form-control" onchange="update()" name="civil_status" id="stats">
        <option value="Married">Married</option>
        <option value="Widow">Widow</option>
        <option value="Single">Single</option>
    </select><br>

    <label for="">Purpose:</label>
    <input type="text" name="purpose" class="form-control" id="" cols="30" rows="10"
        placeholder="Ex. Moving to another country"></input>

    <input type="date" name="issueddate" style="display:none; position:absolute;">
    <hr>

    <div class="print" style="text-align: right;">
        <button type="button" class="btn btn-primary w-25" data-bs-toggle="modal"
            data-bs-target="#transferResidency">Print</button>
        <div class="modal fade" id="transferResidency" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-light">
                        <h2 style="font-weight: bold;">Confirm if all the data is correct?</h2>
                    </div>
                    <div class="modal-footer d-flex justify-content-around">
                        <button class="w-25 btn btn-primary" name="transfer_of_residency" onclick="printIframe()" id="coco"
                            type="submit">Yes</button>
                        <button type="button" class="w-25 btn btn-danger" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>