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
                                aria-controls="seven" aria-selected="false">Other Settings</a>
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
                                    <div class="col-sm-6">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input late_rime" type="radio" name="late_rime"
                                                id="hour_late" value="">
                                            <label class="form-check-label" for="hour_late">Hour</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input late_rime" type="radio" name="late_rime"
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
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="calculateSlabwise" class="form-check-input"
                                                id="calculateSlabwise">
                                            <label class="form-check-label" for="calculateSlabwise">Calculate Slabwise
                                                :</label>
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

                                    <!-- -------------->
                                    <div class="col-sm-6">
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
                                <!-- ----------------------------------------- -->
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
                                <!-- ----------------------------------------- -->
                                <!-- ----------------------------------------- -->
                                <div class="form-group row">

                                    <!-- -------------->
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="calculateSlabwise" class="form-check-input"
                                                id="calculateSlabwise">
                                            <label class="form-check-label" for="calculateSlabwise">Calculate Slabwise
                                                :</label>
                                        </div>
                                    </div>
                                    <!-- -------------->

                                </div>
                                <!-- ----------------------------------------- -->

                                <!-- ----------------------------------------- -->
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
                                <!-- ----------------------------------------- -->
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
                                <!-- ----------------------------------------- -->

                            </div>
                        </div>
                        <!-- early mark card end -->


                    </div>
                    <!-- late Early panel end -->

                    <!-- Over Time panel start -->
                    <div class="tab-pane fade p-3" id="four" role="tabpanel" aria-labelledby="four-tab">

                    </div>
                    <!-- overtime panel end -->

                    <!-- PF Limit panel start -->
                    <div class="tab-pane fade p-3" id="five" role="tabpanel" aria-labelledby="five-tab">

                    </div>
                    <!-- PF Limit panel end -->

                    <!-- ESIC panel start -->
                    <div class="tab-pane fade p-3" id="six" role="tabpanel" aria-labelledby="six-tab">

                    </div>
                    <!-- ESIC panel end -->

                    <!-- Othe Settings start -->
                    <div class="tab-pane fade p-3" id="six" role="tabpanel" aria-labelledby="six-tab">

                    </div>
                    <!-- End end -->

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