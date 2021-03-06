$.notify.addStyle("metro", {
    html:
        "<div class='alert' role='alert'>" +
            "<div class='image' data-notify-html='image'/>" +
            "<div class='text-wrapper'>" +
                "<b><div class='title' data-notify-html='title' style='font-weight: bold;'/></b>" +
                "<div class='text' data-notify-html='text'/>" +
            "</div>" +
        "</div>",
    classes: {
        error: {
            "padding": "10px",
            "background-color": "#f44336 !important",
            "color": "white",
            "margin-bottom": "5px",
            "border-radius":"5px"
        },
        success: {
            "padding": "10px",
            "background-color": "#4CAF50 !important",
            "color": "white",
            "margin-bottom": "5px",
            "border-radius":"5px"
        },
        info: {
            "padding": "10px",
            "background-color": "#2196F3 !important",
            "color": "white",
            "margin-bottom": "5px",
            "border-radius":"5px"
        },
        warning: {
            "padding": "10px",
            "background-color": "#ff9800 !important",
            "color": "white",
            "margin-bottom": "5px",
            "border-radius":"5px"
        },
        black: {
            "padding": "10px",
            "background-color": "#fafafa !important",
            "color": "white",
            "margin-bottom": "5px",
            "border-radius":"5px"
        },
        white: {
            "padding": "10px",
            "background-color": "#f1f1f1 !important",
            "color": "white",
            "margin-bottom": "5px",
            "border-radius":"5px"
        }
    }
});