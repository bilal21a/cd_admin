<style>
    tr {
        padding: 5px;
        border: 1px solid blue;
        border-radius: 15px;
        color: blue;
    }

    .bakimg {
        background-image: url("{{ asset('watermark.png') }}");

    }

    .container {
        @media (min-width: 1400px) {
            max-width: 1080px !important;
        }
    }
</style>
<section class="contact-form-area fix bakimg" id="elem"
    style="display: block; @if ($size != null) max-width: {{ $size }}px; @endif">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <img src="{{ asset('acron/img/logo/logo-blue-light.svg') }}" class="loo">
            </div>
            <div class="col-lg-8 text-center">
                <h1 style="text-align: center;"><strong></strong></h1>
                <strong style="text-align: center;">EY Tower, 100 Adelaide St W, Toronto, ON M5H 0E2 Canada.</strong>
                <br>
                <h6 style="text-align: center;">00447597774337</h6>
                <input type="hidden" id="codee" value="XJ3NG4CLS">
            </div>

        <div class="col-lg-2" style="text-align: right;">
            <p id="qrcode" style="text-align: right;" title="QR">
                <canvas width="110" height="110" style="display: none;"></canvas>
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https%3A%2F%2Fcanada-investment.com%2Fadmin%2Fapi%2Fsearch_nizwal%3Fpassp%3D{{ $application->applicant_passport_number }}%26apid%3D{{ $application->applicant_ref_no }}%26size%3D1080" style="display: block; width: 7em;">
            </p>
            <p style="text-align: right;">Scan&gt;online&gt;verify.</p>
        </div>


            <div class="col-lg-6">
                <strong>REF NO: {{ $application->applicant_ref_no }} <br>NAME:
                    {{ $application->applicant_name ?? null }} <br>PASSPORT NO.:
                    {{ $application->applicant_passport_number }}</strong>
            </div>
            <div class="col-lg-6">
                <strong>DATE:-{{ $application->applicant_due_date ?? null }}</strong>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-10">
                <h4 style="text-align: center; text-decoration-color: red;"><strong>OBJECT: Letter of Agreement</strong>

                </h4>
            </div>
            <div class="col-lg-6">
                <h4><strong>Name: {{ $application->applicant_name ?? null }} </strong>

                </h4>
            </div>
            <div class="col-lg-10">
                <p>We are pleased to inform you that we have selected you for the proﬁle of HTV DRIVER for regular full
                    time post on with our company <strong></strong> in EY Tower, 100 Adelaide St W, Toronto, ON M5H 0E2
                    Canada. Canada. Is eﬀect from Jun, 2024. The Details of our oﬀer, including terms and conditions are
                    men owned in this oﬀer of Appointment</p>
                <strong>1. Oﬀer
                    We hereby oﬀer you the following mentioned Beneﬁts for this employment
                </strong>
            </div>
            <div class="row">
                <div class="col-lg-19">
                    <table class="table">
                        <thead style="text-align: left;">

                            <tr>
                                <th>Job Proﬁle </th>
                                <th>
                                    <sthong>{{ $application->job->job_title ?? null }} </sthong>
                                </th>
                            </tr>

                            <tr>
                                <th>Salary </th>
                                <th>
                                    <sthong>{{ $application->job->job_salary ?? 0 }} $/month</sthong>
                                </th>
                            </tr>
                            <tr>
                                <th>Working Hours</th>
                                <th> {{ $application->job->working_hours ?? null }}</th>
                            </tr>
                            <tr>
                                <th>Food Provided</th>
                                <th>( {{ $application->job->food_provided ?? nulll }})</th>
                            </tr>
                            <tr>
                                <th>Accommodation Provided </th>
                                <th>{{ $application->job->accommodation_provided ?? null }}</th>
                            </tr>
                            <tr>
                                <th>Contract Period </th>
                                <th>{{ $application->job->contract_period ?? null }}</th>
                            </tr>
                            <tr>
                                <th>Probation Period</th>
                                <th>{{ $application->job->probation_period }} Days</th>
                            </tr>
                            <tr>
                                <th>Joining Date</th>
                                <th>{{ $application->job->created_at ?? null }}</th>
                            </tr>
                            <tr>
                                <th>Contact Info</th>
                                <th>{{ $application->applicant_phone ?? null }}</th>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th>{{ $application->applicant_email ?? null }}</th>
                            </tr>

                        </thead>
                    </table>
                </div>

            </div>
            <div class="col-lg-10">
                <br>
                <li><strong>Hospitalization, Life Insurance and Accident Coverage as per applicable Company
                        Policies.</strong></li>
                <li><strong>All allowances will be paid in the form of account credit on the weekly basis.</strong></li>

            </div>
            <div class="col-lg-10">
                <p>All beneﬁts will be provided such as Air fares (Both Sides), Transportation, Leaves as per Provincial
                    Labor Laws.<br>

                    Following the initial probationary period, a progression and performance review will be conducted on
                    a quarterly basis to assess performance to date, and to clarify or modify this arrangement, as the
                    need may arise. This arrangement may be terminated by either party upon notice in writing to either
                    party with notice that complies with Employment Standards (or Labor Standards).We look forward to
                    the opportunity to work with you in an atmosphere that is successful and mutually challenging and
                    rewarding. <br>

                    <strong>TO THE CONSULATE OF CANADA</strong>

                    <strong>Subject: Hiring of Foreign National Worker (overseas) LMIA approval Reference No.:
                        FG84947</strong>
                    <br>This Employment Agreement (the "Agreement") is made and eﬀective this Jun, 2024<br>



                    <strong>
                        AND. , organized and existing under the laws of the Quebec Province of Canada, with its head
                        oﬃce located at: EY Tower, 100 Adelaide St W, Toronto, ON M5H 0E2 Canada.</strong><br>

                    <strong>1. RECITALS</strong>

                    In consideration on of the covenants and agreements herein contained and the moneys to be paid
                    hereunder the Corporation hereby employs the Employee and the Employee hereby agrees to perform
                    services as an employee of the Corporation, on an “at will” basis, upon the following terms and
                    condition:

                    <br><strong>2. APPOINTMENT</strong><br>

                    The Employee is hereby employed by the Corporation to render such services and to perform such tasks
                    as may be assigned by the Corporation. The corporation may, in its sole discretion, increase or
                    reduce the duties or modify the job description, of the Employee from me to me, and any such
                    increase, reduce on or modiﬁcation shall not be deemed a termination of this Agreement.

                    <br><strong>3. ACCEPTANCE OF EMPLOYMENT</strong><br>

                    A copy of employment letter was sent to the Employee and Employee accepts employment with the
                    Corporation upon the terms set forth in that and agrees to devote all Employee’s time, energy and
                    ability to the interests of the Corporation, and to perform Employee’s duties in an eﬃcient,
                    trustworthy and business-like manner.

                    <br><strong>4. DEVOTION OF TIME TO EMPLOYMENT</strong><br>

                    The Employee shall devote the Employee's best eﬀorts and substan ally all of the Employee's working
                    me to performing the du es on behalf of the Corpora on. The Employee shall provide services during
                    the hours that are scheduled by the Corpora on management. The Employee shall be prompt in repor ng
                    to work at the assigned me.

                    <br><strong>5. NO CONFLICT OF INTEREST</strong><br>

                    Employee shall not engage in any other business while employed by the Corporation. Employee shall
                    not engage in any activity that conﬂicts with the Employees duties to the Corporation Employee shall
                    not provide any service or lend any aid or assistance to any party that competes with the services
                    oﬀered by the Corporation. Employee shall not provide any services to clients or prospective clients
                    of the Corporation outside of the provision of services for the Corporation, whether such services
                    are provided with or without compensation or
                    remuneration. <br>

                    <strong>6. CORPORATION PROPERTY</strong><br>

                    Employee acknowledges and agrees that while employed by the Corporation the Employee may be provided
                    with use of computer equipment and other property of the Corporation. The use and possession of such
                    items shall be subject to any policies, requirements or restrictions established by the Corporation.
                    Such items may only be used in performance of the Employee’s duties for the Corporation. On request
                    of the Corporation, the Employee shall immediately deliver any such items to the Corporation. Upon
                    termination of employment, Employee shall have the affirmative duty to return any such item to the
                    Corporation whether a request is made or not. The obligation to return Corporation property shall
                    extend and include any and all work product, client property, proprietary rights, intangible
                    property, and all other property of the Corporation regardless of the form or medium.<br>

                    <strong>7. COMPENSATION</strong><br>

                    The Corporation shall pay the Employee such Monthly compensation as determined by the Corporation in
                    the previous employment letter. Payment shall be at the same time as the Corporations usual payroll
                    to other employees.<br>

                    <strong>8. BONUS &amp; BENEFITS</strong><br>

                    Payment of any bonuses shall be at the complete discretion of the Corporation. No guarantee or
                    representation that any bonuses will be paid has been made to the Employee `Standard beneﬁts that
                    are
                    provided to other non-management employees shall be oﬀered to the Employee, Subject to the
                    Corporation’s policies and the terms and conditions of such beneﬁts.<br>

                    <strong>9. WITHHOLDING</strong><br>

                    All sums payable to Employee under this Agreement will be reduced by all federal, state, local and
                    other withholdings and similar taxes and payments required by applicable Law.<br>

                    <strong>10. QUALIFICATIONS OF EMPLOYEE</strong><br>

                    The employee shall satisfy all of the qualifications that are established by the Corporation.<br>

                    <strong>11. TERM OF AGREEMENT</strong><br>

                    There shall be 2(TWO) Years term of employment. Employer acknowledges and agrees that Employee shall
                    be an “At Will” Employee and that Employee’s employment may be terminated at any time by the
                    Corporation, with or without cause.

                    <br><strong>12. FEES FROM EMPLOYEE’S WORK</strong><br>

                    The Corporation shall have exclusive authority to determine the fees, or a procedure for
                    establishing the fees, to be charged to clients by the Corporation for services that are provided by
                    the Employee. All sums paid to the Employee or the Corporation in the way of fees, in cash or in
                    kind, or otherwise for services of the Employee, shall, except as
                    otherwise speciﬁcally agreed by the Corporation, be and remain the property of the Corporation and
                    shall be included in the Corporation 's name in such checking account or accounts as the Corporation
                    may from me to me designate.
                    <br><strong>13. CLIENTS AND CLIENT RECORDS</strong><br>

                    The Corporation shall have the authority to determine who will be accepted as clients of the
                    Corporation and the Employee recognizes that such clients accepted are clients of the Corporation
                    and not the Employee. All client records and ﬁles of any type concerning clients of the Corporation
                    shall belong to and remain the property of the Corporation, notwithstanding the subsequent
                    termination of the employment.

                    <br><strong>14. POLICIES AND PROCEDURES<br></strong><br>

                    The Corporation shall have the authority to establish from me to me the policies and procedures to
                    be followed by the Employee in performing services for the Corporation This may include, but is not
                    necessarily limited to, employment policies, computer use policies, Internet access policies, email
                    policies, and all other policies, procedures directives, and mandates established by the
                    Corporation, whether or not in written form or formally adopted. Employee shall abide by the
                    provisions of any contract entered into by the Corporation under which the Employee provides
                    services. Employee shall comply with the terms and conditions of any and all contracts entered by
                    the Corporation.

                    <br><strong>15. TERMINATION</strong><br>

                    Employee acknowledges and agrees that Employee is an “at will” employee of the Corporation. As such,
                    no term of employment is created hereby and employee may be terminated at any time in the sole
                    discretion of the Corporation, whether there exists any cause for termination or not.

                    <br><strong>16. CREATIONS AND INVENTIONS</strong><br>

                    Employee acknowledges and agrees that any and all work product of the Employee that is conceived or
                    created during the Employee’s employment with the Corporation is the exclusive property of the
                    Corporation. This shall include any and all copyrights, trade secrets, conﬁdential, information,
                    patents, trademarks, trade dress, ideas, concepts, plans, business plans, business concepts,
                    techniques, inventions, drawings, artwork, logos, graphics, web pages, databases software, programs,
                    CGI’s, plug ins, applications, brochures, inventions, marketing plans and concepts, and all other
                    ideas and work product of the Employee. The Employee acknowledges and agrees that all creations
                    shall be “works made for hire” as deﬁned in the [ACT OR CODE]. Notwithstanding the fact that this
                    material may be considered to be a work made for hire, Employee agrees, during Employee’s employment
                    and thereafter, which covenant shall survive any termination of the employment relationship, to
                    execute any and all documents requested by the Corporation to conﬁrm the Corporation’s ownership and
                    control of all such material, including but not limited to assignments of copyright, conﬁrmations of
                    work for hire status waivers of proprietary rights, copyright application, and any other documents
                    requested by Corporation.

                    <br><strong>17. RESTRICTIVE COVENANTS</strong><br>

                    The Employee acknowledges that the Corporation, through its employment of the Employee, has provided
                    the Employee with conﬁdential information, business and professional contacts, training and
                    experience, and the ability to service and otherwise have access to the Corporation's clients. The
                    Employee further acknowledges that such conﬁdential information, business and professional contacts,
                    training and experience, and the ability to service and otherwise have access to the Corporation
                    clients are the result of his employment by the Corporation. In considerations of the foregoing and
                    of the beneﬁts generally provided to the Employee by the Corporation pursuant to the terms of this
                    Agreement and otherwise, the Employee agrees to abide and be bound by the restrictions and
                    prohibitions of this Article, which restrictions are intended by the parties to extend to any and
                    all activities of the Employee, whether as an independent contractor, partner or joint venture, or
                    as an oﬃcer, director, stockholder, agent, employee or salesman for any person, ﬁrm, partnership,
                    Corporation or other entity, or otherwise.
                    <br><strong>18. HIRING</strong><br>

                    The Employee agrees that during the Employee's employment with the Corporation and for a period of 2
                    (TWO) years following the termination of this Agreement, whether the termination shall be voluntary
                    or involuntary, or with or without cause, the Employee will not Corporation empty to hire any other
                    employee or independent contractor of the Corporation or otherwise encourage or empty to encourage
                    any other employee or independent contractor of the Corporation to leave the Corporation employ.

                    <br><strong>19. CONFIDENTIALITY; DISCLOSURE; PROPRIETARY INFORMATION</strong><br>

                    Employee recognizes and acknowledges that all records with respect to clients, business associates,
                    customer or referral lists, contracting parties and referral sources of the Corporation, and all
                    personal, ﬁnancial and business and proprietary information of the Corporation, its employees,
                    oﬃcers, directors and shareholders obtained by the Employee during the term of this Agreement and
                    not generally known in the public (the "Conﬁdential Information") are valuable, special and unique
                    and proprietary assets of the Corporation business. The Employee hereby agrees that during the term
                    of this Agreement and following the termination of this Agreement, whether the termination shall be
                    voluntary or involuntary, or with or without cause, the Employee will not at any time, directly or
                    indirectly, disclose any Conﬁdential Information, in full or in part, in written or other form, to
                    any person, ﬁrm, Corporation, association or other entity, or utilize the same for any reason or
                    purpose whatsoever other than for the beneﬁt of and pursuant to authorization granted by the
                    Corporation.

                    <br><strong>20. SOLICITATION</strong><br>

                    The Employee further agrees that during the term of this Agreement and following the termination of
                    this Agreement, whether the termination shall be voluntary or involuntary, or with or without cause,
                    the Employee will not, in any manner or at any time, solicit or encourage any person, ﬁrm,
                    Corporation or other business entity who are clients, business associates or referral sources of the
                    Corporation to cease doing business with the Corporation or to do business with the Employee.

                    <br><strong>21. NON-COMPETITION WITH CORPORATION CLIENTS</strong><br>

                    Employee agrees that during the term of the Employee’s employment with the Corporation and for a
                    period of 2 (TWO) years following cessation of the relationship with the Corporation, the Employee
                    shall not provide any service to or lend any aid or device to any of the clients of the Corporation.

                    <br><strong>22. COVENANTS INDEPENDENT</strong><br>

                    Each restrictive covenant on the part of the Employee set forth in this Agreement shall be construed
                    as a covenant independent of any other covenant or provisions of this Agreement or any other
                    agreement which the Corporation and the Employee may have, fully performed and not executor, and the
                    existence of any claim or cause of ac on by the Employee against the Corporation whether predicated
                    upon another covenant or provision of this Agreement or otherwise, shall not constitute a defense to
                    the enforcement by the Corporation of any other covenant.

                    <br><strong>23. PROPRIETARY CREATIONS</strong><br>

                    All processes, inventions, patents, copyrights, trademarks, and other intangible rights
                    (collectively the "Inventions") that may be conceived or developed by Employee either alone or with
                    others, during the term of Employee's employment, whether or not conceived or developed during
                    Employee's working hours, and with respect to which the equipment, supplies, facilitates, or trade
                    secret information of Company was used, or that relate at the time of conception or reduce on to
                    practice of the Invention to the business of the Corporation or to Corporation 's actual or
                    demonstrably anticipated research and development, or that result from any work performed by
                    Employee for Corporation, will be the
                    sole property of Corporation, and shall be considered “works for hire”, and Employee hereby assigns
                    to the Corporation all of Employee's right and interest in and to such Inventions. Employee must
                    disclose to Corporation all invention conceived during the term of employment, whether or not the
                    inventions constitutes property of Corporation under the terms of the preceding sentence, but such
                    disclosure will be received by Corporation in conﬁdence. Employee must execute all documents,
                    including patent applications and assignments, required by Corporation to establish Corporation's
                    rights under this Section.

                    <br><strong>24. DIVISIBILITY OF COVENANT AREAS AND PERIODS</strong><br>

                    If any portion of the restrictive covenants contained herein is held to be unreasonable, arbitrary
                    or against public policy, each covenant shall be considered divisible both as to time and
                    geographical area; and each month of the speciﬁed period shall be deemed to be a separate period of
                    time and each mile radius segment of the geographical area shall be deemed to be a separate
                    geographical area, so that the maximum lesser time and geographical area shall remain eﬀective so
                    long as the same is not unreasonable, arbitrary or against public policy.

                    <br><strong>25. INJUNCTIVE AND EQUITABLE RELIEF</strong><br>



                    Employee and Corporation recognize and expressly agree that the extent of damages to Corporation in
                    the event of a breach by Employee of any restrictive covenant set forth herein would be impossible
                    to ascertain, that the irreparable harm arising out of any breach shall be irrefutably presumed, and
                    that the remedy at law for any breach will be inadequate to compensate the Corporation.
                    Consequently, the Employee agrees that in the event of a breach of any such covenant, in addition to
                    any other relief to which Corporation may be entitled, Corporation shall be entitled to enforce the
                    covenant by injunctive or other equitable relief ordered by a court of competent juristic on.

                    <br><strong>26. VENUE; COURT PROCEEDINGS</strong><br>

                    The Employee and the Corporation hereby agree that the venue of any action, proceeding,
                    counterclaim, or cross claim, on relating to, involving, or resulting from the enforcement of this
                    covenant shall be in [QUEBEC/CANADA]. In any action on or proceeding by Employee relating to or
                    involving the enforcement of the covenant, and any counterclaim or cross claim on which may be
                    asserted or brought against Corporation, the Employee hereby expressly waives any and all right to a
                    trial by jury with respect to the action, proceeding or other on resulting from or involving the
                    enforcement of this covenant. Further, in any action or proceeding by Corporation to obtain a
                    temporary restraining order and/or preliminary inject on, Employee hereby agrees that the
                    Corporation shall not be required to post an injunction bond in excess of the principal amount in
                    order to obtain a temporary restraining order and/or preliminary injunction. Should the
                    Corporation's action for a temporary restraining order for preliminary injunction be granted in
                    whole or in part and should Corporation be ultimately unsuccessful in obtaining a permanent
                    injunction to enforce the covenant, Employee hereby waives any and all rights Employee may have
                    against Corporation for any injuries Or damages, including consequence all damages, sustained by the
                    Employee and arising directly or indirectly from the issuance of the temporary restraining order
                    and/or preliminary injunction.

                    <br><strong>27. MODIFICATION</strong><br>

                    No change or modiﬁcation of this Agreement shall be valid unless the same be in writing and signed
                    by the parties.


                    <br><strong>28. APPLICABLE LAW AND BINDING EFFECT; NO WAIVER</strong><br>

                    This Agreement shall be construed and regulated under and by the laws of the State of
                    [STATE/PROVINCE] and shall insure to the beneﬁt of and be binding upon the parties here to and their
                    respective heirs, personal representatives, successors and assigns; but may not be assigned except
                    as otherwise provided elsewhere here in.

                    <br><strong>29. ENTIRE AGREEMENT</strong><br>

                    This Agreement contains the entire agreement and supersedes all prior agreements and understandings,
                    oral or
                    written, with respect to the subject matter hereof. This Agreement may be changed only by an
                    agreement in writing signed by the party against whom any waiver, change, amendment, modiﬁcation, or
                    discharge is sought.
                    IN WITNESS HEREOF, each party has to sign this “Agreement” to accept the terms and conditions under
                    the state Labor Law of British Columbia, Canada.
                </p>
                <strong>30. Payments and Dues</strong><br>
                <p>Applicant will pay any taxes or fees incurred by the Canadian Embassy, ​​VFS Global and the country
                    in which you reside. Nizwal Investment Canada is not obligated to collect any taxes from you
                    prior&nbsp;to&nbsp;your&nbsp;visa.</p>
                <br><br>
                <div class="row">
                    <img src="{{ asset('bottom_img.png') }}" width="700">
                </div><br>
                <div class="col-lg-4 bkk">
                    <strong>COPY TO:</strong><br>
                    <img class="fl" src="{{ asset('acron/ll.png') }}"> <strong>MANAGING DIRECTOR</strong><br>
                    <img class="fl" src="{{ asset('acron/ll.png') }}"> <strong>CHIEF EXECUTIVE OFFICER</strong><br>
                    <img class="fl" src="{{ asset('acron/ll.png') }}"> <strong>FINANCE MANAGER</strong><br>
                    <img class="fl" src="{{ asset('acron/ll.png') }}"> <strong>ADMINISTRATOR</strong><br>
                    <img class="fl" src="{{ asset('acron/ll.png') }}"> <strong>G. MANAGER</strong><br>
                    <img class="fl" src="{{ asset('acron/ll.png') }}"> <strong>MINISTERY OF INTERIOR</strong><br>
                    <img class="fl" src="{{ asset('acron/ll.png') }}"> <strong>MINISTORY OF FOREIGN
                        AFFAIR</strong><br>
                </div>
            </div>
        </div>
        @if (checkImageExists(asset("storage/receipt/receipt_$application->id.jpg")))
            <div id="myDiv" style="overflow-y:scroll; width:auto; height:auto">
                <img id="stk" src="{{ asset('storage/receipt/receipt_' . $application->id . '.jpg') }}"
                    class="fl">
            </div>
        @endif
        @if (checkImageExists(asset("storage/passport/passport_$application->id.jpg")))
            <div id="myDiv" style="overflow-y:scroll; width:auto; height:auto">
                <img id="stk" src="{{ asset('storage/passport/passport_' . $application->id . '.jpg') }}"
                    class="fl">
            </div>
        @endif

    </div>
</section>
