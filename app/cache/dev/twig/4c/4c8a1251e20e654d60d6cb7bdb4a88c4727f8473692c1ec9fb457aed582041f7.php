<?php

/* :job:show.html.twig */
class __TwigTemplate_eadad9530d23da1c683bdb6ea76bd196e4b70e90fb7904dd8a8f730971fd43e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:show.html.twig", 1);
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
        $__internal_f9584f20a134702dc8149f01b27200f4b8e2e4606167e36e4159ae1075d0e892 = $this->env->getExtension("native_profiler");
        $__internal_f9584f20a134702dc8149f01b27200f4b8e2e4606167e36e4159ae1075d0e892->enter($__internal_f9584f20a134702dc8149f01b27200f4b8e2e4606167e36e4159ae1075d0e892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9584f20a134702dc8149f01b27200f4b8e2e4606167e36e4159ae1075d0e892->leave($__internal_f9584f20a134702dc8149f01b27200f4b8e2e4606167e36e4159ae1075d0e892_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2800f3f1ef4842a812c5d4055bd32b26a393f18752d2fd0f0cf6318cccb34872 = $this->env->getExtension("native_profiler");
        $__internal_2800f3f1ef4842a812c5d4055bd32b26a393f18752d2fd0f0cf6318cccb34872->enter($__internal_2800f3f1ef4842a812c5d4055bd32b26a393f18752d2fd0f0cf6318cccb34872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2800f3f1ef4842a812c5d4055bd32b26a393f18752d2fd0f0cf6318cccb34872->leave($__internal_2800f3f1ef4842a812c5d4055bd32b26a393f18752d2fd0f0cf6318cccb34872_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f1e4ba6666526ad141b2f1f3d50802d87ea39e38c58920bebbce2db44a5304e = $this->env->getExtension("native_profiler");
        $__internal_0f1e4ba6666526ad141b2f1f3d50802d87ea39e38c58920bebbce2db44a5304e->enter($__internal_0f1e4ba6666526ad141b2f1f3d50802d87ea39e38c58920bebbce2db44a5304e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0f1e4ba6666526ad141b2f1f3d50802d87ea39e38c58920bebbce2db44a5304e->leave($__internal_0f1e4ba6666526ad141b2f1f3d50802d87ea39e38c58920bebbce2db44a5304e_prof);

    }

    public function getTemplateName()
    {
        return ":job:show.html.twig";
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
