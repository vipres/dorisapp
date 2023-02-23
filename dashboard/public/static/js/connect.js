document.addEventListener("DOMContentLoaded", function () {
    form_connect_login = document.getElementById("form_connect_login");

    if (form_connect_login) {
        form_connect_login.addEventListener("submit", function (e) {
            e.preventDefault();
            connect_user_login();
        });
    }

    form_connect_two_auth = document.getElementById("form_connect_two_auth");

    if (form_connect_two_auth) {
        form_connect_two_auth.addEventListener("submit", function (e) {
            e.preventDefault();
            connect_two_auth();
        });
    }
});

function connect_user_login() {
    loader_action_status("show");
    url = base + "/api-js/connect/login";

    let http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.setRequestHeader("X-CSRF-TOKEN", csrfToken);

    http.onreadystatechange = function () {
        if (this.readyState == "4" && this.status == "200") {
            let data = this.responseText;
            data = JSON.parse(data);
            if (data.type == "error") {
                md_alert(data);
            }
            if (data.type == "success") {
                window.location.href = base;
            }
        }

        if (this.status != 200) {
            md_alert({
                title: "Doris APP",
                type: "error",
                msg: "Ha ocurrido un error desconocido",
            });
        }
        loader_action_status("hide");
    };
    http.send(new FormData(document.getElementById("form_connect_login")));
}

function connect_two_auth() {
    loader_action_status("show");
    url = base + "/api-js/connect/twoauth";

    let http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.setRequestHeader("X-CSRF-TOKEN", csrfToken);

    http.onreadystatechange = function () {
        if (this.readyState == "4" && this.status == "200") {
            let data = this.responseText;
            data = JSON.parse(data);
            if (data.type == "error") {
                md_alert(data);
            }
            if (data.type == "success") {
                window.location.href = base;
            }
        }

        if (this.status != 200) {
            md_alert({
                title: "Doris APP",
                type: "error",
                msg: "Ha ocurrido un error desconocido",
            });
        }
        loader_action_status("hide");
    };
    http.send(new FormData(document.getElementById("form_connect_two_auth")));
}
