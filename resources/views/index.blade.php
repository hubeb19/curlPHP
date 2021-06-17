<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{asset('css/bootstrap.css')}}>
    <link rel="stylesheet" href={{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css' ) }}>
    <link rel="stylesheet" href={{ asset('vendors/bootstrap-icons/bootstrap-icons.css' ) }}>
    <link rel="stylesheet" href={{ asset( 'css/app.css' ) }}>
    <link rel="shortcut icon" href={{ asset('images/favicon.svg' ) }} type="image/x-icon">
</head>
<body>

    <div id="main">
        <section class="section">
            <div class="row" id="table-responsive">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Always responsive</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Responsive tables allow tables to be scrolled horizontally with ease. Make
                                    any table
                                    responsive across all
                                    viewports by adding <code class="highlighter-rouge">.table-responsive</code>
                                    class on
                                    <code class="highlighter-rouge">.table</code>. Or, pick a maximum breakpoint
                                    with which
                                    to
                                    have a responsive
                                    table up to by adding <code
                                        class="highlighter-rouge"> .table-responsive{-sm|-md|-lg|-xl}</code>.
                                    Read full
                                    documnetation <a
                                        href="https://getbootstrap.com/docs/4.3/content/tables/#responsive-tables"
                                        target="_blank">here.</a>
                                </p>

                                <div class="alert alert-primary">
                                    <h4 class="alert-heading">Vertical clipping/truncation</h4>
                                    <p>Responsive tables make use of <code
                                            class="highlighter-rouge">overflow-y: hidden</code>,
                                        which clips off
                                        any content that goes beyond the bottom or top edges of the table. In
                                        particular,
                                        this
                                        can clip off
                                        dropdown menus and other third-party widgets.</p>
                                </div>
                            </div>
                            <!-- table responsive -->
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Heading 1</th>
                                            <th scope="col">Heading 2</th>
                                            <th scope="col">Heading 3</th>
                                            <th scope="col">Heading 4</th>
                                            <th scope="col">Heading 5</th>
                                            <th scope="col">Heading 6</th>
                                            <th scope="col">Heading 7</th>
                                            <th scope="col">Heading 8</th>
                                            <th scope="col">Heading 9</th>
                                            <th scope="col">Heading 10</th>
                                            <th scope="col">Heading 11</th>
                                            <th scope="col">Heading 12</th>
                                            <th scope="col">Heading 13</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Michael Right</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Right</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Right</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<button class="btn btn-danger" id="cek"> tombol </button>
<script src={{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js' ) }}></script>
<script src= {{ asset( 'js/bootstrap.bundle.min.js' ) }} ></script>
<script src= {{ asset( 'js/main.js' ) }}></script>
<script src= {{ asset( 'js/jquery-3.6.0.min.js' ) }}></script>


</body>
</html>
