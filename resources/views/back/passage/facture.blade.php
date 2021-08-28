<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>company invoice - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="page-content container">
    <div class="page-header text-blue-d2">
        <h1 class="page-title text-secondary-d1">
            Facture
            <small class="page-info">
                <i class="fa fa-angle-double-right text-80"></i>
                $ID_facture
            </small>
        </h1>

        <div class="page-tools">
            <div class="action-buttons">
                <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print" onclick="window.print()">
                    <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                    Print
                </a>
                <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF">
                    <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                    Export
                </a>
            </div>
        </div>
    </div>

    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center text-150">
                            <li ><i href="/v5.15/icons/anchor?style=regular" class="router-link-active w-100 link color-inherit hover-orange6 flex flex-column justify-center items-center"><svg aria-hidden="true" focusable="false" data-icon="anchor" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-anchor fa-w-18 fa-fw fa-2x"><path fill="currentColor" d="M571.515 331.515l-67.029-67.029c-4.686-4.686-12.284-4.686-16.971 0l-67.029 67.029c-7.56 7.56-2.206 20.485 8.485 20.485h44.268C453.531 417.326 380.693 456.315 312 462.865V216h60c6.627 0 12-5.373 12-12v-24c0-6.627-5.373-12-12-12h-60v-11.668c32.456-10.195 56-40.512 56-76.332 0-44.183-35.817-80-80-80s-80 35.817-80 80c0 35.82 23.544 66.138 56 76.332V168h-60c-6.627 0-12 5.373-12 12v24c0 6.627 5.373 12 12 12h60v246.865C195.192 456.304 122.424 417.176 102.762 352h44.268c10.691 0 16.045-12.926 8.485-20.485l-67.029-67.029c-4.686-4.686-12.284-4.686-16.971 0l-67.03 67.029C-3.074 339.074 2.28 352 12.971 352h40.284C73.657 451.556 181.238 512 288 512c113.135 0 215.338-65.3 234.745-160h40.284c10.691 0 16.045-12.926 8.486-20.485zM288 48c17.645 0 32 14.355 32 32s-14.355 32-32 32-32-14.355-32-32 14.355-32 32-32z" class=""></path></svg> <span class="gray7 dn db-ns o-60 tc f2">Port de plaisance Sidi Fradj</span></i></li>
                            
                        </div>
                    </div>
                </div>
                <!-- .row -->

                <hr class="row brc-default-l1 mx-n1 mb-4" />

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <span class="text-sm text-grey-m2 align-middle">Nom :</span>
                            <span class="text-600 text-110 text-blue align-middle">{{$passage->client->nom}}</span>
                        </div>
                        <div>
                            <span class="text-sm text-grey-m2 align-middle">Nom bateau:</span>
                            <span class="text-600 text-110 text-blue align-middle">{{$passage->bateau->nom}}</span>
                        </div>
                        <div>
                            <span class="text-sm text-grey-m2 align-middle">Place:</span>
                            <span class="text-600 text-110 text-blue align-middle">$nom_place</span>
                        </div>
                        
                            
              
                    </div>
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2">
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                Facture
                            </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span> $id_facture</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90"> Date:</span> $date</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90"> Numero CCP:</span> 8949816515419781</div>
                        
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="mt-4">
                    <div class="row text-600 text-white bgc-default-tp1 py-25">
                        <div class="d-none d-sm-block col-1">#</div>
                        <div class="col-9 col-sm-5">Description</div>
                    
                        <div class="d-none d-sm-block col-sm-2">Unité/Prix</div>
                        
                    </div>

                    <div class="text-95 text-secondary-d3">
                        <div class="row mb-2 mb-sm-0 py-25">
                            <div class="d-none d-sm-block col-1">1</div>
                            <div class="col-9 col-sm-5">Droit de passage</div>
                            <div class="d-none d-sm-block col-2">$droit_passage</div>
                            
                        </div>

                        <div class="row mb-2 mb-sm-0 py-25">
                            <div class="d-none d-sm-block col-1">2</div>
                            <div class="col-9 col-sm-5">TVA(9%) </div>
                            <div class="d-none d-sm-block col-2">$tva</div>
                            
                        </div>

                        <div class="text-95 text-secondary-d3">
                            <div class="row mb-2 mb-sm-0 py-25">
                            <div class="d-none d-sm-block col-1">3</div>
                            <div class="col-9 col-sm-5">Timbre</div>
                            <div class="d-none d-sm-block col-2">$timbre</div>
                            
                        </div>
                    </div>
                    <div class="text-95 text-secondary-d3">
                    <div class="row mb-2 mb-sm-0 py-25">
                        <div class="d-none d-sm-block col-1">4</div>
                        <div class="col-9 col-sm-5">Date debut</div>
                        <div class="d-none d-sm-block col-2">$date_debut </div>

                          
                        
                    </div>
                    <div class="text-95 text-secondary-d3">
                    <div class="row mb-2 mb-sm-0 py-25">
                        <div class="d-none d-sm-block col-1">5</div>
                        <div class="col-9 col-sm-5">Date fin</div>
                        <div class="d-none d-sm-block col-2">$date_fin</div>

                          
                        
                    </div>
                 <div class="text-95 text-secondary-d3">
                    <div class="row mb-2 mb-sm-0 py-25">
                        <div class="d-none d-sm-block col-1">6</div>
                        <div class="col-9 col-sm-5">Nombre de jours</div>
                        <div class="d-none d-sm-block col-2">$nombre_jours</div>

                          
                        
                    </div>
                    </div>

                    <div class="row border-b-2 brc-default-l2"></div>

                    <!-- or use a table instead -->
                    <!--
            <div class="table-responsive">
                <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                    <thead class="bg-none bgc-default-tp1">
                        <tr class="text-white">
                            <th class="opacity-2">#</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>Unit Price</th>
                            <th width="140">Amount</th>
                        </tr>
                    </thead>

                    <tbody class="text-95 text-secondary-d3">
                        <tr></tr>
                        <tr>
                            <td>1</td>
                            <td>Domain registration</td>
                            <td>2</td>
                            <td class="text-95">$10</td>
                            <td class="text-secondary-d2">$20</td>
                        </tr> 
                    </tbody>
                </table>
            </div>
            -->


                            <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                <div class="col-7 text-right">
                                    Total à payer :
                                </div>
                                <div class="col-5">
                                    <span class="text-150 text-success-d3 opacity-2">2,475</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr />

                    
                </div>
            </div>
        </div>
    </div>
</div>


<style type="text/css">
body{
    margin-top:20px;
    color: #484b51;
}
.text-secondary-d1 {
    color: #728299!important;
}
.page-header {
    margin: 0 0 1rem;
    padding-bottom: 1rem;
    padding-top: .5rem;
    border-bottom: 1px dotted #e2e2e2;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
}
.page-title {
    padding: 0;
    margin: 0;
    font-size: 1.75rem;
    font-weight: 300;
}
.brc-default-l1 {
    border-color: #dce9f0!important;
}

.ml-n1, .mx-n1 {
    margin-left: -.25rem!important;
}
.mr-n1, .mx-n1 {
    margin-right: -.25rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

.text-grey-m2 {
    color: #888a8d!important;
}

.text-success-m2 {
    color: #86bd68!important;
}

.font-bolder, .text-600 {
    font-weight: 600!important;
}

.text-110 {
    font-size: 110%!important;
}
.text-blue {
    color: #478fcc!important;
}
.pb-25, .py-25 {
    padding-bottom: .75rem!important;
}

.pt-25, .py-25 {
    padding-top: .75rem!important;
}
.bgc-default-tp1 {
    background-color: rgba(121,169,197,.92)!important;
}
.bgc-default-l4, .bgc-h-default-l4:hover {
    background-color: #f3f8fa!important;
}
.page-header .page-tools {
    -ms-flex-item-align: end;
    align-self: flex-end;
}

.btn-light {
    color: #757984;
    background-color: #f5f6f9;
    border-color: #dddfe4;
}
.w-2 {
    width: 1rem;
}

.text-120 {
    font-size: 120%!important;
}
.text-primary-m1 {
    color: #4087d4!important;
}

.text-danger-m1 {
    color: #dd4949!important;
}
.text-blue-m2 {
    color: #68a3d5!important;
}
.text-150 {
    font-size: 150%!important;
}
.text-60 {
    font-size: 60%!important;
}
.text-grey-m1 {
    color: #7b7d81!important;
}
.align-bottom {
    vertical-align: bottom!important;
}




@media print {
		head *{
			 visibility: hidden;
		}
        body * {
            visibility: visible; // part to hide at the time of print
            
        }

        #printBtn {
            visibility: hidden !important; // To hide 
        }

        #page-wrapper * {
            visibility: visible; // Print only required part
            text-align: left;
            -webkit-print-color-adjust: exact !important;
        }
    }


























</style>

<script type="text/javascript">

</script>
</body>
</html>