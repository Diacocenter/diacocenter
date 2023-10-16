<?php

namespace Database\Seeders;

use App\Models\Agreement;
use App\Models\User;
use App\Models\UserAgreement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgreementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                "title"     =>  "Accommodation Service",
                "link"      =>  "/agreements/accommodation-service.pdf",
                "text"      =>  "<h1>Performance Contract</h1>
<p>This contract represents an agreement between [Customer] and [Performer] in relation to [Event], which will take place on [Date] at [Location]. Both parties agree to the following terms:</p>
<h2>Performance</h2>
<p>The performer will serve as an independent contractor and will be contracted to perform at the event beginning at [Start time] and ending at [End time]. The performer will start promptly at the time indicated and will not be required to perform beyond the specified end time. &nbsp;</p>
<h2>Compensation</h2>
<p>The customer will pay an hourly fee of $[_____________] for a period of [______] hours, totaling $[_____________] for the entire day&rsquo;s performance. A deposit of 25% of this amount shall be presented to the Performer no more than five (5) business days prior to the event. The remaining amount shall be paid within one (1) day following completion of the event.</p>
<p>The Performer will be expected to cover all travel or incidental expenses unless specifically outlined as part of an addendum to this contract.</p>
<h2>Cancellations</h2>
<p>Neither the Customer nor the Performer will be held liable for any unexpected cancellation stemming from destruction of the venue via fire, verified disability, acts by public authorities, or similar unforeseen circumstances prior to the date of the Event.</p>
<p>Cancellation on the part of the Performer for any reason other than those stipulated above will leave the Performer fully responsible for losses or damages on the Customer&rsquo;s part. The Customer must present a report of these damages in writing.</p>
<p>Cancellation on the part of the Customer for any reason other than those stipulated above will still leave the Customer responsible for paying the full amount of compensation owed to the Performer.</p>
<h2>Reservation of Date</h2>
<p>The Performer agrees not to accept any other engagement for a performance for a minimum of 48 hours leading up to the Event and for the day of the Event, without providing advance notice to the Customer.</p>
<h2>Technical Needs</h2>
<p>The Performer will require the following technical needs:</p>
<p>The Customer agrees to make sure that the venue has the means of meeting these needs and that all technical issues will be resolved within 24 hours prior to the Event. Failure to provide these technical needs leaves the Customer responsible for payment unless an alternate arrangement is agreed upon between the Customer and the Performer.</p>
<p>In witness whereof, the parties have agreed to the terms above and executed this contract on the day and year written below:</p>"

            ],
            [
                "title"     =>  "Airplane Service",
                "link"      =>  "/agreements/airplane-service.pdf",
                "text"      =>  "<h1>Event Planner Contract</h1>
<p>This contract is made effective as of [Date] by and between [Event Planner] and [Client]. This contract serves as an agreement of distribution of services and compensation in the planning of [Event], which will be held on [Date of Event].</p>
<h2>Scope of Services</h2>
<p>The Event Planner is responsible for the planning and coordination of the Event. This shall include making appropriate reservations, creating a format for invitations, reserving necessary space for the Event, and handling on-site logistics. Additional duties may be required based on the nature of the Event and should be described below:</p>
<p><em>(additional duties) </em></p>
<h2>Compensation</h2>
<p>As compensation for the Event Planner&rsquo;s services, the Client agrees to pay a total of $[Amount] to the Event Planner. A non-refundable deposit of 25% or $[Amount] will be made as an initial deposit and is due on the date that this contract goes into effect.</p>
<p>The remaining balance of $[Balance Amount] shall be due no later than five (5) business days prior to the date of the event. If the balance is not received within this period of time, an interest rate of 15% of the remaining balance shall be charged for every week the balance is past due.</p>
<h2>Vendors</h2>
<p>Based on preliminary discussions, the Event Planner will compile a list of preferred vendors and review that list with the Client. This list may include, but is not limited to, caterers, rental agencies, musicians, DJs, photographers, Videographers, chefs, hotels, and conference centers. Services desired by the Client will be drawn from the approved vendor list when possible. Deviations from this list will be announced to the Client prior to the approval of any final agreement with the vendor.</p>
<p>The Client is responsible for all payments made to the vendors chosen, and will be notified of all due dates at the time that an agreement is formed with these parties.</p>
<h2>Date Changes and Cancellations</h2>
<p>Should the date of the Event change, the Event Planner will make the best effort possible to accommodate the new date. The Client understands that last-minute changes can affect the quality of the final Event and that these changes are not necessarily the fault of the Event Planner.</p>
<p>In the event of a cancellation of the Event, the Client should notify the Event Planner no later than thirty (30) days prior to the planned date. Should the Event be canceled after that deadline, the Event Planner may collect the full fee owed, including any applicable interest that may arise due to late payments.</p>
<h2>Weather</h2>
<p>The Event Planner will make an effort to select an alternate venue for outdoor events where weather is a concern if possible. In the event of severe weather that may disrupt the Event or prevent it from being held, the Client can propose an alternate date and the Event Planner will make the best effort to accommodate that change as per the clause above.</p>
<p>By signing below, both the Client and the Event Planner indicate that they have read, understand, and agree to all terms and conditions presented above.</p>"
            ],
            [
                "title"     =>  "Insurance Service",
                "link"      =>  "/agreements/insurance-service.pdf",
                "text"      =>  "<h1>Non Compete Contract</h1>
<p>This contract is made effective as of [Date] and represents an agreement between [Employee] and [Company].</p>
<p>The employee is departing the Company and agrees to the terms and conditions set out below.</p>
<h2>Agreement of Non-Competition</h2>
<p>The Employee agrees not to use Company information, intellectual property, or trade secrets for personal gain, either directly or indirectly. The Employee will not divulge, disclose, or communicate any of the aforementioned information to a third party. This agreement of non-competition will extend for a term of two years beginning on the date this agreement goes into effect. Violation of the terms by either party will be subject to the appropriate legal proceedings.</p>
<h2>Compensation</h2>
<p>The company will pay Employee compensation in the amount of $2,500 in exchange for the agreement of non-competition. This amount will be paid in one lump sum no later than [Date (payment deadline)].</p>
<h2>Severability</h2>
<p>Both parties agree that this agreement shall only apply to the extent necessary to protect legitimate business and proprietary interests. If any portion of this agreement is deemed invalid for any reason, the remaining provisions will remain valid and in effect. This agreement may only be severed by mutual consent on the part of both the Employee and the Company. Said mutual consent shall be provided in writing as an addendum to the initial agreement.</p>
<h2>Dispute Resolution</h2>
<p>This agreement is made under the jurisdiction of [State Name]. All parts of this agreement are subject to enforcement via applicable local and federal laws. Any dispute shall be mediated through the assistance of any applicable legal circuits.</p>
<h2>Verification</h2>
<p>In witness whereof, the parties specified herein have executed this agreement on the day and year specified above.</p>
<p>&nbsp;</p>"
            ],
            [
                "title"     =>  "Education Service",
                "link"      =>  "/agreements/education-service.pdf",
                "text"      =>  "<h1>Investment Contract</h1>
<p>The terms and conditions presented below represent an agreement between [Company] and [Investor] with regard to financial compensation for a specified investment. The contact is valid beginning [Date].</p>
<p>The investment amount is specified for:</p>
<p>The purpose of investment is:</p>
<p>The Investor agrees to enter into this contract under the terms and conditions presented below. Amendment, addition, or termination of these terms is subject to regulation by local and federal laws.</p>
<h2>Consideration and Strategies</h2>
<p>The Investor agrees to invest with the Company the amount specified above and an additional amount during or after execution of this contract upon the Investor&rsquo;s will. Any additional investments are regulated according to the terms and conditions contained herein.</p>
<p>The investment objectives of the Company are to maximize current income to the extent that such ventures preserve the sustainability of the Company.</p>
<h2>Payment and Accounting</h2>
<p>The Company will make payments to the Investor according to an agreed upon payment schedule. This schedule is not subject to amendment unless both parties agree. Payments made to the Investor&rsquo;s account in full or in installments may be withdrawn at any time unless otherwise stipulated in this agreement.</p>
<p>The Company will provide a monthly statement detailing program operations and will publish quarterly reports within thirty (30) days if each quarterly period beginning January 1, April 1, July 1, and October 1. Each report will provide information about the Company&rsquo;s operating results within a stated time period.</p>
<h2>Deposits and Withdrawals</h2>
<p>Any investment made may be withdrawn at any time. Withdrawals can be made only to the Investor&rsquo;s account. Any subsequent deposits made in addition to the principal amount will be updated as soon as they have been accepted.</p>
<h2>Fees and Expenses</h2>
<p>The Company shall pay all of the following fees and expenses:</p>
<ul>
<li>Fees and expenses related to its own counsel;</li>
<li>Registration or qualification costs required in connection with the issuance of debentures, warrants, and redemption warrants, as applicable;</li>
<li>Documentation and tax fees relating to the investment;</li>
<li>Income and franchise taxes of the Company relating to this transaction.</li>
</ul>"
            ],
            [
                "title"     =>  "Safety Contract",
                "link"      =>  "/agreements/safety-contract.pdf",
                "text"      =>  "<h1>Safety Contract</h1>
<p>By signing below, [Student] confirms having read and understood the safety rules set forth in the attached scientific lab guidelines. This document represents an understanding on the part of the student that the guidelines are in place, not only for individual safety, but for the safety of the classroom as a whole. Therefore, all proper safety procedures and precautions will be taken at all times during this lab.</p>
<p>The student also agrees to follow the guidelines of appropriate classroom behavior at all times and to treat all classmates with the respect due to them. Failure to follow these guidelines may result in disciplinary action up to and including the removal from this lab.</p>
<p>[Parent / Guardian] also agrees that the guidelines and safety rules have been read and understood by the student and the parent/guardian. By signing below, the parent/guardian officially agrees with these guidelines and is willing to allow the student to take part in the lab lessons as outlined in the attached document. This contract also signifies an agreement that the teachers of the lab are permitted to provide instruction and/or disciplinary action if needed, as per school policy and as the teachers deem it necessary.</p>
<p>Any undisclosed allergies, lingering illnesses, or other medical issues that might be significant should be discussed with the school nurse and the lab instructors. Signing this agreement indicates that all such precautions have taken place.</p>
<p>The student also agrees to follow the guidelines of appropriate classroom behavior at all times and to treat all classmates with the respect due to them. Failure to follow these guidelines may result in disciplinary action up to and including the removal from this lab.</p>
<p>[Parent / Guardian] also agrees that the guidelines and safety rules have been read and understood by the student and the parent/guardian. By signing below, the parent/guardian officially agrees with these guidelines and is willing to allow the student to take part in the lab lessons as outlined in the attached document. This contract also signifies an agreement that the teachers of the lab are permitted to provide instruction and/or disciplinary action if needed, as per school policy and as the teachers deem it necessary.</p>
<p>Any undisclosed allergies, lingering illnesses, or other medical issues that might be significant should be discussed with the school nurse and the lab instructors. Signing this agreement indicates that all such precautions have taken place.</p>
<p>The student also agrees to follow the guidelines of appropriate classroom behavior at all times and to treat all classmates with the respect due to them. Failure to follow these guidelines may result in disciplinary action up to and including the removal from this lab.</p>
<p>[Parent / Guardian] also agrees that the guidelines and safety rules have been read and understood by the student and the parent/guardian. By signing below, the parent/guardian officially agrees with these guidelines and is willing to allow the student to take part in the lab lessons as outlined in the attached document. This contract also signifies an agreement that the teachers of the lab are permitted to provide instruction and/or disciplinary action if needed, as per school policy and as the teachers deem it necessary.</p>
<p>Any undisclosed allergies, lingering illnesses, or other medical issues that might be significant should be discussed with the school nurse and the lab instructors. Signing this agreement indicates that all such precautions have taken place.</p>"
            ]
        ];

        foreach ($items as $item) {
            $agreementObj = new Agreement($item);
            $agreementObj->saveQuietly();

            $users = User::whereHasRole('provider')->orWhereHasRole('teacher')->get();
            foreach ($users as $user) {
                if(random_int(0, 10) < 7) {
                    $userAgreementObj = new UserAgreement();
                    $userAgreementObj->agreement()->associate($agreementObj);
                    $userAgreementObj->user()->associate($user);
                    $userAgreementObj->saveQuietly();
                }
            }
        }
    }
}
