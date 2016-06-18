<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_385fe71dcf39f6d0451bf20470a7cf213e17ff40507bab8b3f53be88e5d329b0 extends Twig_Template
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
        $__internal_f7e2c228d2d0afb47a0345486d5c37e4d396d797da6e963ac8b909cc0d004236 = $this->env->getExtension("native_profiler");
        $__internal_f7e2c228d2d0afb47a0345486d5c37e4d396d797da6e963ac8b909cc0d004236->enter($__internal_f7e2c228d2d0afb47a0345486d5c37e4d396d797da6e963ac8b909cc0d004236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f7e2c228d2d0afb47a0345486d5c37e4d396d797da6e963ac8b909cc0d004236->leave($__internal_f7e2c228d2d0afb47a0345486d5c37e4d396d797da6e963ac8b909cc0d004236_prof);

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
