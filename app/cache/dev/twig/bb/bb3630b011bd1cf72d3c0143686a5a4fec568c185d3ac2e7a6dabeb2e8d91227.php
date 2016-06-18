<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_7d13fe22ae4c4b24364715c25bbdab2048cd53408eecb9bb4bfc5f04ad527ce2 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4967f632d9824d7fe6d86f6109fd24708793927a4b772b49cf0a422aa6d80186 = $this->env->getExtension("native_profiler");
        $__internal_4967f632d9824d7fe6d86f6109fd24708793927a4b772b49cf0a422aa6d80186->enter($__internal_4967f632d9824d7fe6d86f6109fd24708793927a4b772b49cf0a422aa6d80186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4967f632d9824d7fe6d86f6109fd24708793927a4b772b49cf0a422aa6d80186->leave($__internal_4967f632d9824d7fe6d86f6109fd24708793927a4b772b49cf0a422aa6d80186_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b68f23a0e7e0bff8c97e731cc49b8c8b33a88d927f5285a99cc930d4180fc1e9 = $this->env->getExtension("native_profiler");
        $__internal_b68f23a0e7e0bff8c97e731cc49b8c8b33a88d927f5285a99cc930d4180fc1e9->enter($__internal_b68f23a0e7e0bff8c97e731cc49b8c8b33a88d927f5285a99cc930d4180fc1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_b68f23a0e7e0bff8c97e731cc49b8c8b33a88d927f5285a99cc930d4180fc1e9->leave($__internal_b68f23a0e7e0bff8c97e731cc49b8c8b33a88d927f5285a99cc930d4180fc1e9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
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
