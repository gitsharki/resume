<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kirill Kokoshko</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/resume.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/resume.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">&nbsp;</div>
    </div>
    <div class="row header-row">
        <div class="col-md-2">
            <i class="fas fa-user-circle faheader"></i>
            <!--<img src="img/psycho-crisis.jpg" height="391" width="401"/>-->
        </div>
        <div class="col-md-7">
            <div class="col-md-12 name">Kirill <span class="last">Kokoshko</span></div>
            <div class="col-md-12 specialties">System Administration <i class="fas fa-cog"></i> Software Engineering <i class="fas fa-cog"></i> Information
                Security
            </div>
        </div>
        <div class="col-md-3 contact align-middle">
            <i class="fas fa-phone"></i> (347) 610-2883<br>
            <i class="fas fa-at"></i> <a href="mailto:kirill.kokoshko@gmail.com">kirill.kokoshko@gmail.com</a><br>
            <i class="fas fa-address-card"></i> <a href="https://www.linkedin.com/in/kirill-kokoshko-18ba0717" target="_blank">www.linkedin.com</a>
        </div>
    </div>
    <div class="row main-content">
        <div class="col-md-4 profile-col">
            <label class="col-md-12" for="profile">Profile</label>
            <div class="col-md-12 profile" id="profile">
                <p>Passionate professional with 20 years working experience in all aspects of information technology.
                    Offering unique perspective and solutions due to having worked in development, administration, support and project management. Open minded and friendly, team oriented individual with great personality. </p>
            </div>

            <label class="col-md-12" for="expretise">Expertise</label>
            <ul class="expertise" id="expretise">
                <li><span>Hardware</span><br>
                    Dell, HP, Sun, Apple
                </li>
                <li><span>Operating Systems</span><br>
                    Linux, Windows, Solaris, FreeBSD
                </li>
                <li><span>Databases</span><br>
                    MySQL, Oracle, MS SQL, Mongo DB, Sybase
                </li>
                <li><span>Languages</span><br>
                    PHP, C/C++, Java, JavaScript, Python, Perl, Shell
                </li>
                <li><span>Frameworks</span><br>
                    Laravel, Angular, VUE, Bootstrap
                </li>
                <li><span>Development</span><br>
                    GIT, Subversion, CVS, Docker, Chef
                </li>
                <li><span>App/Web Servers</span><br>
                    Nginx, Apache, Tomcat, Weblogic, Websphere
                </li>
                <li><span>Project Management</span><br>
                    Agile, Kanban, Jira, Jenkins
                </li>
            </ul>
            <label class="col-md-12" for="references">References</label>
            <ul class="references" id="references">
                <li><span>Dr. Lawrence Gordon</span><br>
                    CEO, WRSHealth
                </li>
                <li><span>Shirley Yang</span><br>
                    Director of Development, WRSHealth
                </li>
                <li><span>Brad Hall</span><br>
                    System Architect, WRSHealth
                </li>
                <li><span>Clayton Davis</span><br>
                    Owner, AwardsCircuit.COM
                </li>
                <li><span>Julian Trostinsky</span><br>
                    Director of Professional Services, SmartStream
                </li>
            </ul>
            </ul>
        </div>
        <div class="col-md-8 main-col">

            <label class="col-md-12" for="achievements">Notable Achievements
                <i class="fas fa-print float-right m-pad" onclick="javascript:window.print();"></i>
            </label>
            <div class="achievements" id="achievements">
                <ul>
                    <li>Built an entire line of business for SumNet LLC. providing high volume email broadcast service for time sensitive market research data</li>
                    <li>Compiled, trained, and lead level 2 operations team for Goldman Sachs portfolio management web application, providing 24/7/365 support and availability.</li>
                    <li>Helped streamline modernization of WRSHealth UI, using cutting-edge development tools and agile processes.</li>
                </ul>
            </div>
            <label class="col-md-12" for="experience">Experience
                <i class="fas fa-toggle-on float-right m-pad" data-toggle="collapse" data-target=".multi-collapse"></i>
            </label>
            <div class="experience" id="experience">
                <div class="card">
                    <div class="card-header">
                        <div class="col-md-12" data-toggle="collapse" data-target="#work-1">
                            <div class="row">
                                <div class="col-md-2 dates">2017<br>Present</div>
                                <div class="col-md-10">
                                    <div class="col-md-12 company">Online Freelancer</div>
                                    <div class="col-md-12 position">System Administration, Full Stack Development</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse multi-collapse" id="work-1">
                        <div class="card-body">
                            <ul>
                                <li>Linux system administration</li>
                                <li>Database administration</li>
                                <li>Security Hardening</li>
                                <li>Full Stack Development (PHP, JS, Python, SQL)</li>
                                <li>Wordpress tuning and maintenance</li>
                                <li>Wordpress custom development</li>
                                <li>AWS migrations and administration</li>
                                <li>Google Cloud Platform migration and administration</li>
                                <li>Automating system monitoring and alerting</li>
                                <li>Backup and restore automation</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="col-md-12" data-toggle="collapse" data-target="#work-2">
                            <div class="row">
                                <div class="col-md-2 dates">2014<br>2017</div>
                                <div class="col-md-10">
                                    <div class="col-md-12 company"><a href="http://wrshealth.com/" target="_blank">WRSHealth</a>, Goshen, NY</div>
                                    <div class="col-md-12 position">Senior application developer / Systems administrator</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse multi-collapse" id="work-2">
                        <div class="card-body">
                            <ul>
                                <li>Agile development of a leading EHR software on LAMP platform</li>
                                <li>Helped architect and implemented electronic prescription module</li>
                                <li>Lead a team of front-end web developers</li>
                                <li>Helped migrate entire code base from Bazaar to GIT</li>
                                <li>Participated in upgrading entire EHR with a new user interface using latest technologies (Bootstrap, AngularJS)</li>
                                <li>Debian Linux and MySQL system administration</li>
                                <li>Helped with integrating JIRA into project management</li>
                                <li>Designed and implemented several marketing platforms within WRSHealth EHR</li>
                                <li>Agile development</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="col-md-12" data-toggle="collapse" data-target="#work-3">
                            <div class="row">
                                <div class="col-md-2 dates">2010<br>2014</div>
                                <div class="col-md-10">
                                    <div class="col-md-12 company">IT Freelancer, NY</div>
                                    <div class="col-md-12 position">Freelance IT Contracting</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse multi-collapse" id="work-3">
                        <div class="card-body">
                            <ul>
                                <li>Network, systems, and database administration</li>
                                <li>Information security auditing and assurance</li>
                                <li>Custom web development</li>
                                <li>Hardware support and maintenance</li>
                                <li>Office management</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="col-md-12" data-toggle="collapse" data-target="#work-4">
                            <div class="row">
                                <div class="col-md-2 dates">2008<br>2009</div>
                                <div class="col-md-10">
                                    <div class="col-md-12 company"><a href="http://zetek.com" target="_blank">Zetek Corporation</a>, New York, NY</div>
                                    <div class="col-md-12 position">Systems Manager</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse multi-collapse" id="work-4">
                        <div class="card-body">
                            <ul>
                                <li>Sized, built, deployed, and maintained Linux based fault tolerant server farm housing development, qa, and production servers for Zetek’s flagship software product[s]</li>
                                <li>Database management and administration (MySQL & Sybase)</li>
                                <li>Developed a Linux based, Intel platform appliance to house Zetek’s product[s]</li>
                                <li>Linux and Windows, server, desktop, database, and network administration</li>
                                <li>Automated numerous aspects of day-to-day administrative tasks (linux and windows)</li>
                                <li>Designed and implemented development source control (using Subversion) for all in-house-developed code</li>
                                <li>Developed DEB & RPM based software packaging and deployment solution for Zetek’s software products</li>
                                <li>Managed all aspects of IT infrastructure</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="col-md-12" data-toggle="collapse" data-target="#work-5">
                            <div class="row">
                                <div class="col-md-2 dates">2005<br>2007</div>
                                <div class="col-md-10">
                                    <div class="col-md-12 company">SumNET, LLC, New York, NY</div>
                                    <div class="col-md-12 position">Senior Unix Systems Administrator</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse multi-collapse" id="work-5">
                        <div class="card-body">
                            <ul>
                                <li>Sized, built, maintained, and administered RHEL server farm which housing business critical application[s]</li>
                                <li>Database management and administration (Oracle, MySQL)</li>
                                <li>Migrated several applications from Solaris to Linux platform to meet business requirements (i.e. Source code porting).</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="col-md-12" data-toggle="collapse" data-target="#work-6">
                            <div class="row">
                                <div class="col-md-2 dates">2003<br>2005</div>
                                <div class="col-md-10">
                                    <div class="col-md-12 company"><a href="https://www.smartstream-stp.com/" target="_blank">Smart Stream Technologies</a>, New York, NY</div>
                                    <div class="col-md-12 position">Senior technical consultant (Professional Services)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse multi-collapse" id="work-6">
                        <div class="card-body">
                            <ul>
                                <li>Installation, setup, upgrades, and troubleshooting of SmartStream software on the following system and database platforms: (Linux, Solaris, AIX, HPUX, Windows, Oracle, Sybase, MS SQL)</li>
                                <li>Database administration, tuning, and troubleshooting (Oracle, Sybase, MS SQL)</li>
                                <li>Custom client-tailored solutions</li>
                                <li>System and Network tuning and troubleshooting</li>
                                <li>Capacity planning, technical training, documentation</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="col-md-12" data-toggle="collapse" data-target="#work-7">
                            <div class="row">
                                <div class="col-md-2 dates">2000<br>2003</div>
                                <div class="col-md-10">
                                    <div class="col-md-12 company"><a href="http://www.goldmansachs.com/" target="_blank">Goldman Sachs Group</a>, Inc. New York, NY</div>
                                    <div class="col-md-12 position">Systems management and support consultant</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse multi-collapse" id="work-7">
                        <div class="card-body">
                            <ul>
                                <li>Lead a level 2 support team which provided 24/7 coverage for all externally facing Goldman Sachs web applications.</li>
                                <li>Developed, and maintained a system for packaging and deploying latest software to QA and Production environments.</li>
                                <li>Automated various administrative and operations tasks.</li>
                                <li>Helped to design, setup, and deploy sophisticated QA and Production environments consisting of numerous SUN E4500 and SUN 420R servers.</li>
                                <li>Server monitoring (Rendezvous Hawk, BMC)</li>
                                <li>Administered, and fine tuned SUN servers in all three tiers of enterprise applications (presentation, business, data).</li>
                                <li>Lead numerous network, system, and security efforts which aimed to improve or fix application performance and client experience.</li>
                                <li>Participated in design and development of highly available and fault tolerant tiers of numerous enterprise applications.</li>
                                <li>Troubleshooted all aspects of enterprise trading and other applications on 24/7 basis.</li>
                                <li>Served as a liaison with numerous groups within the firm, including business owners, trading support, database administrators, various development teams, network support, unix/nt engineering and others.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="col-md-12" data-toggle="collapse" data-target="#work-8">
                            <div class="row">
                                <div class="col-md-2 dates">1998<br>2000</div>
                                <div class="col-md-10">
                                    <div class="col-md-12 company"> SumNET, LLC, New York, NY</div>
                                    <div class="col-md-12 position">Software Engineer / Systems Administrator</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse multi-collapse" id="work-8">
                        <div class="card-body">
                            <ul>
                                <li>Developed in-house applications that extended company services and allowed access to new markets.  Setup, secured and maintained Sun Solaris servers, helped fine tune and troubleshoot internal and external networks.</li>
                                <li>Designed, implemented, tested, and maintained many back end, and front end applications, including development of a scalable, enterprise level email broadcast system which opened up a whole new market for the company.</li>
                                <li>Designed and implemented a front end to above mentioned email broadcast system which served as a web portal for our corporate clients.</li>
                                <li>Developed several high performance UNIX daemons in C, designed to work in a cluster, to support broadcast systems, as well as provide secure ftp and email access to the portal for our clients.</li>
                                <li>Setup and secured a Sun Enterprise 250 servers, running Solaris 7, to be used in a cluster of computers broadcasting emails and faxes over ip.</li>
                                <li>Help with network management; Cisco routers, switches, as well as Compaq file servers running Novell.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <label class="col-md-12" for="education">Education</label>
            <ul id="education">
                <li>1993 – 1997 University of Nebraska at Lincoln Lincoln, NE<br>
                    Computer Science
                </li>
                <li>1992-1993 Omaha Central High, Omaha, NE</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">&nbsp;</div>
    </div>
</div>
</body>
</html>