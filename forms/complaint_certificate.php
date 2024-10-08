<form action="#" method="post" id="form">
    <!--With honorifics-->
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

    <label for="">Age</label>
    <input type="number" name="age" class="form-control">

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

    <label for="">Date Filed:</label>
    <input type="date" class="form-control">

    <!--Respondent Full Name-->
    <label for="">First Name:</label>
    <input type="text" class="form-control" name="first_namec" placeholder="Ex. Juan"><br>

    <label for="">Middle Initial:</label>
    <input type="text" class="form-control" name="middle_initialc" placeholder="Ex. J"><br>

    <label for="">Last Name:</label>
    <input type="text" class="form-control" name="last_namec" placeholder="Ex. Dela Cruz"><br>



    <label for="">Suffix:</label>
    <input type="text" class="form-control"><br>

    <label for="">Case Number:</label>
    <input type="number" class="form-control">

    <label for="">VAWC Official Name</label>
    <input type="text" class="form-control">
    <button name="complaint_certificate" onclick="printIframe()" type="submit">Print</button>
</form>
<!-- <label for="">Issued Date:</label>
                  <input type="date" class="form-control"> -->