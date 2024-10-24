<?php
include('session.php');
$_SESSION['Page'] = 'service';
include("header.php");
?>

<!-- inner banner -->
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <h4 class="inner-text-title font-weight-bold mb-2">Services</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.php">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Services</li>
            </ul>
        </div>
    </section>
</div>
<!-- //inner banner -->

<!-- service section -->
<section class="w3l-servicesblock py-1">
    <div class="container py-lg-1 py-md-3">        
        <div class="row mt-5 pt-1">
            <div class="col-lg-6 left-wthree-img mt-lg-0 mt-5 order-lg-first order-last">
                <img src="assets/images/service1.png" alt="" class="img-fluid radius-image">
            </div>
            <div class="col-lg-6 about-right-faq align-self pl-lg-5 order-lg-last order-first">
                <h3 class="title-big">We Provide Awesome Services For You</h3>
                <p class="mt-3">We provides work performed expertly by an individual or team for the benefit of our
                    customers. we provide our clients with such as the typical services business provides intangible
                    products, such as Website design and maintenance and support, Networking services, Design and
                    Develop a Mobile app, Security services.</p>
                <a class="btn button-style mt-lg-5 mt-4" href="about.php">Learn More </a>
            </div>
        </div>
    </div>
</section>
<!-- //service section -->

<!-- bottom-grids-->
<section class="w3l-bottom-grids-6 py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="text-center mb-sm-5 mb-4">
            <label class="sub-title mb-2">Features</label>
            <h3 class="title-big">Cloud Architect, DevOps, Monitoring, Logging, Disastor Recovery, High
                Availability, Docker, Kubernates, Security, Penetration Testing and Hardening in</h3>
        </div>
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-4 col-md-6 grids-feature">
                <div class="area-box">
                    <span class="fab fa-aws icon-color"></span>
                    <h4><a href="#feature" class="title-head">Amazon Web Services</a></h4>
                    <p>We support all Services in AWS Like Amazon EC2, AWS Elastic Beanstalk, AWS Firewall Manager,
                        AWS Organizations, AWS Lambda, Amazon Cognito, Amazon Lightsail, Amazon S3,
                        Amazon Elastic Block Store, Amazon DynamoDB, Amazon S3 Glacier, Amazon Relational Database
                        Service
                    <p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                <div class="area-box">
                    <span class="lni lni-azure icon-color"></span>
                    <h4><a href="#feature" class="title-head">Microsoft Azure</a></h4>
                    <p>Azure Active Directory, Azure CDN, Azure Data Factory, Azure Function, Azure Backup, Azure
                        Spring Cloud, Azure VMWare Solution, Azure Virtual Desktop, Axure VW Image Builder, Azure
                        Kubernetes Services (AKS), Azure SQL DataBase </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                <div class="area-box">
                    <span class="fab fa-asymmetrik icon-color"></span>
                    <h4><a href="#feature" class="title-head">Google Cloud</a></h4>
                    <p>Compute Engine, Cloud Storage, Cloud SDK, Cloud SQL, Google Kubernetes Engine, Big Query,
                        Cloud CDN, Data Flow, Operations, Cloud Run, Anthos, Cloud Functions. </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                <div class="area-box">
                    <span class="fas fa-cloud icon-color"></span>
                    <h4><a href="#feature" class="title-head">Oracle Cloud</a></h4>
                    <p>Analytics Cloud, API Gateway, Archive Storage, Artifact Registry, Audit, Bastion, Block
                        Volume, Cloud Guard, Cloud Shell, Compartment Quotas, Compute,
                        Container Engine For Kubernetes, Data Flow, Data Integration, Data Labeling
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                <div class="area-box">
                    <span><img src="assets/images/openstack1.png"></span>
                    <h4><a href="#feature" class="title-head"> Open Stack</a></h4>
                    <p>Identity (Keystone), Images(Glance), Compute(Nova), Networking(Neutron), Block
                        storage(Cinder), Object Storage(Swift).
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                <div class="area-box">
                    <span class="fab fa-salesforce icon-color"></span>
                    <h4><a href="#feature" class="title-head">SalesForce</a></h4>
                    <p>Sales Cloud, Mobile Connectivity, Chatter, Srevice Cloud, Marketing Cloud, Platform,
                        Data.com.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                <div class="area-box">
                    <span class="fas fa-dharmachakra icon-color"></span>
                    <h4><a href="#feature" class="title-head">Kubernetes</a></h4>
                    <p>At 508 Bytes, we offer comprehensive Kubernetes services to help you manage, deploy, and scale your applications seamlessly. Our expertise includes:

                        Cluster Setup and Management: We handle the entire process of setting up and managing Kubernetes clusters, ensuring high availability and resilience.
                        Application Deployment: Streamline the deployment of your applications with our automated processes and best practices.
                        Monitoring and Logging: Keep an eye on your clusters with advanced monitoring and logging solutions to ensure optimal performance and quick troubleshooting.
                        Security and Compliance: Implement robust security measures and compliance standards to protect your data and applications.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                <div class="area-box">
                    <!-- <span clas<i class="fa-solid fa-a"></i>s="fas fa-dharmachakra icon-color"></span> -->
                    <span><img src="assets/images/openstack1.png"></span>
                    <!-- <img src="./assets/Ansible_logo.svg" class="icon-color" alt=""> -->
                    <span class="fas fa-a icon-color"></span>
                    <h4><a href="#feature" class="title-head"> Ansible</a></h4>
                    <p>Streamline your IT automation with our Ansible services. From configuration management to application deployment, we offer solutions that enhance your operational efficiency and reduce downtime.

                        Configuration Management: Consistently configure your systems and software.
                        Application Deployment: Automate the deployment of your applications.
                        Orchestration: Coordinate multiple configurations and deployments across your infrastructure</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                <div class="area-box">
                    <span class="fab fa-salesforce icon-color"></span>
                    <h4><a href="#feature" class="title-head">Terraform</a></h4>
                    <p>Our Terraform services are designed to provide you with efficient infrastructure as code (IaC) solutions. Our offerings include:

                        Infrastructure Provisioning: We automate the provisioning of your infrastructure, making it consistent, repeatable, and scalable.
                        Module Development: Custom Terraform modules tailored to your specific needs, allowing for reusable and maintainable code.
                        State Management: Efficiently manage the state of your infrastructure, ensuring smooth updates and migrations.
                        Training and Support: We provide training and ongoing support to help your team master Terraform and manage your infrastructure effectively.

                    </p>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>
<!-- //bottom-grids-->
<!-- bottom-grids-->
<section class="w3l-bottom-grids-6 py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="text-center mb-sm-5 mb-4">
            <h3 class="title-big">We Develop Web, Mobile Applications and Native Platform Applications</h3>
        </div>
        <div class="grids-area-hny main-cont-wthree-fea row">



            <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                <div class="area-box">
                    <span class="fab fa-js icon-color"></span>
                    <h4><a href="#feature" class="title-head">Java Script</a></h4>
                    <p>We have well knowledged staff and We can develop cross platform applications,web applications
                        and games using Javascript.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                <div class="area-box">
                    <span class="fab fa-node-js icon-color"></span>
                    <h4><a href="#feature" class="title-head"> NodeJS</a></h4>
                    <p>We are developing cross platform applications,web applications and games by using NodeJS as
                        Backend Developement.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                <div class="area-box">
                    <span class="fab fa-react icon-color"></span>
                    <h4><a href="#feature" class="title-head">ReactJS</a></h4>
                    <p>We are developing cross platform applications,web applications and games by using ReactJS as
                        Frontend Developement.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                <div class="area-box">
                    <span class="fab fa-python icon-color"></span>
                    <h4><a href="#feature" class="title-head">Python</a></h4>
                    <p>We are developing web applications by using DJango web frame work in Python.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                <div class="area-box">
                    <span><img src="assets/images/Flutter1.png"></span>
                    <h4><a href="#feature" class="title-head"> Flutter</a></h4>
                    <p>We are developing cross platform applications using Flutter.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                <div class="area-box">
                    <span class="fab fa-php icon-color"></span>
                    <h4><a href="#feature" class="title-head">PHP</a></h4>
                    <p>We were developed Inventory, School Management, Banking Applications by using PHP.</p>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>
<!-- //bottom-grids-->

<!-- bottom-grids-->
<section class="w3l-bottom-grids-6 py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="text-center mb-sm-5 mb-4">
            <h3 class="title-big">Our Projects</h3>
        </div>
        <div class="grids-area-hny main-cont-wthree-fea row">



            <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                <div class="area-box">
                    <!-- <span class="fab fa-js icon-color"></span> -->
                    <h2 class="mb-3"><b><i><a href="#feature" class="title-head" style="color: #084C87;">APHMEL</a></i></b></h2>
                    <p>APHMEL Application is custom application developed for the purpose of maintain internal office management procedure for manufacturing of heavy machinery for mining companies. The old IT solutions were uncoordinated tech platforms requiring costly maintenance and support. The main project purpose was to replace those systems automating key business processes</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                <div class="area-box">
                    <!-- <span class="fab fa-node-js icon-color"></span> -->
                    <h2 class="mb-3"><a href="#feature" class="title-head" style="color: green;"><b> AP Housefed </b></a></h2>
                    <p>Andhra Pradesh Cooperative Housing Societies Federation Limited Custom Loan Disbursement and Tracking with Office Management Appilcation. Andhra Pradesh Housing Federation Loaning Module, ensuring that the final product met the specific needs of the federation and its stakeholders. The successful completion of this project demonstrates our ability to deliver comprehensive, user-friendly, and secure software solutions that drive operational efficiency and enhance user satisfaction.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                <div class="area-box">
                    <!-- <span class="fab fa-react icon-color"></span> -->
                    <!-- <h4><a href="#feature" class="title-head" >DCMS Krishna</a></h4> -->
                    <h2 class="mb-3"><a href="#feature" class="title-head" style="color: #FF3366;"><b> DCMS Krishna</b></a></h2>

                    <p>DCMS Appilcation is custom ERP system developed for the Business of District Cooperative Marketing Society. The Cooperative Marking Soceity in Krishna District. The old IT solutions were uncoordinated tech platforms requiring costly maintenance and support. The main project purpose was to replace those systems automating key business processes for trade marketing activities by DCMS and service maintenance with a solution that, as a minimum, would replace existing functionality.</p>
                </div>
            </div>

            

        </div>
    </div>
    </div>
</section>
<!-- //bottom-grids-->

<?php
include("footer.php");
?>