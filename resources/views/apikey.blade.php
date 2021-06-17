<?php

function http_request($url){
    // persiapkan curl
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, $url);

    // set user agent
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    // return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string
    $output = curl_exec($ch);
    // tutup curl
    curl_close($ch);
    // mengembalikan hasil curl
    return $output;
}

$url = http_request("http://10.62.162.173:9240/_cat/recovery/gateway_default_analytics?format=json&pretty=true");

// ubah string JSON menjadi array
$URL = json_decode($url, TRUE);

?>

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


        <section class="section">
            <div class="row" id="table-responsive">
                <div class="col-12">
                    <div class="page-heading">
                        <div class="page-title">
                            <div class="row">
                                <div class="col-12 col-md-6 order-md-1 order-last">
                                    <h3>API</h3>
                                    <p class="text-subtitle text-muted">GET from "http://10.62.162.173:9240/_cat/recovery/gateway_default_analytics?format=json&pretty=true"</p>
                                </div>

                            </div>
                        </div>
                        <section class="section">
                            <div class="card">

                                <div class="card-body">
                                    <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><select class="dataTable-selector form-select"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select><label>entries per page</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div></div><div class="dataTable-container"><table class="table table-striped dataTable-table" id="table1">
                                        <thead>
                                            <tr>
                                                <th scope="col">index</th>
                                                <th scope="col">shard</th>
                                                <th scope="col">time</th>
                                                <th scope="col">type</th>
                                                <th scope="col">stage</th>
                                                <th scope="col">source_host</th>
                                                <th scope="col">source_node</th>
                                                <th scope="col">target_host</th>
                                                <th scope="col">target_node</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <?php
                                                for ($i=0; $i <count($URL) ; $i++) {
                                                    echo '<tr>
                                                         <td>'.$URL{$i}['index'].'</td>
                                                         <td>'.$URL{$i}['shard'].'</td>
                                                         <td>'.$URL{$i}['time'].'</td>
                                                         <td>'.$URL{$i}['type'].'</td>
                                                         <td>'.$URL{$i}['stage'].'</td>
                                                         <td>'.$URL{$i}['source_host'].'</td>
                                                         <td>'.$URL{$i}['source_node'].'</td>
                                                         <td>'.$URL{$i}['target_host'].'</td>
                                                         <td>'.$URL{$i}['target_node'].'</td>
                                                        <td>
                                                             <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#modal'.$i.'">
                                                             Show more
                                                             </button>
                                                         </td>
                                                         </tr>';
                                                }
                                                ?>

                                            </tr>
                                        </tbody>
                                    </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 10 of 26 entries</div><ul class="pagination pagination-primary float-end dataTable-pagination"><li class="page-item pager"><a href="#" class="page-link" data-page="1">‹</a></li><li class="page-item active"><a href="#" class="page-link" data-page="1">1</a></li><li class="page-item"><a href="#" class="page-link" data-page="2">2</a></li><li class="page-item"><a href="#" class="page-link" data-page="3">3</a></li><li class="page-item pager"><a href="#" class="page-link" data-page="2">›</a></li></ul></div></div>
                                </div>
                            </div>

                        </section>
                    </div>
                            <!-- table responsive -->
                            <?php
                                for ($i=0; $i < count($URL); $i++) {
                                    echo '<div class="modal fade " id="modal'.$i.'" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle"> GET API
                                            </h5>

                                        </div>
                                        <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-title">Detail data</h5>
                                                    </div>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <form class="form form-horizontal">
                                                                <div class="form-body">
                                                                    <div class="row mr-auto">
                                                                        <div class="col-md-4">
                                                                            <h6>index </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <label>'.$URL{$i}['index'].'</label>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>shard </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['shard'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>time </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['time'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>type </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['type'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>stage </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['stage'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>source_host </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['source_host'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>source_node </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['source_node'].'</lable>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <h6>target_host </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['target_host'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>target_node </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['target_node'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>repository </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['repository'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>snapshot </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <label>'.$URL{$i}['snapshot'].'</label>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>files </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['files'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>files_recovered </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['files_recovered'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>files_percent </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['files_percent'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>files_total </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['files_total'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>bytes </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['bytes'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>bytes </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['bytes'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>bytes_recovered </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['bytes_recovered'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>bytes_percent </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['bytes_percent'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>bytes_total </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['bytes_total'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>translog_ops </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['translog_ops'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>translog_ops_recovered </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['translog_ops_recovered'].'</lable>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <h6>translog_ops_percent </h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>=</h6>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <lable>'.$URL{$i}['translog_ops_percent'].'</lable>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Accept</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                        </div>
                                    </div>';
                                }
                            ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<script>

});
</script>
<script src={{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js' ) }}></script>
<script src= {{ asset( 'js/bootstrap.bundle.min.js' ) }} ></script>
<script src= {{ asset( 'js/main.js' ) }}></script>
<script src= {{ asset( 'js/jquery-3.6.0.min.js' ) }}></script>


</body>
</html>

{{-- cadangan --}}
{{-- <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><select class="dataTable-selector form-select"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select><label>entries per page</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div></div><div class="dataTable-container"><table class="table table-striped dataTable-table" id="table1"> --}}
{{-- <thead>
                                            <tr>
                                                <th scope="col">index</th>
                                                <th scope="col">shard</th>
                                                <th scope="col">time</th>
                                                <th scope="col">type</th>
                                                <th scope="col">stage</th>
                                                <th scope="col">source_host</th>
                                                <th scope="col">source_node</th>
                                                <th scope="col">target_host</th>
                                                <th scope="col">target_node</th>
                                                <th scope="col">respisitory</th>
                                                <th scope="col">snapshot</th>
                                                <th scope="col">files</th>
                                                <th scope="col">files_recovered</th>
                                                <th scope="col">files_percent</th>
                                                <th scope="col">files_total</th>
                                                <th scope="col">bytes</th>
                                                <th scope="col">bytes_recovered</th>
                                                <th scope="col">bytes_percent</th>
                                                <th scope="col">bytes_total</th>
                                                <th scope="col">translog_ops</th>
                                                <th scope="col">translog_ops_recovered</th>
                                                <th scope="col">translog_ops_percent</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="data">
                                            {{--
                                                // foreach ($URL as $key => $value) {
                                                //     echo '<tr>
                                                //         <td>'.$value['index'].'</td>
                                                //         <td>'.$value['shard'].'</td>
                                                //         <td>'.$value['time'].'</td>
                                                //         <td>'.$value['type'].'</td>
                                                //         <td>'.$value['stage'].'</td>
                                                //         <td>'.$value['source_host'].'</td>
                                                //         <td>'.$value['source_node'].'</td>
                                                //         <td>'.$value['target_host'].'</td>
                                                //         <td>'.$value['target_node'].'</td>
                                                //         <td>'.$value['repository'].'</td>
                                                //         <td>'.$value['snapshot'].'</td>
                                                //         <td>'.$value['files'].'</td>
                                                //         <td>'.$value['files_recovered'].'</td>
                                                //         <td>'.$value['files_percent'].'</td>
                                                //         <td>'.$value['files_total'].'</td>
                                                //         <td>'.$value['bytes'].'</td>
                                                //         <td>'.$value['bytes_recovered'].'</td>
                                                //         <td>'.$value['bytes_percent'].'</td>
                                                //         <td>'.$value['bytes_total'].'</td>
                                                //         <td>'.$value['translog_ops'].'</td>
                                                //         <td>'.$value['translog_ops_recovered'].'</td>
                                                //         <td>'.$value['translog_ops_percent'].'</td>
                                                //         <td></td>
                                                //         </tr>';
                                                }
                                                ?></tr> --}}
