let base = location.protocol + "//" + location.host;
document.addEventListener("DOMContentLoaded", function () {
  let md_alert_dom = document.getElementById("md_alert_dom");
  let md_alert_content = document.getElementById("md_alert_content");
  let md_alert_btn_close = document.getElementById("md_alert_btn_close");
  if (mdalert_btn_close) {
    md_alert_btn_close.addEventListener("click", (e) => {
      e.preventDefault();
      md_alert_status("hide");
    });
  }
});

function md_alert(data) {
  md_alert_content.innerHTML = "";
  if (data) {
    if (data.title) {
      title = data.title;
    } else {
      title = "MD Alert";
    }

    let content = "";
    content += "<h2>" + title + "</h2>";
    if (data.type) {
      content += '<div class="icon"><img src="' + data.type + '.png"></div>';
    }
    md_alert_content.innerHTML = content;
    md_alert_status("show");
  }
}

function md_alert_status(status) {
  if (status == "show") {
    md_alert_dom.style.display = "flex";
  }

  if (status == "hide") {
    md_alert_dom.style.display = "none";
  }
}
