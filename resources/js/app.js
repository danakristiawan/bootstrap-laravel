// Import our custom CSS
import "../scss/styles.scss";

// Import all of Bootstrap's JS
import * as bootstrap from "bootstrap";
window.bootstrap = bootstrap;

// Import ChartJS
import Chart from "chart.js/auto";
window.Chart = Chart;

// Import datatable
import "laravel-datatables-vite";

// Toastr
import toastr from "toastr";
window.toastr = toastr;
window.toastr.options = {
    progressBar: true,
    showDuration: "100",
};
