<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_8f5105764f061f73ceaf75142a79fe7def413385e75e034adfc1196457df9eb9 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fd85ad15b4e1e4df4294e63244d390de4cbb79e17f64cd24caca9b5cbf98cb3 = $this->env->getExtension("native_profiler");
        $__internal_9fd85ad15b4e1e4df4294e63244d390de4cbb79e17f64cd24caca9b5cbf98cb3->enter($__internal_9fd85ad15b4e1e4df4294e63244d390de4cbb79e17f64cd24caca9b5cbf98cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fd85ad15b4e1e4df4294e63244d390de4cbb79e17f64cd24caca9b5cbf98cb3->leave($__internal_9fd85ad15b4e1e4df4294e63244d390de4cbb79e17f64cd24caca9b5cbf98cb3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2f6d7bcea3907ca3a4656d502f9331e3b5ffa9cb8f93662543aa6ca94ce28617 = $this->env->getExtension("native_profiler");
        $__internal_2f6d7bcea3907ca3a4656d502f9331e3b5ffa9cb8f93662543aa6ca94ce28617->enter($__internal_2f6d7bcea3907ca3a4656d502f9331e3b5ffa9cb8f93662543aa6ca94ce28617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_2f6d7bcea3907ca3a4656d502f9331e3b5ffa9cb8f93662543aa6ca94ce28617->leave($__internal_2f6d7bcea3907ca3a4656d502f9331e3b5ffa9cb8f93662543aa6ca94ce28617_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
