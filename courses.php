<?php
$title = 'Nixace Technologies | About';

$keywords='';

$description='';
?>

<?php include 'include/header.php'; ?>
 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css" />
<style>
    .slick-prev:before, .slick-next:before{ color: #111; }

    .contact-method .method-item {
        padding: 50px 6px;
        text-align: center;
        background-color: #fafafa;
        transition: all .3s ease-in;
        border: 1px solid #f1f1f1;
        font-size: 14px;
        padding-top: 2em;
        padding-bottom: 2em;
    }
.sa-confirm-button-container button.confirm{
 display: none !important;
}
    .contact-method .method-item:hover {
        background-color: #fff;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
    }
    .contact-method{
        padding-top: 0;
    }
    .sa-confirm-button-container button.confirm{
 display: none !important;
}
.crse{
  padding-top: 50px;
}
</style>
<header id="head" class="secondary">
    <div class="container">
        <h1> Amazon Web Services (AWS)  Training Course</h1>
        <p></p>
    </div>
</header>

<?php include 'include/form.php'; ?>
<!-- container -->
<section class="container wrapper crse">
    <div class="row">
        <div class="container">

  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">AWS Overview</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
        <ul>
          <li>Cloud Computing</li>
            <li>What is AWS?</li>
            <li>Introduction to AWS product</li>
            <li>Signing up for AWS</li>
            <li>AWS free tier</li>
            <li>Introduction AWS management console</li>
        </ul>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Elastic Compute Cloud (EC2)</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <li>Overview of EC2
</li>
            <li>EC2 AMIs</li>
            <li>EC2 Instance Types</li>
            <li>EBS Volumes</li>
            <li>EBS Snapshots</li>
            <li>On-demand vs Spot vs Reserved</li>
            <li>Placement Groups</li>
            <li>Load Balancers</li>
            <li>Auto Scaling</li>
            <li>EC2 best practices</li>
            <li>EC2 costs and prices</li>
            <li>Creating Amazon EC2 Instances (for Linux)</li>
            <li>Creating Amazon EC2 Instances with Microsoft Windows</li>
            <li>Working with Amazon Elastic Block Store (EBS)</li>
            <li>EBS Encryption</li>
            <li>Working with Elastic Load Balancing</li>
            <li>Configure an Amazon Machine Image (AMI)</li>
            <li>Maintaining High Availability with Auto Scaling (for Linux</li>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">IAM</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <li>Overview of IAM</li>
            <li>Groups</li>
            <li>Users</li>
            <li>Roles</li>
            <li>Policies</li>
            <li>IAM best practices</li>
        </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">VPC</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
          <li>Overview of VPC</li>
            <li>VPC</li>
            <li>Subnets</li>
            <li>Route Tables</li>
            <li>Elastic IPs</li>
            <li>Internet Gateway</li>
            <li>NAT Gateways Network ACLs</li>
            <li>Security Groups</li>
            <li>VPC best practices</li>
            <li>VPC costs and prices</li>
            <li>Building Your First Amazon Virtual Private Cloud (VPC)</li>
            
        </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">S3</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
          <li>Overview of S3</li>
            <li>S3 Buckets</li>
            <li>Version Control</li>
            <li>Lifecycle Management (General Purpose, IA, Glacier)</li>
            <li>CloudFront & CDNs
</li>
            <li>Security & Encryption</li>
            <li>Import/Export & Snowball</li>
            <li>S3 best practices</li>
            <li>S3 costs and prices</li>
            <li>Create an AWS S3 bucket and upload a file</li>
            <li>Hosting a Static Website on Amazon S3</li>
        </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Route53</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">
          <li>Overview of Route53</li>
            <li>DNS</li>
            <li>Routing Policies</li>
            <li>Route53 best practices</li>
            <li>Route 53 costs and prices</li>
        </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Overview of databases</a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body">
          <li>RDS</li>
            <li>Licensing</li>
            <li>SQL vs NoSQL</li>
            <li>DynamoDB</li>
            <li>RedShift</li>
            <li>Elasticache</li>
            <li>Aurora</li>
            <li>Databases best practices</li>
            <li>Databases costs and prices</li>
            <li>Launch an RDS instance and connect to it remotely</li>
            <li>Database Migration Services (DMS)</li>
            
        </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">CloudWatch</a>
        </h4>
      </div>
      <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body">
          <li>Cloudwatch dashboard</li>
            <li>Configuring Monitoring services</li>
            <li>Setting thresholds</li>
            <li>Configuring actions</li>
            <li>Creating a cloudwatch alarm</li>
            <li>Getting statistics for EC2 instances</li>
            <li>Monitoring other AWS services</li>
            <li>Configuring Notifications</li>
            <li>Integrating cloudwatch with Auto scaling</li>
        </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">CloudTrail</a>
        </h4>
      </div>
      <div id="collapse9" class="panel-collapse collapse">
        <div class="panel-body">
          <li>Viewing Events with CloudTrail Event History</li>
            <li>Overview for Creating a Trail</li>
            <li>Getting and Viewing Your CloudTrail Log Files</li>
            <li>Configuring Amazon SNS Notifications for CloudTrail</li>
            <li>Controlling User Permissions for CloudTrail</li>
        </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">EFS</a>
        </h4>
      </div>
      <div id="collapse10" class="panel-collapse collapse">
        <div class="panel-body">
          <li>Create EFS</li>
            <li>Mount and unmount EFS</li>
            <li>Clean Up Resources</li>
        </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">AWSCLI</a>
        </h4>
      </div>
      <div id="collapse11" class="panel-collapse collapse">
        <div class="panel-body">
          <li>Installing and configuring AWSCLI</li>
            <li>Commands</li>
            <li>Options</li>
            <li>Resource identifiers</li>
            <li>SDKs</li>
        </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">CloudFormation</a>
        </h4>
      </div>
      <div id="collapse12" class="panel-collapse collapse">
        <div class="panel-body">
          <li>What is cloud formation?</li>
            <li>Deploying template</li>
            <li>Create Stack</li>
            <li>Update Stack</li>
            <li>Delete Stack</li>
            <li>Provisioning application resources with CloudFormation</li>
        </div>
      </div>
    </div>    
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">Elastic Beanstalk</a>
        </h4>
      </div>
      </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">Lambda </a>
        </h4>
      </div>
      </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse14">Glacier</a>
        </h4>
      </div>
      </div>

      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse15">SES</a>
        </h4>
      </div>
      </div>

      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse16">SNS</a>
        </h4>
      </div>
      </div>

      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse17">CloudFront</a>
        </h4>
      </div>
      </div>

      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse18">API Gateway</a>
        </h4>
      </div>
      </div>


    </div>  


  </div> 
</div>
    </div>
</section>      
</div>
</section>


<!-- PDF Form Modal -->
<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Please fill the details to download</h4>
            </div>
            <div class="modal-body">
                <form class="form-group" name="contactForm3" id="contactForm3" method="POST" action="#">
                    <input type="hidden" name="notes_for">
                    <div class="form-group">
                        <input class="form-control custom-form-control form-name" type="text" name="name3" id="name3" placeholder="Name" >
                    </div>
                    <div class="form-group">
                        <input class="form-control custom-form-control form-email" type="text" name="email3" id="email3" placeholder="Email ID" >
                    </div>
                    <div class="form-group">
                        <input class="form-control custom-form-control form-phone" type="text" name="phone3" maxlength="10" id="phone3" placeholder="Phone No." >
                    </div>                
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-two" data="#contactform" id="modal_send">Submit</button>
                    </div>
                </form>            
            </div>            
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script>
    jQuery('#notes_slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: 1,
        responsive: [   
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    });
</script>
  <script>
    jQuery('#video_slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: 1,
  responsive: [   
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
});
  </script>