<?php

/* @SonataAdmin/CRUD/list_array.html.twig */
class __TwigTemplate_3170c6df07029fef6101bb3e090c282102eb340ee177f559ef8008d8fb5ae1ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34d4109215585e5c91c741dd11e234ccd12b29e702e41b09e2e2cc1c3d035cea = $this->env->getExtension("native_profiler");
        $__internal_34d4109215585e5c91c741dd11e234ccd12b29e702e41b09e2e2cc1c3d035cea->enter($__internal_34d4109215585e5c91c741dd11e234ccd12b29e702e41b09e2e2cc1c3d035cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34d4109215585e5c91c741dd11e234ccd12b29e702e41b09e2e2cc1c3d035cea->leave($__internal_34d4109215585e5c91c741dd11e234ccd12b29e702e41b09e2e2cc1c3d035cea_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_092e259e9222def4ce7652d775a57bd846029ac6d86754d2ed1bb8f139b2f523 = $this->env->getExtension("native_profiler");
        $__internal_092e259e9222def4ce7652d775a57bd846029ac6d86754d2ed1bb8f139b2f523->enter($__internal_092e259e9222def4ce7652d775a57bd846029ac6d86754d2ed1bb8f139b2f523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        [";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "]
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_092e259e9222def4ce7652d775a57bd846029ac6d86754d2ed1bb8f139b2f523->leave($__internal_092e259e9222def4ce7652d775a57bd846029ac6d86754d2ed1bb8f139b2f523_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% for key, val in value %}*/
/*         [{{ key }} => {{ val }}]*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
