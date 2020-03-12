import Turbolinks from "turbolinks";
import "./bootstrap";

Turbolinks.start();

document.addEventListener("turbolinks:load", function() {
    console.log("turbolinks:load fired");
});
