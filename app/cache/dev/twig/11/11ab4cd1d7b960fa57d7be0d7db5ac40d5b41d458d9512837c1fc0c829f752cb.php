<?php

/* @EnsJobeet/job/admin.html.twig */
class __TwigTemplate_c7d489403889c8cf03c290c4873fa81d118dc34b5b6bdb353cd6bfe5510821d0 extends Twig_Template
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
        $__internal_142824d8d82504eae129df11f58cf29cbd3e1a2bfc4abd73d978bd556760e46a = $this->env->getExtension("native_profiler");
        $__internal_142824d8d82504eae129df11f58cf29cbd3e1a2bfc4abd73d978bd556760e46a->enter($__internal_142824d8d82504eae129df11f58cf29cbd3e1a2bfc4abd73d978bd556760e46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/job/admin.html.twig"));

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
      <li>
      \t<form action=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_publish", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
            echo "\" method=\"post\">
      \t\t";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["publish_form"]) ? $context["publish_form"] : $this->getContext($context, "publish_form")), 'widget');
            echo "
      \t\t<input type=\"submit\" value=\"Publish\" />
      \t</form>
      </li>
    ";
        }
        // line 13
        echo "    <li>
      <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_delete", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
        <button type=\"submit\" onclick=\"if(!confirm('Are you sure?')) { return false; }\">Delete</button>
      </form>
    </li>
    ";
        // line 19
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated", array())) {
            // line 20
            echo "      <li ";
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon", array())) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
        ";
            // line 21
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isExpired", array())) {
                // line 22
                echo "          Expired
        ";
            } else {
                // line 24
                echo "          Expires in <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "getDaysBeforeExpires", array()), "html", null, true);
                echo "</strong> days
        ";
            }
            // line 26
            echo " 
        ";
            // line 27
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon", array())) {
                // line 28
                echo "        \t<form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_extend", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
                echo "\" method=\"post\">
        \t\t";
                // line 29
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["extend_form"]) ? $context["extend_form"] : $this->getContext($context, "extend_form")), 'widget');
                echo "
        \t\t<button type=\"submit\">Extend</button> for another 30 days
        \t</form>
        ";
            }
            // line 33
            echo "      </li>
    ";
        } else {
            // line 35
            echo "      <li>
        [Bookmark this <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_preview", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "companyslug", array()), "location" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "locationslug", array()), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "positionslug", array()))), "html", null, true);
            echo "\">URL</a> to manage this job in the future.]
      </li>
    ";
        }
        // line 39
        echo "  </ul>
</div>";
        
        $__internal_142824d8d82504eae129df11f58cf29cbd3e1a2bfc4abd73d978bd556760e46a->leave($__internal_142824d8d82504eae129df11f58cf29cbd3e1a2bfc4abd73d978bd556760e46a_prof);

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
        return array (  112 => 39,  106 => 36,  103 => 35,  99 => 33,  92 => 29,  87 => 28,  85 => 27,  82 => 26,  76 => 24,  72 => 22,  70 => 21,  63 => 20,  61 => 19,  54 => 15,  50 => 14,  47 => 13,  39 => 8,  35 => 7,  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <div id="job_actions">*/
/*   <h3>Admin</h3>*/
/*   <ul>*/
/*     {% if not job.isActivated %}*/
/*       <li><a href="{{ path('ens_job_edit', { 'token': job.token }) }}">Edit</a></li>*/
/*       <li>*/
/*       	<form action="{{ path('ens_job_publish', { 'token':job.token }) }}" method="post">*/
/*       		{{ form_widget(publish_form) }}*/
/*       		<input type="submit" value="Publish" />*/
/*       	</form>*/
/*       </li>*/
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
/*         	<form action="{{ path('ens_job_extend', { 'token': job.token }) }}" method="post">*/
/*         		{{ form_widget(extend_form) }}*/
/*         		<button type="submit">Extend</button> for another 30 days*/
/*         	</form>*/
/*         {% endif %}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>*/
/*         [Bookmark this <a href="{{ url('ens_job_preview', { 'token': job.token, 'company': job.companyslug, 'location': job.locationslug, 'position': job.positionslug }) }}">URL</a> to manage this job in the future.]*/
/*       </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
