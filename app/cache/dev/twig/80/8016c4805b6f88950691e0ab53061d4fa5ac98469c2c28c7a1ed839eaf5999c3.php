<?php

/* :job:edit.html.twig */
class __TwigTemplate_5c08c28340284fc47168cf7797152d9d9ec256b2e649fbd72287a9ba050e30a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:edit.html.twig", 1);
        $this->blocks = array(
            'field_errors' => array($this, 'block_field_errors'),
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
        $__internal_6a8bc23f6909bd4621a56a66f6aa4bd0deb683cba134c4e5333ef495599b93ea = $this->env->getExtension("native_profiler");
        $__internal_6a8bc23f6909bd4621a56a66f6aa4bd0deb683cba134c4e5333ef495599b93ea->enter($__internal_6a8bc23f6909bd4621a56a66f6aa4bd0deb683cba134c4e5333ef495599b93ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:edit.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a8bc23f6909bd4621a56a66f6aa4bd0deb683cba134c4e5333ef495599b93ea->leave($__internal_6a8bc23f6909bd4621a56a66f6aa4bd0deb683cba134c4e5333ef495599b93ea_prof);

    }

    // line 5
    public function block_field_errors($context, array $blocks = array())
    {
        $__internal_8a98c094c20463f97fbf192e9898780def8b9fa6d989fb98bb2c6b1f0afe4f6b = $this->env->getExtension("native_profiler");
        $__internal_8a98c094c20463f97fbf192e9898780def8b9fa6d989fb98bb2c6b1f0afe4f6b->enter($__internal_8a98c094c20463f97fbf192e9898780def8b9fa6d989fb98bb2c6b1f0afe4f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_errors"));

        // line 6
        ob_start();
        // line 7
        echo "  ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            echo "    <ul>
      ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "        <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ul>
  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8a98c094c20463f97fbf192e9898780def8b9fa6d989fb98bb2c6b1f0afe4f6b->leave($__internal_8a98c094c20463f97fbf192e9898780def8b9fa6d989fb98bb2c6b1f0afe4f6b_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aaea904078e1d46d5b3b5cade659d17207de8188c5fce9113e8aae89cf34b8c5 = $this->env->getExtension("native_profiler");
        $__internal_aaea904078e1d46d5b3b5cade659d17207de8188c5fce9113e8aae89cf34b8c5->enter($__internal_aaea904078e1d46d5b3b5cade659d17207de8188c5fce9113e8aae89cf34b8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aaea904078e1d46d5b3b5cade659d17207de8188c5fce9113e8aae89cf34b8c5->leave($__internal_aaea904078e1d46d5b3b5cade659d17207de8188c5fce9113e8aae89cf34b8c5_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_866664a8dc24877da74bb98c7546489ac38e0379d7c5307dbc23430fe29c24ee = $this->env->getExtension("native_profiler");
        $__internal_866664a8dc24877da74bb98c7546489ac38e0379d7c5307dbc23430fe29c24ee->enter($__internal_866664a8dc24877da74bb98c7546489ac38e0379d7c5307dbc23430fe29c24ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "  <h1>Job edit</h1>
  <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    <table id=\"job_form\">
      <tfoot>
        <tr>
          <td colspan=\"2\">
            <input type=\"submit\" value=\"Preview your job\" />
          </td>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <th>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'errors');
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'errors');
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "company", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "company", array()), 'errors');
        echo "
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "company", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'errors');
        echo "
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'errors');
        echo "
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'errors');
        echo "
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location", array()), 'errors');
        echo "
            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "
            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "how_to_apply", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "how_to_apply", array()), 'errors');
        echo "
            ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "how_to_apply", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "is_public", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "is_public", array()), 'errors');
        echo "
            ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "is_public", array()), 'widget');
        echo "
            <br /> Whether the job can also be published on affiliate websites or not.
          </td>
        </tr>
        <tr>
          <th>";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
            ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "
          </td>
        </tr>
      </tbody>
    </table>
 
    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
  </form>
";
        
        $__internal_866664a8dc24877da74bb98c7546489ac38e0379d7c5307dbc23430fe29c24ee->leave($__internal_866664a8dc24877da74bb98c7546489ac38e0379d7c5307dbc23430fe29c24ee_prof);

    }

    public function getTemplateName()
    {
        return ":job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 115,  291 => 109,  287 => 108,  282 => 106,  274 => 101,  270 => 100,  265 => 98,  258 => 94,  254 => 93,  249 => 91,  242 => 87,  238 => 86,  233 => 84,  226 => 80,  222 => 79,  217 => 77,  210 => 73,  206 => 72,  201 => 70,  194 => 66,  190 => 65,  185 => 63,  178 => 59,  174 => 58,  169 => 56,  162 => 52,  158 => 51,  153 => 49,  146 => 45,  142 => 44,  137 => 42,  130 => 38,  126 => 37,  121 => 35,  105 => 24,  102 => 23,  96 => 22,  87 => 19,  82 => 18,  76 => 17,  66 => 12,  57 => 10,  53 => 9,  50 => 8,  47 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% form_theme edit_form _self %}*/
/*  */
/* {% block field_errors %}*/
/* {% spaceless %}*/
/*   {% if errors|length > 0 %}*/
/*     <ul>*/
/*       {% for error in errors %}*/
/*         <li>{{ error.messageTemplate|trans(error.messageParameters, 'validators') }}</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock field_errors %}*/
/*  */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/job.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/*  */
/* {% block body %}*/
/*   <h1>Job edit</h1>*/
/*   <form action="{{ path('ens_job_edit', { 'token': job.token }) }}" method="post" {{ form_enctype(edit_form) }}>*/
/*     <table id="job_form">*/
/*       <tfoot>*/
/*         <tr>*/
/*           <td colspan="2">*/
/*             <input type="submit" value="Preview your job" />*/
/*           </td>*/
/*         </tr>*/
/*       </tfoot>*/
/*       <tbody>*/
/*         <tr>*/
/*           <th>{{ form_label(edit_form.category) }}</th>*/
/*           <td>*/
/*             {{ form_errors(edit_form.category) }}*/
/*             {{ form_widget(edit_form.category) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(edit_form.type) }}</th>*/
/*           <td>*/
/*             {{ form_errors(edit_form.type) }}*/
/*             {{ form_widget(edit_form.type) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(edit_form.company) }}</th>*/
/*           <td>*/
/*             {{ form_errors(edit_form.company) }}*/
/*             {{ form_widget(edit_form.company) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(edit_form.file) }}</th>*/
/*           <td>*/
/*             {{ form_errors(edit_form.file) }}*/
/*             {{ form_widget(edit_form.file) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(edit_form.url) }}</th>*/
/*           <td>*/
/*             {{ form_errors(edit_form.url) }}*/
/*             {{ form_widget(edit_form.url) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(edit_form.position) }}</th>*/
/*           <td>*/
/*             {{ form_errors(edit_form.position) }}*/
/*             {{ form_widget(edit_form.position) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(edit_form.location) }}</th>*/
/*           <td>*/
/*             {{ form_errors(edit_form.location) }}*/
/*             {{ form_widget(edit_form.location) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(edit_form.description) }}</th>*/
/*           <td>*/
/*             {{ form_errors(edit_form.description) }}*/
/*             {{ form_widget(edit_form.description) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(edit_form.how_to_apply) }}</th>*/
/*           <td>*/
/*             {{ form_errors(edit_form.how_to_apply) }}*/
/*             {{ form_widget(edit_form.how_to_apply) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(edit_form.is_public) }}</th>*/
/*           <td>*/
/*             {{ form_errors(edit_form.is_public) }}*/
/*             {{ form_widget(edit_form.is_public) }}*/
/*             <br /> Whether the job can also be published on affiliate websites or not.*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(edit_form.email) }}</th>*/
/*           <td>*/
/*             {{ form_errors(edit_form.email) }}*/
/*             {{ form_widget(edit_form.email) }}*/
/*           </td>*/
/*         </tr>*/
/*       </tbody>*/
/*     </table>*/
/*  */
/*     {{ form_rest(edit_form) }}*/
/*   </form>*/
/* {% endblock %}*/
/* */
