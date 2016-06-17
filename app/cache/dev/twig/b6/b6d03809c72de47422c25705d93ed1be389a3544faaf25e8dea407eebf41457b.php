<?php

/* @SonataAdmin/CRUD/base_show_field.html.twig */
class __TwigTemplate_21bba605428acca748fe3e2d7f888c41b8d86d2e0c6f0923244b6bbaee75b7ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_217351e18fd35863aea038d19385507cf71735d3fd463f5658a83e67e99f1ddf = $this->env->getExtension("native_profiler");
        $__internal_217351e18fd35863aea038d19385507cf71735d3fd463f5658a83e67e99f1ddf->enter($__internal_217351e18fd35863aea038d19385507cf71735d3fd463f5658a83e67e99f1ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_217351e18fd35863aea038d19385507cf71735d3fd463f5658a83e67e99f1ddf->leave($__internal_217351e18fd35863aea038d19385507cf71735d3fd463f5658a83e67e99f1ddf_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_d450f6c67a23b4f94137b1cd86bcc20520b89a61bb9f27bc9af8c9cf814389d6 = $this->env->getExtension("native_profiler");
        $__internal_d450f6c67a23b4f94137b1cd86bcc20520b89a61bb9f27bc9af8c9cf814389d6->enter($__internal_d450f6c67a23b4f94137b1cd86bcc20520b89a61bb9f27bc9af8c9cf814389d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_d450f6c67a23b4f94137b1cd86bcc20520b89a61bb9f27bc9af8c9cf814389d6->leave($__internal_d450f6c67a23b4f94137b1cd86bcc20520b89a61bb9f27bc9af8c9cf814389d6_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_e5487f32fbe3bc11f83712a42a4032ca5388b112af398cf8164d300a9516419e = $this->env->getExtension("native_profiler");
        $__internal_e5487f32fbe3bc11f83712a42a4032ca5388b112af398cf8164d300a9516419e->enter($__internal_e5487f32fbe3bc11f83712a42a4032ca5388b112af398cf8164d300a9516419e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_e5487f32fbe3bc11f83712a42a4032ca5388b112af398cf8164d300a9516419e->leave($__internal_e5487f32fbe3bc11f83712a42a4032ca5388b112af398cf8164d300a9516419e_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_805b4c95211595deb3bc65118606b53b7386b251d1e19f1efe8c08da234bb40b = $this->env->getExtension("native_profiler");
        $__internal_805b4c95211595deb3bc65118606b53b7386b251d1e19f1efe8c08da234bb40b->enter($__internal_805b4c95211595deb3bc65118606b53b7386b251d1e19f1efe8c08da234bb40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_805b4c95211595deb3bc65118606b53b7386b251d1e19f1efe8c08da234bb40b->leave($__internal_805b4c95211595deb3bc65118606b53b7386b251d1e19f1efe8c08da234bb40b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
