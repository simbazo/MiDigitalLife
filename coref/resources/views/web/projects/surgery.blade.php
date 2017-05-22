@extends('web.layout.modal')
@section('content')
<div class="modal-dialog" style="width: 70%">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h5 class="modal-title">Surgery Database</h5>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <p>We have teamed up with the UCT’s Department of Surgery, the Department of Health WC, and the Innovation Office WC to develop a surgical management program. The key goals we are seeking to establish are:</p>
                    <ol>
                        <li>Integration into an existing emergency/casualty computer terminal system</li>
                        <li>Electronic casualty referral ticket via computer terminals in casualty to the person on call for surgery via mobile application &ndash; both within the hospital and to another hospital
                            <ul>
                                <li>Motivation: (a) surgeons are tied up in theatre and cannot always take a call, (b) casualty has difficulties reaching the surgeon on call and this take time away from other patients, (c) calls cost money especially as hospitals have to call cellphones, (d) making this digital means hold-ups within the system can be identified</li>
                            </ul>
                        </li>
                        <li>Managed care &ndash; we will develop mechanisms to govern surgical referrals and standards of care</li>
                        <li>Integration of surgical guidelines at the computer terminal and mobile application levels</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection