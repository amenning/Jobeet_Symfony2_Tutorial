<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_dd02c3d9c9151f57b2701de18e7d1b2726b526db8f1b9da3a47cd51c53a70bb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05ddd143fe7ced15deddba9ee0c2bd0a68002e74bd61bf28b46120829527a4fc = $this->env->getExtension("native_profiler");
        $__internal_05ddd143fe7ced15deddba9ee0c2bd0a68002e74bd61bf28b46120829527a4fc->enter($__internal_05ddd143fe7ced15deddba9ee0c2bd0a68002e74bd61bf28b46120829527a4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_05ddd143fe7ced15deddba9ee0c2bd0a68002e74bd61bf28b46120829527a4fc->leave($__internal_05ddd143fe7ced15deddba9ee0c2bd0a68002e74bd61bf28b46120829527a4fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
