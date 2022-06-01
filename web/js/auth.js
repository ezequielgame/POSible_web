var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
// var branchId = sessionStorage.getItem("selectedBranchId");
var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
var url = 'http://192.168.100.2/users?';
fetch(url + new URLSearchParams({
    action: 'authToken',
    suffix: 'user'
}), {
    method: 'POST',
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        'Accept': '*/*',
        'authorization': token
    }
})
    .then((response) => response.json())
    .then(data => {
        if (data.status == 401) {
            alert('Tu sesión expiró, vuevle a iniciar sesión');
            sessionStorage.clear();
            location.href = 'login';
        }
    })