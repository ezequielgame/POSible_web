if (sessionStorage.getItem("user") == null) {
    location.href = "login";
} else {

}
if (sessionStorage.getItem("selectedBranchId") == null) {
    document.getElementById("dropdownMenu2").innerText = 'Seleccionar Sucursal';
} else {
    SetSelectedBranch("branch" + sessionStorage.getItem("selectedBranchId"));
}

window.onload = init();

function init() {
    GetBranches();
}

function GetBranches() {
    var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
    var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
    var url = 'http://192.168.100.2/branches?';
    // console.log(token);
    fetch(url + new URLSearchParams({
        linkTo: 'id_user_branch',
        equalTo: userId
    }), {
        method: 'GET',
        headers: {
            'Accept': '*/*',
            'Access-Control-Allow-Origin': '*',
            'authorization': token
        }
    })
        .then((response) => response.json())
        .then(data => {
            if (typeof data.status !== 'undefined') {
                if (data.status == 200) {
                    const html = data.result
                        .map(branch => {
                            return `<button name="branchoption" class="dropdown-item" id="branch${branch.id_branch}" type="button" onclick="Aver(this.id);">${branch.name_branch}</button>`
                        })
                        .join("")
                    document.querySelector("#dropdownBranches").insertAdjacentHTML('afterbegin', html);
                }
            }
        })
}

function Aver(branchId) {
    SetSelectedBranch(branchId);
    alert("Cambiando de sucursal");
    location.reload();
}

function SetSelectedBranch(branchId) {

    var id = branchId.replace("branch", "");
    var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
    var url = 'http://192.168.100.2/branches?';
    // console.log(token);
    fetch(url + new URLSearchParams({
        linkTo: 'id_branch',
        equalTo: id
    }), {
        method: 'GET',
        headers: {
            'Accept': '*/*',
            'Access-Control-Allow-Origin': '*',
            'authorization': token
        }
    })
        .then((response) => response.json())
        .then(data => {
            if (typeof data.status !== 'undefined') {
                if (data.status == 200) {
                    console.log(data.result);
                    document.getElementById("dropdownMenu2").innerText = data.result[0].name_branch;
                    sessionStorage.setItem("selectedBranchId", id);
                    // location.reload();
                }
            }
        })
};

function Clear(id) {
    document.getElementById(id).textContent = '';
}