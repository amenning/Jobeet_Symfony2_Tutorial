<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_eee3a6fc43edd5ce8522d1f3b6c2af2d2853b20b223310bcf41a9f9ead0a5792 extends Twig_Template
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
        $__internal_99ef2f3d99c31f24b5410806fbd8f1e9e3ae9efe095cc8b39de738c4b93af93a = $this->env->getExtension("native_profiler");
        $__internal_99ef2f3d99c31f24b5410806fbd8f1e9e3ae9efe095cc8b39de738c4b93af93a->enter($__internal_99ef2f3d99c31f24b5410806fbd8f1e9e3ae9efe095cc8b39de738c4b93af93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_99ef2f3d99c31f24b5410806fbd8f1e9e3ae9efe095cc8b39de738c4b93af93a->leave($__internal_99ef2f3d99c31f24b5410806fbd8f1e9e3ae9efe095cc8b39de738c4b93af93a_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_e37389240c569d5715a82377092c565fe323b6c65545cff48f55a524cd66ea5c = $this->env->getExtension("native_profiler");
        $__internal_e37389240c569d5715a82377092c565fe323b6c65545cff48f55a524cd66ea5c->enter($__internal_e37389240c569d5715a82377092c565fe323b6c65545cff48f55a524cd66ea5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_e37389240c569d5715a82377092c565fe323b6c65545cff48f55a524cd66ea5c->leave($__internal_e37389240c569d5715a82377092c565fe323b6c65545cff48f55a524cd66ea5c_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_6a17294a7b16b91f27938215dbb1ee008eee23d77a7e94c2ea8cb3af2536ab01 = $this->env->getExtension("native_profiler");
        $__internal_6a17294a7b16b91f27938215dbb1ee008eee23d77a7e94c2ea8cb3af2536ab01->enter($__internal_6a17294a7b16b91f27938215dbb1ee008eee23d77a7e94c2ea8cb3af2536ab01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_6a17294a7b16b91f27938215dbb1ee008eee23d77a7e94c2ea8cb3af2536ab01->leave($__internal_6a17294a7b16b91f27938215dbb1ee008eee23d77a7e94c2ea8cb3af2536ab01_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_06d8a11051b4f5b5d46801b9d890a6c56e57913314eac356c02d8d7ff42ef97a = $this->env->getExtension("native_profiler");
        $__internal_06d8a11051b4f5b5d46801b9d890a6c56e57913314eac356c02d8d7ff42ef97a->enter($__internal_06d8a11051b4f5b5d46801b9d890a6c56e57913314eac356c02d8d7ff42ef97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_06d8a11051b4f5b5d46801b9d890a6c56e57913314eac356c02d8d7ff42ef97a->leave($__internal_06d8a11051b4f5b5d46801b9d890a6c56e57913314eac356c02d8d7ff42ef97a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
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
