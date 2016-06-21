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
        $__internal_ed0f3024028e8bf2c5545546483d112ec78091fbf34174ab4aaa24350a99e1f9 = $this->env->getExtension("native_profiler");
        $__internal_ed0f3024028e8bf2c5545546483d112ec78091fbf34174ab4aaa24350a99e1f9->enter($__internal_ed0f3024028e8bf2c5545546483d112ec78091fbf34174ab4aaa24350a99e1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ed0f3024028e8bf2c5545546483d112ec78091fbf34174ab4aaa24350a99e1f9->leave($__internal_ed0f3024028e8bf2c5545546483d112ec78091fbf34174ab4aaa24350a99e1f9_prof);

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
