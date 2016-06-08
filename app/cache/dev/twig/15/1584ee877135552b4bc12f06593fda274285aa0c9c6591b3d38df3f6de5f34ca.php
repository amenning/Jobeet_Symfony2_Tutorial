<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_411e65385cce77576c1388fc9a2e2b282899a35d851cef67ae02e40e0a4e6db7 extends Twig_Template
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
        $__internal_340cc62fc0cb2e76135444bc4ae85c1b3468094b3ea4b4b2aad89a8e11c0862b = $this->env->getExtension("native_profiler");
        $__internal_340cc62fc0cb2e76135444bc4ae85c1b3468094b3ea4b4b2aad89a8e11c0862b->enter($__internal_340cc62fc0cb2e76135444bc4ae85c1b3468094b3ea4b4b2aad89a8e11c0862b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_340cc62fc0cb2e76135444bc4ae85c1b3468094b3ea4b4b2aad89a8e11c0862b->leave($__internal_340cc62fc0cb2e76135444bc4ae85c1b3468094b3ea4b4b2aad89a8e11c0862b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
