<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{

    public function index() {

        $skills = [
            [
                "skillTitle" => "PHP",
                "subSkills" => [
                    "Laravel",
                    "Eloquent",
                    "Propel",
                    "Custom Legacy Frameworks",
                    "Drupal PHP",
                ],
                "size"=>"90%",
            ],
            [
                "skillTitle" => "Javascript",
                "subSkills" => [
                    "JQUERY",
                    "Angular",
                    "React",
                ],
                "size"=>"40%",
            ],
            [
                "skillTitle" => "Databases",
                "subSkills" => [
                    "MySql",
                    "ElasticSearch",
                ],
                "size"=>"40%",
            ],
            [
                "skillTitle" => "HTML",
                "subSkills" => [
                    "CSS",
                    "SASS",
                    "Bootstrap",
                ],
                "size"=>"40%",
            ],
            [
                "skillTitle" => "CVS",
                "subSkills" => [
                    "GIT",
                    "GitHub",
                    "BitBucket",
                ],
                "size"=>"40%",
            ],
            [
                "skillTitle" => "CMS",
                "subSkills" => [
                    "Drupal 8",
                ],
                "size"=>"40%",
            ],
            [
                "skillTitle" => "DevOps",
                "subSkills" => [
                    "Full Stack",
                    "Docker",
                    "Vagrant",
                ],
                "size"=>"40%",
            ],
            [
                "skillTitle" => "Musician",
                "subSkills" => [
                    "Guitar",
                    "Bass",
                    "Drums",
                ],
                "size"=>"40%",
            ],
        ];

        $jobs = [


            [
                "company" => "Caxy Interactive",
                "companyLocation" => "Chicago, IL",
                "positionTitle" => "Full Stack Developer",
                "dateRangeText" => "October 2018 - Present",
                "jobDescription" => "Spreading the Caxy love.",
                "utilizedSkills" => [
                    "React",
                    "Symfony",
                    "Angular",
                ],
                "notedProjects" => [],
            ],[
                "company" => "Rise Interactive",
                "companyLocation" => "Chicago, IL",
                "positionTitle" => "Full Stack Developer",
                "dateRangeText" => "July 2018 - September 2018 (Contract)",
                "jobDescription" => "Contract position working with Rise Interactive on migrating Butterball Turkeys website to a decoupled drupal back end and an angular 5 front end. Work was a face paced agile environment with tight deadlines.",
                "utilizedSkills" => [
                    "Drupal 8",
                    "Angular 5",
                ],
                "notedProjects" => [
                    "Created RESTful endpoint route in drupal",
                    "Created automatic migration that pulled in Recipe data from outside API",
                    "Planned, configured and setup drupal source migrations",
                ],
            ],
            [
                "company" => "Project World Impact",
                "companyLocation" => "Wheaton, IL",
                "positionTitle" => "Full Stack Developer",
                "dateRangeText" => "December 2016 - May 2018",
                "jobDescription" => "Managed, improved, and enhanced an existing legacy website within a team of 2 other developers.  Successfully took incomplete projects from outsourced developers and either ported them into the main laravel code base or completed the project.",
                "utilizedSkills" => [
                    "Laravel MVC (Object Oriented PHP)",
                    "Eloquent & Advanced MySql Queries",
                    "Advanced use of Lamp Stack",
                    "Basic use of ElasticSearch",
                ],
                "notedProjects" => [
                    "Advanced search working with an ElasticSearch developer",
                    "Payment gateway api that allowed us to accept work near any gateway",
                    "Maintain legacy code base",
                ],
            ],
            [
                "company" => "Select Italy",
                "companyLocation" => "Chicago, IL",
                "positionTitle" => "Full Stack Developer",
                "dateRangeText" => "July 2015 - October 2016",
                "jobDescription" => "Developed new website using cutting edge technologies and practices while maintaining a back-end legacy code. First time working with best practices and as a team member.",
                "utilizedSkills" => [
                    "Laravel MVC (Object Oriented PHP)",
                    "Exposure to TDD/BDD principles",
                    "Propel-ORM and advanced MySql Queries",
                    "Internationalization(I18n)",
                    "API Integration with payment gateways such as Braintree & Bluepay",
                ],
                "notedProjects" => [
                    "Pioneered, setup configed and rolled out behat bdd tests",
                    "Brief use of angular for pricing form",
                    "Maintain legacy code base",
                ],
            ],
            [
                "company" => "Beacon Fasteners",
                "companyLocation" => "Wheeling, IL",
                "positionTitle" => "Full Stack Developer",
                "dateRangeText" => "March 2014 - December 2016 (Contract)",
                "jobDescription" => "Delivered a site overhaul. Overall project was planned and formulated by Beacon executives. Adjusted colors and fonts, performed design maintenance, built slides, and guided the Beacon team to craft a site they loved and could call their own.",
                "utilizedSkills" => [
                    "PHP",
                    "Raw MySql",
                    "Css/Js",
                    "Jquery",
                ],
                "notedProjects" => [
                    "Advanced parts catalog",
                    "Data driven calendar events",
                ],
            ],
            [
                "company" => "CSWEA",
                "companyLocation" => "Crystal Lake, IL",
                "positionTitle" => "Full Stack Developer",
                "dateRangeText" => "May 2009 - October 2016",
                "jobDescription" => "Responsive, somewhat data-driven website. First hired as content manager, which led to replacing website with a contemporary look. Purchased rough template and customized to suit. Most pages were data driven. Worked with contractor to ensure fonts, colors, and graphics were professional. Responsibilities included maintaining web host, posting events, and updating pre/post-event documentation.",
                "utilizedSkills" => [
                    "PHP",
                    "Raw MySql",
                    "Bootstrap Css/Js (Responsive Design)",
                ],
                "notedProjects" => [
                    "Complete site redesign and overhaul from existing static HTML pages",
                    "Facilitated smother updates to website with quicker turn around",
                ],
            ],
            [
                "company" => "Marcom Technologies",
                "companyLocation" => "Roselle, IL",
                "positionTitle" => "Full Stack Developer",
                "dateRangeText" => "May 2009 - October 2016",
                "jobDescription" => "Data-driven website with some Microsoft Windows app development, targeted at dealership sales staff and their customer phone skills. Advanced user login with user detail management handled from inside the web application. Audio MP3 upload (through a Microsoft Windows application) and playback functionality using jquery plugins and later the HTML5 audio tag. Responsibilities included taking ideas from the drawing board to production use, site administration, and providing support to clients, customers, and employees.",
                "utilizedSkills" => [
                    "Advanced PHP",
                    "Raw MySql",
                    "Css",
                    "Advanced Project Planning",
                    "Visual Basic.Net",
                    "FFMpeg and Sox.exe CLI audio converters",
                    "Customer Service/Technical Support",
                    "Ms Access/Excel",
                    "Excel reports from PHP using php-excel library",
                    "Advanced calendar with data output for platforms activity",
                ],
                "notedProjects" => [
                    "Took Marcom from pen and paper to digital, data driven website",
                    "Facilitated the growth of the company through technical innovations",
                ],
            ],
        ];




        return view("index")
            ->with("jobs", $jobs)
            ->with("skills", $skills)
            ;
    }

    public function huh() {
        return "Hello!";
    }
}
