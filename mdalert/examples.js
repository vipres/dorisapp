document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("only_show").addEventListener("click", (e) => {
    md_alert({
      title: "Alerta",
      type: "error",
      msg: "Ha ocurrido un error",
      msgs: JSON.stringify([
        "mensaje #1",
        "mensaje #2",
        "mensaje #3",
        "mensaje #4",
      ]),
    });
  });

  document
    .getElementById("alert_with_actions")
    .addEventListener("click", (e) => {
      md_alert({
        title: "Alerta con acciones",
        type: "success",
        msg: "Todo un éxito",
        actions: JSON.stringify([
          {
            url: base + "/login",
            name: "Success",
            type: "success",
          },
          {
            url: base + "/login",
            name: "INFO",
            type: "info",
          },
          {
            url: base + "/login",
            name: "INGRESAR",
            type: "primary",
          },
          {
            url: base + "/login",
            name: "danger",
            type: "danger",
          },
        ]),
      });
    });

  //Elimninar

  document.getElementById("alert_confirm").addEventListener("click", (e) => {
    md_alert({
      title: "¿Desea Eliminar?",
      type: "delete",
      msg: "Si elimina este elemento ya no lo podrá recuperar",
      actions: JSON.stringify([
        {
          url: base + "/delete",
          name: "Si, eliminar",
          type: "danger",
        },
      ]),
    });
  });

  //callback

  document.getElementById("alert_callback").addEventListener("click", (e) => {
    md_alert({
      title: "¿Desea Eliminar?",
      type: "delete",
      msg: "Si elimina este elemento ya no lo podrá recuperar",
      actions: JSON.stringify([
        {
          url: base + "/delete",
          name: "Si, eliminar",
          type: "danger",
        },
        {
          callback: "callback_alert",
          params: "'param1', 'param2'",
          name: "Si, eliminar",
          type: "danger",
        },
      ]),
    });
  });

  //No Close

  document.getElementById("alert_no_close").addEventListener("click", (e) => {
    md_alert({
      title: "¿Desea Eliminar?",
      type: "delete",
      msg: "Si elimina este elemento ya no lo podrá recuperar",
      actions: JSON.stringify([
        {
          url: base + "/delete",
          name: "Si, eliminar",
          type: "danger",
        },
      ]),
      additional: JSON.stringify({ hideclose: true }),
    });
  });
});

function callback_alert(param1, param2) {
  console.log(param1, param2);

  md_alert_status("hide");
}
