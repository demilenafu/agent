<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

        <title>Full-Stack Developer Test</title>

        <style type="text/css">
            body {
                background-color: #f6f6f6;
            }
            .noSpinners{
                -webkit-appearance: none;
                -moz-appearance: textfield;
                margin: 0;
            }
            a.noLine:hover{
                text-decoration: none;
            }
            a.noLine:visited{
                text-decoration: none;  
            }
            a.noLine:link{
                text-decoration: none;  
            }
            a.noLine:active{
                text-decoration: none;  
            }
            body,td,th {
                font-family: cal-r;
                background-color:#f6f6f6;
            }
        </style>

        <script src="{{asset('js/jquery-2.2.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/zipcode.js')}}"></script>
        

    </head>
    <body>
        <div class="col-xs-12 col-sm-12 col-form-info col-cell">
            <div class="row row-head-forms">
                <div class="col-xs-12 col-sm-12">
                    <h1>Full-Stack Developer Test </h1>
                    <h2>AGENTS</h2>
                </div>
            </div>
        </div>
        <div id="zipcode" class="grl-form clearfix zipcode">
            <div class="panel-content-3" style>   
            <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>">
                <form id="form-zipcode" class="grl-form clearfix form-zipcode">
                    <div class="panel-body">
                        <div class="col-xs-12 col-sm-12">
                            <div class="row row-percents">
                                <div class="col-xs-12 col-sm-12">
                                    <h3> Agent 1</h3>
                                    <fielset class="con-field field-type1">
                                        <label style="text-align: center;">Zip Code</label>
                                        <input class="input ag1" id="ag1" name="ag1" type="number" step="any" lang="en" style="width:50%;" />
                                    </fielset>
                                </div>  
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="row row-percents">
                                <div class="col-xs-12 col-sm-12">
                                <h3> Agent 2</h3>
                                    <fielset class="con-field field-type1">
                                        <label style="text-align: center;">Zip Code</label>
                                        <input class="input ag2" id="ag2" name="ag2" type="number" step="any" lang="en" style="width:50%;"/>
                                    </fielset>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div align="center">
                            <button class="btn btn-blue btn-big" type="submit" >
                            MATCH
                            </button> 
                        </div>                                   
                    </div>
                </form>

                <form action="obtenerLatLon" method="post" enctype="multipart/form-data" id="catastro">
                    <textarea class="input es1" id="rna8" name="rna8" type="text" step="any" lang="en" rows="4" cols="50"></textarea> 
                </form>
                
                <div id="mensaje"></div>
            </div>
        </div>        
    </body>
</html>