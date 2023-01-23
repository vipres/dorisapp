const base = location.protocol + "//" + location.host;
const route = document
    .getElementsByName("routeName")[0]
    .getAttribute("content");
const csrfToken = document
    .getElementsByName("csrf-token")[0]
    .getAttribute("content");

document.addEventListener("DOMContentLoaded", function () {
    let loader_action = document.getElementById("loader_action");
    let show_password = document.getElementsByClassName("show_password");

    if (show_password) {
        for (i = 0; i < show_password.length; i++) {
            show_password[i].addEventListener("click", function (e) {
                e.preventDefault();
                let target = this.getAttribute("data-target");
                let status = this.getAttribute("data-state");

                if (status == "hide") {
                    document
                        .getElementById(target)
                        .setAttribute("type", "text");
                    this.innerHTML = lang["hide_password"];
                    this.setAttribute("data-state", "show");
                }
                if (status == "show") {
                    document
                        .getElementById(target)
                        .setAttribute("type", "password");
                    this.innerHTML = lang["show_password"];
                    this.setAttribute("data-state", "hide");
                }
            });
        }
    }
});

function loader_action_status(status) {
    if (status == "show") {
        document.getElementsByTagName("body")[0].style.overflow = "hidden";
        loader_action.style.display = "flex";
        loader_action.classList.remove("loader_action_animation_hide");
        loader_action.classList.add("loader_action_animation_show");
    }
    if (status == "hide") {
        document
            .getElementsByTagName("body")[0]
            .style.removeProperty("overflow");
        loader_action.style.display = "none";
        loader_action.classList.add("loader_action_animation_hide");
        loader_action.classList.remove("loader_action_animation_show");
    }
}
