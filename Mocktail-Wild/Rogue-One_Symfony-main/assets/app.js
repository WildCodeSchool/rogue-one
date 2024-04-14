/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import "../assets/styles/global.css";

import "../assets/styles/components/banner.css";
import "../assets/styles/components/navbar.css";
import "../assets/styles/components/footer.css";
import "../assets/styles/components/header.css";

// any JS you import will output into a single js file (app.js in this case)
import "./js/active_navbar.js";
import "./js/logonav.js";
import "./js/footer.js";
import "./js/heading.js";
import "./styles/admin/adminDashboard.js";

// start the Stimulus application

import "./bootstrap.js";
