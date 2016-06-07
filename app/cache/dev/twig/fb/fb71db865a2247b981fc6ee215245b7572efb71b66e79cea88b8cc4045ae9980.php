<?php

/* job/show.html.twig */
class __TwigTemplate_217e238c07fd2727243ea3de931f907f984255b4ad794f3e4dc120693332b1fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/show.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5340bf9a5cd0b27fbe2ba41a8027d709263ef931d415d328e03bf036c254f446 = $this->env->getExtension("native_profiler");
        $__internal_5340bf9a5cd0b27fbe2ba41a8027d709263ef931d415d328e03bf036c254f446->enter($__internal_5340bf9a5cd0b27fbe2ba41a8027d709263ef931d415d328e03bf036c254f446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5340bf9a5cd0b27fbe2ba41a8027d709263ef931d415d328e03bf036c254f446->leave($__internal_5340bf9a5cd0b27fbe2ba41a8027d709263ef931d415d328e03bf036c254f446_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67e79844bf0d4fe25c26bfeeb0adbcd8ac93487ca652de75d4df19d7548dbf67 = $this->env->getExtension("native_profiler");
        $__internal_67e79844bf0d4fe25c26bfeeb0adbcd8ac93487ca652de75d4df19d7548dbf67->enter($__internal_67e79844bf0d4fe25c26bfeeb0adbcd8ac93487ca652de75d4df19d7548dbf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_67e79844bf0d4fe25c26bfeeb0adbcd8ac93487ca652de75d4df19d7548dbf67->leave($__internal_67e79844bf0d4fe25c26bfeeb0adbcd8ac93487ca652de75d4df19d7548dbf67_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_53b56480cbcad8d68dc41c2431b8f4e0726fe3e36aaf44f9290c422cc3fbc8ee = $this->env->getExtension("native_profiler");
        $__internal_53b56480cbcad8d68dc41c2431b8f4e0726fe3e36aaf44f9290c422cc3fbc8ee->enter($__internal_53b56480cbcad8d68dc41c2431b8f4e0726fe3e36aaf44f9290c422cc3fbc8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>Job</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Company</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Logo</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "url", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "location", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>How_to_apply</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "howtoapply", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Token</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Is_public</th>
                <td>";
        // line 55
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "ispublic", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Is_activated</th>
                <td>";
        // line 59
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isactivated", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Expires_at</th>
                <td>";
        // line 67
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 71
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "createdat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>";
        // line 75
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "updatedat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("ens_job_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 88
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 90
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_53b56480cbcad8d68dc41c2431b8f4e0726fe3e36aaf44f9290c422cc3fbc8ee->leave($__internal_53b56480cbcad8d68dc41c2431b8f4e0726fe3e36aaf44f9290c422cc3fbc8ee_prof);

    }

    public function getTemplateName()
    {
        return "job/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 90,  210 => 88,  204 => 85,  198 => 82,  186 => 75,  177 => 71,  168 => 67,  161 => 63,  150 => 59,  139 => 55,  132 => 51,  125 => 47,  118 => 43,  111 => 39,  104 => 35,  97 => 31,  90 => 27,  83 => 23,  76 => 19,  69 => 15,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/job.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h1>Job</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ job.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Type</th>*/
/*                 <td>{{ job.type }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Company</th>*/
/*                 <td>{{ job.company }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Logo</th>*/
/*                 <td>{{ job.logo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Url</th>*/
/*                 <td>{{ job.url }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Position</th>*/
/*                 <td>{{ job.position }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Location</th>*/
/*                 <td>{{ job.location }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ job.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>How_to_apply</th>*/
/*                 <td>{{ job.howtoapply }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Token</th>*/
/*                 <td>{{ job.token }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Is_public</th>*/
/*                 <td>{% if job.ispublic %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Is_activated</th>*/
/*                 <td>{% if job.isactivated %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ job.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Expires_at</th>*/
/*                 <td>{% if job.expiresat %}{{ job.expiresat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created_at</th>*/
/*                 <td>{% if job.createdat %}{{ job.createdat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated_at</th>*/
/*                 <td>{% if job.updatedat %}{{ job.updatedat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_edit', { 'id': job.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
