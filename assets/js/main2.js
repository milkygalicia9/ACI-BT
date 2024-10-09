const monthNames = ['January', 
  'February', 
  'March', 
  'April', 
  'May', 
  'June', 
  'July', 
  'August', 
  'September', 
  'October', 
  'November', 
  'December'];
const certs = ['barangay_clearance',
  'business_permit_new',
  'business_permit_renew',
  'certificate_of_employability',
  'certificate_of_income',
  'cohabitation',
  'complaint_certificate',
  'death_certificate',
  'first_time_job_seeker',
  'indigency',
  'indigency_aics',
  'lot_ownership',
  'Oathtaking',
  'transfer_of_residency'];


function getOrdinalSuffix(number) {
  if (number % 100 >= 11 && number % 100 <= 13) {
      return "th";
  }
  switch (number % 10) {
      case 1: return "st";
      case 2: return "nd";
      case 3: return "rd";
      default: return "th";
  }
}
function convertTime(timeInput) {
  var timeParts = timeInput.split(':');
  var hours = parseInt(timeParts[0]);
  var minutes = parseInt(timeParts[1]);
  var period = (hours >= 12) ? 'PM' : 'AM';
  hours = (hours > 12) ? hours - 12 : hours;
  hours = (hours == 0) ? 12 : hours;
  return hours + ':' + minutes.toString().padStart(2, '0') + ' ' + period;
}

function numberToWords(number) {
  const ones = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'];
  const teens = ['', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];
  const tens = ['', 'Ten', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
  const suffixes = ['', 'Thousand', 'Million', 'Billion', 'Trillion'];

  function convertGroup(num) {
    const [hundreds, tensAndOnes] = [Math.floor(num / 100), num % 100];
    let result = '';

    if (hundreds > 0) {
      result += ones[hundreds] + ' Hundred ';
    }

    if (tensAndOnes > 0) {
      if (tensAndOnes === 10) {
        result += 'Ten';
      } else if (tensAndOnes < 10) {
        result += ones[tensAndOnes];
      } else if (tensAndOnes < 20) {
        result += teens[tensAndOnes - 10];
      } else {
        const [tensDigit, onesDigit] = [Math.floor(tensAndOnes / 10), tensAndOnes % 10];
        result += tens[tensDigit] + ' ' + ones[onesDigit];
      }
    }

    return result.trim();
  }

  if (number === 0) {
    return 'Zero';
  }

  let words = '';
  let groupIndex = 0;

  while (number > 0) {
    const group = number % 1000;
    if (group > 0) {
      const groupWords = convertGroup(group) + ' ' + suffixes[groupIndex];
      words = groupWords + ' ' + words;
    }
    number = Math.floor(number / 1000);
    groupIndex++;
  }

  return words.trim();
}




function toggleFields() {
 
  const varname = [
    "first_name",
    "middle_initial",
    "last_name",
    "age",
      
    
  ];
  for (let i = 0; i < varname.length; i++) {
    document.querySelectorAll('input[name="'+varname[i]+'"]').forEach(function(first) {
      console.log(varname[i]);
      first.setAttribute('name', varname[i]+"se");
  });
  }
  for (let i = 0; i <  certs.length; i++) {


  }
  document.getElementById("fillup").scrollIntoView({ behavior: 'smooth' });

  document.querySelectorAll('#form').forEach(function(form){
    form.reset();
  });

  document.querySelectorAll("#purok").forEach(function (name){
  name.setAttribute('id','puroks');
  name.setAttribute('name','puroks');

  });
  
  document.querySelectorAll("#bday").forEach(function (name){
    name.setAttribute('id','bdays');
    name.setAttribute('name','bdays');
  
    });
  document.querySelectorAll("#suffix").forEach(function (name){
  name.setAttribute('id','suffixs');
  name.setAttribute('name','suffixs');

  });
  var certificateType = document.getElementById('certificateType').value;
  var forms = document.getElementsByClassName('certificates')[0].children;

  for (var i = 0; i < forms.length; i++) {
      if (forms[i].id === certificateType) {
          forms[i].classList.add('active');
      } else {
          forms[i].classList.remove('active');
      }
  }

  var iframe = document.getElementById('myIframe');
  var doc = "certificates/" + certificateType + ".html";
  
  var currentForm = document.getElementById(certificateType);
  if (currentForm) {
      currentForm.querySelectorAll('input[type=text], input[type=number]').forEach(function(input) {
          input.setAttribute('oninput', 'updateText()');
      });
      currentForm.querySelectorAll('input[type=date], input[type=time]').forEach(function(input) {
          input.setAttribute('onchange', 'updateText()');
          input.setAttribute('class','form-control p-2 w-45');
      });
      currentForm.querySelectorAll('input[type=checkbox]').forEach(function(input) {
          input.setAttribute('onclick', 'updateText()');
      });
      currentForm.querySelectorAll('select').forEach(function(input) {
          input.setAttribute('onchange', 'select()');
      });
  }

    for (let index = 0; index < varname.length; index++) {
            
          var current = currentForm.querySelector('input[name="'+varname[index]+'se"]');
          if (current) {
              current.setAttribute('name', varname[index]);
          }
    }
  var purokSelect = currentForm.querySelector('select[id="puroks"]');
  var suffixSelect = currentForm.querySelector('select[id="suffixs"]');
  var bdayinput = currentForm.querySelector('input[id="bdays"]');


  if (purokSelect) {
    purokSelect.setAttribute('id', 'purok');
    purokSelect.setAttribute('name', 'purok');
  }
  if (bdayinput) {
    bdayinput.setAttribute('id', 'bday');
    bdayinput.setAttribute('name', 'bday');
  }
  if (suffixSelect) {
    suffixSelect.setAttribute('id', 'suffix');
    suffixSelect.setAttribute('name','suffix');
  }

  
  iframe.src = doc;
  function setIssuedDate() {
    const today = new Date();
    const formattedDate = today.toISOString().split('T')[0];
    document.getElementById('issueddate').value = formattedDate;
}

// Call the function when the page loads
window.onload = setIssuedDate;

}



function select(){
  var iframe = document.getElementById('myIframe');
  var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
  var purok = iframeDocument.getElementById('purok');
  var suffix = iframeDocument.getElementById('suffix');
  var stats = iframeDocument.getElementById('stats');

  if (purok)
    purok.innerText = document.getElementById('purok').value;
    else console.log('purok not found')
    
  if (suffix)
    suffix.innerText = document.getElementById('suffix').value;
    else console.log('suffix not found')

    if (stats)
      stats.innerText = document.getElementById('stats').value;
      else console.log('stats not found')
  
  }


  
  function printIframe() {
    var iframe = document.getElementById('myIframe');
var iframeWindow = iframe.contentWindow;
iframeWindow.print();
 
  }

  function updateText() { 

    var iframe = document.getElementById('myIframe');          
        var text = document.getElementById(document.getElementById('certificateType').value).querySelectorAll('input[type=text]');
        var number =document.getElementById(document.getElementById('certificateType').value).querySelectorAll('input[type=number]');
        var date= document.getElementById(document.getElementById('certificateType').value).querySelectorAll('input[type=date]');
        var time= document.getElementById(document.getElementById('certificateType').value).querySelectorAll('input[type=time]');
        var checkbox = document.getElementById(document.getElementById('certificateType').value).querySelectorAll('input[type=checkbox]');
    // console.log(number[0].value);
      var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
      for (var x = 0; x < text.length; x++) {
       
        var Var = iframeDocument.getElementById('var'+x);
        if (Var) {
          Var.innerText = text[x].value;
      }
       
        }
        
  for (var x = 0; x < number.length; x++) {
    var Number = iframeDocument.getElementById('num'+x);
    
    if (certificateType.value == 'lot_ownership' && x == 1) {
        let lotnum = iframeDocument.getElementById('lotnum');
        
        if (lotnum) {
            Number.innerText = number[x].value;
            lotnum.innerText = numberToWords(number[x].value);
        }
    } else if (Number) {
        Number.innerText = number[x].value;
    }
}

  for (var x = 0; x < date.length; x++) {
    var day = iframeDocument.getElementById('day'+x);
    var month = iframeDocument.getElementById('month'+x);
    var year = iframeDocument.getElementById('year'+x);
    var sup = iframeDocument.getElementById('sup'+x);

    var dateValue = new Date(date[x].value);

  
        if (day || month || year) {
            day.innerText = dateValue.toLocaleDateString('en-US',{day: 'numeric'});
          year.innerText = dateValue.toLocaleDateString('en-US',{year: 'numeric'});
         
        }
        if (month) {
          month.innerText = dateValue.toLocaleDateString('en-US',{month: 'long'});
        }
        if(sup){

          sup.innerText = getOrdinalSuffix(dateValue.getDate());
        }

  }

  for (var x = 0; x < time.length; x++) {
    var Time = iframeDocument.getElementById('time'+x);
    if (Time) {
      Time.innerText = convertTime(time[x].value);
  }
}
if(certificateType.value == 'lot_ownership') {
  for (let y = 0; y < checkbox.length; y++) {
    var check = iframeDocument.getElementById('check'+y);
    if (checkbox[y].checked) {
        check.innerText = '/';
    } else {
        check.innerText = ' ';
    }
}

}


if(certificateType.value == 'cohabitation') {
var periods = iframeDocument.getElementById('period');
var inyears = iframeDocument.getElementById('inyears');

var month = monthNames[parseInt(document.getElementById('month').value.split('-')[1]-1, 10)]
var year = document.getElementById('month').value.split('-')[0];
let currentDate = new Date();
        
currentDate.setFullYear(currentDate.getFullYear() - year);
console.log(currentDate);
if (periods){ 
  periods.innerText =  month + ' ' + year;
}
if (inyears){
  inyears.innerText = currentDate;


}
else console.log('period not found');   


  }



if (certificateType.value == 'certificate_of_income') {
var num = iframeDocument.getElementById('intext');
var numtotext = document.getElementById('amountinwords');

if ( numtotext){ numtotext.innerText = numberToWords(number[0].value);}
if (num ) { 
 
  num.innerText = numberToWords(number[0].value);

}
if (certificateType.value == 'indigency') {
  var stat = iframeDocument.getElementById('stat');
  var stato = document.getElementById('civil').value;

  switch (stato) {
      case 'm':
        
          stat.innerHTML = "<u>married</u>, single, widow";
          break;
      case 'w':
          stat.innerHTML = "married, single, <u>widow</u>";
          break;
      case 's':
          stat.innerHTML = "married, <u>single</u>, widow";
          break;
      default:
          stat.innerText = "married, single, widow";
          break;
  }
}

}


const bdayInput = document.getElementById('bday').value;
const bdayCoha = document.getElementById('bday2').value;

if (bdayInput) {
  console.log(validateAge(bdayInput));
  console.log("bdayCinpu");
}

if (bdayCoha) {
  console.log(validateAge(bdayCoha));

console.log("bdayCoha" );
}

// // Function to validate birthday and update DOM
// function validateBirthday(bdayInputValue, bdayId, bmonthId, byearId) {
//   const bday = new Date(bdayInputValue);
//   const today = new Date();

//   var bbday = iframeDocument.getElementById(bdayId);
//   var bmonth = iframeDocument.getElementById(bmonthId);
//   var byear = iframeDocument.getElementById(byearId);

//   // Calculate age
//   let age = today.getFullYear() - bday.getFullYear();
//   const monthDiff = today.getMonth() - bday.getMonth();

//   // Adjust age if the birthday hasn't occurred yet this year
//   if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < bday.getDate())) {
//     age--;
//   }

//   if (bbday || bmonth || byear) {
//     if (age >= 18) {
//       bbday.innerText = bday.getDate();
//       bmonth.innerText = monthNames[bday.getMonth()];
//       byear.innerText = bday.getFullYear();
//     } else {
//       // Clear the birthdate input if the age is less than 18
//       document.getElementById(bdayId).value = '';
//       alert("Warning: Must be 18 or older to proceed.");
//     }
//   }
//   else{
//     console.log('bbday, bmonth, byear not found');
//   }
// }



}///end updateText

const inputs = document.querySelectorAll('input[type="text"]');

    inputs.forEach(input => {
      input.addEventListener('input', function () {
        let value = input.value;
        value = value.replace(/[^a-zA-Z\s]/g, '');
        value = value.substring(0, 25);
        input.value = value;
      });
    });
    
var days = document.getElementById('days');
var months = document.getElementById('months');
var sups = document.getElementById('sups');
var years = document.getElementById('years');

const currentDate = new Date();

const day = currentDate.getDate();
const month = currentDate.getMonth() ; 
const year = currentDate.getFullYear();

const monthName = monthNames[month];
// console.log(days,months,sups,years);
if (days) days.innerText = day;
if (months) months.innerText = monthName;
if (sups) sups.innerText = getOrdinalSuffix(day);
if (years) years.innerText =year;



window.onload = function() {
  document.getElementById("fillup").scrollIntoView({ behavior: 'smooth' });
};





function validateAge(dateOfBirth) {
  const today = new Date();
  const birthDate = new Date(dateOfBirth);

  // Calculate the age
  let age = today.getFullYear() - birthDate.getFullYear();
  const monthDiff = today.getMonth() - birthDate.getMonth();

  // Adjust age if the birthday hasn't occurred yet this year
  if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
      age--;
  }

  return age >= 18; // Return true if age is 18 or older, false otherwise
}

// Example usage
const dateOfBirthInput = '2005-10-09'; // Replace with the actual date of birth in YYYY-MM-DD format

if (validateAge(dateOfBirthInput)) {
  console.log("Age is valid.");
} else {
  console.log("You must be 18 years old or older.");
}
