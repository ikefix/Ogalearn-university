<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="pay.css">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
    <form class="form" action="your-server-endpoint" method="POST">
        <div class="payment">
            <h1 class="payTitle">Personal Information</h1>
            
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" placeholder="Francis" class="payInput" required>
            
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" placeholder="Ugwulor" class="payInput" required>
            
            <label for="phone">Phone Number:</label>
            <div class="phoneInput">
                <select id="countryCode" class="countryCodeSelect" required>
                    <option value="" disabled selected>Select country code</option>
                </select>
                <input type="number" id="phone" placeholder="Enter phone number" class="payInput" required>
            </div>
            
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="your email@gmail.com" class="payInput" required>
            
            <label for="country">Country Of Residence:</label>
            <select id="select" class="payInput" required>
                <option value="" disabled selected>Select your country</option>
            </select>
            
            <label for="progSelect">Courses:</label>
            <select name="selectcourse" id="progSelect" required>
                <option value="" disabled selected>Select program</option>
            </select>
            
            <button class="payButton disabled-button" type="submit" disabled>Proceed To Payment</button>
            <a href="#" class="close" onclick="closeForm(event)">X</a>
        </div>
    </form>
    
    <script src="pay.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const countryCodes = [
        { name: "Nigeria", code: "+234" },
        { name: "United States", code: "+1" },
        { name: "United Kingdom", code: "+44" },
        { name: "India", code: "+91" },
        { name: "South Africa", code: "+27" },
    ];

    const countries = [
        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", 
        "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", 
        "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina",
        "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", 
        "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China",
        "Colombia", "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica", "Croatia", "Cuba", 
        "Cyprus", "Czechia", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", 
        "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia",
        "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", 
        "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Holy See", 
        "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", 
        "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati",
        "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya",
        "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", 
        "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", 
        "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique",
        "Myanmar (Burma)", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", 
        "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway", "Oman", "Pakistan",
        "Palau", "Palestine State", "Panama", "Papua New Guinea", "Paraguay", "Peru", 
        "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", 
        "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", 
        "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", 
        "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", 
        "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", 
        "Suriname", "Sweden", "Switzerland", "Syria", "Tajikistan", "Tanzania", "Thailand", 
        "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", 
        "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", 
        "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", 
        "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
    ];

    const courses = [
        "FrontEnd Web Development",
        "FullStack Web Development",
        "Mobile App Development",
        "Digital Marketing"
    ];

    populateDropdown('countryCode', countryCodes, true);
    populateDropdown('select', countries, false);
    populateDropdown('progSelect', courses, false);

    const inputs = document.querySelectorAll('.payInput');
    const button = document.querySelector('.payButton');

    inputs.forEach(input => {
        input.addEventListener('input', () => {
            const allFilled = Array.from(inputs).every(input => input.value.trim() !== '');
            button.disabled = !allFilled;
            button.classList.toggle('enabled-button', allFilled);
            button.classList.toggle('disabled-button', !allFilled);
        });
    });
});

function populateDropdown(id, items, isObject) {
    const dropdown = document.getElementById(id);
    items.forEach(item => {
        const option = document.createElement('option');
        if (isObject) {
            option.value = item.code;
            option.textContent = `${item.name} (${item.code})`;
        } else {
            option.value = item;
            option.textContent = item;
        }
        dropdown.appendChild(option);
    });
}

function closeForm(event) {
    event.preventDefault();
    alert('Close button clicked! Add your logic here.');
}

    </script>
</body>
</html>

   