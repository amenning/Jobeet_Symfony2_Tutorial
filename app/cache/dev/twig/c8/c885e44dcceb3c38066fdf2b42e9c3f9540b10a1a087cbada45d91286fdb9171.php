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
        $__internal_fb282e241fb080fb32684205b63487d9c69702d04a6bcd085a7315411b9fd495 = $this->env->getExtension("native_profiler");
        $__internal_fb282e241fb080fb32684205b63487d9c69702d04a6bcd085a7315411b9fd495->enter($__internal_fb282e241fb080fb32684205b63487d9c69702d04a6bcd085a7315411b9fd495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb282e241fb080fb32684205b63487d9c69702d04a6bcd085a7315411b9fd495->leave($__internal_fb282e241fb080fb32684205b63487d9c69702d04a6bcd085a7315411b9fd495_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a147fc3e28174333e04ec22a64586736ca2b1232b347ca972ec096e9ca4d385d = $this->env->getExtension("native_profiler");
        $__internal_a147fc3e28174333e04ec22a64586736ca2b1232b347ca972ec096e9ca4d385d->enter($__internal_a147fc3e28174333e04ec22a64586736ca2b1232b347ca972ec096e9ca4d385d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_a147fc3e28174333e04ec22a64586736ca2b1232b347ca972ec096e9ca4d385d->leave($__internal_a147fc3e28174333e04ec22a64586736ca2b1232b347ca972ec096e9ca4d385d_prof);

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
