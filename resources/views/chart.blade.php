<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Chart</title>
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="#"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Another action</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Something else here</a
                                    >
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h1 class="text-center">
                        Contoh Halaman Menggunakan Chart JS
                    </h1>
                </div>
            </div>
            <div class="row mt-3">
                <div class="row">
                    <div class="col-lg-9">
                        <div>
                            <canvas id="myChart-1"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div>
                            <canvas id="myChart-2"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <script type="module">
                const ctx1 = document.getElementById("myChart-1");

                new Chart(ctx1, {
                    type: "bar",
                    data: {
                        labels: @json($data->map(fn ($data) => $data->date)),
                        datasets: [
                            {
                                label: "# of Votes",
                                data: @json($data->map(fn ($data) => $data->aggregate)),
                                borderWidth: 1,
                            },
                        ],
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                            },
                        },
                    },
                });

                const ctx2 = document.getElementById("myChart-2");

                new Chart(ctx2, {
                    type: "line",
                    data: {
                        labels: [
                            "Red",
                            "Blue",
                            "Yellow",
                            "Green",
                            "Purple",
                            "Orange",
                        ],
                        datasets: [
                            {
                                label: "# of Votes",
                                data: [12, 19, 31, 7, 21, 19],
                                borderWidth: 1,
                            },
                        ],
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                            },
                        },
                    },
                });
            </script>
        </div>
    </body>
</html>
