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
        $__internal_469ce4b3b4a0064fc78274cb4138c4f5007f15c1ce915f205a754e4ecdf14871 = $this->env->getExtension("native_profiler");
        $__internal_469ce4b3b4a0064fc78274cb4138c4f5007f15c1ce915f205a754e4ecdf14871->enter($__internal_469ce4b3b4a0064fc78274cb4138c4f5007f15c1ce915f205a754e4ecdf14871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_469ce4b3b4a0064fc78274cb4138c4f5007f15c1ce915f205a754e4ecdf14871->leave($__internal_469ce4b3b4a0064fc78274cb4138c4f5007f15c1ce915f205a754e4ecdf14871_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8a2818f94339e6d07eb49589cf8c3328082a5b59153346e99c811ecd58ecc698 = $this->env->getExtension("native_profiler");
        $__internal_8a2818f94339e6d07eb49589cf8c3328082a5b59153346e99c811ecd58ecc698->enter($__internal_8a2818f94339e6d07eb49589cf8c3328082a5b59153346e99c811ecd58ecc698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_8a2818f94339e6d07eb49589cf8c3328082a5b59153346e99c811ecd58ecc698->leave($__internal_8a2818f94339e6d07eb49589cf8c3328082a5b59153346e99c811ecd58ecc698_prof);

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
