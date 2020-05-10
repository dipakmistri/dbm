<!-- <style>
            .inactive{
                opacity:0;
                visibility:hidden;
            }
        </style> -->

<div class="col-sm-12">

    <div class="row">
        <div class="col-12">
            <h3 class="text-">General Setting</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mt-3 tab-card">
                <div class="card-header tab-card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab"
                                aria-controls="One" aria-selected="true">Select Branch</a>
                        </li>
                        <li class="nav-item inactive">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab"
                                aria-controls="Two" aria-selected="false">LWF</a>
                        </li>
                        <li class="nav-item inactive">
                            <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab"
                                aria-controls="Three" aria-selected="false">Late/Early Mark</a>
                        </li>
                        <li class="nav-item inactive">
                            <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab"
                                aria-controls="four" aria-selected="false"> Over Time</a>
                        </li>
                        <li class="nav-item inactive">
                            <a class="nav-link" id="five-tab" data-toggle="tab" href="#five" role="tab"
                                aria-controls="five" aria-selected="false"> PF Limit </a>
                        </li>
                        <li class="nav-item inactive">
                            <a class="nav-link" id="six-tab" data-toggle="tab" href="#six" role="tab"
                                aria-controls="six" aria-selected="false">ESIC Limit</a>
                        </li>
                        <li class="nav-item inactive">
                            <a class="nav-link" id="seven-tab" data-toggle="tab" href="#seven" role="tab"
                                aria-controls="seven" aria-selected="false">Comp-Off</a>
                        </li>
                        <li class="nav-item inactive">
                            <a class="nav-link" id="eight-tab" data-toggle="tab" href="#eight" role="tab"
                                aria-controls="eight" aria-selected="false">Other Settings</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="myTabContent">


                    <!-- home panel start -->
                    <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                        <form action="">
                            <!-- branch -->
                            <div class="form-group row">
                                <label for="State" class="col-sm-2 col-form-label">Branch</label>
                                <div class="col-sm-4">
                                    <select name="branch" id="branch" class="custom-select">
                                        <option value="" selected>Select Branch</option>
                                        <option value="1">Dummy Branch</option>
                                    </select>
                                </div>
                                <!-- Effective date -->
                                <label for="State" class="col-sm-2 col-form-label">Effective Date :</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control">
                                </div>
                            </div>

                            <!-- First row checkbox -->
                            <div class="form-group row">

                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="includeWeekOff"
                                            id="includeWeekOff">
                                        <label class="form-check-label" for="includeWeekOff">Include Week off</label>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="cancelWeekOff" class="form-check-input"
                                            id="cancelWeekOff">
                                        <label class="form-check-label" for="cancelWeekOff">Cancel Week off</label>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="incholiday" class="form-check-input"
                                            id="incholiday">
                                        <label class="form-check-label" for="incholiday">Inc Holiday</label>
                                    </div>
                                </div>

                            </div>
                            <!-- First row checkbox end -->

                            <!-- second row checkbox -->
                            <div class="form-group row">

                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="cancelHoliday" class="form-check-input"
                                            id="cancelHoliday">
                                        <label class="form-check-label" for="cancelHoliday">Cancel Holiday</label>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="overTime" class="form-check-input" id="overTime">
                                        <label class="form-check-label" for="overTime">Over Time</label>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="smsFacility" class="form-check-input"
                                            id="smsFacility">
                                        <label class="form-check-label" for="smsFacility">SMS Facility</label>
                                    </div>
                                </div>

                            </div>
                            <!-- second row checkbox end -->


                            <!-- third row checkbox -->
                            <div class="form-group row">

                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="PF_tax" class="form-check-input" id="PF_tax">
                                        <label class="form-check-label" for="PF_tax">Professional Tax</label>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="PF" class="form-check-input" id="PF">
                                        <label class="form-check-label" for="PF">PF</label>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="LWF" class="form-check-input" id="LWF">
                                        <label class="form-check-label" for="LWF">LWF</label>
                                    </div>
                                </div>

                            </div>
                            <!-- third row checkbox end -->

                            <!-- fourth row checkbox -->
                            <div class="form-group row">

                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="ESIC" class="form-check-input" id="ESIC">
                                        <label class="form-check-label" for="ESIC">ESIC</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="LateMark" class="form-check-input" id="LateMark">
                                        <label class="form-check-label" for="LateMark">Late Mark</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="CompOff" class="form-check-input" id="CompOff">
                                        <label class="form-check-label" for="CompOff">Comp-Off</label>
                                    </div>
                                </div>



                            </div>
                            <!-- fourth row checkbox end -->

                            <!-- fifth row checkbox -->
                            <div class="form-group row">

                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="PWDW" class="form-check-input" id="PWDW">
                                        <label class="form-check-label" for="PWDW">Paid Week Off On Daily Wages</label>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="CustomerAudit" class="form-check-input"
                                            id="CustomerAudit">
                                        <label class="form-check-label" for="CustomerAudit">Customer Audit</label>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="BonusIncrement" class="form-check-input"
                                            id="BonusIncrement">
                                        <label class="form-check-label" for="BonusIncrement">Bonus/Increment</label>
                                    </div>
                                </div>

                            </div>
                            <!-- fifth row checkbox end -->

                            <!-- sixth row checkbox -->
                            <div class="form-group row">

                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <input type="checkbox" name="ISGNPT" class="form-check-input" id="ISGNPT">
                                        <label class="form-check-label" for="ISGNPT">In out , Salary Date , Gratuity ,
                                            Notice Period , Probation , Trainee</label>
                                    </div>
                                </div>
                            </div>
                            <!-- sixth row checkbox end -->

                    </div>
                    <!-- home panel end -->




                    <!-- LWF panel start -->
                    <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                        <p>Labor Welfare and Revenue Settings</p>

                        <div class="form-group row">

                            <label for="applicableMonth" class="col-sm-2 col-form-label">Applicable Month :</label>
                            <div class="col-sm-4">
                                <input type="text" name="applicableMonth" class="form-control" id="applicableMonth">
                            </div>

                            <label for="overAmount" class="col-sm-2 col-form-label">Over Amount :</label>
                            <div class="col-sm-4">
                                <input type="text" name="overAmount" class="form-control" id="overAmount">
                            </div>

                        </div>

                        <div class="form-group row">

                            <label for="minAmount" class="col-sm-2 col-form-label">Min Amount :</label>
                            <div class="col-sm-4">
                                <input type="text" name="minAmount" class="form-control" id="minAmount">
                            </div>

                            <label for="maxAmount" class="col-sm-2 col-form-label">Max Amount :</label>
                            <div class="col-sm-4">
                                <input type="text" name="maxAmount" class="form-control" id="maxAmount">
                            </div>

                        </div>
                    </div>
                    <!-- LWF panel end -->


                    <!--Late early panel start -->
                    <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                        <div class="form-group row">

                            <label for="minAmount" class="col-sm-3 col-form-label">Hours Rate - DaySalary :</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" name="hourrate" class="form-control" id="hourrate">
                                    <input type="text" name="daySalary" class="form-control" id="daySalary">
                                </div>
                            </div>

                        </div>
                        <!-- late mark card  start-->
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                Late Mark
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="lateComingLimit" class="col-sm-3">Late Coming Limit :</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="lateComingLimit" class="form-control"
                                            id="lateComingLimit" value="00:10">
                                    </div>
                                    <!-- -------------->
                                    <div class="col-sm-4">
                                        <div class="form-check float-right">
                                            <input type="checkbox" name="calculateSlabwise" class="form-check-input"
                                                id="LCWH">
                                            <label class="form-check-label" for="LCWH">Late Cal on WO and HO :</label>
                                        </div>
                                    </div>
                                    <!-- -------------->
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input type="checkbox" name="lateInAdjustLeave" class="form-check-input"
                                                id="lateInAdjustLeave">
                                            <label class="form-check-label" for="lateInAdjustLeave">Late In Adjust With
                                                Leave :</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="scenario" id="scenario_1"
                                                value="scenario_1">
                                            <label class="form-check-label" for="scenario_1">Scenario-1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="scenario" id="scenario_2"
                                                value="scenario_2">
                                            <label class="form-check-label" for="scenario_2">Scenario-2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="scenario" id="scenario_3"
                                                value="scenario_3">
                                            <label class="form-check-label" for="scenario_3">Scenario-3</label>
                                        </div>
                                    </div>

                                </div>
                                <hr>

                                <div class="form-group row">

                                    <!-- -------------->

                                    <label for="lateExemptionMaxLimit" class="col-sm-3 col-form-label">Deduction Type
                                        :</label>
                                    <div class="col-sm-3">

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input late_rime" type="radio" name="late_time"
                                                id="hour_late" value="">
                                            <label class="form-check-label" for="hour_late">Hour</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input late_rime" type="radio" name="late_time"
                                                id="day_late" value="">
                                            <label class="form-check-label" for="day_late">Day</label>
                                        </div>
                                    </div>
                                    <!-- -------------->
                                    <!-- -------------->
                                    <label for="adjustDay" class="col-sm-3 col-form-label">Adjust Day :</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="adjustDay" class="form-control" id="adjustDay"
                                            value="0">
                                    </div>
                                    <!-- -------------->
                                </div>

                                <div class="form-group row">

                                    <!-- -------------->
                                    <label for="extraEarlyDeduction" class="col-sm-3 col-form-label">Extra Early
                                        Deduction:</label>
                                    <div class="col-sm-3">
                                        <input type="text" disabled name="extraEarlyDeduction" class="form-control"
                                            id="extraEarlyDeduction" value="0.0">
                                    </div>
                                    <!-- -------------->
                                    <!-- -------------->
                                    <label for="deductionDay" class="col-sm-3 col-form-label">Deduction Days :</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="deductionDay" class="form-control" id="deductionDay"
                                            value="0.0">
                                    </div>
                                    <!-- -------------->
                                </div>

                                <div class="form-group row">

                                    <!-- -------------->
                                    <label for="lateHourUpperRouting" class="col-sm-3 col-form-label">Late Hour Upper
                                        Rounding:</label>
                                    <div class="col-sm-3">
                                        <select name="lateHourUpperRouting" id="lateHourUpperRouting"
                                            class="custom-select">
                                            <option value="0">0</option>
                                        </select>
                                    </div>
                                    <!-- -------------->
                                    <!-- -------------->
                                    <label for="deductilateCountResetOnonDay" class="col-sm-3 col-form-label">Late Count
                                        Reset On :</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="lateCountResetOn" class="form-control"
                                            id="lateCountResetOn" value="0">
                                    </div>
                                    <!-- -------------->
                                </div>

                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="calculateSlabwise">Calculate Slabwise
                                        :</label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="calculateSlabwise" class="form-check-input"
                                                id="calculateSlabwise">
                                        </div>
                                    </div>
                                    <!-- -------------->

                                </div>

                                <div class="form-group row">

                                    <!-- -------------->
                                    <label for="lateComingMaxLimit" class="col-sm-3 col-form-label">Late Coming Max
                                        Limit :</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="lateComingMaxLimit" id="lateComingMaxLimit"
                                            class="form-control">

                                    </div>
                                    <!-- -------------->
                                    <!-- -------------->
                                    <label for="lateCountExemption" class="col-sm-3 col-form-label">Late Count Exemption
                                        :</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="lateCountExemption" class="form-control"
                                            id="lateCountExemption" value="0.0">
                                    </div>
                                    <!-- -------------->
                                </div>

                                <div class="form-group row">

                                    <!-- -------------->

                                    <label for="lateExemptionMaxLimit" class="col-sm-3 col-form-label">Late Exemption
                                        Max Limit :</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="lateExemptionMaxLimit" class="form-control"
                                            id="lateExemptionMaxLimit" value="0.0">
                                    </div>
                                    <!-- -------------->


                                </div>


                            </div>
                        </div>
                        <!-- late mark card end -->

                        <!-- early mark card  start-->
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                Early Mark
                            </div>
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="earlyOutLimit" class="col-sm-3">Early Out Limit :</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="earlyOutLimit" class="form-control" id="earlyOutLimit"
                                            value="00:10">
                                    </div>
                                    <!-- -------------->
                                    <div class="col-sm-4">
                                        <div class="form-check float-right">
                                            <input type="checkbox" name="calculateSlabwise" class="form-check-input"
                                                id="LCWH">
                                            <label class="form-check-label" for="early_LCWH">Late Cal on WO and HO
                                                :</label>
                                        </div>
                                    </div>
                                    <!-- -------------->
                                </div>
                                <div class="form-group row">

                                    <!-- -------------->

                                    <label for="lateExemptionMaxLimit" class="col-sm-3 col-form-label">Deduction Type
                                        :</label>
                                    <div class="col-sm-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input early_time" type="radio" name="early_time"
                                                id="early_hour" value="">
                                            <label class="form-check-label" for="early_hour">Hour</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input early_time" type="radio" name="early_time"
                                                id="early_day" value="">
                                            <label class="form-check-label" for="day">Day</label>
                                        </div>
                                    </div>
                                    <!-- -------------->
                                    <!-- -------------->
                                    <label for="adjustDay_early" class="col-sm-3 col-form-label">Adjust Day :</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="adjustDay_early" class="form-control"
                                            id="adjustDay_early" value="0">
                                    </div>
                                    <!-- -------------->
                                </div>

                                <div class="form-group row">

                                    <!-- -------------->
                                    <label for="extraEarlyDeduction" class="col-sm-3 col-form-label">Extra Early
                                        Deduction:</label>
                                    <div class="col-sm-3">
                                        <input type="text" disabled name="extraEarlyDeduction" class="form-control"
                                            id="extraEarlyDeduction" value="0.0">
                                    </div>
                                    <!-- -------------->
                                    <!-- -------------->
                                    <label for="deductionDay_early" class="col-sm-3 col-form-label">Deduction Days
                                        :</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="deductionDay_early" class="form-control"
                                            id="deductionDay_early" value="0.0">
                                    </div>
                                    <!-- -------------->
                                </div>
                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label for="earlyHourUpperRouting" class="col-sm-3 col-form-label">Early Hour Upper
                                        Rounding :</label>
                                    <div class="col-sm-3">
                                        <select name="earlyHourUpperRouting" id="earlyHourUpperRouting"
                                            class="custom-select">
                                            <option value="0">0</option>
                                        </select>
                                    </div>
                                    <!-- -------------->

                                    <!-- -------------->
                                    <label for="earlyCountResetOn" class="col-sm-3 col-form-label">Early Count Reset On
                                        :</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="earlyCountResetOn" class="form-control"
                                            id="earlyCountResetOn" value="0">
                                    </div>
                                    <!-- -------------->
                                </div>
                                <!-- ----------------------------------------- -->
                                <!-- ----------------------------------------- -->
                                <div class="form-group row">
                                    <label for="calculateSlabwise_early" class="col-sm-3 col-form-label">Calculate
                                        Slabwise</label>
                                    <!-- -------------->
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="calculateSlabwise_early"
                                                class="form-check-input" id="calculateSlabwise_early">
                                            <!-- <label class="form-check-label" for="calculateSlabwise_early">Calculate
                                                Slabwise
                                                :</label> -->
                                        </div>
                                    </div>

                                    <label class="col-sm-3 col-form-label" for="earlyOutAdjustWithLeave">Early Out
                                        Adjust With Leave
                                        :</label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="earlyOutAdjustWithLeave"
                                                class="form-check-input" id="earlyOutAdjustWithLeave">

                                        </div>
                                    </div>
                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->

                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label for="earlyOutMaxMaxLimit" class="col-sm-3 col-form-label">Early Out Max Limit
                                        :</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="earlyOutMaxMaxLimit" id="earlyOutMaxMaxLimit"
                                            class="form-control">

                                    </div>
                                    <!-- -------------->
                                    <!-- -------------->
                                    <label for="earlyCountExemption" class="col-sm-3 col-form-label">Early Count
                                        Exemption :</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="earlyCountExemption" class="form-control"
                                            id="earlyCountExemption" value="0.0">
                                    </div>
                                    <!-- -------------->
                                </div>
                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->

                                    <label for="earlyExemptionMaxLimit" class="col-sm-3 col-form-label">Early Exemption
                                        Max Limit :</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="earlyExemptionMaxLimit" class="form-control"
                                            id="earlyExemptionMaxLimit" value="0.0">
                                    </div>


                                    <label class="col-sm-3 col-form-label" for="earlyCountCF">Early Count CF :</label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="earlyCountCF" class="form-check-input"
                                                id="earlyCountCF">
                                        </div>
                                    </div>
                                    <!-- -------------->
                                </div>
                                <!-- ----------------------------------------- -->

                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="extraExemption">Extra Exemption </label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="extraExemption" class="form-check-input"
                                                id="extraExemption">
                                        </div>
                                    </div>
                                    <!-- -------------->
                                </div>
                                <!-- ----------------------------------------- -->

                            </div>
                        </div>
                        <!-- early mark card end -->


                    </div>
                    <!-- late Early panel end -->

                    <!-- Over Time panel start -->
                    <div class="tab-pane fade p-3" id="four" role="tabpanel" aria-labelledby="four-tab">
                        <div class="card">
                            <div class="card-header bg-info text-white">Over time</div>
                            <div class="card-body">
                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="extraOverTime">Extra Over Time :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="extraOverTime" class="form-control" id="extraOverTime">
                                    </div>
                                    <!-- -------------->

                                    <!-- -------------->
                                    <label class="col-sm-3 check-form-label" for="weekOfWorkTransfer">Week off Work
                                        Transfer To OT :
                                    </label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="weekOfWorkTransfer" class="form-check-input"
                                                id="weekOfWorkTransfer">

                                        </div>
                                    </div>

                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->

                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="otLimitMin">OT Limit(Min) :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="otLimitMin" class="form-control" id="otLimitMin">
                                    </div>
                                    <!-- -------------->

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="otLimitMax">OT Limit(Max) :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="otLimitMax" class="form-control" id="otLimitMax">
                                    </div>

                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->

                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="otDayRate">OT Day Rate(Basic) :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="otDayRate" class="form-control" id="otDayRate">
                                    </div>
                                    <!-- -------------->

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="otHourRate">OT Hour Rate (Day Salary) :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="otHourRate" class="form-control" id="otHourRate">
                                    </div>

                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->

                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 check-form-label" for="AutoOtCalculation">Auto OT Calculation
                                        :
                                    </label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="AutoOtCalculation" class="form-check-input"
                                                id="AutoOtCalculation">

                                        </div>
                                    </div>
                                    <br>
                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->
                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 check-form-label" for="isNegativeOtAllowed">Is Negative OT
                                        Allowed :
                                    </label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="isNegativeOtAllowed" class="form-check-input"
                                                id="isNegativeOtAllowed">

                                        </div>
                                    </div>
                                    <br>

                                    <!-- -------------->
                                    <!-- -------------->
                                    <label class="col-sm-3 check-form-label" for="OdTransferToOt">OD transfer to OT :
                                    </label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="OdTransferToOt" class="form-check-input"
                                                id="OdTransferToOt">

                                        </div>
                                    </div>
                                    <br>

                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->
                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 check-form-label" for="MDHaWithOtHours">Monthly Deficit Hours
                                        Adjust With OT Hours :
                                    </label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="MDHaWithOtHours" class="form-check-input"
                                                id="MDHaWithOtHours">

                                        </div>
                                    </div>
                                    <br>

                                    <!-- -------------->
                                    <!-- -------------->
                                    <label class="col-sm-3 check-form-label" for="OCCWithEditableHours">OD Considered as
                                        Compoff with Editable Hours :
                                    </label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="OCCWithEditableHours" class="form-check-input"
                                                id="OCCWithEditableHours">

                                        </div>
                                    </div>
                                    <br>

                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->
                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 check-form-label" for="RoundingOffOtHours">Rounding off OT
                                        Hours :
                                    </label>
                                    <div class="col-sm-3">
                                        <select name="RoundingOffOtHours" id="RoundingOffOtHours" class="custom-select">
                                            <option value="0">0</option>
                                        </select>
                                    </div>

                                    <!-- -------------->
                                    <!-- -------------->
                                    <label class="col-sm-3 check-form-label" for="roundOffOn">Roundoff on :
                                    </label>
                                    <div class="col-sm-3">
                                        <select name="roundOffOn" id="roundOffOn" class="custom-select">
                                            <option value="Lower">Lower</option>
                                        </select>
                                    </div>

                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->

                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="WeekDayOvertimeRate">WeekDay Overtime
                                        Rate :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="WeekDayOvertimeRate" class="form-control"
                                            id="WeekDayOvertimeRate">
                                    </div>
                                    <!-- -------------->


                                </div>
                                <!-- ----------------------------------------- -->

                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="weekdayOvertimeRate">WeekDay Overtime
                                        Rate :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="weekdayOvertimeRate" class="form-control"
                                            id="weekdayOvertimeRate">
                                    </div>
                                    <!-- -------------->

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="weekOffOvertimeRate">WeekOff Overtime
                                        Rate :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="weekOffOvertimeRate" class="form-control"
                                            id="weekOffOvertimeRate">
                                    </div>

                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->
                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="holidayOvertimeRate">Holiday Overtime
                                        Rate :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="holidayOvertimeRate" class="form-control"
                                            id="holidayOvertimeRate">
                                    </div>
                                    <!-- -------------->


                                </div>
                                <!-- ----------------------------------------- -->



                            </div>
                        </div>
                    </div>
                    <!-- overtime panel end -->

                    <!-- PF Limit panel start -->
                    <div class="tab-pane fade p-3" id="five" role="tabpanel" aria-labelledby="five-tab">
                        <div class="card">
                            <div class="card-header bg-info text-white">PF Limit</div>
                            <div class="card-body">

                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="employeeShareContribution">Employee's
                                        Share Contribution :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="employeeShareContribution" class="form-control"
                                            id="employeeShareContribution">
                                    </div>
                                    <!-- -------------->

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="pfMaxlimit">PF Max Limit:
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="pfMaxlimit" class="form-control" id="pfMaxlimit">
                                    </div>

                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->

                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label"
                                        for="employeeShareContribution_AC_1">Employer's Share Contribution A/c - 1 :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="employeeShareContribution_AC_1" class="form-control"
                                            id="employeeShareContribution_AC_1">
                                    </div>
                                    <!-- -------------->

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label"
                                        for="employeeShareContribution_AC_10">Employer's Share Contribution A/c - 10 :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="employeeShareContribution_AC_10" class="form-control"
                                            id="employeeShareContribution_AC_10">
                                    </div>
                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->


                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="PF_AC_2_admin_charge">PF A/c - 2 (Admin
                                        Charges) :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="PF_AC_2_admin_charge" class="form-control"
                                            id="PF_AC_2_admin_charge">
                                    </div>
                                    <!-- -------------->

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="PF_AC_21_edli_charge">PF A/c - 21 (EDLI
                                        Charges) :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="PF_AC_21_edli_charge" class="form-control"
                                            id="PF_AC_21_edli_charge">
                                    </div>
                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->

                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="PF_AC_22_admin_charge">PF A/c - 22
                                        (Admin Charges) :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="PF_AC_22_admin_charge" class="form-control"
                                            id="PF_AC_22_admin_charge">
                                    </div>
                                    <!-- -------------->

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="NCP_days">NCP Days(Prorata) :
                                    </label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="NCP_days" class="form-check-input"
                                                id="NCP_days">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->

                                <!-- ----------------------------------------- -->
                                <div class="form-group row">
                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="full_PF">Full PF :
                                    </label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="full_PF" class="form-check-input" id="full_PF">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->
                            </div>
                        </div>
                    </div>
                    <!-- PF Limit panel end -->

                    <!-- ESIC panel start -->
                    <div class="tab-pane fade p-3" id="six" role="tabpanel" aria-labelledby="six-tab">
                        <div class="card">
                            <div class="card-header bg-info text-white">ESIC limit</div>
                            <div class="card-body">
                                <!-- ----------------------------------------- -->
                                <div class="form-group row">
                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="ESICupperLimit">ESIC Upper Limit :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="ESICupperLimit" class="form-control"
                                            id="ESICupperLimit">
                                    </div>
                                    <!-- -------------->

                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="employerShareContribution">Employer
                                        Share Contribution :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="employerShareContribution" class="form-control"
                                            id="employerShareContribution">
                                    </div>
                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->

                                <!-- ----------------------------------------- -->
                                <div class="form-group row">
                                    <!-- -------------->
                                    <label class="col-sm-3 col-form-label" for="effectOtAmount">Effect OT Amount :
                                    </label>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="effectOtAmount" class="form-check-input"
                                                id="effectOtAmount">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->
                            </div>

                        </div>
                    </div>
                    <!-- ESIC panel end -->

                    <!-- compoff start -->
                    <div class="tab-pane fade p-3" id="seven" role="tabpanel" aria-labelledby="seven-tab">
                        <div class="card">
                            <div class="card-header bg-info text-white" data-toggle="collapse"
                                data-target="#holidayCompOffApproval" aria-expanded="false"
                                aria-controls="holidayCompOffApproval">Holiday Comp Off Approval</div>
                            <div class="collapse" id="holidayCompOffApproval">
                                <div class="card-body">
                                    <h6>Holiday Comp-Off Days/Slab</h6>

                                    <!-- ----------------------------------------- -->
                                    <div class="form-group row">
                                        <!-- -------------->
                                        <label class="col-sm-3 col-form-label"
                                            for="holidayCompoffApplicableWithinDays">Holiday Comp-Off Applicable within
                                            Days :
                                        </label>
                                        <div class="col-sm-3">
                                            <input type="text" name="holidayCompoffApplicableWithinDays"
                                                class="form-control" id="holidayCompoffApplicableWithinDays">
                                        </div>
                                        <!-- -------------->

                                        <!-- -------------->
                                        <label class="col-sm-3 col-form-label" for="minApplicableCompOffHours">Min.
                                            Applicable Comp-Off Hours*
                                        </label>
                                        <div class="col-sm-3">
                                            <input type="text" name="minApplicableCompOffHours" class="form-control"
                                                id="minApplicableCompOffHours">
                                        </div>
                                        <!-- -------------->

                                    </div>
                                    <!-- ----------------------------------------- -->

                                    <!-- ----------------------------------------- -->
                                    <div class="form-group row">
                                        <!-- -------------->
                                        <label class="col-sm-3 col-form-label"
                                            for="holidayCompoffAvailWithinDays">Holiday Comp-Off Avail within days
                                        </label>
                                        <div class="col-sm-3">
                                            <input type="text" name="holidayCompoffAvailWithinDays" class="form-control"
                                                id="holidayCompoffAvailWithinDays">
                                        </div>
                                        <!-- -------------->

                                        <!-- -------------->
                                        <label class="col-sm-3 col-form-label" for="compOffHourEditable"> Comp off hours
                                            Editable
                                        </label>
                                        <div class="col-sm-3">
                                            <input type="text" name="compOffHourEditable" class="form-control"
                                                id="compOffHourEditable">
                                        </div>
                                        <!-- -------------->

                                    </div>
                                    <!-- ----------------------------------------- -->

                                    <!-- ----------------------------------------- -->
                                    <div class="form-group row">
                                        <!-- -------------->
                                        <label class="col-sm-3 col-form-label" for="holidayCompOff">Holiday CompOff :
                                        </label>
                                        <div class="col-sm-3">
                                            <div class="form-check">
                                                <input type="checkbox" name="holidayCompOff" class="form-check-input"
                                                    id="holidayCompOff">
                                            </div>
                                        </div>
                                        <br>
                                        <!-- -------------->

                                    </div>
                                    <!-- ----------------------------------------- -->
                                    <h6>Holiday Slab Detail</h6>

                                    <!-- ------------------TABLE START------------------------- -->
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">From Slab</th>
                                                <th scope="col">To Slab</th>
                                                <th scope="col">Days</th>
                                                <th scope="col">Add/update</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><input type="text" class="form-control"></th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- ------------------TABLE END------------------------- -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- compoff end -->
                    <!-- other settings start-->
                    <div class="tab-pane fade p-3" id="eight" role="tabpanel" aria-labelledby="eight-tab">
                        eight
                    </div>
                    <!-- other settings end-->

                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
<script>
    $('#branch').on('change', function () {
        let branch = $(this).val();

        let activeStyle = {
            'opacity': '1',
            'visibility': 'visible'
        }
        let inactiveStyle = {
            'opacity': '0',
            'visibility': 'hidden'
        }

        if (branch != '') {
            $('.inactive').css(activeStyle)
        } else {
            $('.inactive').css(inactiveStyle)
        }
    })
</script>