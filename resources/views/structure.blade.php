@extends('authtemplate')

@section('Title', 'Structure')
@section('Content')

<h1>Structure</h1>
<hr style = "width: 50%; background: #BDCFDC;">

<form action="">
    <select name="Department" id="DepartmentSelect" onchange="showUsers()" style="width: 40vh; padding: 10px; border: 1px solid #365982;">
        <option selected disabled>Select Department</option>
        <optgroup label="">
            <option value="1">Marketing</option>
        </optgroup>
        <optgroup label="">
            <option value="2">Legal</option>
        </optgroup>
        <optgroup label="">
            <option value="3">Development</option>
        </optgroup>
        <optgroup label="">
            <option value="4">Human Resource</option>
        </optgroup>
        <optgroup label="">

        </optgroup>
    </select>
</form>

<div id="userList" style="margin-top: 20px;"></div>

<script>
        function showUsers() {
                // Mendapatkan elemen select
                var DepartmentSelect = document.getElementById("DepartmentSelect");

                // Mendapatkan nilai terpilih
                var selectedDepartment = DepartmentSelect.value;

                // Mendapatkan elemen div untuk menampilkan daftar pengguna
                var userListDiv = document.getElementById("userList");

                // Mengosongkan daftar pengguna sebelum menambahkan yang baru
                userListDiv.innerHTML = "";

                fetch(`/get-users/${selectedDepartment}`)
            .then(response => response.json())
            .then(users => {

                console.log(users);

                // Display department name
                userListDiv.innerHTML = getDepartmentName(selectedDepartment);
                userListDiv.style.color = "#454545";
                userListDiv.style.fontSize = "4vh";
                
                if (users.length > 0) {
                    // Loop through users and append them to userListDiv
                    users.forEach(user => {
                        userListDiv.appendChild(createUserCard(user));
                    });
                } else {
                    console.warn("Users array is empty.");

                    var messageBox = document.createElement("div");
                    messageBox.innerHTML = "No Employees";

                    messageBox.style.marginTop = "20vh";
                    messageBox.style.fontSize = "2vh";
                    messageBox.style.display = "flex";
                    messageBox.style.justifyContent = "center";

                    userListDiv.appendChild(messageBox);
                }
            })
            .catch(error => console.error("Error fetching users:", error));
        }

        function createUserCard(user) {
            console.log(user);

            var cardElement = document.createElement("div");
            cardElement.className = "containerCard"; // Adjust with your card class

            cardElement.style.marginTop = "20px";
            cardElement.style.width = "12vw";
            cardElement.style.cursor = "pointer";
            cardElement.style.transition = "transform 0.3s ease";

            cardElement.addEventListener("click", function () {
            // Ganti "halaman-tujuan" dengan URL atau path halaman tujuan Anda

            console.log(user.employee_id);
            window.location.href = `/view-user/${user.employee_id}`;

            });

            // Add event listener for hover effect
            cardElement.addEventListener("mouseover", function () {
                cardElement.style.transform = "scale(1.1)"; // Apply scale on hover
            });

            cardElement.addEventListener("mouseout", function () {
                cardElement.style.transform = "scale(1)"; // Reset scale on mouseout
            });

            var profileCardElement = document.createElement("div");
            profileCardElement.className = "profileCard d-flex justify-content-start";

            var innerElement = document.createElement("div");
            innerElement.className = "d-flex flex-colum align-items-center justify-content-center";

            innerElement.innerHTML = `
                <img src="${user.image}" alt="" style="width: 12vw; margin-bottom: 5px; height: 12vw;">
                <h6>${user.position}</h6>
                <p style = "font-size: 2vh;">${user.name}</p>
            `;


            profileCardElement.style.width = "12vw";
            profileCardElement.style.width = "fir-content";
            profileCardElement.style.display = "flex";
            profileCardElement.style.flexDirection = "column";
            profileCardElement.style.alignItems = "center";
            profileCardElement.style.boxShadow = "2px 2px 5px rgba(0, 0, 0, 0.2)";

            innerElement.style.display = "flex";
            innerElement.style.flexDirection = "column";
            innerElement.style.alignItems = "center";

            profileCardElement.appendChild(innerElement);
            cardElement.appendChild(profileCardElement);

            return cardElement;
        }

        function getDepartmentName(departmentId) {
            switch (departmentId) {
                case "1":
                    return "Marketing Department";
                case "2":
                    return "Legal Department";
                case "3":
                    return "Development Department";
                case "4":
                    return "Human Resource Department";
                default:
                    return "";
            }
        }
            
        
    </script>

@endsection