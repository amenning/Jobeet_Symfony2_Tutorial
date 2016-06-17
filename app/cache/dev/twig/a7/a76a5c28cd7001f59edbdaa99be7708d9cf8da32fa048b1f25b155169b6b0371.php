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
        $__internal_80745cd9ac83755980eaaaa3b89821bec480edac73ce407ca4b3d80f5427d076 = $this->env->getExtension("native_profiler");
        $__internal_80745cd9ac83755980eaaaa3b89821bec480edac73ce407ca4b3d80f5427d076->enter($__internal_80745cd9ac83755980eaaaa3b89821bec480edac73ce407ca4b3d80f5427d076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_80745cd9ac83755980eaaaa3b89821bec480edac73ce407ca4b3d80f5427d076->leave($__internal_80745cd9ac83755980eaaaa3b89821bec480edac73ce407ca4b3d80f5427d076_prof);

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
