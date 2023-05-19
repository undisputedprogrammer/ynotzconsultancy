<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($id){
        if($id==1){
            $blog=array('title'=>"Seven reasons why startups fail",'date'=>"03 May 2023",'cover'=>"/images/blogs/blog-img1.png");
            $main=array('title'=>"Is the term startup itself scary???",'desc'=>"Almost 90 percent of startups fail across the world, with 10 percent failing within the first year. Or we can say that most of the startups are like a meteor entering the earth's atmosphere. They burned to ashes before placing their existence. But there is a tempting beauty inside every startup story that attracts uncountable youths to write a success story of their own. Here we are going to discuss upon seven super villains that you may meet somewhere on your startup journey.");
            $sections=[array('title'=>"Lack of financing or investors",'desc'=>"Ideas are the basic foundation of every startup. But there is a long bridge between ideas and reality. That is why funding became a major villain in every startup story. After the initialization, most ventures failed to upgrade themselves by improving technology and hiring the right people due to the lack of funding. Sometimes the investors walk out, or the new businesses fail to make money from their own services or products. Anyway a strong financial backup is essential for every new venture to sustain itself till they create its identity on the market."),
        array('title'=>"Abundance of ideas",'desc'=>"Everyone starts a new business with a lot of creative ideas. What if these ideas create an anti-climax to their story? A heap of ideas blocks anyone working focused on their goals. They may try to implement a lot of actions within fewer periods that will affect the quality of services. This is one of the causes behind the sudden death of many startups."),array('title'=>"Conflicts among the partners",'desc'=>"When it comes to partnership dealings, conflicts are common. Partners don't need to have similar opinions and concepts. But they need to discuss everything and reach a proper decision to the problems regarding the business. If they can't do it, then the startup is at risk of failure.")];
        }

        if($id==2){
            $blog=array('title'=>"How to register your startup under MSME",'date'=>"10 May 2023",'cover'=>"/images/blogs/blog-img2.png");
            $main=array('title'=>"Benefits of Udyam Registration",'desc'=>"MSME registration is free, paperless, and based on self-declaration. A permanent registration number and an online certificate will be given to the enterprises after registration. The issued certificate will have a dynamic QR code from which the details about the enterprise can be accessed. The Udyam registration is permanent and there will be no need for renewal. Steps for registering your business under MSME includes,");
            $sections=[array('title'=>"",'desc'=>" Visit the official website for Udyam registration by visiting 'https://udyamregistration.gov.in/Government-India/Ministry-MSME-registration.html'.
            "),array('title'=>"",'desc'=>"Click on the new registration tab."),array('title'=>"",'desc'=>"Click on the new registration tab."),array('title'=>"",'desc'=>"Enter your Aadhaar number and name, and then complete the validation process by entering the OTP received on your mobile number."),array('title'=>"",'desc'=>" Select your type of organization/business and enter the PAN number attached to your business account.
            "),array('title'=>"",'desc'=>" Fill in all the personal and business details in the form.
            "),array('title'=>"", 'desc'=>"Submit and enter the OTP received on your mobile phone.
            "),array('title'=>"",'desc'=>"After registration, you will get a message on your mobile number and email id along with Udyam Registration Certificate.
            "), array('title'=>"",'desc'=>"Then you can download and print your Udyam Registration Certificate.
            ")];

        }

        if($id==3){
            $blog=array('title'=>"3 Central Government Schemes for Medium and Small Enterprises
            ",'date'=>"17 May 2023",'cover'=>"/images/blogs/blog-img3.png");
            $main=array('title'=>"Get some relief on your funding dilema",'desc'=>"Check out three convenient central government schemes for enhancing small and medium enterprises.
            ");
            $sections=[array('title'=>"Credit Guarantee Scheme
            ",'desc'=>"Whether it is a bank or financial institution, there is an obligation to provide loans or aid without collateral security or a third-party guarantee. For first-generation entrepreneurs or MSME business holders, it is not affordable to come up with collateral. So the Ministry of Micro, Small and Medium enterprises, GoI, and the Small Industries Development Bank of India (SIDBI), established a Trust named Credit Guarantee Fund Scheme for Micro and Small Enterprises (CGTMSE) to implement Credit Guarantee Fund Scheme for Micro and Small enterprises.

            With this scheme, the beneficiaries will get collateral-free loans up to a limit of 50 lakh rupees for individual MSEs. The Credit Guarantee Scheme launched  in August 2000  so as to strengthen credit delivery system and facilitate flow of credit to the MSE sector.  The appropriate candidates can apply through.
            The scheme aims at motivating entrepreneurs especially first-generation entrepreneurs towards self-employment.
            "), array('title'=>"MUDRA Loans
            ", 'desc'=>"The Pradhan Mantri MUDRA Yojana (PMMY), announced by the Hon’ble Prime Minister on 8th April 2015, envisages providing MUDRA loans, up to 10 lahks, to income-generating micro-enterprises engaged in manufacturing, trading, and services sectors. The 2015 budget has proposed the creation of the Micro Units Development Refinance Agency (MUDRA) Bank with a corpus of Rs. 20,000 crores and a credit guarantee corpus of Rs.3000 crores. The primary aim of MUDRA is to lend finance to micro businesses and units."), array('title'=>"Growth Capital and Equity Assistance scheme
            ",'desc'=>"To integrate financial support services to MSMEs, SIDBI launched Growth Capital and Equity Assistance Scheme under SIDBI schemes. GEM is a scheme for providing capital to MSMEs to invest in marketing, brand building, creation of distribution network, Research & development, etc. Through this loan, beneficiaries will get assistance in the form of mezzanine (higher yielding loans that are subordinate to bank loans but rank above equity), Convertible instruments, subordinated debts, and equity.
            ")];
        }

        return view('blog',[
            'blog'=>$blog,
            'main'=>$main,
            'sections'=>$sections,
        ]);
    }
}
