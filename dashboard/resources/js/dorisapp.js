const base = location.protocol + "//" + location.host;
const route = document
    .getElementsByName("routeName")[0]
    .getAttribute("content");
const csrfToken = document
    .getElementsByName("csrf-token")[0]
    .getAttribute("content");
document.addEventListener("DOMContentLoaded", function () {});
