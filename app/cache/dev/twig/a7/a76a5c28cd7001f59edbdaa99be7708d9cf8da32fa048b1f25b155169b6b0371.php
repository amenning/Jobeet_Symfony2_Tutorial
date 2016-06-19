<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_11c315d946e0e6d50ac5ceb32b68794e11857df14802536c91c2d56fb098e4a9 extends Twig_Template
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
        $__internal_970e66903e135e8b25a2b87e55a69537e2d1795a0c7e761a340ca7a17f55b633 = $this->env->getExtension("native_profiler");
        $__internal_970e66903e135e8b25a2b87e55a69537e2d1795a0c7e761a340ca7a17f55b633->enter($__internal_970e66903e135e8b25a2b87e55a69537e2d1795a0c7e761a340ca7a17f55b633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_970e66903e135e8b25a2b87e55a69537e2d1795a0c7e761a340ca7a17f55b633->leave($__internal_970e66903e135e8b25a2b87e55a69537e2d1795a0c7e761a340ca7a17f55b633_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
