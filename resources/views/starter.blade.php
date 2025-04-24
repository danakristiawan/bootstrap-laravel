<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>
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

        <div class="container mt">
            <div class="row mt-3">
                <div class="col">
                    <h1 class="text-center">
                        Ini adalah halaman ujicoba bootstrap
                    </h1>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                Card subtitle
                            </h6>
                            <p class="card-text">
                                Some quick example text to build on the card
                                title and make up the bulk of the card's
                                content.
                            </p>
                            <a href="#" class="btn btn-sm btn-success"
                                >Card link</a
                            >
                            <a href="#" class="btn btn-sm btn-warning"
                                >Another link</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                Card subtitle
                            </h6>
                            <p class="card-text">
                                Some quick example text to build on the card
                                title and make up the bulk of the card's
                                content.
                            </p>
                            <a href="#" class="btn btn-sm btn-primary"
                                >Card link</a
                            >
                            <a href="#" class="btn btn-sm btn-danger"
                                >Another link</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                Card subtitle
                            </h6>
                            <p class="card-text">
                                Some quick example text to build on the card
                                title and make up the bulk of the card's
                                content.
                            </p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                Card subtitle
                            </h6>
                            <p class="card-text">
                                Some quick example text to build on the card
                                title and make up the bulk of the card's
                                content.
                            </p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <div class="table-responsive">
                        <table
                            class="table table-bordered table-hover align-middle"
                        >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2555215</td>
                                    <td>Ini adalah testing tabel bootstrap</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2555215</td>
                                    <td>Ini adalah testing tabel bootstrap</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2555215</td>
                                    <td>Ini adalah testing tabel bootstrap</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2555215</td>
                                    <td>Ini adalah testing tabel bootstrap</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <!-- Button trigger modal -->
                    <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                    >
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true"
                    >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1
                                        class="modal-title fs-5"
                                        id="exampleModalLabel"
                                    >
                                        Modal title
                                    </h1>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body">...</div>
                                <div class="modal-footer">
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal"
                                    >
                                        Close
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                    >
                                        Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <div class="list-group">
                        <a
                            href="#"
                            class="list-group-item list-group-item-action active"
                            aria-current="true"
                        >
                            The current link item
                        </a>
                        <a
                            href="#"
                            class="list-group-item list-group-item-action"
                            >A second link item</a
                        >
                        <a
                            href="#"
                            class="list-group-item list-group-item-action"
                            >A third link item</a
                        >
                        <a
                            href="#"
                            class="list-group-item list-group-item-action"
                            >A fourth link item</a
                        >
                        <a
                            class="list-group-item list-group-item-action disabled"
                            aria-disabled="true"
                            >A disabled link item</a
                        >
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <button
                        type="button"
                        class="btn btn-primary"
                        id="liveToastBtn"
                    >
                        Show live toast
                    </button>

                    <div class="toast-container position-fixed top-0 end-0 p-3">
                        <div
                            id="liveToast"
                            class="toast"
                            role="alert"
                            aria-live="assertive"
                            aria-atomic="true"
                        >
                            <div class="toast-header text-bg-primary">
                                <img src="" class="rounded me-2" alt="..." />
                                <strong class="me-auto">Bootstrap</strong>
                                <small>just now</small>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="toast"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar bg-body-tertiary mt-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Fixed bottom</a>
            </div>
        </nav>

        <script type="module">
            const toastTrigger = document.getElementById("liveToastBtn");
            const toastLiveExample = document.getElementById("liveToast");

            if (toastTrigger) {
                const toastBootstrap =
                    bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                toastTrigger.addEventListener("click", () => {
                    toastBootstrap.show();
                });
            }
        </script>
    </body>
</html>
