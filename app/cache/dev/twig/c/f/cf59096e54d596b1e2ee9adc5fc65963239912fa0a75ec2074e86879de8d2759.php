<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_cf59096e54d596b1e2ee9adc5fc65963239912fa0a75ec2074e86879de8d2759 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!-- Main -->
<div class=\"container\">
  
  <!-- upper section -->
  <div class=\"row\">
\t<div class=\"col-sm-3\">
      <!-- left -->
      <h3><i class=\"glyphicon glyphicon-briefcase\"></i> Toolbox</h3>
      <hr>
      
      <ul class=\"nav nav-stacked\">
        <li class=\"active\"><a href=\"#\"><i class=\"glyphicon glyphicon-home\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " </a></li>
        <li><a href=\"#\"><i class=\"glyphicon glyphicon-envelope\"></i> Messages <span class=\"badge\">3</span></a></li>
        <li><a href=\"#\"><i class=\"fa fa-file\"></i> CV reçus <span class=\"badge\">11</span></a></li>
        <li><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-book\"></i> Books</a></li>
        <li><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-briefcase\"></i> Tools</a></li>
        <li><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-time\"></i> Real-time</a></li>
        <li><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-plus\"></i> Advanced..</a></li>
      </ul>
      
      <hr>
      
  \t</div><!-- /span-3 -->
    <div class=\"col-sm-9\">
      \t
      <!-- column 2 -->\t
       <h3><i class=\"glyphicon glyphicon-dashboard\"></i> Dashboard</h3>  
            
       <hr>
      
\t   <div class=\"row\">
            <!-- center left-->\t
         \t<div class=\"col-md-7\">
\t\t\t  <div class=\"well\">Inbox Messages <span class=\"badge pull-right\">3</span></div>
              
              <hr>
              
              <div class=\"panel panel-default\">
                  <div class=\"panel-heading\"><h4>Processing Status</h4></div>
                  <div class=\"panel-body\">
                    
                    <small>Complete</small>
                    <div class=\"progress\">
                      <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"72\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 72%\">
                        <span class=\"sr-only\">72% Complete</span>
                      </div>
                    </div>
                    <small>In Progress</small>
                    <div class=\"progress\">
                      <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                        <span class=\"sr-only\">20% Complete</span>
                      </div>
                    </div>
                    <small>At Risk</small>
                    <div class=\"progress\">
                      <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                        <span class=\"sr-only\">80% Complete</span>
                      </div>
                    </div>

                  </div><!--/panel-body-->
              </div><!--/panel-->                     
              
          \t</div><!--/col-->
         
            <!--center-right-->
        \t<div class=\"col-md-5\">
              
                <ul class=\"nav nav-justified\">
         \t\t\t<li><a href=\"#\"><i class=\"glyphicon glyphicon-cog\"></i></a></li>
                    <li><a href=\"#\"><i class=\"glyphicon glyphicon-heart\"></i></a></li>
         \t\t\t<li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-comment\"></i><span class=\"count\">3</span></a><ul class=\"dropdown-menu\" role=\"menu\"><li><a href=\"#\">1. Is there a way..</a></li><li><a href=\"#\">2. Hello, admin. I would..</a></li><li><a href=\"#\"><strong>All messages</strong></a></li></ul></li>
         \t\t\t<li><a href=\"#\"><i class=\"glyphicon glyphicon-user\"></i></a></li>
         \t\t\t<li><a title=\"Add Widget\" data-toggle=\"modal\" href=\"#addWidgetModal\"><span class=\"glyphicon glyphicon-plus-sign\"></span></a></li>
       \t\t\t</ul>  
              
                <hr>
              
\t\t\t\t<p>
                  This is a responsive dashboard-style layout that uses <a href=\"http://www.getbootstrap.com\">Bootstrap 3</a>. You can use this template as a starting point to create something more unique.
                </p>
                <p>
                  Visit the Bootstrap Playground at <a href=\"http://www.bootply.com\">Bootply</a> to tweak this layout, or discover 1000's of Bootstrap code examples and snippets.
                </p>
              
                <hr>
              
                <div class=\"btn-group btn-group-justified\">
                  <a href=\"#\" class=\"btn btn-info col-sm-3\">
                    <i class=\"glyphicon glyphicon-plus\"></i><br>
                    Service
                  </a>
                  <a href=\"#\" class=\"btn btn-info col-sm-3\">
                    <i class=\"glyphicon glyphicon-cloud\"></i><br>
                    Cloud
                  </a>
                  <a href=\"#\" class=\"btn btn-info col-sm-3\">
                    <i class=\"glyphicon glyphicon-cog\"></i><br>
                    Tools
                  </a>
                  <a href=\"#\" class=\"btn btn-info col-sm-3\">
                    <i class=\"glyphicon glyphicon-question-sign\"></i><br>
                    Help
                  </a>
                </div>
              
\t\t\t</div><!--/col-span-6-->
     
       </div><!--/row-->
  \t</div><!--/col-span-9-->
    
  </div><!--/row-->
  <!-- /upper section -->
  
  <!-- lower section -->
  <div class=\"row\">
    
    <div class=\"col-md-12\">
      <hr>
      <a href=\"#\"><strong><i class=\"glyphicon glyphicon-list-alt\"></i> Reports</strong></a>  
      <hr>    
    </div>
    <div class=\"col-md-8\">
      
      <table class=\"table table-striped\">
        <thead>
          <tr><th>Visits</th><th>ROI</th><th>Source</th><th>Description and Notes</th></tr>
        </thead>
        <tbody>
          <tr><td>45</td><td>2.45%</td><td>Direct</td><td>Sam sapien massa, aliquam in cursus ut, ullamcorper in tortor. 
          Aliquam mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</td></tr>
          <tr><td>289</td><td>56.2%</td><td>Referral</td><td>After RWD massa, aliquam in cursus ut, ullamcorper in tortor. 
          Aliquam mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</td></tr>
          <tr><td>98</td><td>25%</td><td>Type</td><td>Wil sapien massa, aliquam in cursus ut, ullamcorper in tortor. 
          Liquam mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</td></tr>
          <tr><td>109</td><td>8%</td><td>..</td><td>Forfoot aliquam in cursus ut, ullamcorper in tortor. 
          Okma mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</td></tr>
          <tr><td>34</td><td>14%</td><td>..</td><td>Mikel sapien massa, aliquam in cursus ut, ullamcorper in tortor. 
          Maliquam mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</td></tr>
        </tbody>
      </table>
      
      <hr>              
      
      <!--tabs-->
      <div class=\"container\">
        <ul class=\"nav nav-tabs\" id=\"myTab\">
          <li class=\"active\"><a href=\"#profile\" data-toggle=\"tab\">Profile</a></li>
          <li><a href=\"#messages\" data-toggle=\"tab\">Messages</a></li>
          <li><a href=\"#settings\" data-toggle=\"tab\">Settings</a></li>
        </ul>
        
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"profile\">
            <h4><i class=\"glyphicon glyphicon-user\"></i></h4>
            Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
              dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
              Aliquam in felis sit amet augue.</p>
          </div>
          <div class=\"tab-pane\" id=\"messages\">
            <h4><i class=\"glyphicon glyphicon-comment\"></i></h4>
            Message ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
              dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
              Aliquam in felis sit amet augue.</p>
          </div>
          <div class=\"tab-pane\" id=\"settings\">
            <h4><i class=\"glyphicon glyphicon-cog\"></i></h4>
            Lorem settings dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
              dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
              Aliquam in felis sit amet augue.</p>
          </div>
        </div>
      </div>
      <!--/tabs-->
      
      <hr>
      
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><h4>New Requests</h4></div>
        <div class=\"panel-body\">
          <div class=\"list-group\">
            <a href=\"#\" class=\"list-group-item active\">Hosting virtual mailbox serv..</a>
            <a href=\"#\" class=\"list-group-item\">Dedicated server doesn't..</a>
            <a href=\"#\" class=\"list-group-item\">RHEL 6 install on new..</a>
          </div>
        </div>
      </div>
      
      <hr>
      
      <div class=\"alert alert-info\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        Please remember to <a href=\"#\">Logout</a> for classified security.
      </div>

    
    </div>
    <div class=\"col-md-4\">
      
      <ul class=\"nav nav-pills nav-stacked\">
        <li class=\"nav-header\"></li>
        <li><a href=\"#\"><i class=\"glyphicon glyphicon-list\"></i> Layouts &amp; Templates</a></li>
        <li class=\"divider\"></li>
        <li><a href=\"#\"><i class=\"glyphicon glyphicon-briefcase\"></i> Toolbox</a></li>
        <li><a href=\"#\"><i class=\"glyphicon glyphicon-link\"></i> Widgets</a></li>
        <li><a href=\"#\"><i class=\"glyphicon glyphicon-list-alt\"></i> Reports</a></li>
        <li><a href=\"#\"><i class=\"glyphicon glyphicon-book\"></i> Pages</a></li>
        <li class=\"divider\"></li>
        <li><a href=\"#\"><i class=\"glyphicon glyphicon-star\"></i> Social Media</a></li>
      </ul>
      
      <hr>
              
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <div class=\"panel-title\">
            <i class=\"glyphicon glyphicon-wrench pull-right\"></i>
            <h4>Submit Request</h4>
          </div>
        </div>
        <div class=\"panel-body\">
          
          <form class=\"form form-vertical\">
            <div class=\"control-group\">
              <label>Name</label>
              <div class=\"controls\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Enter Name\">
              </div>
            </div>      
            <div class=\"control-group\">
              <label>Title</label>
              <div class=\"controls\">
                <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                
              </div>
            </div>   
            <div class=\"control-group\">
              <label>Details</label>
              <div class=\"controls\">
                <textarea class=\"form-control\"></textarea>
              </div>
            </div> 
            <div class=\"control-group\">
              <label>Select</label>
              <div class=\"controls\">
                <select class=\"form-control\"><option>General Question</option><option>Server Issues</option><option>Billing Question</option></select>
              </div>
            </div>    
            <div class=\"control-group\">
              <label></label>
              <div class=\"controls\">
                <button type=\"submit\" class=\"btn btn-primary\">
                  Post
                </button>
              </div>
            </div>   
            
          </form>
          
          
        </div><!--/panel content-->
      </div><!--/panel-->
      
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><div class=\"panel-title\"><h4>Engagement</h4></div></div>
        <div class=\"panel-body\">\t
          <div class=\"col-xs-4 text-center\"><img src=\"http://placehold.it/80/BBBBBB/FFF\" class=\"img-circle img-responsive\"></div>
          <div class=\"col-xs-4 text-center\"><img src=\"http://placehold.it/80/EFEFEF/555\" class=\"img-circle img-responsive\"></div>
          <div class=\"col-xs-4 text-center\"><img src=\"http://placehold.it/80/EEEEEE/222\" class=\"img-circle img-responsive\"></div>
        </div>
      </div><!--/panel-->
    
    </div><!--/col-->
    
  </div><!--/row-->
  
</div><!--/container-->
<!-- /Main -->


<footer class=\"text-center\">This Bootstrap 3 dashboard layout is compliments of <a href=\"http://www.bootply.com/85850\"><strong>Bootply.com</strong></a></footer>


<div class=\"modal\" id=\"addWidgetModal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
        <h4 class=\"modal-title\">Add Widget</h4>
      </div>
      <div class=\"modal-body\">
        <p>Add a widget stuff here..</p>
      </div>
      <div class=\"modal-footer\">
        <a href=\"#\" class=\"btn\">Close</a>
        <a href=\"#\" class=\"btn btn-primary\">Save changes</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dalog -->
</div><!-- /.modal -->


";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  19 => 2,);
    }
}