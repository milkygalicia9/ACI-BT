<!-- Barangay Clearance Form -->
<form action="#" method="post" id="brgyClearanceForm">
    <div class="search d-flex justify-content-end">
        <input type="search" class="form-control w-100" placeholder="Search">
    </div>
    <hr>

    <label for="first_name">First Name:</label>
    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Ex. Juan" required><br>

    <div class="form-row d-flex justify-content-between">
        <div class="form-group col-sm-2">
            <label for="middle_initial">M.I. :</label>
            <input type="text" class="form-control" id="middle_initial" name="middle_initial" placeholder="Ex. M"
                maxlength="1" pattern="[A-Za-z]" style="text-transform: uppercase;" required>
        </div>
        <div class="form-group col-sm-6">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Ex. Dela Cruz"
                required><br>
        </div>
        <div class="form-group col-sm-2">
            <label for="suffix">Suffix:</label>
            <select class="text-left form-control" name="suffix" id="suffix">
                <option value="">N/A</option>
                <option value="Jr">Jr</option>
                <option value="Sr">Sr</option>
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
            </select>
        </div>
    </div>

    <label for="puroks">Purok:</label>
    <select class="text-left form-control" name="puroks" id="puroks" required>
        <option value="">--Select Purok--</option>
        <option value="Centro">Centro</option>
        <option value="Hurawan">Huwaran</option>
        <option value="Kaakbayan">Kaakbayan</option>
        <option value="New Princesa">New Princesa</option>
        <option value="San Franciso I">San Franciso I</option>
        <option value="San Franciso II">San Franciso II</option>
        <option value="Sandiwa">Sandiwa</option>
        <option value="Trece">Trece</option>
        <option value="Uha">UHA</option>
    </select><br>

    <label for="birthplace">Birthplace:</label>
    <input type="text" class="form-control" id="birthplace" name="birthplace" placeholder="Ex. Puerto Princesa City"
        required><br>

    <label for="birthday">Birthday:</label>
    <input type="date" class="form-control" id="birthday" name="birthday" required><br>

    <label for="civil_status">Civil Status:</label>
    <select class="form-control" name="civil_status" id="civil_status" required>
        <option value="Married">Married</option>
        <option value="Widow">Widow</option>
        <option value="Single">Single</option>
    </select><br>

    <label for="residency_period">Period of Residency:</label>
    <input type="number" class="form-control" id="residency_period" name="residency_period" placeholder="Ex. 3 years"
        required><br>

    <label for="purpose">Purpose:</label>
    <input type="text" name="purpose" class="form-control" id="purpose" placeholder="Ex. Undecided" required><br>

    <input type="date" name="issueddate" style="display:none; position:absolute;">
    <hr>

    <div class="brgyClearancePrint" style="text-align: right;">
        <button type="button" id="brgyClearancePrintBtn" class="btn btn-primary w-25">Print</button>

        <!-- Barangay Clearance Modal -->
        <div class="modal fade" id="brgyClearanceModal" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-light">
                        <h2 style="font-weight: bold;">Confirm if all the data is correct?</h2>
                    </div>
                    <div class="modal-footer d-flex justify-content-around">
                        <button class="w-25 btn btn-primary" name="barangay_clearance" onclick="printIframe()"
                            type="submit">Yes</button>
                        <button type="button" class="w-25 btn btn-danger" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    // Event listener for Barangay Clearance button
    document.getElementById("brgyClearancePrintBtn").addEventListener("click", function () {
        let form = document.getElementById("brgyClearanceForm");  // Correct form ID

        // Validate the form
        if (form.checkValidity()) {
            // If the form is valid, show the Barangay Clearance modal
            let brgyClearanceModal = new bootstrap.Modal(document.getElementById("brgyClearanceModal"));
            brgyClearanceModal.show();
        } else {
            // If the form is not valid, show the built-in validation messages
            form.reportValidity();
        }
    });
</script>