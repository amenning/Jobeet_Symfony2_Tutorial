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
        $__internal_bbbaec8f19293dda513b5c8f051e09eeae23f599d981c67957847be69a14c4e5 = $this->env->getExtension("native_profiler");
        $__internal_bbbaec8f19293dda513b5c8f051e09eeae23f599d981c67957847be69a14c4e5->enter($__internal_bbbaec8f19293dda513b5c8f051e09eeae23f599d981c67957847be69a14c4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_field.html.twig"));

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
        
        $__internal_bbbaec8f19293dda513b5c8f051e09eeae23f599d981c67957847be69a14c4e5->leave($__internal_bbbaec8f19293dda513b5c8f051e09eeae23f599d981c67957847be69a14c4e5_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_bf5e448d466f1ebcda7e7bd0a045642eef90e2001143fc0aede166a91d507a3f = $this->env->getExtension("native_profiler");
        $__internal_bf5e448d466f1ebcda7e7bd0a045642eef90e2001143fc0aede166a91d507a3f->enter($__internal_bf5e448d466f1ebcda7e7bd0a045642eef90e2001143fc0aede166a91d507a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_bf5e448d466f1ebcda7e7bd0a045642eef90e2001143fc0aede166a91d507a3f->leave($__internal_bf5e448d466f1ebcda7e7bd0a045642eef90e2001143fc0aede166a91d507a3f_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_9d199430b53704ccd7f1713d454361a383b487e1c5f70ce2ab18e3706b95490b = $this->env->getExtension("native_profiler");
        $__internal_9d199430b53704ccd7f1713d454361a383b487e1c5f70ce2ab18e3706b95490b->enter($__internal_9d199430b53704ccd7f1713d454361a383b487e1c5f70ce2ab18e3706b95490b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_9d199430b53704ccd7f1713d454361a383b487e1c5f70ce2ab18e3706b95490b->leave($__internal_9d199430b53704ccd7f1713d454361a383b487e1c5f70ce2ab18e3706b95490b_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_bc72ffed0fa56f36cbc35df3d05d5cdec2af760ee49237a5d151a7d2e3fa44f8 = $this->env->getExtension("native_profiler");
        $__internal_bc72ffed0fa56f36cbc35df3d05d5cdec2af760ee49237a5d151a7d2e3fa44f8->enter($__internal_bc72ffed0fa56f36cbc35df3d05d5cdec2af760ee49237a5d151a7d2e3fa44f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_bc72ffed0fa56f36cbc35df3d05d5cdec2af760ee49237a5d151a7d2e3fa44f8->leave($__internal_bc72ffed0fa56f36cbc35df3d05d5cdec2af760ee49237a5d151a7d2e3fa44f8_prof);

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
