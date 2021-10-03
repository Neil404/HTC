@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header p-0">
                        <div class="d-flex justify-content-between">
                            <div class="p-2">
                                <img src="{{ asset('images/htc.png') }}" width="75" height="75"
                                    class="d-inline-block align-top mr-3" alt="">
                            </div>
                            <div class="flex-grow-1 align-content-center flex-wrap">
                                <div class="text-center h4 mt-2">
                                    Senior High School Class Record
                                </div>
                                <div class="d-flex justify-content-between mt-4">
                                    <div>
                                        <b>SCHOOL NAME</b>
                                        <b class="font-weight-normal">HOLY TRINITY COLLEGE</b>
                                    </div>
                                    <div>
                                        <b>SCHOOL YEAR</b>
                                        <b class="font-weight-normal">2021-2022</b>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <img src="{{ asset('images/deped.png') }}" width="75" height="75"
                                    class="d-inline-block align-top ml-3" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 pb-3">
                    <table cellspacing="0" border="0">
                        <colgroup width="31"></colgroup>
                        <colgroup width="213"></colgroup>
                        <colgroup span="3" width="24"></colgroup>
                        <colgroup span="10" width="33"></colgroup>
                        <colgroup width="47"></colgroup>
                        <colgroup width="81"></colgroup>
                        <colgroup width="53"></colgroup>
                        <colgroup span="10" width="33"></colgroup>
                        <colgroup width="47"></colgroup>
                        <colgroup width="74"></colgroup>
                        <colgroup width="53"></colgroup>
                        <colgroup width="47"></colgroup>
                        <colgroup span="2" width="53"></colgroup>
                        <colgroup span="2" width="76"></colgroup>
                        <tr>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                colspan=5 rowspan=2 height="66" align="center" valign=middle><b>
                                    <font face="Arial">FIRST QUARTER</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000"
                                colspan=5 rowspan=2 align="center" valign=middle><b>
                                    <font face="Arial">GRADE &amp; SECTION: </font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-right: 2px solid #000000"
                                colspan=6 rowspan=2 align="center" valign=middle sdval="0" sdnum="1033;0;0;;">
                                <font face="Arial"><br></font>
                            </td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000" colspan=2
                                align="right" valign=middle sdnum="1033;0;0;;"><b>
                                    <font face="Arial">TEACHER:</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-right: 2px solid #000000"
                                colspan=10 align="center" valign=middle sdval="0" sdnum="1033;0;0;;">
                                <font face="Arial"><br></font>
                            </td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000"
                                colspan=2 align="right" valign=middle><b>
                                    <font face="Arial">SUBJECT:</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-right: 2px solid #000000"
                                colspan=6 align="center" valign=middle sdval="0" sdnum="1033;0;0;;">
                                <font face="Arial"><br></font>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000" colspan=2
                                align="right" valign=middle sdnum="1033;0;0;;"><b>
                                    <font face="Arial">GRADING PERIOD:</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-right: 2px solid #000000"
                                colspan=10 align="center" valign=middle sdnum="1033;0;0;;">
                                <font face="Arial">1ST</font>
                            </td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000"
                                colspan=2 align="right" valign=middle sdnum="1033;0;0;;"><b>
                                    <font face="Arial">TRACK:</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-right: 2px solid #000000"
                                colspan=6 align="center" valign=middle sdnum="1033;0;0;;"><b>
                                    <font face="Arial">Core Subject (All Tracks)</font>
                                </b></td>
                        </tr>
                        <tr>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                colspan=5 rowspan=2 height="98" align="center" valign=middle><b>
                                    <font face="Arial" size=4>LEARNERS' NAMES</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 3px solid #000000"
                                colspan=13 align="center" valign=middle><b>
                                    <font face="Arial" size=4>WRITTEN WORK (25%)</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 3px solid #000000; border-right: 3px solid #000000"
                                colspan=13 align="center" valign=middle><b>
                                    <font face="Arial" size=4>PERFORMANCE TASKS (50%)</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-right: 3px solid #000000"
                                colspan=3 align="center" valign=middle><b>
                                    <font face="Arial" size=4><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 3px solid #000000; border-right: 3px solid #000000"
                                rowspan=3 align="center" valign=middle sdnum="1033;0;0.00"><b>
                                    <font face="Arial">Initial<br>Grade</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 3px solid #000000; border-right: 2px solid #000000"
                                rowspan=3 align="center" valign=middle sdnum="1033;0;0.00"><b>
                                    <font face="Arial">Quarterly<br>Grade</font>
                                </b></td>
                        </tr>
                        <tr>
                            <td style="border-left: 2px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="1" sdnum="1033;"><b>
                                    <font face="Arial">1</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="2" sdnum="1033;"><b>
                                    <font face="Arial">2</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="3" sdnum="1033;"><b>
                                    <font face="Arial">3</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="4" sdnum="1033;"><b>
                                    <font face="Arial">4</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="5" sdnum="1033;"><b>
                                    <font face="Arial">5</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="6" sdnum="1033;"><b>
                                    <font face="Arial">6</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="7" sdnum="1033;"><b>
                                    <font face="Arial">7</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="8" sdnum="1033;"><b>
                                    <font face="Arial">8</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="9" sdnum="1033;"><b>
                                    <font face="Arial">9</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000" align="center" valign=middle sdval="10"
                                sdnum="1033;"><b>
                                    <font face="Arial">10</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                align="left" valign=middle><b>
                                    <font face="Arial">Total</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                align="center" valign=middle sdnum="1033;0;0.00"><b>
                                    <font face="Arial">PS</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 3px solid #000000"
                                align="center" valign=middle sdnum="1033;0;0%"><b>
                                    <font face="Arial">WS</font>
                                </b></td>
                            <td style="border-left: 3px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="1" sdnum="1033;"><b>
                                    <font face="Arial">1</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="2" sdnum="1033;"><b>
                                    <font face="Arial">2</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="3" sdnum="1033;"><b>
                                    <font face="Arial">3</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="4" sdnum="1033;"><b>
                                    <font face="Arial">4</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="5" sdnum="1033;"><b>
                                    <font face="Arial">5</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="6" sdnum="1033;"><b>
                                    <font face="Arial">6</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="7" sdnum="1033;"><b>
                                    <font face="Arial">7</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="8" sdnum="1033;"><b>
                                    <font face="Arial">8</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"
                                valign=middle sdval="9" sdnum="1033;"><b>
                                    <font face="Arial">9</font>
                                </b></td>
                            <td style="border-left: 1px solid #000000" align="center" valign=middle sdval="10"
                                sdnum="1033;"><b>
                                    <font face="Arial">10</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                align="left" valign=middle><b>
                                    <font face="Arial">Total</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                align="center" valign=middle sdnum="1033;0;0.00"><b>
                                    <font face="Arial">PS</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 3px solid #000000"
                                align="center" valign=middle sdnum="1033;0;0%"><b>
                                    <font face="Arial">WS</font>
                                </b></td>
                            <td align="center" valign=middle><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                align="center" valign=middle sdnum="1033;0;0.00"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 3px solid #000000"
                                align="center" valign=middle sdnum="1033;0;0%"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                        </tr>
                        <tr>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                colspan=5 height="24" align="right" valign=bottom><b>
                                    <font face="Arial">HIGHEST POSSIBLE SCORE</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000" align="center"
                                valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                align="center" valign=bottom sdval="100" sdnum="1033;0;0.00"><b>
                                    <font face="Arial">100.00</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 3px solid #000000"
                                align="center" valign=bottom sdval="0.5" sdnum="1033;0;0%"><b>
                                    <font face="Arial">50%</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000" align="center"
                                valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                align="center" valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                align="center" valign=bottom sdval="100" sdnum="1033;0;0.00"><b>
                                    <font face="Arial">100.00</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 3px solid #000000"
                                align="center" valign=bottom sdval="0.5" sdnum="1033;0;0%"><b>
                                    <font face="Arial">50%</font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000" align="center"
                                valign=bottom><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                align="center" valign=bottom sdnum="1033;0;0.00"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 3px solid #000000"
                                align="center" valign=bottom sdnum="1033;0;0%"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                        </tr>
                        <tr>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                colspan=5 height="24" align="center" valign=middle bgcolor="#BFBFBF"><b>
                                    <font face="Arial">MALE </font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF" sdnum="1033;0;0.00"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 3px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF" sdnum="1033;0;0.00"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 3px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF" sdnum="1033;0;0.00"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 3px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF" sdnum="1033;0;0.00"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000" align="center"
                                valign=bottom bgcolor="#BFBFBF"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF" sdnum="1033;0;0.00"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 3px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF" sdnum="1033;0;0.00"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 3px solid #000000; border-right: 3px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF" sdnum="1033;0;0.00"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                            <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-right: 2px solid #000000"
                                align="center" valign=bottom bgcolor="#BFBFBF" sdnum="1033;0;0"><b>
                                    <font face="Arial"><br></font>
                                </b></td>
                        </tr>
                        @for ($i = 0; $i < 10; $i++)
                            <tr>
                                <td style="border-bottom: 1px solid #000000; border-left: 2px solid #000000" height="24"
                                    align="center" valign=bottom sdval="1" sdnum="1033;"><b>
                                        <font face="Arial">{{ $i + 1 }}</font>
                                    </b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                    colspan=4 align="left" valign=bottom sdval="0" sdnum="1033;0;0;;">
                                    <font face="Arial"><br></font>
                                </td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=middle>
                                    <font color="#000000"><br></font>
                                </td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=middle>
                                    <font color="#000000"><br></font>
                                </td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=middle>
                                    <font color="#000000"><br></font>
                                </td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=middle>
                                    <font color="#000000"><br></font>
                                </td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=middle>
                                    <font color="#000000"><br></font>
                                </td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=middle>
                                    <font color="#000000"><br></font>
                                </td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=middle>
                                    <font color="#000000"><br></font>
                                </td>
                                <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=bottom>
                                    <font face="Arial"><br></font>
                                </td>
                                <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=bottom>
                                    <font face="Arial"><br></font>
                                </td>
                                <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=bottom>
                                    <font face="Arial"><br></font>
                                </td>
                                <td style="border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                    align="center" valign=bottom sdnum="1033;0;0">
                                    <font face="Arial"><br></font>
                                </td>
                                <td style="border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                    align="center" valign=bottom sdnum="1033;0;0.00"><b>
                                        <font face="Arial"><br></font>
                                    </b></td>
                                <td style="border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 3px solid #000000"
                                    align="center" valign=bottom sdnum="1033;0;0.00"><b>
                                        <font face="Arial"><br></font>
                                    </b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=middle>
                                    <font color="#000000"><br></font>
                                </td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=middle>
                                    <font color="#000000"><br></font>
                                </td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=middle>
                                    <font color="#000000"><br></font>
                                </td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=middle>
                                    <font color="#000000"><br></font>
                                </td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=middle>
                                    <font color="#000000"><br></font>
                                </td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=middle>
                                    <font color="#000000"><br></font>
                                </td>
                                <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=bottom>
                                    <font face="Arial"><br></font>
                                </td>
                                <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=bottom>
                                    <font face="Arial"><br></font>
                                </td>
                                <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=bottom>
                                    <font face="Arial"><br></font>
                                </td>
                                <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=bottom>
                                    <font face="Arial"><br></font>
                                </td>
                                <td style="border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                    align="center" valign=bottom sdnum="1033;0;0">
                                    <font face="Arial"><br></font>
                                </td>
                                <td style="border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                    align="center" valign=bottom sdnum="1033;0;0.00"><b>
                                        <font face="Arial"><br></font>
                                    </b></td>
                                <td style="border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 3px solid #000000"
                                    align="center" valign=bottom sdnum="1033;0;0.00"><b>
                                        <font face="Arial"><br></font>
                                    </b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                                    align="center" valign=middle>
                                    <font color="#000000"><br></font>
                                </td>
                                <td style="border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000"
                                    align="center" valign=bottom bgcolor="#C6EFCE" sdnum="1033;0;0.00"><b>
                                        <font face="Arial" color="#006100"><br></font>
                                    </b></td>
                                <td style="border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 3px solid #000000"
                                    align="center" valign=bottom sdnum="1033;0;0.00"><b>
                                        <font face="Arial"><br></font>
                                    </b></td>
                                <td style="border-bottom: 1px solid #000000; border-left: 3px solid #000000; border-right: 3px solid #000000"
                                    align="center" valign=bottom sdnum="1033;0;0.00"><b>
                                        <font face="Arial"><br></font>
                                    </b></td>
                                <td style="border-bottom: 1px solid #000000; border-right: 2px solid #000000" align="center"
                                    valign=bottom sdnum="1033;0;0"><b>
                                        <font face="Arial"><br></font>
                                    </b></td>
                            </tr>
                        @endfor
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
