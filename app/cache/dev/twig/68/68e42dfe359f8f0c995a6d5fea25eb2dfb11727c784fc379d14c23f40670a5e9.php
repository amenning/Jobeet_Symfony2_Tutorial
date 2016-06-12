<?php

/* @EnsJobeet/job/admin.html.twig */
class __TwigTemplate_e7ca46473472e20fa9e118615c751b9c7e99fdd8b7626aae3378a3958c4d18bd extends Twig_Template
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
        $__internal_9f49870f4aaaed3efd7c8946abe691128f5a51e2f693ed00e71dde18ee43dc8c = $this->env->getExtension("native_profiler");
        $__internal_9f49870f4aaaed3efd7c8946abe691128f5a51e2f693ed00e71dde18ee43dc8c->enter($__internal_9f49870f4aaaed3efd7c8946abe691128f5a51e2f693ed00e71dde18ee43dc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/job/admin.html.twig"));

        // line 1
        echo "<div id=\"job_actions\">
  <h3>Admin</h3>
  <ul>
    ";
        // line 4
        if ( !$this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated", array())) {
            // line 5
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
            echo "\">Edit</a></li>
      <li><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
            echo "\">Publish</a></li>
    ";
        }
        // line 8
        echo "    <li>
      <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_delete", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
        <button type=\"submit\" onclick=\"if(!confirm('Are you sure?')) { return false; }\">Delete</button>
      </form>
    </li>
    ";
        // line 14
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated", array())) {
            // line 15
            echo "      <li ";
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon", array())) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
        ";
            // line 16
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isExpired", array())) {
                // line 17
                echo "          Expired
        ";
            } else {
                // line 19
                echo "          Expires in <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "getDaysBeforeExpires", array()), "html", null, true);
                echo "</strong> days
        ";
            }
            // line 21
            echo " 
        ";
            // line 22
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon", array())) {
                // line 23
                echo "          - <a href=\"\">Extend</a> for another 30 days
        ";
            }
            // line 25
            echo "      </li>
    ";
        } else {
            // line 27
            echo "      <li>
        [Bookmark this <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_preview", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "companyslug", array()), "location" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "locationslug", array()), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "positionslug", array()))), "html", null, true);
            echo "\">URL</a> to manage this job in the future.]
      </li>
    ";
        }
        // line 31
        echo "  </ul>
</div>";
        
        $__internal_9f49870f4aaaed3efd7c8946abe691128f5a51e2f693ed00e71dde18ee43dc8c->leave($__internal_9f49870f4aaaed3efd7c8946abe691128f5a51e2f693ed00e71dde18ee43dc8c_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/job/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 31,  90 => 28,  87 => 27,  83 => 25,  79 => 23,  77 => 22,  74 => 21,  68 => 19,  64 => 17,  62 => 16,  55 => 15,  53 => 14,  46 => 10,  42 => 9,  39 => 8,  34 => 6,  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <div id="job_actions">*/
/*   <h3>Admin</h3>*/
/*   <ul>*/
/*     {% if not job.isActivated %}*/
/*       <li><a href="{{ path('ens_job_edit', { 'token': job.token }) }}">Edit</a></li>*/
/*       <li><a href="{{ path('ens_job_edit', { 'token': job.token }) }}">Publish</a></li>*/
/*     {% endif %}*/
/*     <li>*/
/*       <form action="{{ path('ens_job_delete', { 'token': job.token }) }}" method="post">*/
/*         {{ form_widget(delete_form) }}*/
/*         <button type="submit" onclick="if(!confirm('Are you sure?')) { return false; }">Delete</button>*/
/*       </form>*/
/*     </li>*/
/*     {% if job.isActivated %}*/
/*       <li {% if job.expiresSoon %} class="expires_soon" {% endif %}>*/
/*         {% if job.isExpired %}*/
/*           Expired*/
/*         {% else %}*/
/*           Expires in <strong>{{ job.getDaysBeforeExpires }}</strong> days*/
/*         {% endif %}*/
/*  */
/*         {% if job.expiresSoon %}*/
/*           - <a href="">Extend</a> for another 30 days*/
/*         {% endif %}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>*/
/*         [Bookmark this <a href="{{ url('ens_job_preview', { 'token': job.token, 'company': job.companyslug, 'location': job.locationslug, 'position': job.positionslug }) }}">URL</a> to manage this job in the future.]*/
/*       </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
